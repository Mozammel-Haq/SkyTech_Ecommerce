<?php
class TestProduct extends Model implements JsonSerializable
{
	public $id;
	public $sku;
	public $title;
	public $slug;
	public $description;
	public $category_id;
	public $subcategory;
	public $brand_id;
	public $price;
	public $original_price;
	public $discount_percent;
	public $rating;
	public $reviews_count;
	public $stock;
	public $stock_status;
	public $thumbnail;
	public $featured;
	public $bestseller;
	public $new_arrival;
	public $on_sale;
	public $best_value;
	public $deal_end_time;
	public $shipping_estimate;
	public $warranty;
	public $created_at;
	public $updated_at;

	public function __construct() {}
	public function set($id, $sku, $title, $slug, $description, $category_id, $subcategory, $brand_id, $price, $original_price, $discount_percent, $rating, $reviews_count, $stock, $stock_status, $thumbnail, $featured, $bestseller, $new_arrival, $on_sale, $best_value, $deal_end_time, $shipping_estimate, $warranty, $created_at, $updated_at)
	{
		$this->id = $id;
		$this->sku = $sku;
		$this->title = $title;
		$this->slug = $slug;
		$this->description = $description;
		$this->category_id = $category_id;
		$this->subcategory = $subcategory;
		$this->brand_id = $brand_id;
		$this->price = $price;
		$this->original_price = $original_price;
		$this->discount_percent = $discount_percent;
		$this->rating = $rating;
		$this->reviews_count = $reviews_count;
		$this->stock = $stock;
		$this->stock_status = $stock_status;
		$this->thumbnail = $thumbnail;
		$this->featured = $featured;
		$this->bestseller = $bestseller;
		$this->new_arrival = $new_arrival;
		$this->on_sale = $on_sale;
		$this->best_value = $best_value;
		$this->deal_end_time = $deal_end_time;
		$this->shipping_estimate = $shipping_estimate;
		$this->warranty = $warranty;
		$this->created_at = $created_at;
		$this->updated_at = $updated_at;
	}
	public function save()
	{
		global $db, $tx;

		// Make deal_end_time NULL if empty
		$deal_end_time = $this->deal_end_time !== '' && $this->deal_end_time !== null
			? "'$this->deal_end_time'"
			: "NULL";

		$db->query("INSERT INTO {$tx}test_products(
        sku, title, slug, description, category_id, subcategory, brand_id,
        price, original_price, discount_percent, rating, reviews_count, stock,
        stock_status, thumbnail, featured, bestseller, new_arrival, on_sale, best_value,
        deal_end_time, shipping_estimate, warranty, created_at, updated_at
    ) VALUES (
        '$this->sku', '$this->title', '$this->slug', '$this->description', '$this->category_id', '$this->subcategory', '$this->brand_id',
        '$this->price', '$this->original_price', '$this->discount_percent', '$this->rating', '$this->reviews_count', '$this->stock',
        '$this->stock_status', '$this->thumbnail', '$this->featured', '$this->bestseller', '$this->new_arrival', '$this->on_sale', '$this->best_value',
        $deal_end_time, '$this->shipping_estimate', '$this->warranty', '$this->created_at', '$this->updated_at'
    )");

		return $db->insert_id;
	}

	public function update()
	{
		global $db, $tx;
		$db->query("update {$tx}test_products set sku='$this->sku',title='$this->title',slug='$this->slug',description='$this->description',category_id='$this->category_id',subcategory='$this->subcategory',brand_id='$this->brand_id',price='$this->price',original_price='$this->original_price',discount_percent='$this->discount_percent',rating='$this->rating',reviews_count='$this->reviews_count',stock='$this->stock',stock_status='$this->stock_status',thumbnail='$this->thumbnail',featured='$this->featured',bestseller='$this->bestseller',new_arrival='$this->new_arrival',on_sale='$this->on_sale',best_value='$this->best_value',deal_end_time='$this->deal_end_time',shipping_estimate='$this->shipping_estimate',warranty='$this->warranty',created_at='$this->created_at',updated_at='$this->updated_at' where id='$this->id'");
	}
	public static function delete($id)
	{
		$str = $id;
		$productID = substr($str, 2);
		echo $productID;
		global $db, $tx;
		$db->query("delete from {$tx}test_products where id={$productID}");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;

		// Fetch all products along with category and brand details
		$result = $db->query("
        SELECT 
            p.id, p.sku, p.title, p.slug, p.description,
            p.subcategory,
            c.name AS category_name, c.slug AS category_slug,
            b.name AS brand_name, b.logo AS brand_logo,
            p.price, p.original_price, p.discount_percent,
            p.rating, p.reviews_count, p.stock, p.stock_status, p.thumbnail,
            p.featured, p.bestseller, p.new_arrival, p.on_sale, p.best_value,
            p.deal_end_time, p.shipping_estimate, p.warranty
        FROM {$tx}test_products p
        LEFT JOIN {$tx}test_product_categories c ON p.category_id = c.id
        LEFT JOIN {$tx}test_product_brands b ON p.brand_id = b.id
    ");

		$data = [];

		while ($product = $result->fetch_object()) {
			$productId = $product->id;

			// Fetch images
			$imagesRes = $db->query("SELECT image_path FROM {$tx}test_product_images WHERE product_id = '{$productId}' ORDER BY is_main DESC");
			$images = [];
			while ($img = $imagesRes->fetch_object()) {
				$images[] = $img->image_path;
			}

			// Fetch variants
			$variantsRes = $db->query("SELECT id, color, storage, price FROM {$tx}test_product_variants WHERE product_id = '{$productId}'");
			$variants = [];
			while ($v = $variantsRes->fetch_object()) {
				$variants[] = [
					'id' => $v->id,
					'color' => $v->color,
					'storage' => $v->storage,
					'price' => floatval($v->price)
				];
			}

			// Fetch tags
			$tagsRes = $db->query("SELECT tag FROM {$tx}test_product_tags WHERE product_id = '{$productId}'");
			$tags = [];
			while ($t = $tagsRes->fetch_object()) {
				$tags[] = $t->tag;
			}

			// Fetch badges
			$badgesRes = $db->query("SELECT badge FROM {$tx}test_product_badges WHERE product_id = '{$productId}'");
			$badges = [];
			while ($b = $badgesRes->fetch_object()) {
				$badges[] = $b->badge;
			}

			// Fetch short specs
			$specsRes = $db->query("SELECT spec_text FROM {$tx}test_product_specs WHERE product_id = '{$productId}'");
			$shortSpecs = [];
			while ($s = $specsRes->fetch_object()) {
				$shortSpecs[] = $s->spec_text;
			}

			// Fetch highlights
			$highlightsRes = $db->query("SELECT highlight_text FROM {$tx}test_product_highlights WHERE product_id = '{$productId}'");
			$highlights = [];
			while ($h = $highlightsRes->fetch_object()) {
				$highlights[] = $h->highlight_text;
			}

			// Fetch related products
			$relatedRes = $db->query("SELECT related_id FROM {$tx}test_product_relations WHERE product_id = '{$productId}'");
			$relatedIds = [];
			while ($r = $relatedRes->fetch_object()) {
				$relatedIds[] = "p-" . $r->related_id;
			}

			// Fetch recommended products
			$recRes = $db->query("SELECT recommended_id FROM {$tx}test_product_recommendations WHERE product_id = '{$productId}'");
			$recommendedIds = [];
			while ($rec = $recRes->fetch_object()) {
				$recommendedIds[] = "p-" . $rec->recommended_id;
			}

			// Build structured object
			$data[] = [
				'id' => "p-" . $product->id,
				'sku' => $product->sku,
				'title' => $product->title,
				'slug' => $product->slug,
				'description' => $product->description,
				'category' => $product->category_name,
				'categorySlug' => $product->category_slug,
				'subcategory' => $product->subcategory,
				'brand' => $product->brand_name,
				'brandLogo' => $product->brand_logo,
				'price' => floatval($product->price),
				'originalPrice' => floatval($product->original_price),
				'discountPercent' => floatval($product->discount_percent),
				'rating' => floatval($product->rating),
				'reviewsCount' => intval($product->reviews_count),
				'stock' => intval($product->stock),
				'stockStatus' => $product->stock_status,
				'images' => $images,
				'thumbnail' => $product->thumbnail,
				'variants' => $variants,
				'tags' => $tags,
				'featured' => boolval($product->featured),
				'bestseller' => boolval($product->bestseller),
				'newArrival' => boolval($product->new_arrival),
				'onSale' => boolval($product->on_sale),
				'bestValue' => boolval($product->best_value),
				'dealEndTime' => $product->deal_end_time,
				'shortSpecs' => $shortSpecs,
				'highlights' => $highlights,
				'shippingEstimate' => $product->shipping_estimate,
				'warranty' => $product->warranty,
				'badges' => $badges,
				'relatedIds' => $relatedIds,
				'recommendedIds' => $recommendedIds
			];
		}

		return $data;
	}

	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,sku,title,slug,description,category_id,subcategory,brand_id,price,original_price,discount_percent,rating,reviews_count,stock,stock_status,thumbnail,featured,bestseller,new_arrival,on_sale,best_value,deal_end_time,shipping_estimate,warranty,created_at,updated_at from {$tx}test_products $criteria limit $top,$perpage");
		$data = [];
		while ($testproduct = $result->fetch_object()) {
			$data[] = $testproduct;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}test_products $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,sku,title,slug,description,category_id,subcategory,brand_id,price,original_price,discount_percent,rating,reviews_count,stock,stock_status,thumbnail,featured,bestseller,new_arrival,on_sale,best_value,deal_end_time,shipping_estimate,warranty,created_at,updated_at from {$tx}test_products where id='$id'");
		$testproduct = $result->fetch_object();
		return $testproduct;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}test_products");
		$testproduct = $result->fetch_object();
		return $testproduct->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
}

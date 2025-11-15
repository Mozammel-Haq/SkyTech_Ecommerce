<?php
class TestProduct extends Model implements JsonSerializable
{
	public $id;
	public $sku;
	public $title;
	public $slug;
	public $description;
	public $category;
	public $category_slug;
	public $subcategory;
	public $brand;
	public $brand_slug;
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
	public function set($id, $sku, $title, $slug, $description, $category, $category_slug, $subcategory, $brand, $brand_slug, $price, $original_price, $discount_percent, $rating, $reviews_count, $stock, $stock_status, $thumbnail, $featured, $bestseller, $new_arrival, $on_sale, $best_value, $deal_end_time, $shipping_estimate, $warranty, $created_at, $updated_at)
	{
		$this->id = $id;
		$this->sku = $sku;
		$this->title = $title;
		$this->slug = $slug;
		$this->description = $description;
		$this->category = $category;
		$this->category_slug = $category_slug;
		$this->subcategory = $subcategory;
		$this->brand = $brand;
		$this->brand_slug = $brand_slug;
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
		$db->query("insert into {$tx}test_products(sku,title,slug,description,category,category_slug,subcategory,brand,brand_slug,price,original_price,discount_percent,rating,reviews_count,stock,stock_status,thumbnail,featured,bestseller,new_arrival,on_sale,best_value,deal_end_time,shipping_estimate,warranty,created_at,updated_at)values('$this->sku','$this->title','$this->slug','$this->description','$this->category','$this->category_slug','$this->subcategory','$this->brand','$this->brand_slug','$this->price','$this->original_price','$this->discount_percent','$this->rating','$this->reviews_count','$this->stock','$this->stock_status','$this->thumbnail','$this->featured','$this->bestseller','$this->new_arrival','$this->on_sale','$this->best_value','$this->deal_end_time','$this->shipping_estimate','$this->warranty','$this->created_at','$this->updated_at')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;
		$db->query("update {$tx}test_products set sku='$this->sku',title='$this->title',slug='$this->slug',description='$this->description',category='$this->category',category_slug='$this->category_slug',subcategory='$this->subcategory',brand='$this->brand',brand_slug='$this->brand_slug',price='$this->price',original_price='$this->original_price',discount_percent='$this->discount_percent',rating='$this->rating',reviews_count='$this->reviews_count',stock='$this->stock',stock_status='$this->stock_status',thumbnail='$this->thumbnail',featured='$this->featured',bestseller='$this->bestseller',new_arrival='$this->new_arrival',on_sale='$this->on_sale',best_value='$this->best_value',deal_end_time='$this->deal_end_time',shipping_estimate='$this->shipping_estimate',warranty='$this->warranty',created_at='$this->created_at',updated_at='$this->updated_at' where id='$this->id'");
	}
	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}test_products where id={$id}");
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
		$result = $db->query("select id,sku,title,slug,description,category,category_slug,subcategory,brand,brand_slug,price,original_price,discount_percent,rating,reviews_count,stock,stock_status,thumbnail,featured,bestseller,new_arrival,on_sale,best_value,deal_end_time,shipping_estimate,warranty,created_at,updated_at from {$tx}test_products $criteria limit $top,$perpage");
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
		$result = $db->query("select id,sku,title,slug,description,category,category_slug,subcategory,brand,brand_slug,price,original_price,discount_percent,rating,reviews_count,stock,stock_status,thumbnail,featured,bestseller,new_arrival,on_sale,best_value,deal_end_time,shipping_estimate,warranty,created_at,updated_at from {$tx}test_products where id='$id'");
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
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Sku:$this->sku<br> 
		Title:$this->title<br> 
		Slug:$this->slug<br> 
		Description:$this->description<br> 
		Category:$this->category<br> 
		Category Slug:$this->category_slug<br> 
		Subcategory:$this->subcategory<br> 
		Brand:$this->brand<br> 
		Brand Slug:$this->brand_slug<br> 
		Price:$this->price<br> 
		Original Price:$this->original_price<br> 
		Discount Percent:$this->discount_percent<br> 
		Rating:$this->rating<br> 
		Reviews Count:$this->reviews_count<br> 
		Stock:$this->stock<br> 
		Stock Status:$this->stock_status<br> 
		Thumbnail:$this->thumbnail<br> 
		Featured:$this->featured<br> 
		Bestseller:$this->bestseller<br> 
		New Arrival:$this->new_arrival<br> 
		On Sale:$this->on_sale<br> 
		Best Value:$this->best_value<br> 
		Deal End Time:$this->deal_end_time<br> 
		Shipping Estimate:$this->shipping_estimate<br> 
		Warranty:$this->warranty<br> 
		Created At:$this->created_at<br> 
		Updated At:$this->updated_at<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbTestProduct")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}test_products");
		while ($testproduct = $result->fetch_object()) {
			$html .= "<option value ='$testproduct->id'>$testproduct->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}test_products $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,sku,title,slug,description,category,category_slug,subcategory,brand,brand_slug,price,original_price,discount_percent,rating,reviews_count,stock,stock_status,thumbnail,featured,bestseller,new_arrival,on_sale,best_value,deal_end_time,shipping_estimate,warranty,created_at,updated_at from {$tx}test_products $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "testproduct/create", "text" => "New TestProduct"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Sku</th><th>Title</th><th>Slug</th><th>Description</th><th>Category</th><th>Category Slug</th><th>Subcategory</th><th>Brand</th><th>Brand Slug</th><th>Price</th><th>Original Price</th><th>Discount Percent</th><th>Rating</th><th>Reviews Count</th><th>Stock</th><th>Stock Status</th><th>Thumbnail</th><th>Featured</th><th>Bestseller</th><th>New Arrival</th><th>On Sale</th><th>Best Value</th><th>Deal End Time</th><th>Shipping Estimate</th><th>Warranty</th><th>Created At</th><th>Updated At</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Sku</th><th>Title</th><th>Slug</th><th>Description</th><th>Category</th><th>Category Slug</th><th>Subcategory</th><th>Brand</th><th>Brand Slug</th><th>Price</th><th>Original Price</th><th>Discount Percent</th><th>Rating</th><th>Reviews Count</th><th>Stock</th><th>Stock Status</th><th>Thumbnail</th><th>Featured</th><th>Bestseller</th><th>New Arrival</th><th>On Sale</th><th>Best Value</th><th>Deal End Time</th><th>Shipping Estimate</th><th>Warranty</th><th>Created At</th><th>Updated At</th></tr>";
		}
		while ($testproduct = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "testproduct/show/$testproduct->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "testproduct/edit/$testproduct->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "testproduct/confirm/$testproduct->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$testproduct->id</td><td>$testproduct->sku</td><td>$testproduct->title</td><td>$testproduct->slug</td><td>$testproduct->description</td><td>$testproduct->category</td><td>$testproduct->category_slug</td><td>$testproduct->subcategory</td><td>$testproduct->brand</td><td>$testproduct->brand_slug</td><td>$testproduct->price</td><td>$testproduct->original_price</td><td>$testproduct->discount_percent</td><td>$testproduct->rating</td><td>$testproduct->reviews_count</td><td>$testproduct->stock</td><td>$testproduct->stock_status</td><td>$testproduct->thumbnail</td><td>$testproduct->featured</td><td>$testproduct->bestseller</td><td>$testproduct->new_arrival</td><td>$testproduct->on_sale</td><td>$testproduct->best_value</td><td>$testproduct->deal_end_time</td><td>$testproduct->shipping_estimate</td><td>$testproduct->warranty</td><td>$testproduct->created_at</td><td>$testproduct->updated_at</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,sku,title,slug,description,category,category_slug,subcategory,brand,brand_slug,price,original_price,discount_percent,rating,reviews_count,stock,stock_status,thumbnail,featured,bestseller,new_arrival,on_sale,best_value,deal_end_time,shipping_estimate,warranty,created_at,updated_at from {$tx}test_products where id={$id}");
		$testproduct = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">TestProduct Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$testproduct->id</td></tr>";
		$html .= "<tr><th>Sku</th><td>$testproduct->sku</td></tr>";
		$html .= "<tr><th>Title</th><td>$testproduct->title</td></tr>";
		$html .= "<tr><th>Slug</th><td>$testproduct->slug</td></tr>";
		$html .= "<tr><th>Description</th><td>$testproduct->description</td></tr>";
		$html .= "<tr><th>Category</th><td>$testproduct->category</td></tr>";
		$html .= "<tr><th>Category Slug</th><td>$testproduct->category_slug</td></tr>";
		$html .= "<tr><th>Subcategory</th><td>$testproduct->subcategory</td></tr>";
		$html .= "<tr><th>Brand</th><td>$testproduct->brand</td></tr>";
		$html .= "<tr><th>Brand Slug</th><td>$testproduct->brand_slug</td></tr>";
		$html .= "<tr><th>Price</th><td>$testproduct->price</td></tr>";
		$html .= "<tr><th>Original Price</th><td>$testproduct->original_price</td></tr>";
		$html .= "<tr><th>Discount Percent</th><td>$testproduct->discount_percent</td></tr>";
		$html .= "<tr><th>Rating</th><td>$testproduct->rating</td></tr>";
		$html .= "<tr><th>Reviews Count</th><td>$testproduct->reviews_count</td></tr>";
		$html .= "<tr><th>Stock</th><td>$testproduct->stock</td></tr>";
		$html .= "<tr><th>Stock Status</th><td>$testproduct->stock_status</td></tr>";
		$html .= "<tr><th>Thumbnail</th><td>$testproduct->thumbnail</td></tr>";
		$html .= "<tr><th>Featured</th><td>$testproduct->featured</td></tr>";
		$html .= "<tr><th>Bestseller</th><td>$testproduct->bestseller</td></tr>";
		$html .= "<tr><th>New Arrival</th><td>$testproduct->new_arrival</td></tr>";
		$html .= "<tr><th>On Sale</th><td>$testproduct->on_sale</td></tr>";
		$html .= "<tr><th>Best Value</th><td>$testproduct->best_value</td></tr>";
		$html .= "<tr><th>Deal End Time</th><td>$testproduct->deal_end_time</td></tr>";
		$html .= "<tr><th>Shipping Estimate</th><td>$testproduct->shipping_estimate</td></tr>";
		$html .= "<tr><th>Warranty</th><td>$testproduct->warranty</td></tr>";
		$html .= "<tr><th>Created At</th><td>$testproduct->created_at</td></tr>";
		$html .= "<tr><th>Updated At</th><td>$testproduct->updated_at</td></tr>";

		$html .= "</table>";
		return $html;
	}
}

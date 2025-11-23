<?php
class TestProductApi
{
	public function __construct() {}
	function index()
	{
		header('Content-Type: application/json');
		echo json_encode(["test_products" => TestProduct::all()], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
	}
	function pagination($data)
	{
		$page = $data["page"];
		$perpage = $data["perpage"];
		echo json_encode(["test_products" => TestProduct::pagination($page, $perpage), "total_records" => TestProduct::count()]);
	}
	function find($data)
	{
		echo json_encode(["testproduct" => TestProduct::find($data["id"])]);
	}
	function delete($data)
	{
		TestProduct::delete($data["id"]);

		echo json_encode(["success" => $data]);
	}
	function save($data, $file = [])
	{
		global $now;
		// Helper to decode JSON or return empty array
		function decodeArray($value)
		{
			if (empty($value)) return [];
			if (is_array($value)) return $value;
			$decoded = json_decode($value, true);
			return is_array($decoded) ? $decoded : [];
		}

		// 1) Save parent product
		$testproduct = new TestProduct();
		$testproduct->sku               = $data["sku"] ?? '';
		$testproduct->title             = $data["title"] ?? '';
		$testproduct->slug              = $data["slug"] ?? '';
		$testproduct->description       = $data["description"] ?? '';
		$testproduct->category_id       = $data["category_id"] ?? '';
		$testproduct->subcategory       = $data["subcategory"] ?? '';
		$testproduct->brand_id          = $data["brand_id"] ?? '';
		$testproduct->price             = $data["price"] ?? 0;
		$testproduct->original_price    = $data["original_price"] ?? 0;
		$testproduct->discount_percent  = $data["discount_percent"] ?? 0;
		$testproduct->rating            = $data["rating"] ?? 0;
		$testproduct->reviews_count     = $data["reviews_count"] ?? 0;
		$testproduct->stock             = $data["stock"] ?? 0;
		$testproduct->stock_status      = $data["stock_status"] ?? 'in_stock';
		$testproduct->thumbnail         = !empty($file['thumbnail'])
			? upload($file['thumbnail'], "../test_assets/img/products/")
			: ($data["existingThumbnail"] ?? '');
		$testproduct->featured          = $data["featured"] ?? 0;
		$testproduct->bestseller        = $data["bestseller"] ?? 0;
		$testproduct->new_arrival       = $data["new_arrival"] ?? 0;
		$testproduct->on_sale           = $data["on_sale"] ?? 0;
		$testproduct->best_value        = $data["best_value"] ?? 0;
		$dealEndTime                     = $data['deal_end_time'] ?? null;
		$testproduct->deal_end_time      = $dealEndTime && $dealEndTime !== '' ? $dealEndTime : null;
		$testproduct->shipping_estimate  = $data["shipping_estimate"] ?? '';
		$testproduct->warranty           = $data["warranty"] ?? '';
		$testproduct->created_at         = $now;
		$testproduct->updated_at         = $now;

		$product_id = $testproduct->save();

		// 2) Gallery images 
		$allImages = [];
		$mainSet = false;

		// 2a) Files uploaded
		if (!empty($file['gallery']['name'] ?? null)) {
			foreach ($file['gallery']['tmp_name'] as $index => $tmp) {
				$imgFile = [
					'name' => $file["gallery"]["name"][$index],
					'tmp_name' => $file["gallery"]["tmp_name"][$index],
					'size' => $file["gallery"]["size"][$index],
					'error' => $file["gallery"]["error"][$index],
					'type' => $file["gallery"]["type"][$index],
				];
				$allImages[] = upload($imgFile, "../test_assets/img/products/");
			}
		}

		// 2b) Existing gallery images from $data
		foreach (decodeArray($data["gallery"] ?? []) as $imgPath) {
			$allImages[] = $imgPath;
		}

		// Save images to DB
		foreach ($allImages as $img) {
			$image = new TestProductImage();
			$image->product_id = $product_id;
			$image->image_path = $img;
			$image->is_main    = !$mainSet ? 1 : 0;
			$mainSet = true;
			$image->created_at = $now;
			$image->save();
		}


		// 3) Variants
		foreach (decodeArray($data["variants"]) as $v) {
			$variant = new TestProductVariant();
			$variant->product_id = $product_id;
			$variant->color      = $v["color"] ?? '';
			$variant->storage    = $v["storage"] ?? '';
			$variant->price      = $v["price"] ?? 0;
			$variant->created_at = $now;
			$variant->save();
		}

		// 4) Specifications
		foreach (decodeArray($data["specs"]) as $spec) {
			$sp = new TestProductSpec();
			$sp->product_id = $product_id;
			$sp->spec_text  = $spec["value"] ?? $spec["specs"] ?? '';
			$sp->save();
		}

		// 5) Highlights
		foreach (decodeArray($data["highlights"]) as $text) {
			$hl = new TestProductHighlight();
			$hl->product_id = $product_id;
			$hl->highlight_text = $text;
			$hl->save();
		}

		// 6) Tags
		foreach (decodeArray($data["tags"]) as $tag) {
			$t = new TestProductTag();
			$t->product_id = $product_id;
			$t->tag = $tag;
			$t->save();
		}

		// 7) Badges
		foreach (decodeArray($data["badges"]) as $badge) {
			$b = new TestProductBadge();
			$b->product_id = $product_id;
			$b->badge = $badge;
			$b->save();
		}

		// 8) Related products
		foreach (decodeArray($data["relatedIds"]) as $rp) {
			$rel = new TestProductRelation();
			$rel->product_id = $product_id;
			$rel->related_id = $rp;
			$rel->save();
		}

		// 9) Recommended products
		foreach (decodeArray($data["recommendedIds"]) as $rr) {
			$rec = new TestProductRecommendation();
			$rec->product_id = $product_id;
			$rec->recommended_id = $rr;
			$rec->save();
		}

		// Return success
		echo json_encode([
			"success" => true,
			"product_id" => $product_id,
			"message" => "Product saved with all child records",
			"data" => $data,
			"file" => $file
		]);
	}
	function update($data, $file = [])
	{
		global $now;

		function decodeArray($value)
		{
			if (empty($value)) return [];
			if (is_array($value)) return $value;
			$decoded = json_decode($value, true);
			return is_array($decoded) ? $decoded : [];
		}

		// -----------------------------
		// 1) UPDATE MAIN PRODUCT
		// -----------------------------
		$testproduct = new TestProduct();
		$testproduct->id = $data["id"];

		$testproduct->sku               = $data["sku"] ?? '';
		$testproduct->title             = $data["title"] ?? '';
		$testproduct->slug              = $data["slug"] ?? '';
		$testproduct->description       = $data["description"] ?? '';
		$testproduct->category_id       = $data["category_id"] ?? '';
		$testproduct->subcategory       = $data["subcategory"] ?? '';
		$testproduct->brand_id          = $data["brand_id"] ?? '';
		$testproduct->price             = $data["price"] ?? 0;
		$testproduct->original_price    = $data["original_price"] ?? 0;
		$testproduct->discount_percent  = $data["discount_percent"] ?? 0;
		$testproduct->rating            = $data["rating"] ?? 0;
		$testproduct->reviews_count     = $data["reviews_count"] ?? 0;
		$testproduct->stock             = $data["stock"] ?? 0;
		$testproduct->stock_status      = $data["stock_status"] ?? 'in_stock';

		$testproduct->thumbnail = !empty($file['thumbnail'])
			? upload($file['thumbnail'], "../test_assets/img/products/")
			: ($data["existingThumbnail"] ?? $testproduct->thumbnail);

		$testproduct->featured          = $data["featured"] ?? 0;
		$testproduct->bestseller        = $data["bestseller"] ?? 0;
		$testproduct->new_arrival       = $data["new_arrival"] ?? 0;
		$testproduct->on_sale           = $data["on_sale"] ?? 0;
		$testproduct->best_value        = $data["best_value"] ?? 0;

		$dealEndTime = $data['deal_end_time'] ?? null;
		$testproduct->deal_end_time = $dealEndTime ? $dealEndTime : null;

		$testproduct->shipping_estimate  = $data["shipping_estimate"] ?? '';
		$testproduct->warranty           = $data["warranty"] ?? '';
		$testproduct->updated_at         = $now;

		$testproduct->update();

		$product_id = $data["id"];

		// ----------------------------------
		// DELETE OLD CHILD ROWS
		// ----------------------------------
		TestProductImage::delete($product_id);
		TestProductVariant::delete($product_id);
		TestProductSpec::delete($product_id);
		TestProductHighlight::delete($product_id);
		TestProductTag::delete($product_id);
		TestProductBadge::delete($product_id);
		TestProductRelation::delete($product_id);
		TestProductRecommendation::delete($product_id);

		// ----------------------------------
		// 2) INSERT NEW GALLERY IMAGES
		// ----------------------------------
		$allImages = [];
		$mainSet = false;

		if (!empty($file['gallery']['name'] ?? null)) {
			foreach ($file['gallery']['tmp_name'] as $index => $tmp) {
				$imgFile = [
					'name' => $file["gallery"]["name"][$index],
					'tmp_name' => $file["gallery"]["tmp_name"][$index],
					'size' => $file["gallery"]["size"][$index],
					'error' => $file["gallery"]["error"][$index],
					'type' => $file["gallery"]["type"][$index],
				];
				$allImages[] = upload($imgFile, "../test_assets/img/products/");
			}
		}

		foreach (decodeArray($data["gallery"] ?? []) as $imgPath) {
			$allImages[] = $imgPath;
		}

		foreach ($allImages as $img) {
			$image = new TestProductImage();
			$image->product_id = $product_id;
			$image->image_path = $img;
			$image->is_main    = !$mainSet ? 1 : 0;
			$mainSet = true;
			$image->created_at = $now;
			$image->save();
		}

		// ----------------------------------
		// 3) INSERT VARIANTS
		// ----------------------------------
		foreach (decodeArray($data["variants"]) as $v) {
			$variant = new TestProductVariant();
			$variant->product_id = $product_id;
			$variant->color      = $v["color"] ?? '';
			$variant->storage    = $v["storage"] ?? '';
			$variant->price      = $v["price"] ?? 0;
			$variant->created_at = $now;
			$variant->save();
		}

		// ----------------------------------
		// 4) INSERT SPECS
		// ----------------------------------
		foreach (decodeArray($data["specs"]) as $spec) {
			$sp = new TestProductSpec();
			$sp->product_id = $product_id;
			$sp->spec_text  = $spec["value"] ?? $spec["specs"] ?? '';
			$sp->save();
		}

		// ----------------------------------
		// 5) INSERT HIGHLIGHTS
		// ----------------------------------
		foreach (decodeArray($data["highlights"]) as $text) {
			$hl = new TestProductHighlight();
			$hl->product_id = $product_id;
			$hl->highlight_text = $text;
			$hl->save();
		}

		// ----------------------------------
		// 6) INSERT TAGS
		// ----------------------------------
		foreach (decodeArray($data["tags"]) as $tag) {
			$t = new TestProductTag();
			$t->product_id = $product_id;
			$t->tag = $tag;
			$t->save();
		}

		// ----------------------------------
		// 7) INSERT BADGES
		// ----------------------------------
		foreach (decodeArray($data["badges"]) as $badge) {
			$b = new TestProductBadge();
			$b->product_id = $product_id;
			$b->badge = $badge;
			$b->save();
		}

		// ----------------------------------
		// 8) INSERT RELATED
		// ----------------------------------
		foreach (decodeArray($data["relatedIds"]) as $rp) {
			$rel = new TestProductRelation();
			$rel->product_id = $product_id;
			$rel->related_id = $rp;
			$rel->save();
		}

		// ----------------------------------
		// 9) INSERT RECOMMENDED
		// ----------------------------------
		foreach (decodeArray($data["recommendedIds"]) as $rr) {
			$rec = new TestProductRecommendation();
			$rec->product_id = $product_id;
			$rec->recommended_id = $rr;
			$rec->save();
		}

		echo json_encode([
			"success" => true,
			"product_id" => $product_id,
			"message" => "Product updated successfully with all child records"
		]);
	}






	// function update($data, $file = [])
	// {
	// 	$testproduct = new TestProduct();
	// 	$testproduct->id = $data["id"];
	// 	$testproduct->sku = $data["sku"];
	// 	$testproduct->title = $data["title"];
	// 	if (isset($file["slug"]["name"])) {
	// 		$testproduct->slug = upload($file["slug"], "../img", $data["title"]);
	// 	} else {
	// 		$testproduct->slug = TestProduct::find($data["id"])->slug;
	// 	}
	// 	$testproduct->description = $data["description"];
	// 	$testproduct->category = $data["category"];
	// 	$testproduct->category_slug = $data["category_slug"];
	// 	$testproduct->subcategory = $data["subcategory"];
	// 	$testproduct->brand = $data["brand"];
	// 	$testproduct->brand_slug = $data["brand_slug"];
	// 	$testproduct->reviews_count = $data["reviews_count"];
	// 	$testproduct->stock = $data["stock"];
	// 	$testproduct->stock_status = $data["stock_status"];
	// 	$testproduct->thumbnail = $data["thumbnail"];
	// 	$testproduct->featured = $data["featured"];
	// 	$testproduct->bestseller = $data["bestseller"];
	// 	$testproduct->new_arrival = $data["new_arrival"];
	// 	$testproduct->on_sale = $data["on_sale"];
	// 	$testproduct->best_value = $data["best_value"];
	// 	$testproduct->deal_end_time = $data["deal_end_time"];
	// 	$testproduct->shipping_estimate = $data["shipping_estimate"];
	// 	$testproduct->warranty = $data["warranty"];
	// 	$testproduct->created_at = $data["created_at"];
	// 	$testproduct->updated_at = $data["updated_at"];

	// 	$testproduct->update();
	// 	echo json_encode(["success" => "yes"]);
	// }
}

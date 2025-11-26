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
		echo json_encode(["testproduct" => TestProduct::find(is_numeric($data['id']) ? $data['id'] : substr($data['id'], 2))]);
	}
	function delete($data)
	{
		$productID = is_numeric($data['id']) ? $data['id'] : substr($data['id'], 2);
		TestProduct::delete($productID);
		TestProductImage::delete($productID);
		TestProductVariant::delete($productID);
		TestProductHighlight::delete($productID);
		TestProductSpec::delete($productID);
		TestProductRecommendation::delete($productID);
		TestProductRelation::delete($productID);
		TestProductBadge::delete($productID);
		TestProductTag::delete($productID);

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

		// 2a) Uploaded files
		if (!empty($file['gallery']['name'] ?? null)) {
			foreach ($file['gallery']['tmp_name'] as $index => $tmp) {
				$imgFile = [
					'name'     => $file["gallery"]["name"][$index],
					'tmp_name' => $file["gallery"]["tmp_name"][$index],
					'size'     => $file["gallery"]["size"][$index],
					'error'    => $file["gallery"]["error"][$index],
					'type'     => $file["gallery"]["type"][$index],
				];
				$allImages[] = upload($imgFile, "../test_assets/img/products/");
			}
		}

		// 2b) Existing gallery images (frontend may send objects with id/url)
		$existingGallery = decodeArray($data["gallery"] ?? []);
		foreach ($existingGallery as $img) {
			if (is_array($img) && !empty($img['name'])) {
				$allImages[] = $img['name'];
			} elseif (is_string($img) && trim($img) !== "") {
				$allImages[] = $img;
			}
		}

		// Save gallery images to DB
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
		foreach (decodeArray($data["highlights"]) as $hl) {
			$text = is_array($hl) && isset($hl['text']) ? $hl['text'] : (is_string($hl) ? $hl : '');
			if ($text === '') continue;
			$highlight = new TestProductHighlight();
			$highlight->product_id    = $product_id;
			$highlight->highlight_text = $text;
			$highlight->save();
		}

		// 6) Tags
		foreach (decodeArray($data["tags"]) as $t) {
			$tagText = is_array($t) && isset($t['tag']) ? $t['tag'] : (is_string($t) ? $t : '');
			if ($tagText === '') continue;
			$tag = new TestProductTag();
			$tag->product_id = $product_id;
			$tag->tag        = $tagText;
			$tag->save();
		}

		// 7) Badges
		foreach (decodeArray($data["badges"]) as $b) {
			$badgeText = is_array($b) && isset($b['badge']) ? $b['badge'] : (is_string($b) ? $b : '');
			if ($badgeText === '') continue;
			$badge = new TestProductBadge();
			$badge->product_id = $product_id;
			$badge->badge      = $badgeText;
			$badge->save();
		}

		// 8) Related products
		foreach (decodeArray($data["relatedIds"]) as $rp) {
			$relatedId = is_array($rp) && isset($rp['id']) ? $rp['id'] : $rp;
			if ($relatedId === '') continue;
			$rel = new TestProductRelation();
			$rel->product_id  = $product_id;
			$rel->related_id  = $relatedId;
			$rel->save();
		}

		// 9) Recommended products
		foreach (decodeArray($data["recommendedIds"]) as $rr) {
			$recommendedId = is_array($rr) && isset($rr['id']) ? $rr['id'] : $rr;
			if ($recommendedId === '') continue;
			$rec = new TestProductRecommendation();
			$rec->product_id      = $product_id;
			$rec->recommended_id  = $recommendedId;
			$rec->save();
		}

		// Return success
		echo json_encode([
			"success"    => true,
			"product_id" => $product_id,
			"message"    => "Product saved with all child records",
			"data"       => $data,
			"file"       => $file
		]);
	}

	function update($data, $file = [])
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

		// Helper: normalize incoming id (handles numeric, "p-123", etc.)
		function normalizeId($val)
		{
			if ($val === null) return null;
			if (is_numeric($val)) return (int)$val;
			if (is_string($val)) {
				if (preg_match('/^p-(\d+)$/', $val, $m)) return (int)$m[1];
				if (preg_match('/^\d+$/', $val)) return (int)$val;
			}
			return null;
		}

		// -------------------------
		// 1) Save parent product
		// -------------------------
		$incomingId = $data['id'] ?? null;
		$testproduct = new TestProduct();
		$testproduct->id = $incomingId;                                // allow model to decide update/insert
		$testproduct->sku = $data["sku"] ?? '';
		$testproduct->title = $data["title"] ?? '';
		$testproduct->slug = $data["slug"] ?? '';
		$testproduct->description = $data["description"] ?? '';
		$testproduct->category_id = $data["category_id"] ?? '';
		$testproduct->subcategory = $data["subcategory"] ?? '';
		$testproduct->brand_id = $data["brand_id"] ?? '';
		$testproduct->price = $data["price"] ?? 0;
		$testproduct->original_price = $data["original_price"] ?? 0;
		$testproduct->discount_percent = $data["discount_percent"] ?? 0;
		$testproduct->rating = $data["rating"] ?? 0;
		$testproduct->reviews_count = $data["reviews_count"] ?? 0;
		$testproduct->stock = $data["stock"] ?? 0;
		$testproduct->stock_status = $data["stock_status"] ?? 'in_stock';

		// Thumbnail: uploaded file or existing path
		if (!empty($file['thumbnail'])) {
			$testproduct->thumbnail = upload($file['thumbnail'], "../test_assets/img/products/");
		} else {
			$testproduct->thumbnail = $data["existingThumbnail"] ?? '';
		}

		$testproduct->featured = $data["featured"] ?? 0;
		$testproduct->bestseller = $data["bestseller"] ?? 0;
		$testproduct->new_arrival = $data["new_arrival"] ?? 0;
		$testproduct->on_sale = $data["on_sale"] ?? 0;
		$testproduct->best_value = $data["best_value"] ?? 0;

		$dealEndTime = $data['deal_end_time'] ?? null;
		$testproduct->deal_end_time = ($dealEndTime !== null && $dealEndTime !== '') ? $dealEndTime : null;

		$testproduct->shipping_estimate = $data["shipping_estimate"] ?? '';
		$testproduct->warranty = $data["warranty"] ?? '';
		$testproduct->created_at = $now;
		$testproduct->updated_at = $now;

		// Save parent: expects model->update() returns numeric product_id (insert id or existing id)
		$product_id = $testproduct->update();

		// If model didn't return numeric ID, try to normalize incoming id
		if (!is_numeric($product_id)) {
			$product_id = normalizeId($incomingId);
		}
		// final guard
		$product_id = intval($product_id);

		// -------------------------
		// 2) Gallery images
		// -------------------------
		// -------------------------
// 2) Gallery images
// -------------------------
$allImages = [];

// Collect uploaded files first (same as your current code)
if (!empty($file['galleryFiles']['name']) && is_array($file['galleryFiles']['name'])) {
    foreach ($file['galleryFiles']['tmp_name'] as $index => $tmp) {
        $imgFile = [
            'name' => $file["galleryFiles"]["name"][$index],
            'tmp_name' => $file["galleryFiles"]["tmp_name"][$index],
            'size' => $file["galleryFiles"]["size"][$index],
            'error' => $file["galleryFiles"]["error"][$index],
            'type' => $file["galleryFiles"]["type"][$index],
        ];
        $path = upload($imgFile, "../test_assets/img/products/");
        if ($path) $allImages[] = ['id' => null, 'path' => $path];
    }
}

// Existing gallery from frontend
foreach (decodeArray($data["gallery"] ?? []) as $g) {
    $imgId = isset($g['id']) ? normalizeId($g['id']) : null;
    $imgPath = is_array($g) ? ($g['name'] ?? ($g['path'] ?? null)) : $g;
    if ($imgPath !== null) $allImages[] = ['id' => $imgId, 'path' => $imgPath];
}

// Sync all images in DB
$imageModel = new TestProductImage();
$imageModel->product_id = $product_id;
$imageModel->update($allImages);  // now handles insert/update/delete


		// -------------------------
		// 3) Variants
		// -------------------------
		$variantModel = new TestProductVariant();
$variantModel->product_id = $product_id;
$variantModel->update(decodeArray($data["variants"] ?? []));
		// -------------------------
		// 4) Specifications
		// -------------------------
		$specModel = new TestProductSpec();
$specModel->product_id = $product_id;
$specModel->update(decodeArray($data["specs"] ?? []));

		// -------------------------
		// 5) Highlights
		// -------------------------
		$highlightModel = new TestProductHighlight();
$highlightModel->product_id = $product_id;
$highlightModel->update(decodeArray($data["highlights"] ?? []));

		// -------------------------
		// 6) Tags
		// -------------------------
		$tagModel = new TestProductTag();
$tagModel->product_id = $product_id;
$tagModel->update(decodeArray($data["tags"] ?? []));

		// -------------------------
		// 7) Badges
		// -------------------------
		$badgeModel = new TestProductBadge();
$badgeModel->product_id = $product_id;
$badgeModel->update(decodeArray($data["badges"] ?? []));
		// -------------------------
		// 8) Related products
		// -------------------------
		$relModel = new TestProductRelation();
$relModel->product_id = $product_id;
$relModel->update(decodeArray($data["relatedIds"] ?? []));


		// -------------------------
		// 9) Recommended products
		// -------------------------
		$recModel = new TestProductRecommendation();
$recModel->product_id = $product_id;
$recModel->update(decodeArray($data["recommendedIds"] ?? []));


		// -------------------------
		// Return success
		// -------------------------
		echo json_encode([
			"success" => true,
			"product_id" => $product_id,
			"message" => "Product updated with child records",
			"data" => $data,
			// optionally return debug about files received:
			"file_keys" => array_keys($file)
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

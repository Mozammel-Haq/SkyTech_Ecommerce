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
		echo json_encode(["success" => "yes"]);
	}
	function save($data, $file = [])
	{
		$testproduct = new TestProduct();
		$testproduct->sku = $data["sku"];
		$testproduct->title = $data["title"];
		$testproduct->slug = upload($file["slug"], "../img", $data["title"]);
		$testproduct->description = $data["description"];
		$testproduct->category = $data["category"];
		$testproduct->category_slug = $data["category_slug"];
		$testproduct->subcategory = $data["subcategory"];
		$testproduct->brand = $data["brand"];
		$testproduct->brand_slug = $data["brand_slug"];
		$testproduct->reviews_count = $data["reviews_count"];
		$testproduct->stock = $data["stock"];
		$testproduct->stock_status = $data["stock_status"];
		$testproduct->thumbnail = $data["thumbnail"];
		$testproduct->featured = $data["featured"];
		$testproduct->bestseller = $data["bestseller"];
		$testproduct->new_arrival = $data["new_arrival"];
		$testproduct->on_sale = $data["on_sale"];
		$testproduct->best_value = $data["best_value"];
		$testproduct->deal_end_time = $data["deal_end_time"];
		$testproduct->shipping_estimate = $data["shipping_estimate"];
		$testproduct->warranty = $data["warranty"];
		$testproduct->created_at = $data["created_at"];
		$testproduct->updated_at = $data["updated_at"];

		$testproduct->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data, $file = [])
	{
		$testproduct = new TestProduct();
		$testproduct->id = $data["id"];
		$testproduct->sku = $data["sku"];
		$testproduct->title = $data["title"];
		if (isset($file["slug"]["name"])) {
			$testproduct->slug = upload($file["slug"], "../img", $data["title"]);
		} else {
			$testproduct->slug = TestProduct::find($data["id"])->slug;
		}
		$testproduct->description = $data["description"];
		$testproduct->category = $data["category"];
		$testproduct->category_slug = $data["category_slug"];
		$testproduct->subcategory = $data["subcategory"];
		$testproduct->brand = $data["brand"];
		$testproduct->brand_slug = $data["brand_slug"];
		$testproduct->reviews_count = $data["reviews_count"];
		$testproduct->stock = $data["stock"];
		$testproduct->stock_status = $data["stock_status"];
		$testproduct->thumbnail = $data["thumbnail"];
		$testproduct->featured = $data["featured"];
		$testproduct->bestseller = $data["bestseller"];
		$testproduct->new_arrival = $data["new_arrival"];
		$testproduct->on_sale = $data["on_sale"];
		$testproduct->best_value = $data["best_value"];
		$testproduct->deal_end_time = $data["deal_end_time"];
		$testproduct->shipping_estimate = $data["shipping_estimate"];
		$testproduct->warranty = $data["warranty"];
		$testproduct->created_at = $data["created_at"];
		$testproduct->updated_at = $data["updated_at"];

		$testproduct->update();
		echo json_encode(["success" => "yes"]);
	}
}

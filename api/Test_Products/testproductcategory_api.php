<?php
class TestProductCategoryApi
{
	public function __construct() {}
	function index()
	{
		echo json_encode(["test_product_categories" => TestProductCategory::all()]);
	}
	function pagination($data)
	{
		$page = $data["page"];
		$perpage = $data["perpage"];
		echo json_encode(["test_product_categories" => TestProductCategory::pagination($page, $perpage), "total_records" => TestProductCategory::count()]);
	}
	function find($data)
	{
		echo json_encode(["testproductcategory" => TestProductCategory::find($data["id"])]);
	}
	function delete($data)
	{
		TestProductCategory::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data, $file = [])
	{
		$testproductcategory = new TestProductCategory();
		$testproductcategory->name = $data["name"];
		$testproductcategory->slug = upload($file["slug"], "../img", $data["name"]);
		$testproductcategory->description = $data["description"];
		$testproductcategory->image = $data["image"];

		$testproductcategory->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data, $file = [])
	{
		$testproductcategory = new TestProductCategory();
		$testproductcategory->id = $data["id"];
		$testproductcategory->name = $data["name"];
		if (isset($file["slug"]["name"])) {
			$testproductcategory->slug = upload($file["slug"], "../img", $data["name"]);
		} else {
			$testproductcategory->slug = TestProductCategory::find($data["id"])->slug;
		}
		$testproductcategory->description = $data["description"];
		$testproductcategory->image = $data["image"];

		$testproductcategory->update();
		echo json_encode(["success" => "yes"]);
	}
}

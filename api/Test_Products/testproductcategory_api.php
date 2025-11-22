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
		$testproductcategory->slug = $data["slug"];
		$testproductcategory->description = $data["description"];
		$testproductcategory->image = upload($file["image"], "../test_assets/img/categories");

		$testproductcategory->save();
		echo json_encode(["success" => "yes", $data]);
	}
	function update($data, $file = [])
	{
		$testproductcategory = new TestProductCategory();
		$testproductcategory->id = $data["id"];
		$testproductcategory->name = $data["name"];
		$testproductcategory->slug = $data["slug"];
		$testproductcategory->description = $data["description"];
		// Handle image
		if (!empty($file['image']['name'])) {
			// Upload new image
			$testproductcategory->image = upload($file["image"], "../test_assets/img/categories");
		} else if (!empty($data['keep_old_image'])) {
			// Keep old image
			$testproductcategory->image = $data['keep_old_image'];
		} else {
			// Optional: remove image
			$testproductcategory->image = '';
		}

		$testproductcategory->update();
		echo json_encode(["success" => "yes", $data]);
	}
}

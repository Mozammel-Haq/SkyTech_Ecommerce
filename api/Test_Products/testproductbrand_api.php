<?php
class TestProductBrandApi
{
	public function __construct() {}
	function index()
	{
		echo json_encode(["test_product_brands" => TestProductBrand::all()]);
	}
	function pagination($data)
	{
		$page = $data["page"];
		$perpage = $data["perpage"];
		echo json_encode(["test_product_brands" => TestProductBrand::pagination($page, $perpage), "total_records" => TestProductBrand::count()]);
	}
	function find($data)
	{
		echo json_encode(["testproductbrand" => TestProductBrand::find($data["id"])]);
	}
	function delete($data)
	{
		TestProductBrand::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data, $file = [])
	{
		$testproductbrand = new TestProductBrand();
		$testproductbrand->name = $data["name"];
		$testproductbrand->logo = upload($file["logo"], "../test_assets/img/brands");
		$testproductbrand->description = $data["description"];
		$testproductbrand->featured = $data["featured"];
		$testproductbrand->founded = $data["founded"];
		$testproductbrand->origin = $data["origin"];

		$testproductbrand->save();
		echo json_encode(["success" => "yes", $data]);
	}
	function update($data, $file = [])
	{
		$testproductbrand = new TestProductBrand();
		$testproductbrand->id = $data["id"];
		$testproductbrand->name = $data["name"];
		$testproductbrand->description = $data["description"];
		$testproductbrand->featured = $data["featured"];
		$testproductbrand->founded = $data["founded"];
		$testproductbrand->origin = $data["origin"];

		// Handle logo
		if (!empty($file['logo']['name'])) {
			// Upload new logo
			$testproductbrand->logo = upload($file["logo"], "../test_assets/img/brands");
		} else if (!empty($data['keep_old_logo'])) {
			// Keep old logo
			$testproductbrand->logo = $data['keep_old_logo'];
		} else {
			// Optional: remove logo
			$testproductbrand->logo = '';
		}

		$testproductbrand->update();
		echo json_encode(["success" => "yes"]);
	}
}

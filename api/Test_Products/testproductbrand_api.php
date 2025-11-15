<?php
class TestProductBrandApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["test_product_brands"=>TestProductBrand::all()]);
	}
	function pagination($data){
		$page=$data["page"];
		$perpage=$data["perpage"];
		echo json_encode(["test_product_brands"=>TestProductBrand::pagination($page,$perpage),"total_records"=>TestProductBrand::count()]);
	}
	function find($data){
		echo json_encode(["testproductbrand"=>TestProductBrand::find($data["id"])]);
	}
	function delete($data){
		TestProductBrand::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$testproductbrand=new TestProductBrand();
		$testproductbrand->name=$data["name"];
		$testproductbrand->logo=$data["logo"];
		$testproductbrand->description=$data["description"];
		$testproductbrand->featured=$data["featured"];
		$testproductbrand->founded=$data["founded"];
		$testproductbrand->origin=$data["origin"];

		$testproductbrand->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$testproductbrand=new TestProductBrand();
		$testproductbrand->id=$data["id"];
		$testproductbrand->name=$data["name"];
		$testproductbrand->logo=$data["logo"];
		$testproductbrand->description=$data["description"];
		$testproductbrand->featured=$data["featured"];
		$testproductbrand->founded=$data["founded"];
		$testproductbrand->origin=$data["origin"];

		$testproductbrand->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>

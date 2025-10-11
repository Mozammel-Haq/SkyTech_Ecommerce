<?php
class ProductApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["products"=>Product::getAllProducts()]);
	}

	function find($data){
		echo json_encode(["product"=>Product::findProductObject($data["id"])]);
	}
	
}
?>

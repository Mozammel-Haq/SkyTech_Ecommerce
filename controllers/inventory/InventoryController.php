<?php
class InventoryController extends Controller{
	public function __construct(){
	}
	public function index(){
		view("Inventory");
	}
	public function create(){
		view("Inventory");
	}
public function save($data,$file){
	if(isset($data["create"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$data["product_id"])){
		$errors["product_id"]="Invalid product_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["warehouse_id"])){
		$errors["warehouse_id"]="Invalid warehouse_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["supplier_id"])){
		$errors["supplier_id"]="Invalid supplier_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["quantity"])){
		$errors["quantity"]="Invalid quantity";
	}
	if(!preg_match("/^[\s\S]+$/",$data["transaction_type_id"])){
		$errors["transaction_type_id"]="Invalid transaction_type_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["remarks"])){
		$errors["remarks"]="Invalid remarks";
	}

*/
		if(count($errors)==0){
			$inventory=new Inventory();
		$inventory->product_id=$data["product_id"];
		$inventory->warehouse_id=$data["warehouse_id"];
		$inventory->supplier_id=$data["supplier_id"];
		$inventory->quantity=$data["quantity"];
		$inventory->created_at=$now;
		$inventory->updated_at=$now;
		$inventory->transaction_type_id=$data["transaction_type_id"];
		$inventory->remarks=$data["remarks"];

			$inventory->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Inventory",Inventory::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$data["product_id"])){
		$errors["product_id"]="Invalid product_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["warehouse_id"])){
		$errors["warehouse_id"]="Invalid warehouse_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["supplier_id"])){
		$errors["supplier_id"]="Invalid supplier_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["quantity"])){
		$errors["quantity"]="Invalid quantity";
	}
	if(!preg_match("/^[\s\S]+$/",$data["transaction_type_id"])){
		$errors["transaction_type_id"]="Invalid transaction_type_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["remarks"])){
		$errors["remarks"]="Invalid remarks";
	}

*/
		if(count($errors)==0){
			$inventory=new Inventory();
			$inventory->id=$data["id"];
		$inventory->product_id=$data["product_id"];
		$inventory->warehouse_id=$data["warehouse_id"];
		$inventory->supplier_id=$data["supplier_id"];
		$inventory->quantity=$data["quantity"];
		$inventory->created_at=$now;
		$inventory->updated_at=$now;
		$inventory->transaction_type_id=$data["transaction_type_id"];
		$inventory->remarks=$data["remarks"];

		$inventory->update();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
	public function confirm($id){
		view("Inventory");
	}
	public function delete($id){
		Inventory::delete($id);
		redirect();
	}
	public function show($id){
		view("Inventory",Inventory::find($id));
	}
}
?>

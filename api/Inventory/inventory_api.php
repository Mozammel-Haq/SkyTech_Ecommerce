<?php
class InventoryApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["inventory"=>Inventory::all()]);
	}
	function pagination($data){
		$page=$data["page"];
		$perpage=$data["perpage"];
		echo json_encode(["inventory"=>Inventory::pagination($page,$perpage),"total_records"=>Inventory::count()]);
	}
	function find($data){
		echo json_encode(["inventory"=>Inventory::find($data["id"])]);
	}
	function delete($data){
		Inventory::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$inventory=new Inventory();
		$inventory->product_id=$data["product_id"];
		$inventory->warehouse_id=$data["warehouse_id"];
		$inventory->supplier_id=$data["supplier_id"];
		$inventory->quantity=$data["quantity"];
		$inventory->created_at=$data["created_at"];
		$inventory->updated_at=$data["updated_at"];
		$inventory->transaction_type_id=$data["transaction_type_id"];
		$inventory->remarks=$data["remarks"];

		$inventory->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$inventory=new Inventory();
		$inventory->id=$data["id"];
		$inventory->product_id=$data["product_id"];
		$inventory->warehouse_id=$data["warehouse_id"];
		$inventory->supplier_id=$data["supplier_id"];
		$inventory->quantity=$data["quantity"];
		$inventory->created_at=$data["created_at"];
		$inventory->updated_at=$data["updated_at"];
		$inventory->transaction_type_id=$data["transaction_type_id"];
		$inventory->remarks=$data["remarks"];

		$inventory->update();
		echo json_encode(["success" => "yes"]);
	}

}
?>

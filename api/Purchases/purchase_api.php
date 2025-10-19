<?php
class PurchaseApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["purchases"=>Purchase::all()]);
	}
	function pagination($data){
		$page=$data["page"];
		$perpage=$data["perpage"];
		echo json_encode(["purchases"=>Purchase::pagination($page,$perpage),"total_records"=>Purchase::count()]);
	}
	function find($data){
		echo json_encode(["purchase"=>Purchase::find($data["id"])]);
	}
	function delete($data){
		Purchase::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$purchase=new Purchase();
		$purchase->supplier_id=$data["supplier_id"];
		$purchase->order_date=$data["order_date"];
		$purchase->status=$data["status"];
		$purchase->created_at=$data["created_at"];
		$purchase->updated_at=$data["updated_at"];

		$purchase->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$purchase=new Purchase();
		$purchase->id=$data["id"];
		$purchase->supplier_id=$data["supplier_id"];
		$purchase->order_date=$data["order_date"];
		$purchase->status=$data["status"];
		$purchase->created_at=$data["created_at"];
		$purchase->updated_at=$data["updated_at"];

		$purchase->update();
		echo json_encode(["success" => "yes"]);
	}

	function save_purchase($data, $file = [])
	{
		global $now;
		$purchase = new Purchase();
		$purchase->supplier_id = $data["supplier_id"];
		$purchase->order_date = $data["purchase_date"];
		$purchase->total_amount = $data["total_amount"];
		$purchase->status = $data["status"];
		$purchase->created_at = $now;
		$purchase->updated_at = $now;

		$last_purchase_id = $purchase->save();
		$products = $data['products'];
		$supplier_id = $data["total_amount"];



		foreach($products as $data){

		// Purchase Details
		$purchasedetail = new PurchaseDetail();
		$purchasedetail->purchase_id = $last_purchase_id;
		$purchasedetail->product_id = $data["id"];
		$purchasedetail->quantity = $data["quantity"];
		$purchasedetail->created_at = $now;
		$purchasedetail->updated_at = $now;

		$purchasedetail->save();

		// Inventory

		$inventory = new Inventory();
		$inventory->product_id = $data["id"];
		$inventory->warehouse_id = $data["warehouse_id"] ?? 0;
		$inventory->supplier_id = $supplier_id;
		$inventory->quantity = $data["quantity"];
		$inventory->created_at = $now;
		$inventory->updated_at = $now;
		$inventory->transaction_type_id = $data["transaction_type_id"] ?? 0;
		$inventory->remarks = $data["remarks"] ?? "";

		$inventory->save();
		}
		echo json_encode(["success" => $data]);
	}
}
?>

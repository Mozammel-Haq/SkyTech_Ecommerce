<?php
class OrderDetailApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["order_details"=>OrderDetail::all()]);
	}
	function pagination($data){
		$page=$data["page"];
		$perpage=$data["perpage"];
		echo json_encode(["order_details"=>OrderDetail::pagination($page,$perpage),"total_records"=>OrderDetail::count()]);
	}
	function find($data){
		echo json_encode(["orderdetail"=>OrderDetail::find($data["id"])]);
	}
	function delete($data){
		OrderDetail::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$orderdetail=new OrderDetail();
		$orderdetail->order_id=$data["order_id"];
		$orderdetail->product_id=$data["product_id"];
		$orderdetail->variation_id=$data["variation_id"];
		$orderdetail->quantity=$data["quantity"];
		$orderdetail->created_at=$data["created_at"];
		$orderdetail->updated_at=$data["updated_at"];
		$orderdetail->discount=$data["discount"];
		$orderdetail->vat=$data["vat"];

		$orderdetail->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$orderdetail=new OrderDetail();
		$orderdetail->id=$data["id"];
		$orderdetail->order_id=$data["order_id"];
		$orderdetail->product_id=$data["product_id"];
		$orderdetail->variation_id=$data["variation_id"];
		$orderdetail->quantity=$data["quantity"];
		$orderdetail->created_at=$data["created_at"];
		$orderdetail->updated_at=$data["updated_at"];
		$orderdetail->discount=$data["discount"];
		$orderdetail->vat=$data["vat"];

		$orderdetail->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>

<?php
class TestOrderApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["test_orders"=>TestOrder::all()]);
	}
	function pagination($data){
		$page=$data["page"];
		$perpage=$data["perpage"];
		echo json_encode(["test_orders"=>TestOrder::pagination($page,$perpage),"total_records"=>TestOrder::count()]);
	}
	function find($data){
		echo json_encode(["testorder"=>TestOrder::find($data["id"])]);
	}
	function delete($data){
		TestOrder::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$testorder=new TestOrder();
		$testorder->order_number=$data["order_number"];
		$testorder->user_id=$data["user_id"];
		$testorder->placed_at=$data["placed_at"];
		$testorder->fulfilled_at=$data["fulfilled_at"];
		$testorder->shipping_name=$data["shipping_name"];
		$testorder->shipping_line1=$data["shipping_line1"];
		$testorder->shipping_line2=$data["shipping_line2"];
		$testorder->shipping_city=$data["shipping_city"];
		$testorder->shipping_state=$data["shipping_state"];
		$testorder->shipping_postal_code=$data["shipping_postal_code"];
		$testorder->shipping_country=$data["shipping_country"];
		$testorder->tracking_carrier=$data["tracking_carrier"];
		$testorder->tracking_number=$data["tracking_number"];

		$testorder->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$testorder=new TestOrder();
		$testorder->id=$data["id"];
		$testorder->order_number=$data["order_number"];
		$testorder->user_id=$data["user_id"];
		$testorder->placed_at=$data["placed_at"];
		$testorder->fulfilled_at=$data["fulfilled_at"];
		$testorder->shipping_name=$data["shipping_name"];
		$testorder->shipping_line1=$data["shipping_line1"];
		$testorder->shipping_line2=$data["shipping_line2"];
		$testorder->shipping_city=$data["shipping_city"];
		$testorder->shipping_state=$data["shipping_state"];
		$testorder->shipping_postal_code=$data["shipping_postal_code"];
		$testorder->shipping_country=$data["shipping_country"];
		$testorder->tracking_carrier=$data["tracking_carrier"];
		$testorder->tracking_number=$data["tracking_number"];

		$testorder->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>

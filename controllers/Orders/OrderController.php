<?php
class OrderController extends Controller{
	public function __construct(){
	}
	public function index(){
		
		view("Orders");
	}
	public function create(){
		view("Orders");
	}
public function save($data,$file){
	if(isset($data["create"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$data["customer_id"])){
		$errors["customer_id"]="Invalid customer_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtStatus"])){
		$errors["status"]="Invalid status";
	}
	if(!preg_match("/^[\s\S]+$/",$data["total_amount"])){
		$errors["total_amount"]="Invalid total_amount";
	}
	if(!preg_match("/^[\s\S]+$/",$data["delivery_date"])){
		$errors["delivery_date"]="Invalid delivery_date";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtShippingAddress"])){
		$errors["shipping_address"]="Invalid shipping_address";
	}
	if(!preg_match("/^[\s\S]+$/",$data["paid_amount"])){
		$errors["paid_amount"]="Invalid paid_amount";
	}
	if(!preg_match("/^[\s\S]+$/",$data["discount"])){
		$errors["discount"]="Invalid discount";
	}

*/
		if(count($errors)==0){
			global $now;
			$order=new Order();
		$order->customer_id=$data["customer_id"];
		$order->order_date=date("Y-m-d",strtotime($data["order_date"]));
		$order->status=$data["status"];
		$order->total_amount=$data["total_amount"];
		$order->created_at=$now;
		$order->updated_at=$now;
		$order->delivery_date=$data["delivery_date"];
		$order->shipping_address=$data["shipping_address"];
		$order->paid_amount=$data["paid_amount"];
		$order->discount=$data["discount"];

			$order->save();
		redirect("index");
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Orders",Order::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$data["customer_id"])){
		$errors["customer_id"]="Invalid customer_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtStatus"])){
		$errors["status"]="Invalid status";
	}
	if(!preg_match("/^[\s\S]+$/",$data["total_amount"])){
		$errors["total_amount"]="Invalid total_amount";
	}
	if(!preg_match("/^[\s\S]+$/",$data["delivery_date"])){
		$errors["delivery_date"]="Invalid delivery_date";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtShippingAddress"])){
		$errors["shipping_address"]="Invalid shipping_address";
	}
	if(!preg_match("/^[\s\S]+$/",$data["paid_amount"])){
		$errors["paid_amount"]="Invalid paid_amount";
	}
	if(!preg_match("/^[\s\S]+$/",$data["discount"])){
		$errors["discount"]="Invalid discount";
	}

*/
		if(count($errors)==0){
			$order=new Order();
			$order->id=$data["id"];
		$order->customer_id=$data["customer_id"];
		$order->order_date=date("Y-m-d",strtotime($data["order_date"]));
		$order->status=$data["status"];
		$order->total_amount=$data["total_amount"];
		$order->created_at=$now;
		$order->updated_at=$now;
		$order->delivery_date=$data["delivery_date"];
		$order->shipping_address=$data["shipping_address"];
		$order->paid_amount=$data["paid_amount"];
		$order->discount=$data["discount"];

		$order->update();
		redirect("index");
		}else{
			 print_r($errors);
		}
	}
}
	public function confirm($id){
		view("Orders");
	}
	public function delete($id){
		Order::delete($id);
		redirect("index");
	}
	public function show($id){
		view("Orders",Order::find($id));
	}
}
?>

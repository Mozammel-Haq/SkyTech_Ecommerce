<?php
class OrderController extends Controller
{
	public function __construct() {}
	public function index()
	{
		$data = Order::all();
		view("Orders", $data);
	}
	public function create()
	{
		view("Orders");
	}
	public function save($data, $file)
	{
		if (isset($data["save_btn"])) {
			print_r($data);
		
			
				global $now;
				$order = new Order();
				// $order->customer_id = $data["customer_id"];
				$order->quantity = $data["quantity"];
				$order->order_date = date("Y-m-d", strtotime($data["order_date"]));
				$order->status = $data["status"];
				$order->tracking_id = $data["tracking"];
				$order->total_amount = $data["total_amount"];
				$order->created_at = $now;
				$order->updated_at = $now;
				$order->delivery_date = $data["delivery_date"];
				$order->shipping_address = $data["shipping_address"];
				$order->paid_amount = $data["paid_amount"];
				$order->discount = $data["discount"];

				$order->save();
				redirect("index");
			
				;
			
		}
	}
	public function edit()
	{
		$data = Order::find($_GET['id']);
		view("Orders", $data);
	}
	public function update($data, $file)
	{
		if (isset($data["update"])) {
			$errors = [];

			if (count($errors) == 0) {
				global $now;
				$order = new Order();
				$order->id = $data["id"];
				$order->customer_id = $data["customer_id"];
				$order->quantity = $data["quantity"];
				$order->order_date = date("Y-m-d", strtotime($data["order_date"]));
				$order->status = $data["status"];
				$order->tracking_id = $data["tracking_id"];
				$order->total_amount = $data["total_amount"];
				$order->created_at = $now;
				$order->updated_at = $now;
				$order->delivery_date = $data["delivery_date"];
				$order->shipping_address = $data["shipping_address"];
				$order->paid_amount = $data["paid_amount"];
				$order->discount = $data["discount"];

				$order->update();
				redirect("index");
			} else {
				print_r($errors);
			}
		}
	}
	public function confirm($id)
	{
		$data1 = Order::all($id);
		$data2 = Order::findOrder($_GET['id']);;
		$data = [
			"data1" => $data1,
			"data2" => $data2
		];
		view("Orders", $data);
	}
	public function delete($id)
	{
		Order::delete($id);
		redirect("index");
	}
	public function show($id)
	{
		view("Orders", Order::find($id));
	}
}

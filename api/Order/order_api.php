<?php
class OrderApi
{
	public function __construct() {}
	function index()
	{
		echo json_encode(["orders" => Order::all()]);
	}
	function pagination($data)
	{
		$page = $data["page"];
		$perpage = $data["perpage"];
		echo json_encode(["orders" => Order::pagination($page, $perpage), "total_records" => Order::count()]);
	}
	function find($data)
	{
		echo json_encode(["order" => Order::find($data["id"])]);
	}
	function delete($data)
	{
		Order::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data, $file = [])
	{
		$order = new Order();
		$order->customer_id = $data["customer_id"];
		$order->order_date = $data["order_date"];
		$order->status = $data["status"];
		$order->total_amount = $data["total_amount"];
		$order->created_at = $data["created_at"];
		$order->updated_at = $data["updated_at"];
		$order->delivery_date = $data["delivery_date"];
		$order->shipping_address = $data["shipping_address"];

		$order->paid_amount = $data["paid_amount"];
		$order->discount = $data["discount"];
		$order->tracking_id = $data["tracking_id"];

		$order->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data, $file = [])
	{
		$order = new Order();
		$order->id = $data["id"];
		$order->customer_id = $data["customer_id"];
		$order->order_date = $data["order_date"];
		$order->status = $data["status"];
		$order->created_at = $data["created_at"];
		$order->updated_at = $data["updated_at"];
		$order->delivery_date = $data["delivery_date"];
		$order->shipping_address = $data["shipping_address"];

		$order->paid_amount = $data["paid_amount"];
		$order->discount = $data["discount"];
		$order->tracking_id = $data["tracking_id"];

		$order->update();
		echo json_encode(["success" => "yes"]);
	}

	function save_order($data)
	{
		$data = $data["data"];
		global $now;
		$order = new Order();
		$order->customer_id = $data["customer_id"];
		$order->order_date = $data["order_date"];
		$order->status = $data["status"];
		$order->total_amount = $data["total_amount"];
		$order->created_at = $now;
		$order->updated_at = $now;
		$order->delivery_date = $data["delivery_date"];
		$order->shipping_address = $data["shipping_address"];
		$order->paid_amount = $data["paid_amount"];
		$order->discount = $data["discount"];
		$order->tracking_id = $data["tracking_id"];

		$order->save();
	}
}

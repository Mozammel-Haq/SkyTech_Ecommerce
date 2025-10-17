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
		$order->created_at = $now;
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
		$order->order_date = date("Y-m-d H:i:s", strtotime($data["order_date"]));
		$order->status = $data["status"];
		$order->total_amount = str_replace('$', '', $data["total_amount"]);
		$order->created_at = $now;
		$order->updated_at = $now;
		$order->delivery_date = date("Y-m-d H:i:s", strtotime($data["delivery_date"]));
		$order->shipping_address = $data["shipping_address"] ?? "";
		$order->billing_address = $data["billing_address"] ?? "";
		$order->paid_amount = $data["paid_amount"] ?? 0;
		$order->discount = str_replace('$', '', $data["discount"]);
		$order->tracking_id = $data["tracking_id"] ?? 0;

		$last_order_id = $order->save();
		$products = $data['products'];

		// SAve Order Details

		foreach ($products as $data) {
			global $now;
			$orderdetail = new OrderDetail();
			$orderdetail->order_id = $last_order_id;
			$orderdetail->product_id = $data["id"];
			$orderdetail->variation_id = $data["variation_id"] ?? 0;
			$orderdetail->quantity = $data["qty"];
			$orderdetail->price = $data["price"];
			$orderdetail->created_at = $now;
			$orderdetail->updated_at = $now;
			$orderdetail->discount = $data["discount"];
			$orderdetail->vat = $data["vat"];
			$orderdetail->save();

			// Update Inventory

			$inventory = new Inventory();
			$inventory->product_id = $data["id"];
			$inventory->warehouse_id = $data["warehouse_id"] ?? 0;
			$inventory->supplier_id = $data["supplier_id"] ?? 0;
			$inventory->quantity = $data["qty"] * -1;
			$inventory->created_at = $now;
			$inventory->updated_at = $now;
			$inventory->transaction_type_id = $data["transaction_type_id"] ?? 0;
			$inventory->remarks = $data["remarks"] ?? "";

			$inventory->save();
		}

		echo json_encode(["success" => $data]);
	}
}

<?php
class PurchaseController extends Controller
{
	public function __construct() {}
	public function index()
	{
		$data = Purchase::detailedPurchases();
		view("Purchases", $data);
	}
	public function create()
	{
		view("Purchases");
	}
	public function save($data, $file)
	{
		if (isset($data["create"])) {
			global $now;
			$purchase = new Purchase();
			$purchase->supplier_id = $data["supplier_id"];
			$purchase->order_date = date("Y-m-d", strtotime($data["order_date"]));
			$purchase->status = $data["status"];
			$purchase->total_amount = $data["total_amount"];
			$purchase->created_at = $now;
			$purchase->updated_at = $now;

			$purchase->save();
			redirect("");
		}
	}
	public function edit($id)
	{
		view("Purchases", Purchase::find($id));
	}
	public function update($data, $file)
	{
		if (isset($data["update"])) {
			global $now;
			$purchase = new Purchase();
			$purchase->id = $data["id"];
			$purchase->supplier_id = $data["supplier_id"];
			$purchase->order_date = date("Y-m-d", strtotime($data["order_date"]));
			$purchase->status = $data["status"];
			$purchase->total_amount = $data["total_amount"];
			$purchase->created_at = $now;
			$purchase->updated_at = $now;

			$purchase->update();
			redirect("");
		}
	}
	public function confirm($id)
	{
		view("Purchases");
	}
	public function delete($id)
	{
		Purchase::delete($id);
		PurchaseDetail::delete($id);
		redirect("");
	}
	public function show($id)
	{
		view("Purchases", Purchase::find($id));
	}
}

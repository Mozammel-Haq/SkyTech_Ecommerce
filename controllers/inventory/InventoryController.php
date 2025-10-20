<?php
class InventoryController extends Controller
{
	public function __construct() {}
	public function index()
	{
		$data = Inventory::getAllInventory();
		view("Inventory", $data);
	}
	public function history($id)
	{
		$data = Inventory::getInventoryHistory($id);
		view("Inventory", $data);
	}



	public function create()
	{
		view("Inventory");
	}
	public function save($data, $file)
	{
		if (isset($data["create"])) {

			global $now;
			$inventory = new Inventory();
			$inventory->product_id = $data["product_id"];
			$inventory->warehouse_id = $data["warehouse_id"];
			$inventory->supplier_id = $data["supplier_id"];
			$inventory->quantity = $data["quantity"];
			$inventory->created_at = $now;
			$inventory->updated_at = $now;
			$inventory->transaction_type_id = $data["transaction_type_id"];
			$inventory->remarks = $data["remarks"];

			$inventory->save();
			redirect("");
		}
	}
	public function edit($id)
	{
		view("Inventory", Inventory::find($id));
	}
	public function update($data, $file)
	{
		if (isset($data["update"])) {
			global $now;
			$inventory = new Inventory();
			$inventory->id = $data["id"];
			$inventory->product_id = $data["product_id"];
			$inventory->warehouse_id = $data["warehouse_id"];
			$inventory->supplier_id = $data["supplier_id"];
			$inventory->quantity = $data["quantity"];
			$inventory->created_at = $now;
			$inventory->updated_at = $now;
			$inventory->transaction_type_id = $data["transaction_type_id"];
			$inventory->remarks = $data["remarks"];

			$inventory->update();
			redirect("");
		}
	}
	public function confirm($id)
	{
		view("Inventory");
	}
	public function delete($id)
	{
		Inventory::delete($id);
		redirect("");
	}
	public function show($id)
	{
		view("Inventory", Inventory::find($id));
	}
}

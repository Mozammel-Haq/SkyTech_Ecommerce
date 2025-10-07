<?php
class WarehouseController extends Controller
{
	public function __construct() {}
	public function index()
	{
		$data = Warehouse::all();
		view("inventory", $data);
	}
	public function create()
	{
		view("inventory");
	}
	public function save($data, $file)
	{
		global $now;
		if (isset($data["create"])) {
			$warehouse = new Warehouse();
			$warehouse->name = $data["name"];
			$warehouse->location = $data["location"];
			$warehouse->created_at = $now;
			$warehouse->updated_at = $now;
			$warehouse->manager = $data["manager"];
			$warehouse->email = $data["email"];
			$warehouse->phone = $data["phone"];
			$warehouse->save();
			redirect("");
		}
	}
	public function edit($id)
	{
		view("inventory", Warehouse::find($id));
	}
	public function update($data, $file)
	{
		if (isset($data["update"])) {
			global $now;
			$warehouse = new Warehouse();
			$warehouse->id = $data["id"];
			$warehouse->name = $data["name"];
			$warehouse->location = $data["location"];
			$warehouse->created_at = $now;
			$warehouse->updated_at = $now;
			$warehouse->manager = $data["manager"];
			$warehouse->email = $data["email"];
			$warehouse->phone = $data["phone"];

			$warehouse->update();
			redirect("index");
		}
	}
	public function confirm($id)
	{
		view("inventory");
	}
	public function delete($id)
	{
		Warehouse::delete($id);
		redirect("index");
	}
	public function show($id)
	{
		view("inventory", Warehouse::find($id));
	}
}

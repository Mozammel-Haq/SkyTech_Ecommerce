<?php
class RoleController extends Controller
{
	public function __construct() {}
	public function index()
	{
		view("System");
	}
	public function create()
	{
		view("System");
	}
	public function save($data, $file)
	{
		if (isset($data["create"])) {
			global $now;
			$role = new Role();
			$role->name = $data["name"];
			$role->description = $data["description"];
			$role->created_at = $now;
			$role->updated_at = $now;

			$role->save();
			redirect("");
		}
	}
	public function edit($id)
	{
		view("System", Role::find($id));
	}
	public function update($data, $file)
	{
		if (isset($data["update"])) {
			global $now;
			$role = new Role();
			$role->id = $data["id"];
			$role->name = $data["name"];
			$role->description = $data["description"];
			$role->created_at = $now;
			$role->updated_at = $now;

			$role->update();
			redirect("");
		}
	}
	public function confirm($id)
	{
		view("System");
	}
	public function delete($id)
	{
		Role::delete($id);
		redirect("");
	}
	public function show($id)
	{
		view("System", Role::find($id));
	}
}

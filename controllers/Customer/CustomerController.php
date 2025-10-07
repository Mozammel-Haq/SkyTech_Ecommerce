<?php
class CustomerController extends Controller
{
	public function __construct() {}
	public function index()
	{
		$data = Customer::all();
		view("Customer", $data);
	}
	public function create()
	{
		view("Customer");
	}
	public function save($data, $file)
	{
		if (isset($data["create"])) {
			print_r($data);
			global $now;
			$customer = new Customer();
			$customer->name = $data["name"];
			$customer->email = $data["email"];
			$customer->phone = $data["phone"];
			$customer->photo = File::upload($file["photo"], "assets/img/profiles");
			$customer->address = $data["address"];
			$customer->status = $data["status"];
			$customer->created_at = $now;
			$customer->updated_at = $now;

			$customer->save();
			redirect("");
		}
	}
	public function edit($id)
	{
		$data = Customer::find($id);
		view("Customer", $data);
	}
	public function update($data, $file)
	{
		if (isset($data["update"])) {

			global $now;
			$customer = new Customer();
			$customer->id = $data["id"];
			$customer->name = $data["name"];
			$customer->email = $data["email"];
			$customer->phone = $data["phone"];
			if ($file["photo"]["name"] != "") {
				$customer->photo = File::upload($file["photo"], "img", $data["id"]);
			} else {
				$customer->photo = Customer::find($data["id"])->photo;
			}
			$customer->address = $data["address"];
			$customer->status = $data["status"];
			$customer->created_at = $now;
			$customer->updated_at = $now;

			$customer->update();
			redirect("");
		}
	}
	public function confirm($id)
	{
		view("Customer");
	}
	public function delete($id)
	{
		Customer::delete($id);
		redirect("");
	}
	public function show($id)
	{
		view("Customer", Customer::find($id));
	}
}

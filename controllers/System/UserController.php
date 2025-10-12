<?php
class UserController extends Controller
{
	public function __construct() {}
	public function index()
	{
		$data = User::all();
		view("System", $data);
	}
	public function create()
	{
		view("System");
	}
	public function save($data, $file)
	{
		if (isset($data["create"])) {
			global $now;
			$user = new User();
			$user->name = $data["name"];
			$user->username = $data["username"];
			$user->email = $data["email"];
			$user->phone = $data["phone"];
			$user->password = password_hash($data["password"], PASSWORD_DEFAULT);
			$user->photo = File::upload($file["photo"], "img", $data["id"]);
			$user->role_id = $data["role"];
			$user->status = $data["status"];
			$user->created_at = $now;
			$user->updated_at = $now;

			$user->save();
			redirect("");
		}
	}
	public function edit($id)
	{
			$data = User::find($id);
		view("System", $data);
	}
	public function update($data, $file)
	{
		if (isset($data["update"])) {
			print_r($_POST);
				$user = new User();
				$user->id = $data["id"];
				$user->name = $data["name"];
				$user->username = $data["username"];
				$user->email = $data["email"];
				$user->phone = $data["phone"];
				$user->password = password_hash($data["password"], PASSWORD_DEFAULT);
				if ($file["photo"]["name"] != "") {
					$user->photo = File::upload($file["photo"], "img", $data["id"]);
				} else {
					$user->photo = User::find($data["id"])->photo;
				}
				$user->role_id = $data["role"];
				$user->status = $data["status"];
				$user->created_at = $now;
				$user->updated_at = $now;

				$user->update();
				redirect("");
			
		}
	}
	public function confirm($id)
	{
		view("System");
	}
	public function delete($id)
	{
		User::delete($id);
		redirect("");
	}
	public function show($id)
	{
		view("System", User::find($id));
	}
}

<?php

class TestUserApi
{
	public function __construct() {}
	function index()
	{
		echo json_encode(["all_users" => TestUser::all(), "all_customers" => TestUser::customers()]);
	}
	function pagination($data)
	{
		$page = $data["page"];
		$perpage = $data["perpage"];
		echo json_encode(["test_users" => TestUser::pagination($page, $perpage), "total_records" => TestUser::count()]);
	}
	function find($data)
	{
		echo json_encode(TestUser::find($data["id"]));
	}
	function delete($data)
	{
		TestUser::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data, $file = [])
	{
		$testuser = new TestUser();
		$testuser->email = $data["email"];
		$testuser->name = $data["name"];
		$testuser->phone = $data["phone"] ?? '';
		$testuser->address = $data["address"] ?? '';
		$testuser->city = $data["city"] ?? '';
		$testuser->postal_code = $data["postal_code"] ?? '';
		$testuser->country = $data["country"] ?? '';
		$testuser->role_id = $data["role_id"];
		$testuser->password = password_hash($data['password'], PASSWORD_BCRYPT);
		$testuser->token = bin2hex(random_bytes(32));
		$testuser->expiresAt = date("Y-m-d H:i:s", strtotime("+1 day"));

		$testuser->save();
		echo json_encode([
			"success" => "yes",
			"id" => $testuser->id,
			"email" => $testuser->email,
			"name" => $testuser->name,
			"phone" => $testuser->phone,
			"address" => $testuser->address,
			"city" => $testuser->city,
			"postal_code" => $testuser->postal_code,
			"country" => $testuser->country,
			"role_id" => $testuser->role_id,
			"token" => $testuser->token,
			"expiresAt" => $testuser->expiresAt
		]);
	}

	function update($data, $file = [])
	{
		$testuser = new TestUser();
		$testuser->id = $data["id"];
		$testuser->email = $data["email"];
		$testuser->name = $data["name"];
		$testuser->phone = $data["phone"] ?? '';
		$testuser->address = $data["address"] ?? '';
		$testuser->city = $data["city"] ?? '';
		$testuser->postal_code = $data["postal_code"] ?? '';
		$testuser->country = $data["country"] ?? '';
		$testuser->role_id = $data["role_id"] ?? 2; // default role_id
		$testuser->token = $data["token"] ?? bin2hex(random_bytes(32));
		$testuser->expiresAt = $data["expiresAt"] ?? date("Y-m-d H:i:s", strtotime("+1 day"));


		// Only update password if a new one is provided
		if (!empty($data['password'])) {
			$testuser->password = password_hash($data['password'], PASSWORD_BCRYPT);
		} else {
			// Tell the update function to ignore the password field
			$testuser->skipPassword = true; // you may need to handle this in TestUser->update()
		}

		$testuser->update();
		echo json_encode(["success" => "yes",$data]);
	}

	function login($data)
	{
		$user = TestUser::findByEmail($data['email']);
		if (!$user) {
			echo json_encode(["success" => "no", "message" => "User not found"]);
			return;
		}

		if (!password_verify($data['password'], $user->password)) {
			echo json_encode(["success" => "no", "message" => "Invalid password"]);
			return;
		}

		$user->token = bin2hex(random_bytes(32));
		$user->expiresAt = date("Y-m-d H:i:s", strtotime("+1 day"));
		$user->update();

		echo json_encode([
			"success" => "yes",
			"id" => $user->id,
			"email" => $user->email,
			"name" => $user->name,
			"phone" => $user->phone,
			"address" => $user->address,
			"city" => $user->city,
			"postal_code" => $user->postal_code,
			"country" => $user->country,
			"role_id" => $user->role_id,
			"token" => $user->token,
			"expiresAt" => $user->expiresAt
		]);
	}
}

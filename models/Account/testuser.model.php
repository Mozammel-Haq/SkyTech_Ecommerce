<?php
class TestUser extends Model implements JsonSerializable
{
	public $id;
	public $email;
	public $name;
	public $phone;
	public $address;
	public $city;
	public $postal_code;
	public $country;
	public $role_id;
	public $password;
	public $token;
	public $expiresAt;
	public $skipPassword;

	public function __construct() {}

	public function set($id, $email, $name, $phone, $address, $city, $postal_code, $country, $role_id, $password, $token, $expiresAt, $skipPassword)
	{
		$this->id = $id;
		$this->email = $email;
		$this->name = $name;
		$this->phone = $phone;
		$this->address = $address;
		$this->city = $city;
		$this->postal_code = $postal_code;
		$this->country = $country;
		$this->role_id = $role_id;
		$this->password = $password;
		$this->token = $token;
		$this->expiresAt = $expiresAt;
		$this->skipPassword = $skipPassword;
	}

	public function save()
	{
		global $db, $tx;
		$db->query("
            INSERT INTO {$tx}test_users 
                (email, name, phone, address, city, postal_code, country, role_id, password, token, expiresAt)
            VALUES
                ('$this->email','$this->name','$this->phone','$this->address','$this->city','$this->postal_code','$this->country','$this->role_id','$this->password','$this->token','$this->expiresAt')
        ");
		return $db->insert_id;
	}

	public function update()
	{
		global $db, $tx;

		$sql = "
        UPDATE {$tx}test_users
        SET 
            email='$this->email',
            name='$this->name',
            phone='$this->phone',
            address='$this->address',
            city='$this->city',
            postal_code='$this->postal_code',
            country='$this->country',
            role_id='$this->role_id',
            token='$this->token',
            expiresAt='$this->expiresAt'";

		// Only update password if skipPassword is not set
		if (empty($this->skipPassword) && !empty($this->password)) {
			$sql .= ", password='$this->password'";
		}

		$sql .= " WHERE id='$this->id'";

		$db->query($sql);
	}

	public static function delete($id)
	{
		global $db, $tx;
		$db->query("DELETE FROM {$tx}test_users WHERE id={$id}");
	}

	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}

	public static function all()
	{
		global $db, $tx;
		$result = $db->query("
            SELECT 
                u.id,
                u.email,
                u.name,
                u.phone,
                u.address,
                u.city,
                u.postal_code,
                u.country,
                r.name AS role,
                u.token,
                u.expiresAt
            FROM {$tx}test_users AS u
            LEFT JOIN {$tx}test_roles AS r
                ON u.role_id = r.id
        ");

		$data = [];
		while ($testuser = $result->fetch_object()) {
			$data[] = $testuser;
		}
		return $data;
	}

	public static function customers()
	{
		global $db, $tx;
		$result = $db->query("
            SELECT 
                u.id,
                u.email,
                u.name,
                u.phone,
                u.address,
                u.city,
                u.postal_code,
                u.country,
                r.name AS role,
                u.token,
                u.expiresAt
            FROM {$tx}test_users AS u
            LEFT JOIN {$tx}test_roles AS r
                ON u.role_id = r.id
            WHERE r.name = 'customer'
        ");

		$data = [];
		while ($testuser = $result->fetch_object()) {
			$data[] = $testuser;
		}
		return $data;
	}

	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("
            SELECT id, email, name, phone, address, city, postal_code, country, role_id, token, expiresAt 
            FROM {$tx}test_users 
            $criteria 
            LIMIT $top,$perpage
        ");
		$data = [];
		while ($testuser = $result->fetch_object()) {
			$data[] = $testuser;
		}
		return $data;
	}

	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("SELECT COUNT(*) FROM {$tx}test_users $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}

	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("
            SELECT id, email, name, phone, address, city, postal_code, country, role_id, token, expiresAt 
            FROM {$tx}test_users 
            WHERE id='$id'
        ");
		return $result->fetch_object();
	}
	// In TestUser.php
	public static function findByEmail($email)
	{
		global $db, $tx;
		$result = $db->query("SELECT * FROM {$tx}test_users WHERE email = '$email' LIMIT 1");
		$obj = $result->fetch_object();
		if (!$obj) return null;

		// Map stdClass to TestUser instance
		$user = new self();
		$user->id = $obj->id;
		$user->email = $obj->email;
		$user->name = $obj->name;
		$user->role_id = $obj->role_id;
		$user->password = $obj->password;
		$user->token = $obj->token;
		$user->expiresAt = $obj->expiresAt;
		$user->phone = $obj->phone ?? null;
		$user->address = $obj->address ?? null;
		$user->city = $obj->city ?? null;
		$user->postal_code = $obj->postal_code ?? null;
		$user->country = $obj->country ?? null;

		return $user;
	}



	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("SELECT MAX(id) AS last_id FROM {$tx}test_users");
		$testuser = $result->fetch_object();
		return $testuser->last_id;
	}
}

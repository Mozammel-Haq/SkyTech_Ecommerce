<?php
class Customer extends Model implements JsonSerializable
{
	public $id;
	public $name;
	public $email;
	public $phone;
	public $photo;
	public $address;
	public $status;
	public $created_at;
	public $updated_at;

	public function __construct() {}
	public function set($id, $name, $email, $phone, $photo, $address, $status, $created_at, $updated_at)
	{
		$this->id = $id;
		$this->name = $name;
		$this->email = $email;
		$this->phone = $phone;
		$this->photo = $photo;
		$this->address = $address;
		$this->status = $status;
		$this->created_at = $created_at;
		$this->updated_at = $updated_at;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}customers(name,email,phone,photo,address,status,created_at,updated_at)values('$this->name','$this->email','$this->phone','$this->photo','$this->address','$this->status','$this->created_at','$this->updated_at')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;
		$db->query("update {$tx}customers set name='$this->name',email='$this->email',phone='$this->phone',photo='$this->photo',address='$this->address',status='$this->status',created_at='$this->created_at',updated_at='$this->updated_at' where id='$this->id'");
	}
	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}customers where id={$id}");
	}
	public static function deleteMultiple($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}customers where id IN {$id}");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,name,email,phone,photo,address,status,created_at,updated_at from {$tx}customers");
		$data = [];
		while ($customer = $result->fetch_object()) {
			$data[] = $customer;
		}
		return $data;
	}
	public static function countTotalCustomer()
	{
		global $db, $tx;
		$result = $db->query("select count(id) as customers from {$tx}customers");
		$supplier = $result->fetch_object();
		return $supplier;
	}
	public static function calculateMonthlyCustomerComparison()
	{
		global $db, $tx;

		$currentMonth = date('m');
		$currentYear  = date('Y');

		$previousMonth = date('m', strtotime('-1 month'));
		$previousYear  = date('Y', strtotime('-1 month'));

		// Current month total customers
		$currentQuery = "SELECT COUNT(id) AS total FROM {$tx}customers 
                     WHERE MONTH(created_at) = '{$currentMonth}' 
                     AND YEAR(created_at) = '{$currentYear}'";
		$currentResult = $db->query($currentQuery)->fetch_object();
		$currentTotal = (int)($currentResult->total ?? 0);

		// Previous month total customers
		$previousQuery = "SELECT COUNT(id) AS total FROM {$tx}customers 
                      WHERE MONTH(created_at) = '{$previousMonth}' 
                      AND YEAR(created_at) = '{$previousYear}'";
		$previousResult = $db->query($previousQuery)->fetch_object();
		$previousTotal = (int)($previousResult->total ?? 0);

		// Percentage change
		$change = $previousTotal > 0
			? (($currentTotal - $previousTotal) / $previousTotal) * 100
			: 0;

		return (object)[
			'current' => $currentTotal,
			'previous' => $previousTotal,
			'change' => $change
		];
	}

	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,name,email,phone,photo,address,status,created_at,updated_at from {$tx}customers $criteria limit $top,$perpage");
		$data = [];
		while ($customer = $result->fetch_object()) {
			$data[] = $customer;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}customers $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db;
		$stmt = $db->query("select * from customers where id='$id' ;");
		$customer = $stmt->fetch_object();
		return $customer;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}customers");
		$customer = $result->fetch_object();
		return $customer->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}

	static function html_select($name = "cmbcustomer")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$html .= "<option value=''>Select $name</option>";
		$result = $db->query("select id,name from {$tx}customers");
		while ($customer = $result->fetch_object()) {
			$html .= "<option value ='$customer->id'>$customer->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
}

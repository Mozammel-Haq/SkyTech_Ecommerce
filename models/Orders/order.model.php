<?php
class Order extends Model implements JsonSerializable
{
	public $id;
	public $customer_id;
	public $quantity;
	public $order_date;
	public $status;
	public $tracking_id;
	public $total_amount;
	public $created_at;
	public $updated_at;
	public $delivery_date;
	public $shipping_address;
	public $paid_amount;
	public $discount;

	public function __construct() {}
	public function set($id, $customer_id, $quantity, $order_date, $status, $tracking_id, $total_amount, $created_at, $updated_at, $delivery_date, $shipping_address, $paid_amount, $discount)
	{
		$this->id = $id;
		$this->customer_id = $customer_id;
		$this->quantity = $quantity;
		$this->order_date = $order_date;
		$this->status = $status;
		$this->tracking_id = $tracking_id;
		$this->total_amount = $total_amount;
		$this->created_at = $created_at;
		$this->updated_at = $updated_at;
		$this->delivery_date = $delivery_date;
		$this->shipping_address = $shipping_address;
		$this->paid_amount = $paid_amount;
		$this->discount = $discount;
	}
	public function save()
	{
		global $db;
		$db->query("insert into orders(id,quantity,order_date,status,tracking_id,total_amount,created_at,updated_at,delivery_date,shipping_address,paid_amount,discount) values(null,'$this->quantity','$this->order_date','$this->status','$this->tracking_id','$this->total_amount','$this->created_at','$this->updated_at','$this->delivery_date','$this->shipping_address','$this->paid_amount','$this->discount')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;
		$db->query("update {$tx}orders set customer_id='$this->customer_id',quantity='$this->quantity',order_date='$this->order_date',status='$this->status',tracking_id='$this->tracking_id',total_amount='$this->total_amount',created_at='$this->created_at',updated_at='$this->updated_at',delivery_date='$this->delivery_date',shipping_address='$this->shipping_address',paid_amount='$this->paid_amount',discount='$this->discount' where id='$this->id'");
	}
	public static function delete($id)
	{
		global $db;
		$db->query("delete from orders where id={$id}");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("SELECT 
    o.id AS order_id,
    p.name AS product_name,
    od.quantity,
    pi.image_path,
    o.total_amount,
    o.status,
    t.name AS tracking,
    o.order_date
FROM orders AS o
JOIN order_details AS od ON o.id = od.order_id
JOIN products AS p ON od.product_id = p.id
LEFT JOIN trackings AS t ON t.id = o.tracking_id
LEFT JOIN (
    SELECT product_id, image_path
    FROM product_images
    WHERE is_main = 1
) AS pi ON p.id = pi.product_id
ORDER BY o.id, od.id;
");
		$data = [];
		while ($order = $result->fetch_object()) {
			$data[] = $order;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,customer_id,quantity,order_date,status,tracking_id,total_amount,created_at,updated_at,delivery_date,shipping_address,paid_amount,discount from {$tx}orders $criteria limit $top,$perpage");
		$data = [];
		while ($order = $result->fetch_object()) {
			$data[] = $order;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}orders $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select * from orders where id='$id'");
		$order = $result->fetch_object();
		return $order;
	}
	public static function findOrder($id)
	{
		global $db;
		$result = $db->query("SELECT 
		o.id AS order_id,
		o.quantity,
		o.total_amount,
		o.status,
		o.tracking_id,
		t.name AS tracking,
		o.order_date,
		p.name AS product_name,
		pi.image_path
		FROM orders AS o
		JOIN order_details AS od ON o.id = od.order_id
		JOIN products AS p ON od.product_id = p.id
		LEFT JOIN trackings AS t ON t.id = o.tracking_id
		LEFT JOIN product_images AS pi ON p.id = pi.product_id AND pi.is_main = 1
		WHERE o.id = $id ");

		return $result;
	}

	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}orders");
		$order = $result->fetch_object();
		return $order->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
}

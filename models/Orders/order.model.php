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
	public $billing_address;
	public $paid_amount;
	public $discount;

	public function __construct() {}
	public function set($id, $customer_id, $order_date, $status, $total_amount, $created_at, $updated_at, $delivery_date, $shipping_address, $billing_address, $paid_amount, $discount, $tracking_id)
	{
		$this->id = $id;
		$this->customer_id = $customer_id;
		$this->order_date = $order_date;
		$this->status = $status;
		$this->total_amount = $total_amount;
		$this->created_at = $created_at;
		$this->updated_at = $updated_at;
		$this->delivery_date = $delivery_date;
		$this->shipping_address = $shipping_address;
		$this->billing_address = $billing_address;
		$this->paid_amount = $paid_amount;
		$this->discount = $discount;
		$this->tracking_id = $tracking_id;
	}
	public function save()
	{
		global $db;
		$db->query("insert into orders(customer_id,order_date,status,total_amount,created_at,updated_at,delivery_date,shipping_address,billing_address,paid_amount,discount,tracking_id) values('$this->customer_id','$this->order_date','$this->status','$this->total_amount','$this->created_at','$this->updated_at','$this->delivery_date','$this->shipping_address','$this->billing_address','$this->paid_amount','$this->discount','$this->tracking_id')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;
		$db->query("update {$tx}orders set customer_id='$this->customer_id',order_date='$this->order_date',status='$this->status',tracking_id='$this->tracking_id',total_amount='$this->total_amount',created_at='$this->created_at',updated_at='$this->updated_at',delivery_date='$this->delivery_date',shipping_address='$this->shipping_address',paid_amount='$this->paid_amount',discount='$this->discount' where id='$this->id'");
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

		$result = $db->query("
        SELECT 
            o.id,
            c.name AS customer_name,
            o.total_amount,
            o.status,
            t.name AS tracking,
            o.order_date
        FROM orders AS o
        JOIN customers AS c ON o.customer_id = c.id
        LEFT JOIN trackings AS t ON t.id = o.tracking_id
        ORDER BY o.id DESC;
    ");

		$data = [];
		while ($order = $result->fetch_object()) {
			$data[] = $order;
		}
		return $data;
	}
	public static function findTopSales()
	{
		global $db, $tx;

		$result = $db->query("
        SELECT 
            o.id,
            c.name AS customer_name,
            o.total_amount,
            o.status,
            t.name AS tracking,
            o.order_date
        FROM orders AS o
        JOIN customers AS c ON o.customer_id = c.id
        LEFT JOIN trackings AS t ON t.id = o.tracking_id
        ORDER BY o.id DESC;
    ");

		$data = [];
		while ($order = $result->fetch_object()) {
			$data[] = $order;
		}
		return $data;
	}
	public static function countTotalOrders()
	{
		global $db, $tx;
		$result = $db->query("select count(id) as orders from {$tx}orders");
		$supplier = $result->fetch_object();
		return $supplier;
	}
	public static function calculateOrderAmount()
	{
		global $db, $tx;
		$result = $db->query("select sum(total_amount) as order_amount from {$tx}orders");
		$supplier = $result->fetch_object();
		return $supplier;
	}
	public static function getSalesAnalytics($period = 'monthly')
	{
		global $db;

		$whereClause = "";

		if ($period == 'yearly') {
			$selectDate = "DATE_FORMAT(order_date, '%Y') AS period";
			$groupBy = "DATE_FORMAT(order_date, '%Y')";
		} elseif ($period == 'weekly') {
			$currentYear = date('Y');
			$currentWeek = date('W');
			$whereClause = "WHERE YEAR(order_date) = '$currentYear' AND WEEK(order_date, 1) = '$currentWeek'";
			$selectDate = "DATE_FORMAT(order_date, '%Y-%m-%d') AS period";
			$groupBy = "DATE_FORMAT(order_date, '%Y-%m-%d')";
		} else { // monthly
			$selectDate = "DATE_FORMAT(order_date, '%Y-%m') AS period";
			$groupBy = "DATE_FORMAT(order_date, '%Y-%m')";
		}

		$sql = "
        SELECT 
            $selectDate,
            SUM(CASE WHEN status = 'paid' THEN total_amount ELSE 0 END) AS paid_total,
            SUM(CASE WHEN status = 'unpaid' THEN total_amount ELSE 0 END) AS pending_total
        FROM orders
        $whereClause
        GROUP BY $groupBy
        ORDER BY period ASC
    ";

		$result = $db->query($sql);
		$data = [];

		while ($row = $result->fetch_assoc()) {
			if ($period == 'monthly') {
				$label = date("M Y", strtotime($row['period']));
			} elseif ($period == 'yearly') {
				$label = $row['period']; // already just the year
			} elseif ($period == 'weekly') {
				$label = date("D", strtotime($row['period'])); // Mon, Tue, etc
			}

			$data[] = [
				'period' => $label,
				'paid' => (float)$row['paid_total'],
				'pending' => (float)$row['pending_total']
			];
		}

		// Fill missing days for weekly
		if ($period == 'weekly') {
			$weekDays = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
			$filledData = [];
			foreach ($weekDays as $day) {
				$found = false;
				foreach ($data as $d) {
					if ($d['period'] == $day) {
						$filledData[] = $d;
						$found = true;
						break;
					}
				}
				if (!$found) {
					$filledData[] = ['period' => $day, 'paid' => 0, 'pending' => 0];
				}
			}
			$data = $filledData;
		}

		return $data;
	}





	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,customer_id,order_date,status,tracking_id,total_amount,created_at,updated_at,delivery_date,shipping_address,paid_amount,discount from {$tx}orders $criteria limit $top,$perpage");
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

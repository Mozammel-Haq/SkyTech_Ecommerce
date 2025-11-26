<?php
class TestOrder extends Model implements JsonSerializable{
	public $id;
	public $order_number;
	public $user_id;
	public $status;
	public $placed_at;
	public $fulfilled_at;
	public $subtotal;
	public $shipping;
	public $tax;
	public $total;
	public $payment_method;
	public $shipping_name;
	public $shipping_line1;
	public $shipping_line2;
	public $shipping_city;
	public $shipping_state;
	public $shipping_postal_code;
	public $shipping_country;
	public $tracking_carrier;
	public $tracking_number;

	public function __construct(){
	}
	public function set($id,$order_number,$user_id,$status,$placed_at,$fulfilled_at,$subtotal,$shipping,$tax,$total,$payment_method,$shipping_name,$shipping_line1,$shipping_line2,$shipping_city,$shipping_state,$shipping_postal_code,$shipping_country,$tracking_carrier,$tracking_number){
		$this->id=$id;
		$this->order_number=$order_number;
		$this->user_id=$user_id;
		$this->status=$status;
		$this->placed_at=$placed_at;
		$this->fulfilled_at=$fulfilled_at;
		$this->subtotal=$subtotal;
		$this->shipping=$shipping;
		$this->tax=$tax;
		$this->total=$total;
		$this->payment_method=$payment_method;
		$this->shipping_name=$shipping_name;
		$this->shipping_line1=$shipping_line1;
		$this->shipping_line2=$shipping_line2;
		$this->shipping_city=$shipping_city;
		$this->shipping_state=$shipping_state;
		$this->shipping_postal_code=$shipping_postal_code;
		$this->shipping_country=$shipping_country;
		$this->tracking_carrier=$tracking_carrier;
		$this->tracking_number=$tracking_number;

	}
	public function save(){
		global $db,$tx;
		$db->query("insert into {$tx}test_orders(order_number,user_id,status,placed_at,fulfilled_at,subtotal,shipping,tax,total,payment_method,shipping_name,shipping_line1,shipping_line2,shipping_city,shipping_state,shipping_postal_code,shipping_country,tracking_carrier,tracking_number)values('$this->order_number','$this->user_id','$this->status','$this->placed_at','$this->fulfilled_at','$this->subtotal','$this->shipping','$this->tax','$this->total','$this->payment_method','$this->shipping_name','$this->shipping_line1','$this->shipping_line2','$this->shipping_city','$this->shipping_state','$this->shipping_postal_code','$this->shipping_country','$this->tracking_carrier','$this->tracking_number')");
		return $db->insert_id;
	}
	public function update(){
		global $db,$tx;
		$db->query("update {$tx}test_orders set order_number='$this->order_number',user_id='$this->user_id',status='$this->status',placed_at='$this->placed_at',fulfilled_at='$this->fulfilled_at',subtotal='$this->subtotal',shipping='$this->shipping',tax='$this->tax',total='$this->total',payment_method='$this->payment_method',shipping_name='$this->shipping_name',shipping_line1='$this->shipping_line1',shipping_line2='$this->shipping_line2',shipping_city='$this->shipping_city',shipping_state='$this->shipping_state',shipping_postal_code='$this->shipping_postal_code',shipping_country='$this->shipping_country',tracking_carrier='$this->tracking_carrier',tracking_number='$this->tracking_number' where id='$this->id'");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}test_orders where id={$id}");
	}
	public function jsonSerialize():mixed{
		return get_object_vars($this);
	}
	public static function all() {
    global $db;

    // 1) Fetch all orders
    $ordersRes = $db->query("SELECT * FROM test_orders");
    $orders = [];
    while ($o = $ordersRes->fetch_assoc()) {
        $orders[$o['id']] = [
            'id' => $o['id'],
            'orderNumber' => $o['order_number'],
            'userId' => $o['user_id'],
            'status' => $o['status'],
            'placedAt' => $o['placed_at'],
            'fulfilledAt' => $o['fulfilled_at'],
            'subtotal' => (float)$o['subtotal'],
            'shipping' => (float)$o['shipping'],
            'tax' => (float)$o['tax'],
            'total' => (float)$o['total'],
            'shippingAddress' => [
                'name' => $o['shipping_name'],
                'line1' => $o['shipping_line1'],
                'line2' => $o['shipping_line2'],
                'city' => $o['shipping_city'],
                'state' => $o['shipping_state'],
                'postalCode' => $o['shipping_postal_code'],
                'country' => $o['shipping_country'],
            ],
            'tracking' => [
                'carrier' => $o['tracking_carrier'],
                'trackingNumber' => $o['tracking_number'],
                'history' => [],
            ],
            'items' => [],
        ];
    }

    // 2) Fetch all order items
    $itemsRes = $db->query("SELECT * FROM test_orderdetails");
    while ($item = $itemsRes->fetch_assoc()) {
        $orders[$item['order_id']]['items'][] = [
            'id' => $item['product_id'],
            'title' => $item['title'],
            'quantity' => (int)$item['quantity'],
            'price' => (float)$item['price'],
        ];
    }

    // 3) Fetch tracking history
    $trackingRes = $db->query("SELECT * FROM test_order_tracking ORDER BY timestamp ASC");
    while ($track = $trackingRes->fetch_assoc()) {
        $orders[$track['order_id']]['tracking']['history'][] = [
            'status' => $track['status'],
            'timestamp' => $track['timestamp'],
        ];
    }

    // 4) Return as a numeric-indexed array
    return array_values($orders);
}

	public static function pagination($page=1,$perpage=10,$criteria=""){
		global $db,$tx;
		$top=($page-1)*$perpage;
		$result=$db->query("select id,order_number,user_id,status,placed_at,fulfilled_at,subtotal,shipping,tax,total,payment_method,shipping_name,shipping_line1,shipping_line2,shipping_city,shipping_state,shipping_postal_code,shipping_country,tracking_carrier,tracking_number from {$tx}test_orders $criteria limit $top,$perpage");
		$data=[];
		while($testorder=$result->fetch_object()){
			$data[]=$testorder;
		}
			return $data;
	}
	public static function count($criteria=""){
		global $db,$tx;
		$result =$db->query("select count(*) from {$tx}test_orders $criteria");
		list($count)=$result->fetch_row();
			return $count;
	}
	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,order_number,user_id,status,placed_at,fulfilled_at,subtotal,shipping,tax,total,payment_method,shipping_name,shipping_line1,shipping_line2,shipping_city,shipping_state,shipping_postal_code,shipping_country,tracking_carrier,tracking_number from {$tx}test_orders where id='$id'");
		$testorder=$result->fetch_object();
			return $testorder;
	}
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}test_orders");
		$testorder =$result->fetch_object();
		return $testorder->last_id;
	}
	public function json(){
		return json_encode($this);
	}
	public function __toString(){
		return "		Id:$this->id<br> 
		Order Number:$this->order_number<br> 
		User Id:$this->user_id<br> 
		Status:$this->status<br> 
		Placed At:$this->placed_at<br> 
		Fulfilled At:$this->fulfilled_at<br> 
		Subtotal:$this->subtotal<br> 
		Shipping:$this->shipping<br> 
		Tax:$this->tax<br> 
		Total:$this->total<br> 
		Payment Method:$this->payment_method<br> 
		Shipping Name:$this->shipping_name<br> 
		Shipping Line1:$this->shipping_line1<br> 
		Shipping Line2:$this->shipping_line2<br> 
		Shipping City:$this->shipping_city<br> 
		Shipping State:$this->shipping_state<br> 
		Shipping Postal Code:$this->shipping_postal_code<br> 
		Shipping Country:$this->shipping_country<br> 
		Tracking Carrier:$this->tracking_carrier<br> 
		Tracking Number:$this->tracking_number<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name="cmbTestOrder"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}test_orders");
		while($testorder=$result->fetch_object()){
			$html.="<option value ='$testorder->id'>$testorder->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx,$base_url;
		$count_result =$db->query("select count(*) total from {$tx}test_orders $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select id,order_number,user_id,status,placed_at,fulfilled_at,subtotal,shipping,tax,total,payment_method,shipping_name,shipping_line1,shipping_line2,shipping_city,shipping_state,shipping_postal_code,shipping_country,tracking_carrier,tracking_number from {$tx}test_orders $criteria limit $top,$perpage");
		$html="<table class='table'>";
			$html.="<tr><th colspan='3'>".Html::link(["class"=>"btn btn-success","route"=>"testorder/create","text"=>"New TestOrder"])."</th></tr>";
		if($action){
			$html.="<tr><th>Id</th><th>Order Number</th><th>User Id</th><th>Status</th><th>Placed At</th><th>Fulfilled At</th><th>Subtotal</th><th>Shipping</th><th>Tax</th><th>Total</th><th>Payment Method</th><th>Shipping Name</th><th>Shipping Line1</th><th>Shipping Line2</th><th>Shipping City</th><th>Shipping State</th><th>Shipping Postal Code</th><th>Shipping Country</th><th>Tracking Carrier</th><th>Tracking Number</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th>Order Number</th><th>User Id</th><th>Status</th><th>Placed At</th><th>Fulfilled At</th><th>Subtotal</th><th>Shipping</th><th>Tax</th><th>Total</th><th>Payment Method</th><th>Shipping Name</th><th>Shipping Line1</th><th>Shipping Line2</th><th>Shipping City</th><th>Shipping State</th><th>Shipping Postal Code</th><th>Shipping Country</th><th>Tracking Carrier</th><th>Tracking Number</th></tr>";
		}
		while($testorder=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons.= Event::button(["name"=>"show", "value"=>"Show", "class"=>"btn btn-info", "route"=>"testorder/show/$testorder->id"]);
				$action_buttons.= Event::button(["name"=>"edit", "value"=>"Edit", "class"=>"btn btn-primary", "route"=>"testorder/edit/$testorder->id"]);
				$action_buttons.= Event::button(["name"=>"delete", "value"=>"Delete", "class"=>"btn btn-danger", "route"=>"testorder/confirm/$testorder->id"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$testorder->id</td><td>$testorder->order_number</td><td>$testorder->user_id</td><td>$testorder->status</td><td>$testorder->placed_at</td><td>$testorder->fulfilled_at</td><td>$testorder->subtotal</td><td>$testorder->shipping</td><td>$testorder->tax</td><td>$testorder->total</td><td>$testorder->payment_method</td><td>$testorder->shipping_name</td><td>$testorder->shipping_line1</td><td>$testorder->shipping_line2</td><td>$testorder->shipping_city</td><td>$testorder->shipping_state</td><td>$testorder->shipping_postal_code</td><td>$testorder->shipping_country</td><td>$testorder->tracking_carrier</td><td>$testorder->tracking_number</td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx,$base_url;
		$result =$db->query("select id,order_number,user_id,status,placed_at,fulfilled_at,subtotal,shipping,tax,total,payment_method,shipping_name,shipping_line1,shipping_line2,shipping_city,shipping_state,shipping_postal_code,shipping_country,tracking_carrier,tracking_number from {$tx}test_orders where id={$id}");
		$testorder=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">TestOrder Show</th></tr>";
		$html.="<tr><th>Id</th><td>$testorder->id</td></tr>";
		$html.="<tr><th>Order Number</th><td>$testorder->order_number</td></tr>";
		$html.="<tr><th>User Id</th><td>$testorder->user_id</td></tr>";
		$html.="<tr><th>Status</th><td>$testorder->status</td></tr>";
		$html.="<tr><th>Placed At</th><td>$testorder->placed_at</td></tr>";
		$html.="<tr><th>Fulfilled At</th><td>$testorder->fulfilled_at</td></tr>";
		$html.="<tr><th>Subtotal</th><td>$testorder->subtotal</td></tr>";
		$html.="<tr><th>Shipping</th><td>$testorder->shipping</td></tr>";
		$html.="<tr><th>Tax</th><td>$testorder->tax</td></tr>";
		$html.="<tr><th>Total</th><td>$testorder->total</td></tr>";
		$html.="<tr><th>Payment Method</th><td>$testorder->payment_method</td></tr>";
		$html.="<tr><th>Shipping Name</th><td>$testorder->shipping_name</td></tr>";
		$html.="<tr><th>Shipping Line1</th><td>$testorder->shipping_line1</td></tr>";
		$html.="<tr><th>Shipping Line2</th><td>$testorder->shipping_line2</td></tr>";
		$html.="<tr><th>Shipping City</th><td>$testorder->shipping_city</td></tr>";
		$html.="<tr><th>Shipping State</th><td>$testorder->shipping_state</td></tr>";
		$html.="<tr><th>Shipping Postal Code</th><td>$testorder->shipping_postal_code</td></tr>";
		$html.="<tr><th>Shipping Country</th><td>$testorder->shipping_country</td></tr>";
		$html.="<tr><th>Tracking Carrier</th><td>$testorder->tracking_carrier</td></tr>";
		$html.="<tr><th>Tracking Number</th><td>$testorder->tracking_number</td></tr>";

		$html.="</table>";
		return $html;
	}
}
?>

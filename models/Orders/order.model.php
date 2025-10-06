<?php
class Order extends Model implements JsonSerializable{
	public $id;
	public $customer_id;
	public $order_date;
	public $status;
	public $total_amount;
	public $created_at;
	public $updated_at;
	public $delivery_date;
	public $shipping_address;
	public $paid_amount;
	public $discount;

	public function __construct(){
	}
	public function set($id,$customer_id,$order_date,$status,$total_amount,$created_at,$updated_at,$delivery_date,$shipping_address,$paid_amount,$discount){
		$this->id=$id;
		$this->customer_id=$customer_id;
		$this->order_date=$order_date;
		$this->status=$status;
		$this->total_amount=$total_amount;
		$this->created_at=$created_at;
		$this->updated_at=$updated_at;
		$this->delivery_date=$delivery_date;
		$this->shipping_address=$shipping_address;
		$this->paid_amount=$paid_amount;
		$this->discount=$discount;

	}
	public function save(){
		global $db,$tx;
		$db->query("insert into {$tx}orders(customer_id,order_date,status,total_amount,created_at,updated_at,delivery_date,shipping_address,paid_amount,discount)values('$this->customer_id','$this->order_date','$this->status','$this->total_amount','$this->created_at','$this->updated_at','$this->delivery_date','$this->shipping_address','$this->paid_amount','$this->discount')");
		return $db->insert_id;
	}
	public function update(){
		global $db,$tx;
		$db->query("update {$tx}orders set customer_id='$this->customer_id',order_date='$this->order_date',status='$this->status',total_amount='$this->total_amount',created_at='$this->created_at',updated_at='$this->updated_at',delivery_date='$this->delivery_date',shipping_address='$this->shipping_address',paid_amount='$this->paid_amount',discount='$this->discount' where id='$this->id'");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}orders where id={$id}");
	}
	public function jsonSerialize():mixed{
		return get_object_vars($this);
	}
	public static function all(){
		global $db,$tx;
		$result=$db->query("select id,customer_id,order_date,status,total_amount,created_at,updated_at,delivery_date,shipping_address,paid_amount,discount from {$tx}orders");
		$data=[];
		while($order=$result->fetch_object()){
			$data[]=$order;
		}
			return $data;
	}
	public static function pagination($page=1,$perpage=10,$criteria=""){
		global $db,$tx;
		$top=($page-1)*$perpage;
		$result=$db->query("select id,customer_id,order_date,status,total_amount,created_at,updated_at,delivery_date,shipping_address,paid_amount,discount from {$tx}orders $criteria limit $top,$perpage");
		$data=[];
		while($order=$result->fetch_object()){
			$data[]=$order;
		}
			return $data;
	}
	public static function count($criteria=""){
		global $db,$tx;
		$result =$db->query("select count(*) from {$tx}orders $criteria");
		list($count)=$result->fetch_row();
			return $count;
	}
	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,customer_id,order_date,status,total_amount,created_at,updated_at,delivery_date,shipping_address,paid_amount,discount from {$tx}orders where id='$id'");
		$order=$result->fetch_object();
			return $order;
	}
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}orders");
		$order =$result->fetch_object();
		return $order->last_id;
	}
	public function json(){
		return json_encode($this);
	}
	public function __toString(){
		return "		Id:$this->id<br> 
		Customer Id:$this->customer_id<br> 
		Order Date:$this->order_date<br> 
		Status:$this->status<br> 
		Total Amount:$this->total_amount<br> 
		Created At:$this->created_at<br> 
		Updated At:$this->updated_at<br> 
		Delivery Date:$this->delivery_date<br> 
		Shipping Address:$this->shipping_address<br> 
		Paid Amount:$this->paid_amount<br> 
		Discount:$this->discount<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name="cmbOrder"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}orders");
		while($order=$result->fetch_object()){
			$html.="<option value ='$order->id'>$order->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx,$base_url;
		$count_result =$db->query("select count(*) total from {$tx}orders $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select id,customer_id,order_date,status,total_amount,created_at,updated_at,delivery_date,shipping_address,paid_amount,discount from {$tx}orders $criteria limit $top,$perpage");
		$html="<table class='table'>";
			$html.="<tr><th colspan='3'>".Html::link(["class"=>"btn btn-success","route"=>"order/create","text"=>"New Order"])."</th></tr>";
		if($action){
			$html.="<tr><th>Id</th><th>Customer Id</th><th>Order Date</th><th>Status</th><th>Total Amount</th><th>Created At</th><th>Updated At</th><th>Delivery Date</th><th>Shipping Address</th><th>Paid Amount</th><th>Discount</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th>Customer Id</th><th>Order Date</th><th>Status</th><th>Total Amount</th><th>Created At</th><th>Updated At</th><th>Delivery Date</th><th>Shipping Address</th><th>Paid Amount</th><th>Discount</th></tr>";
		}
		while($order=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons.= Event::button(["name"=>"show", "value"=>"Show", "class"=>"btn btn-info", "route"=>"order/show/$order->id"]);
				$action_buttons.= Event::button(["name"=>"edit", "value"=>"Edit", "class"=>"btn btn-primary", "route"=>"order/edit/$order->id"]);
				$action_buttons.= Event::button(["name"=>"delete", "value"=>"Delete", "class"=>"btn btn-danger", "route"=>"order/confirm/$order->id"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$order->id</td><td>$order->customer_id</td><td>$order->order_date</td><td>$order->status</td><td>$order->total_amount</td><td>$order->created_at</td><td>$order->updated_at</td><td>$order->delivery_date</td><td>$order->shipping_address</td><td>$order->paid_amount</td><td>$order->discount</td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx,$base_url;
		$result =$db->query("select id,customer_id,order_date,status,total_amount,created_at,updated_at,delivery_date,shipping_address,paid_amount,discount from {$tx}orders where id={$id}");
		$order=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">Order Show</th></tr>";
		$html.="<tr><th>Id</th><td>$order->id</td></tr>";
		$html.="<tr><th>Customer Id</th><td>$order->customer_id</td></tr>";
		$html.="<tr><th>Order Date</th><td>$order->order_date</td></tr>";
		$html.="<tr><th>Status</th><td>$order->status</td></tr>";
		$html.="<tr><th>Total Amount</th><td>$order->total_amount</td></tr>";
		$html.="<tr><th>Created At</th><td>$order->created_at</td></tr>";
		$html.="<tr><th>Updated At</th><td>$order->updated_at</td></tr>";
		$html.="<tr><th>Delivery Date</th><td>$order->delivery_date</td></tr>";
		$html.="<tr><th>Shipping Address</th><td>$order->shipping_address</td></tr>";
		$html.="<tr><th>Paid Amount</th><td>$order->paid_amount</td></tr>";
		$html.="<tr><th>Discount</th><td>$order->discount</td></tr>";

		$html.="</table>";
		return $html;
	}
}
?>

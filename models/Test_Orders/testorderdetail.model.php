<?php
class TestOrderdetail extends Model implements JsonSerializable{
	public $id;
	public $order_id;
	public $product_id;
	public $title;
	public $quantity;
	public $price;

	public function __construct(){
	}
	public function set($id,$order_id,$product_id,$title,$quantity,$price){
		$this->id=$id;
		$this->order_id=$order_id;
		$this->product_id=$product_id;
		$this->title=$title;
		$this->quantity=$quantity;
		$this->price=$price;

	}
	public function save(){
		global $db,$tx;
		$db->query("insert into {$tx}test_orderdetails(order_id,product_id,title,quantity,price)values('$this->order_id','$this->product_id','$this->title','$this->quantity','$this->price')");
		return $db->insert_id;
	}
	public function update(){
		global $db,$tx;
		$db->query("update {$tx}test_orderdetails set order_id='$this->order_id',product_id='$this->product_id',title='$this->title',quantity='$this->quantity',price='$this->price' where id='$this->id'");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}test_orderdetails where id={$id}");
	}
	public function jsonSerialize(){
		return get_object_vars($this);
	}
	public static function all(){
		global $db,$tx;
		$result=$db->query("select id,order_id,product_id,title,quantity,price from {$tx}test_orderdetails");
		$data=[];
		while($testorderdetail=$result->fetch_object()){
			$data[]=$testorderdetail;
		}
			return $data;
	}
	public static function pagination($page=1,$perpage=10,$criteria=""){
		global $db,$tx;
		$top=($page-1)*$perpage;
		$result=$db->query("select id,order_id,product_id,title,quantity,price from {$tx}test_orderdetails $criteria limit $top,$perpage");
		$data=[];
		while($testorderdetail=$result->fetch_object()){
			$data[]=$testorderdetail;
		}
			return $data;
	}
	public static function count($criteria=""){
		global $db,$tx;
		$result =$db->query("select count(*) from {$tx}test_orderdetails $criteria");
		list($count)=$result->fetch_row();
			return $count;
	}
	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,order_id,product_id,title,quantity,price from {$tx}test_orderdetails where id='$id'");
		$testorderdetail=$result->fetch_object();
			return $testorderdetail;
	}
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}test_orderdetails");
		$testorderdetail =$result->fetch_object();
		return $testorderdetail->last_id;
	}
	public function json(){
		return json_encode($this);
	}
	public function __toString(){
		return "		Id:$this->id<br> 
		Order Id:$this->order_id<br> 
		Product Id:$this->product_id<br> 
		Title:$this->title<br> 
		Quantity:$this->quantity<br> 
		Price:$this->price<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name="cmbTestOrderdetail"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}test_orderdetails");
		while($testorderdetail=$result->fetch_object()){
			$html.="<option value ='$testorderdetail->id'>$testorderdetail->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx,$base_url;
		$count_result =$db->query("select count(*) total from {$tx}test_orderdetails $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select id,order_id,product_id,title,quantity,price from {$tx}test_orderdetails $criteria limit $top,$perpage");
		$html="<table class='table'>";
			$html.="<tr><th colspan='3'>".Html::link(["class"=>"btn btn-success","route"=>"testorderdetail/create","text"=>"New TestOrderdetail"])."</th></tr>";
		if($action){
			$html.="<tr><th>Id</th><th>Order Id</th><th>Product Id</th><th>Title</th><th>Quantity</th><th>Price</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th>Order Id</th><th>Product Id</th><th>Title</th><th>Quantity</th><th>Price</th></tr>";
		}
		while($testorderdetail=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons.= Event::button(["name"=>"show", "value"=>"Show", "class"=>"btn btn-info", "route"=>"testorderdetail/show/$testorderdetail->id"]);
				$action_buttons.= Event::button(["name"=>"edit", "value"=>"Edit", "class"=>"btn btn-primary", "route"=>"testorderdetail/edit/$testorderdetail->id"]);
				$action_buttons.= Event::button(["name"=>"delete", "value"=>"Delete", "class"=>"btn btn-danger", "route"=>"testorderdetail/confirm/$testorderdetail->id"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$testorderdetail->id</td><td>$testorderdetail->order_id</td><td>$testorderdetail->product_id</td><td>$testorderdetail->title</td><td>$testorderdetail->quantity</td><td>$testorderdetail->price</td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx,$base_url;
		$result =$db->query("select id,order_id,product_id,title,quantity,price from {$tx}test_orderdetails where id={$id}");
		$testorderdetail=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">TestOrderdetail Show</th></tr>";
		$html.="<tr><th>Id</th><td>$testorderdetail->id</td></tr>";
		$html.="<tr><th>Order Id</th><td>$testorderdetail->order_id</td></tr>";
		$html.="<tr><th>Product Id</th><td>$testorderdetail->product_id</td></tr>";
		$html.="<tr><th>Title</th><td>$testorderdetail->title</td></tr>";
		$html.="<tr><th>Quantity</th><td>$testorderdetail->quantity</td></tr>";
		$html.="<tr><th>Price</th><td>$testorderdetail->price</td></tr>";

		$html.="</table>";
		return $html;
	}
}
?>

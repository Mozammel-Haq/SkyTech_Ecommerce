<?php
class TestOrderTracking extends Model implements JsonSerializable{
	public $id;
	public $order_id;
	public $status;
	public $timestamp;

	public function __construct(){
	}
	public function set($id,$order_id,$status,$timestamp){
		$this->id=$id;
		$this->order_id=$order_id;
		$this->status=$status;
		$this->timestamp=$timestamp;

	}
	public function save(){
		global $db,$tx;
		$db->query("insert into {$tx}test_order_tracking(order_id,status,timestamp)values('$this->order_id','$this->status','$this->timestamp')");
		return $db->insert_id;
	}
	public function update(){
		global $db,$tx;
		$db->query("update {$tx}test_order_tracking set order_id='$this->order_id',status='$this->status',timestamp='$this->timestamp' where id='$this->id'");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}test_order_tracking where id={$id}");
	}
	public function jsonSerialize(){
		return get_object_vars($this);
	}
	public static function all(){
		global $db,$tx;
		$result=$db->query("select id,order_id,status,timestamp from {$tx}test_order_tracking");
		$data=[];
		while($testordertracking=$result->fetch_object()){
			$data[]=$testordertracking;
		}
			return $data;
	}
	public static function pagination($page=1,$perpage=10,$criteria=""){
		global $db,$tx;
		$top=($page-1)*$perpage;
		$result=$db->query("select id,order_id,status,timestamp from {$tx}test_order_tracking $criteria limit $top,$perpage");
		$data=[];
		while($testordertracking=$result->fetch_object()){
			$data[]=$testordertracking;
		}
			return $data;
	}
	public static function count($criteria=""){
		global $db,$tx;
		$result =$db->query("select count(*) from {$tx}test_order_tracking $criteria");
		list($count)=$result->fetch_row();
			return $count;
	}
	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,order_id,status,timestamp from {$tx}test_order_tracking where id='$id'");
		$testordertracking=$result->fetch_object();
			return $testordertracking;
	}
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}test_order_tracking");
		$testordertracking =$result->fetch_object();
		return $testordertracking->last_id;
	}
	public function json(){
		return json_encode($this);
	}
	public function __toString(){
		return "		Id:$this->id<br> 
		Order Id:$this->order_id<br> 
		Status:$this->status<br> 
		Timestamp:$this->timestamp<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name="cmbTestOrderTracking"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}test_order_tracking");
		while($testordertracking=$result->fetch_object()){
			$html.="<option value ='$testordertracking->id'>$testordertracking->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx,$base_url;
		$count_result =$db->query("select count(*) total from {$tx}test_order_tracking $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select id,order_id,status,timestamp from {$tx}test_order_tracking $criteria limit $top,$perpage");
		$html="<table class='table'>";
			$html.="<tr><th colspan='3'>".Html::link(["class"=>"btn btn-success","route"=>"testordertracking/create","text"=>"New TestOrderTracking"])."</th></tr>";
		if($action){
			$html.="<tr><th>Id</th><th>Order Id</th><th>Status</th><th>Timestamp</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th>Order Id</th><th>Status</th><th>Timestamp</th></tr>";
		}
		while($testordertracking=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons.= Event::button(["name"=>"show", "value"=>"Show", "class"=>"btn btn-info", "route"=>"testordertracking/show/$testordertracking->id"]);
				$action_buttons.= Event::button(["name"=>"edit", "value"=>"Edit", "class"=>"btn btn-primary", "route"=>"testordertracking/edit/$testordertracking->id"]);
				$action_buttons.= Event::button(["name"=>"delete", "value"=>"Delete", "class"=>"btn btn-danger", "route"=>"testordertracking/confirm/$testordertracking->id"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$testordertracking->id</td><td>$testordertracking->order_id</td><td>$testordertracking->status</td><td>$testordertracking->timestamp</td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx,$base_url;
		$result =$db->query("select id,order_id,status,timestamp from {$tx}test_order_tracking where id={$id}");
		$testordertracking=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">TestOrderTracking Show</th></tr>";
		$html.="<tr><th>Id</th><td>$testordertracking->id</td></tr>";
		$html.="<tr><th>Order Id</th><td>$testordertracking->order_id</td></tr>";
		$html.="<tr><th>Status</th><td>$testordertracking->status</td></tr>";
		$html.="<tr><th>Timestamp</th><td>$testordertracking->timestamp</td></tr>";

		$html.="</table>";
		return $html;
	}
}
?>

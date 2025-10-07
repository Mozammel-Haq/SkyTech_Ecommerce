<?php
class Warehouse extends Model implements JsonSerializable{
	public $id;
	public $name;
	public $location;
	public $created_at;
	public $updated_at;
	public $manager;
	public $email;
	public $phone;

	public function __construct(){
	}
	public function set($id,$name,$location,$created_at,$updated_at,$manager,$email,$phone){
		$this->id=$id;
		$this->name=$name;
		$this->location=$location;
		$this->created_at=$created_at;
		$this->updated_at=$updated_at;
		$this->manager=$manager;
		$this->email=$email;
		$this->phone=$phone;

	}
	public function save(){
		global $db,$tx;
		$db->query("insert into {$tx}warehouses(name,location,created_at,updated_at,manager,email,phone)values('$this->name','$this->location','$this->created_at','$this->updated_at','$this->manager','$this->email','$this->phone')");
		return $db->insert_id;
	}
	public function update(){
		global $db;
		$db->query("update warehouses set name='$this->name',location='$this->location',created_at='$this->created_at',updated_at='$this->updated_at',manager='$this->manager',email='$this->email',phone='$this->phone' where id=$this->id");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}warehouses where id={$id}");
	}
	public function jsonSerialize():mixed{
		return get_object_vars($this);
	}
	public static function all(){
		global $db,$tx;
		$result=$db->query("select id,name,location,created_at,updated_at,manager,email,phone from {$tx}warehouses");
		$data=[];
		while($warehouse=$result->fetch_object()){
			$data[]=$warehouse;
		}
			return $data;
	}
	public static function pagination($page=1,$perpage=10,$criteria=""){
		global $db,$tx;
		$top=($page-1)*$perpage;
		$result=$db->query("select id,name,location,created_at,updated_at,manager,email,phone from {$tx}warehouses $criteria limit $top,$perpage");
		$data=[];
		while($warehouse=$result->fetch_object()){
			$data[]=$warehouse;
		}
			return $data;
	}
	public static function count($criteria=""){
		global $db,$tx;
		$result =$db->query("select count(*) from {$tx}warehouses $criteria");
		list($count)=$result->fetch_row();
			return $count;
	}
	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,name,location,created_at,updated_at,manager,email,phone from {$tx}warehouses where id='$id'");
		$warehouse=$result->fetch_object();
			return $warehouse;
	}
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}warehouses");
		$warehouse =$result->fetch_object();
		return $warehouse->last_id;
	}
	public function json(){
		return json_encode($this);
	}
	public function __toString(){
		return "		Id:$this->id<br> 
		Name:$this->name<br> 
		Location:$this->location<br> 
		Created At:$this->created_at<br> 
		Updated At:$this->updated_at<br> 
		Manager:$this->manager<br> 
		Email:$this->email<br> 
		Phone:$this->phone<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name="cmbWarehouse"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}warehouses");
		while($warehouse=$result->fetch_object()){
			$html.="<option value ='$warehouse->id'>$warehouse->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx,$base_url;
		$count_result =$db->query("select count(*) total from {$tx}warehouses $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select id,name,location,created_at,updated_at,manager,email,phone from {$tx}warehouses $criteria limit $top,$perpage");
		$html="<table class='table'>";
			$html.="<tr><th colspan='3'>".Html::link(["class"=>"btn btn-success","route"=>"warehouse/create","text"=>"New Warehouse"])."</th></tr>";
		if($action){
			$html.="<tr><th>Id</th><th>Name</th><th>Location</th><th>Created At</th><th>Updated At</th><th>Manager</th><th>Email</th><th>Phone</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th>Name</th><th>Location</th><th>Created At</th><th>Updated At</th><th>Manager</th><th>Email</th><th>Phone</th></tr>";
		}
		while($warehouse=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons.= Event::button(["name"=>"show", "value"=>"Show", "class"=>"btn btn-info", "route"=>"warehouse/show/$warehouse->id"]);
				$action_buttons.= Event::button(["name"=>"edit", "value"=>"Edit", "class"=>"btn btn-primary", "route"=>"warehouse/edit/$warehouse->id"]);
				$action_buttons.= Event::button(["name"=>"delete", "value"=>"Delete", "class"=>"btn btn-danger", "route"=>"warehouse/confirm/$warehouse->id"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$warehouse->id</td><td>$warehouse->name</td><td>$warehouse->location</td><td>$warehouse->created_at</td><td>$warehouse->updated_at</td><td>$warehouse->manager</td><td>$warehouse->email</td><td>$warehouse->phone</td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx,$base_url;
		$result =$db->query("select id,name,location,created_at,updated_at,manager,email,phone from {$tx}warehouses where id={$id}");
		$warehouse=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">Warehouse Show</th></tr>";
		$html.="<tr><th>Id</th><td>$warehouse->id</td></tr>";
		$html.="<tr><th>Name</th><td>$warehouse->name</td></tr>";
		$html.="<tr><th>Location</th><td>$warehouse->location</td></tr>";
		$html.="<tr><th>Created At</th><td>$warehouse->created_at</td></tr>";
		$html.="<tr><th>Updated At</th><td>$warehouse->updated_at</td></tr>";
		$html.="<tr><th>Manager</th><td>$warehouse->manager</td></tr>";
		$html.="<tr><th>Email</th><td>$warehouse->email</td></tr>";
		$html.="<tr><th>Phone</th><td>$warehouse->phone</td></tr>";

		$html.="</table>";
		return $html;
	}
}
?>

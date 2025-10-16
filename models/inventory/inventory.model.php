<?php
class Inventory extends Model implements JsonSerializable{
	public $id;
	public $product_id;
	public $warehouse_id;
	public $supplier_id;
	public $quantity;
	public $created_at;
	public $updated_at;
	public $transaction_type_id;
	public $remarks;

	public function __construct(){
	}
	public function set($id,$product_id,$warehouse_id,$supplier_id,$quantity,$created_at,$updated_at,$transaction_type_id,$remarks){
		$this->id=$id;
		$this->product_id=$product_id;
		$this->warehouse_id=$warehouse_id;
		$this->supplier_id=$supplier_id;
		$this->quantity=$quantity;
		$this->created_at=$created_at;
		$this->updated_at=$updated_at;
		$this->transaction_type_id=$transaction_type_id;
		$this->remarks=$remarks;

	}
	public function save(){
		global $db,$tx;
		$db->query("insert into {$tx}inventory(product_id,warehouse_id,supplier_id,quantity,created_at,updated_at,transaction_type_id,remarks)values('$this->product_id','$this->warehouse_id','$this->supplier_id','$this->quantity','$this->created_at','$this->updated_at','$this->transaction_type_id','$this->remarks')");
		return $db->insert_id;
	}
	public function update(){
		global $db,$tx;
		$db->query("update {$tx}inventory set product_id='$this->product_id',warehouse_id='$this->warehouse_id',supplier_id='$this->supplier_id',quantity='$this->quantity',created_at='$this->created_at',updated_at='$this->updated_at',transaction_type_id='$this->transaction_type_id',remarks='$this->remarks' where id='$this->id'");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}inventory where id={$id}");
	}
	public function jsonSerialize():mixed{
		return get_object_vars($this);
	}
	public static function all(){
		global $db,$tx;
		$result=$db->query("select id,product_id,warehouse_id,supplier_id,quantity,created_at,updated_at,transaction_type_id,remarks from {$tx}inventory");
		$data=[];
		while($inventory=$result->fetch_object()){
			$data[]=$inventory;
		}
			return $data;
	}
	public static function getAllInventoy()
	{
		global $db;
		$stmt = $db->prepare("SELECT pi.image_path, p.name, p.sku as code, u.name, i.quantity  ");
	}
	public static function pagination($page=1,$perpage=10,$criteria=""){
		global $db,$tx;
		$top=($page-1)*$perpage;
		$result=$db->query("select id,product_id,warehouse_id,supplier_id,quantity,created_at,updated_at,transaction_type_id,remarks from {$tx}inventory $criteria limit $top,$perpage");
		$data=[];
		while($inventory=$result->fetch_object()){
			$data[]=$inventory;
		}
			return $data;
	}
	public static function count($criteria=""){
		global $db,$tx;
		$result =$db->query("select count(*) from {$tx}inventory $criteria");
		list($count)=$result->fetch_row();
			return $count;
	}
	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,product_id,warehouse_id,supplier_id,quantity,created_at,updated_at,transaction_type_id,remarks from {$tx}inventory where id='$id'");
		$inventory=$result->fetch_object();
			return $inventory;
	}
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}inventory");
		$inventory =$result->fetch_object();
		return $inventory->last_id;
	}
	public function json(){
		return json_encode($this);
	}
	public function __toString(){
		return "		Id:$this->id<br> 
		Product Id:$this->product_id<br> 
		Warehouse Id:$this->warehouse_id<br> 
		Supplier Id:$this->supplier_id<br> 
		Quantity:$this->quantity<br> 
		Created At:$this->created_at<br> 
		Updated At:$this->updated_at<br> 
		Transaction Type Id:$this->transaction_type_id<br> 
		Remarks:$this->remarks<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name="cmbInventory"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}inventory");
		while($inventory=$result->fetch_object()){
			$html.="<option value ='$inventory->id'>$inventory->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx,$base_url;
		$count_result =$db->query("select count(*) total from {$tx}inventory $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select id,product_id,warehouse_id,supplier_id,quantity,created_at,updated_at,transaction_type_id,remarks from {$tx}inventory $criteria limit $top,$perpage");
		$html="<table class='table'>";
			$html.="<tr><th colspan='3'>".Html::link(["class"=>"btn btn-success","route"=>"inventory/create","text"=>"New Inventory"])."</th></tr>";
		if($action){
			$html.="<tr><th>Id</th><th>Product Id</th><th>Warehouse Id</th><th>Supplier Id</th><th>Quantity</th><th>Created At</th><th>Updated At</th><th>Transaction Type Id</th><th>Remarks</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th>Product Id</th><th>Warehouse Id</th><th>Supplier Id</th><th>Quantity</th><th>Created At</th><th>Updated At</th><th>Transaction Type Id</th><th>Remarks</th></tr>";
		}
		while($inventory=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons.= Event::button(["name"=>"show", "value"=>"Show", "class"=>"btn btn-info", "route"=>"inventory/show/$inventory->id"]);
				$action_buttons.= Event::button(["name"=>"edit", "value"=>"Edit", "class"=>"btn btn-primary", "route"=>"inventory/edit/$inventory->id"]);
				$action_buttons.= Event::button(["name"=>"delete", "value"=>"Delete", "class"=>"btn btn-danger", "route"=>"inventory/confirm/$inventory->id"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$inventory->id</td><td>$inventory->product_id</td><td>$inventory->warehouse_id</td><td>$inventory->supplier_id</td><td>$inventory->quantity</td><td>$inventory->created_at</td><td>$inventory->updated_at</td><td>$inventory->transaction_type_id</td><td>$inventory->remarks</td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx,$base_url;
		$result =$db->query("select id,product_id,warehouse_id,supplier_id,quantity,created_at,updated_at,transaction_type_id,remarks from {$tx}inventory where id={$id}");
		$inventory=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">Inventory Show</th></tr>";
		$html.="<tr><th>Id</th><td>$inventory->id</td></tr>";
		$html.="<tr><th>Product Id</th><td>$inventory->product_id</td></tr>";
		$html.="<tr><th>Warehouse Id</th><td>$inventory->warehouse_id</td></tr>";
		$html.="<tr><th>Supplier Id</th><td>$inventory->supplier_id</td></tr>";
		$html.="<tr><th>Quantity</th><td>$inventory->quantity</td></tr>";
		$html.="<tr><th>Created At</th><td>$inventory->created_at</td></tr>";
		$html.="<tr><th>Updated At</th><td>$inventory->updated_at</td></tr>";
		$html.="<tr><th>Transaction Type Id</th><td>$inventory->transaction_type_id</td></tr>";
		$html.="<tr><th>Remarks</th><td>$inventory->remarks</td></tr>";

		$html.="</table>";
		return $html;
	}
}
?>

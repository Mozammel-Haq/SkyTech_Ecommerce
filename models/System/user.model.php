<?php
class User extends Model implements JsonSerializable{
	public $id;
	public $name;
	public $username;
	public $email;
	public $phone;
	public $password;
	public $photo;
	public $role_id;
	public $status;
	public $created_at;
	public $updated_at;

	public function __construct(){
	}
	public function set($id,$name,$username,$email, $phone,$password,$photo,$role_id,$status,$created_at,$updated_at){
		$this->id=$id;
		$this->name=$name;
		$this->username=$username;
		$this->email=$email;
		$this->phone=$phone;
		$this->password=$password;
		$this->photo=$photo;
		$this->role_id=$role_id;
		$this->status=$status;
		$this->created_at=$created_at;
		$this->updated_at=$updated_at;

	}
	public function save(){
		global $db,$tx;
		$db->query("insert into {$tx}users(name,username,email,phone,password,photo,role_id,status,created_at,updated_at)values('$this->name','$this->username','$this->email','$this->phone','$this->password','$this->photo','$this->role_id','$this->status','$this->created_at','$this->updated_at')");
		return $db->insert_id;
	}
	public function update(){
		global $db,$tx;
		$db->query("update {$tx}users set name='$this->name',username='$this->username',email='$this->email',phone='$this->phone',password='$this->password',photo='$this->photo',role_id='$this->role_id',status='$this->status',created_at='$this->created_at',updated_at='$this->updated_at' where id='$this->id'");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}users where id={$id}");
	}
	public function jsonSerialize():mixed{
		return get_object_vars($this);
	}
	public static function all(){
		global $db,$tx;
		$result=$db->query("select id,name,username,email,phone,password,photo,role_id,status,created_at,updated_at from {$tx}users");
		$data=[];
		while($user=$result->fetch_object()){
			$data[]=$user;
		}
			return $data;
	}

	public static function count($criteria=""){
		global $db,$tx;
		$result =$db->query("select count(*) from {$tx}users $criteria");
		list($count)=$result->fetch_row();
			return $count;
	}
	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,name,username,email,phone,password,photo,role_id,status,created_at,updated_at from {$tx}users where id='$id'");
		$user=$result->fetch_object();
			return $user;
	}
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}users");
		$user =$result->fetch_object();
		return $user->last_id;
	}
	public function json(){
		return json_encode($this);
	}


	//-------------HTML----------//

	static function html_select($name="cmbUser"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}users");
		while($user=$result->fetch_object()){
			$html.="<option value ='$user->id'>$user->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx,$base_url;
		$count_result =$db->query("select count(*) total from {$tx}users $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select id,name,username,email,password,photo,role_id,status,created_at,updated_at from {$tx}users $criteria limit $top,$perpage");
		$html="<table class='table'>";
			$html.="<tr><th colspan='3'>".Html::link(["class"=>"btn btn-success","route"=>"user/create","text"=>"New User"])."</th></tr>";
		if($action){
			$html.="<tr><th>Id</th><th>Name</th><th>Username</th><th>Email</th><th>Password</th><th>Photo</th><th>Role Id</th><th>Status</th><th>Created At</th><th>Updated At</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th>Name</th><th>Username</th><th>Email</th><th>Password</th><th>Photo</th><th>Role Id</th><th>Status</th><th>Created At</th><th>Updated At</th></tr>";
		}
		while($user=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons.= Event::button(["name"=>"show", "value"=>"Show", "class"=>"btn btn-info", "route"=>"user/show/$user->id"]);
				$action_buttons.= Event::button(["name"=>"edit", "value"=>"Edit", "class"=>"btn btn-primary", "route"=>"user/edit/$user->id"]);
				$action_buttons.= Event::button(["name"=>"delete", "value"=>"Delete", "class"=>"btn btn-danger", "route"=>"user/confirm/$user->id"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$user->id</td><td>$user->name</td><td>$user->username</td><td>$user->email</td><td>$user->password</td><td><img src='$base_url/img/$user->photo' width='100' /></td><td>$user->role_id</td><td>$user->status</td><td>$user->created_at</td><td>$user->updated_at</td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx,$base_url;
		$result =$db->query("select id,name,username,email,password,photo,role_id,status,created_at,updated_at from {$tx}users where id={$id}");
		$user=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">User Show</th></tr>";
		$html.="<tr><th>Id</th><td>$user->id</td></tr>";
		$html.="<tr><th>Name</th><td>$user->name</td></tr>";
		$html.="<tr><th>Username</th><td>$user->username</td></tr>";
		$html.="<tr><th>Email</th><td>$user->email</td></tr>";
		$html.="<tr><th>Password</th><td>$user->password</td></tr>";
		$html.="<tr><th>Photo</th><td><img src='$base_url/img/$user->photo' width='100' /></td></tr>";
		$html.="<tr><th>Role Id</th><td>$user->role_id</td></tr>";
		$html.="<tr><th>Status</th><td>$user->status</td></tr>";
		$html.="<tr><th>Created At</th><td>$user->created_at</td></tr>";
		$html.="<tr><th>Updated At</th><td>$user->updated_at</td></tr>";

		$html.="</table>";
		return $html;
	}
}
?>

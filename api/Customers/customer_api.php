<?php
class CustomerApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["customers"=>Customer::all()]);
	}
	function pagination($data){
		$page=$data["page"];
		$perpage=$data["perpage"];
		echo json_encode(["customers"=>Customer::pagination($page,$perpage),"total_records"=>Customer::count()]);
	}
	function find($data){
		echo json_encode(Customer::find($data["id"]));
	}
	function delete($data){
		Customer::delete($data["id"]);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$customer=new Customer();
		$customer->name=$data["name"];
		$customer->email=$data["email"];
		$customer->phone=$data["phone"];
		$customer->photo=upload($file["photo"], "../img",$data["name"]);
		$customer->address=$data["address"];
		$customer->status=$data["status"];
		$customer->created_at=$data["created_at"];
		$customer->updated_at=$data["updated_at"];

		$customer->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$customer=new Customer();
		$customer->id=$data["id"];
		$customer->name=$data["name"];
		$customer->email=$data["email"];
		$customer->phone=$data["phone"];
		if(isset($file["photo"]["name"])){
			$customer->photo=upload($file["photo"], "../img",$data["name"]);
		}else{
			$customer->photo=Customer::find($data["id"])->photo;
		}
		$customer->address=$data["address"];
		$customer->status=$data["status"];
		$customer->created_at=$data["created_at"];
		$customer->updated_at=$data["updated_at"];

		$customer->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>

<?php
class SupplierController extends Controller{
	public function __construct(){
	}
	public function index(){
		$data = Supplier::all();
		view("Suppliers", $data);
	}
	public function create(){
		
		view("Suppliers");
	}
public function save($data,$file){
	if(isset($data["create"])){
		global $global;
		$supplier=new Supplier();
		$supplier->name=$data["name"];
		$supplier->contact_person=$data["contact_person"];
		$supplier->phone=$data["phone"];
		$supplier->email=$data["email"];
		$supplier->created_at=$now;
		$supplier->updated_at=$now;

		$supplier->save();
		redirect("");
		
	}
}
public function edit($id){
		view("Suppliers",Supplier::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){

		$supplier=new Supplier();
		$supplier->id=$data["id"];
		$supplier->name=$data["name"];
		$supplier->contact_person=$data["contact_person"];
		$supplier->phone=$data["phone"];
		$supplier->email=$data["email"];
		$supplier->created_at=$now;
		$supplier->updated_at=$now;

		$supplier->update();
		redirect("");
		
	}
}
	public function confirm($id){
		view("Suppliers");
	}
	public function delete($id){
		Supplier::delete($id);
		redirect("");
	}
	public function show($id){
		view("Suppliers",Supplier::find($id));
	}
}
?>

<?php
class TestProductBrand extends Model implements JsonSerializable
{
	public $id;
	public $name;
	public $logo;
	public $description;
	public $featured;
	public $founded;
	public $origin;

	public function __construct() {}
	public function set($id, $name, $logo, $description, $featured, $founded, $origin)
	{
		$this->id = $id;
		$this->name = $name;
		$this->logo = $logo;
		$this->description = $description;
		$this->featured = $featured;
		$this->founded = $founded;
		$this->origin = $origin;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}test_product_brands(name,logo,description,featured,founded,origin)values('$this->name','$this->logo','$this->description','$this->featured','$this->founded','$this->origin')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;
		$db->query("update {$tx}test_product_brands set name='$this->name',logo='$this->logo',description='$this->description',featured='$this->featured',founded='$this->founded',origin='$this->origin' where id='$this->id'");
	}
	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}test_product_brands where id={$id}");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,name,logo,description,featured,founded,origin from {$tx}test_product_brands");
		$data = [];
		while ($testproductbrand = $result->fetch_object()) {
			$data[] = $testproductbrand;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,name,logo,description,featured,founded,origin from {$tx}test_product_brands $criteria limit $top,$perpage");
		$data = [];
		while ($testproductbrand = $result->fetch_object()) {
			$data[] = $testproductbrand;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}test_product_brands $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,name,logo,description,featured,founded,origin from {$tx}test_product_brands where id='$id'");
		$testproductbrand = $result->fetch_object();
		return $testproductbrand;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}test_product_brands");
		$testproductbrand = $result->fetch_object();
		return $testproductbrand->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Name:$this->name<br> 
		Logo:$this->logo<br> 
		Description:$this->description<br> 
		Featured:$this->featured<br> 
		Founded:$this->founded<br> 
		Origin:$this->origin<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbTestProductBrand")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}test_product_brands");
		while ($testproductbrand = $result->fetch_object()) {
			$html .= "<option value ='$testproductbrand->id'>$testproductbrand->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}test_product_brands $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,name,logo,description,featured,founded,origin from {$tx}test_product_brands $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "testproductbrand/create", "text" => "New TestProductBrand"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Name</th><th>Logo</th><th>Description</th><th>Featured</th><th>Founded</th><th>Origin</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Name</th><th>Logo</th><th>Description</th><th>Featured</th><th>Founded</th><th>Origin</th></tr>";
		}
		while ($testproductbrand = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "testproductbrand/show/$testproductbrand->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "testproductbrand/edit/$testproductbrand->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "testproductbrand/confirm/$testproductbrand->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$testproductbrand->id</td><td>$testproductbrand->name</td><td>$testproductbrand->logo</td><td>$testproductbrand->description</td><td>$testproductbrand->featured</td><td>$testproductbrand->founded</td><td>$testproductbrand->origin</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,name,logo,description,featured,founded,origin from {$tx}test_product_brands where id={$id}");
		$testproductbrand = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">TestProductBrand Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$testproductbrand->id</td></tr>";
		$html .= "<tr><th>Name</th><td>$testproductbrand->name</td></tr>";
		$html .= "<tr><th>Logo</th><td>$testproductbrand->logo</td></tr>";
		$html .= "<tr><th>Description</th><td>$testproductbrand->description</td></tr>";
		$html .= "<tr><th>Featured</th><td>$testproductbrand->featured</td></tr>";
		$html .= "<tr><th>Founded</th><td>$testproductbrand->founded</td></tr>";
		$html .= "<tr><th>Origin</th><td>$testproductbrand->origin</td></tr>";

		$html .= "</table>";
		return $html;
	}
}

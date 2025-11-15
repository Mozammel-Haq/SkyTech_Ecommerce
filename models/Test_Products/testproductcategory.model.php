<?php
class TestProductCategory extends Model implements JsonSerializable
{
	public $id;
	public $name;
	public $slug;
	public $description;
	public $image;
	public $heroColor;

	public function __construct() {}
	public function set($id, $name, $slug, $description, $image, $heroColor)
	{
		$this->id = $id;
		$this->name = $name;
		$this->slug = $slug;
		$this->description = $description;
		$this->image = $image;
		$this->heroColor = $heroColor;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}test_product_categories(name,slug,description,image,heroColor)values('$this->name','$this->slug','$this->description','$this->image','$this->heroColor')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;
		$db->query("update {$tx}test_product_categories set name='$this->name',slug='$this->slug',description='$this->description',image='$this->image',heroColor='$this->heroColor' where id='$this->id'");
	}
	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}test_product_categories where id={$id}");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,name,slug,description,image,heroColor from {$tx}test_product_categories");
		$data = [];
		while ($testproductcategory = $result->fetch_object()) {
			$data[] = $testproductcategory;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,name,slug,description,image,heroColor from {$tx}test_product_categories $criteria limit $top,$perpage");
		$data = [];
		while ($testproductcategory = $result->fetch_object()) {
			$data[] = $testproductcategory;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}test_product_categories $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,name,slug,description,image,heroColor from {$tx}test_product_categories where id='$id'");
		$testproductcategory = $result->fetch_object();
		return $testproductcategory;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}test_product_categories");
		$testproductcategory = $result->fetch_object();
		return $testproductcategory->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Name:$this->name<br> 
		Slug:$this->slug<br> 
		Description:$this->description<br> 
		Image:$this->image<br> 
		Herocolor:$this->heroColor<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbTestProductCategory")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}test_product_categories");
		while ($testproductcategory = $result->fetch_object()) {
			$html .= "<option value ='$testproductcategory->id'>$testproductcategory->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}test_product_categories $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,name,slug,description,image,heroColor from {$tx}test_product_categories $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "testproductcategory/create", "text" => "New TestProductCategory"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Name</th><th>Slug</th><th>Description</th><th>Image</th><th>Herocolor</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Name</th><th>Slug</th><th>Description</th><th>Image</th><th>Herocolor</th></tr>";
		}
		while ($testproductcategory = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "testproductcategory/show/$testproductcategory->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "testproductcategory/edit/$testproductcategory->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "testproductcategory/confirm/$testproductcategory->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$testproductcategory->id</td><td>$testproductcategory->name</td><td>$testproductcategory->slug</td><td>$testproductcategory->description</td><td>$testproductcategory->image</td><td>$testproductcategory->heroColor</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,name,slug,description,image,heroColor from {$tx}test_product_categories where id={$id}");
		$testproductcategory = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">TestProductCategory Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$testproductcategory->id</td></tr>";
		$html .= "<tr><th>Name</th><td>$testproductcategory->name</td></tr>";
		$html .= "<tr><th>Slug</th><td>$testproductcategory->slug</td></tr>";
		$html .= "<tr><th>Description</th><td>$testproductcategory->description</td></tr>";
		$html .= "<tr><th>Image</th><td>$testproductcategory->image</td></tr>";
		$html .= "<tr><th>Herocolor</th><td>$testproductcategory->heroColor</td></tr>";

		$html .= "</table>";
		return $html;
	}
}

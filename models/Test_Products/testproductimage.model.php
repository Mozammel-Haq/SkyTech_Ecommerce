<?php
class TestProductImage extends Model implements JsonSerializable
{
	public $id;
	public $product_id;
	public $image_path;
	public $is_main;
	public $created_at;

	public function __construct() {}
	public function set($id, $product_id, $image_path, $is_main, $created_at)
	{
		$this->id = $id;
		$this->product_id = $product_id;
		$this->image_path = $image_path;
		$this->is_main = $is_main;
		$this->created_at = $created_at;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}test_product_images(product_id,image_path,is_main,created_at)values('$this->product_id','$this->image_path','$this->is_main','$this->created_at')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;

		if (!empty($this->id)) {
			// UPDATE single row
			$stmt = "UPDATE {$tx}test_product_images SET
                    product_id      = '$this->product_id',
                    image_path      = '$this->image_path',
                    is_main         = '$this->is_main',
                    created_at      = '$this->created_at'
                 WHERE id = '$this->id'";   // <------ Correct
		} else {
			// INSERT new row
			$stmt = "INSERT INTO {$tx}test_product_images 
                    (product_id, image_path, is_main, created_at)
                 VALUES
                    ('$this->product_id', '$this->image_path', '$this->is_main', '$this->created_at')";
		}

		return $db->query($stmt);
	}

	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}test_product_images where product_id=$id");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,product_id,image_path,is_main,created_at from {$tx}test_product_images");
		$data = [];
		while ($testproductimage = $result->fetch_object()) {
			$data[] = $testproductimage;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,product_id,image_path,is_main,created_at from {$tx}test_product_images $criteria limit $top,$perpage");
		$data = [];
		while ($testproductimage = $result->fetch_object()) {
			$data[] = $testproductimage;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}test_product_images $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,product_id,image_path,is_main,created_at from {$tx}test_product_images where id='$id'");
		$testproductimage = $result->fetch_object();
		return $testproductimage;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}test_product_images");
		$testproductimage = $result->fetch_object();
		return $testproductimage->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Product Id:$this->product_id<br> 
		Image Path:$this->image_path<br> 
		Is Main:$this->is_main<br> 
		Created At:$this->created_at<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbTestProductImage")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}test_product_images");
		while ($testproductimage = $result->fetch_object()) {
			$html .= "<option value ='$testproductimage->id'>$testproductimage->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}test_product_images $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,product_id,image_path,is_main,created_at from {$tx}test_product_images $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "testproductimage/create", "text" => "New TestProductImage"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Product Id</th><th>Image Path</th><th>Is Main</th><th>Created At</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Product Id</th><th>Image Path</th><th>Is Main</th><th>Created At</th></tr>";
		}
		while ($testproductimage = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "testproductimage/show/$testproductimage->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "testproductimage/edit/$testproductimage->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "testproductimage/confirm/$testproductimage->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$testproductimage->id</td><td>$testproductimage->product_id</td><td>$testproductimage->image_path</td><td>$testproductimage->is_main</td><td>$testproductimage->created_at</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,product_id,image_path,is_main,created_at from {$tx}test_product_images where id={$id}");
		$testproductimage = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">TestProductImage Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$testproductimage->id</td></tr>";
		$html .= "<tr><th>Product Id</th><td>$testproductimage->product_id</td></tr>";
		$html .= "<tr><th>Image Path</th><td>$testproductimage->image_path</td></tr>";
		$html .= "<tr><th>Is Main</th><td>$testproductimage->is_main</td></tr>";
		$html .= "<tr><th>Created At</th><td>$testproductimage->created_at</td></tr>";

		$html .= "</table>";
		return $html;
	}
}

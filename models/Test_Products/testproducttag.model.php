<?php
class TestProductTag extends Model implements JsonSerializable
{
	public $id;
	public $product_id;
	public $tag;

	public function __construct() {}
	public function set($id, $product_id, $tag)
	{
		$this->id = $id;
		$this->product_id = $product_id;
		$this->tag = $tag;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}test_product_tags(product_id,tag)values('$this->product_id','$this->tag')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;

		if (!empty($this->id) && is_numeric($this->id)) {
			// UPDATE existing tag
			$query = "
            UPDATE {$tx}test_product_tags SET
                tag        = '{$this->tag}',
                product_id = '{$this->product_id}'
            WHERE id = '{$this->id}'
        ";
		} else {
			// INSERT new tag
			$query = "
            INSERT INTO {$tx}test_product_tags
                (product_id, tag)
            VALUES
                ('{$this->product_id}', '{$this->tag}')
        ";
		}

		return $db->query($query);
	}

	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}test_product_tags where product_id=$id");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,product_id,tag from {$tx}test_product_tags");
		$data = [];
		while ($testproducttag = $result->fetch_object()) {
			$data[] = $testproducttag;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,product_id,tag from {$tx}test_product_tags $criteria limit $top,$perpage");
		$data = [];
		while ($testproducttag = $result->fetch_object()) {
			$data[] = $testproducttag;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}test_product_tags $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,product_id,tag from {$tx}test_product_tags where id='$id'");
		$testproducttag = $result->fetch_object();
		return $testproducttag;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}test_product_tags");
		$testproducttag = $result->fetch_object();
		return $testproducttag->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Product Id:$this->product_id<br> 
		Tag:$this->tag<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbTestProductTag")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}test_product_tags");
		while ($testproducttag = $result->fetch_object()) {
			$html .= "<option value ='$testproducttag->id'>$testproducttag->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}test_product_tags $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,product_id,tag from {$tx}test_product_tags $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "testproducttag/create", "text" => "New TestProductTag"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Product Id</th><th>Tag</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Product Id</th><th>Tag</th></tr>";
		}
		while ($testproducttag = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "testproducttag/show/$testproducttag->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "testproducttag/edit/$testproducttag->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "testproducttag/confirm/$testproducttag->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$testproducttag->id</td><td>$testproducttag->product_id</td><td>$testproducttag->tag</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,product_id,tag from {$tx}test_product_tags where id={$id}");
		$testproducttag = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">TestProductTag Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$testproducttag->id</td></tr>";
		$html .= "<tr><th>Product Id</th><td>$testproducttag->product_id</td></tr>";
		$html .= "<tr><th>Tag</th><td>$testproducttag->tag</td></tr>";

		$html .= "</table>";
		return $html;
	}
}

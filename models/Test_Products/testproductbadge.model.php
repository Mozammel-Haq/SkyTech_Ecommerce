<?php
class TestProductBadge extends Model implements JsonSerializable
{
	public $id;
	public $product_id;
	public $badge;

	public function __construct() {}
	public function set($id, $product_id, $badge)
	{
		$this->id = $id;
		$this->product_id = $product_id;
		$this->badge = $badge;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}test_product_badges(product_id,badge)values('$this->product_id','$this->badge')");
		return $db->insert_id;
	}
	public function update($productID)
	{
		$str = $productID;
		$productID = substr($str, 2);
		global $db, $tx;
		$db->query("update {$tx}test_product_badges set product_id='$this->product_id',badge='$this->badge' where product_id='$this->id' AND id=$productID");
	}
	public static function delete($id)
	{
		$str = $id;
		$productID = substr($str, 2);
		global $db, $tx;
		$db->query("delete from {$tx}test_product_badges where id={$productID}");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,product_id,badge from {$tx}test_product_badges");
		$data = [];
		while ($testproductbadge = $result->fetch_object()) {
			$data[] = $testproductbadge;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,product_id,badge from {$tx}test_product_badges $criteria limit $top,$perpage");
		$data = [];
		while ($testproductbadge = $result->fetch_object()) {
			$data[] = $testproductbadge;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}test_product_badges $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,product_id,badge from {$tx}test_product_badges where id='$id'");
		$testproductbadge = $result->fetch_object();
		return $testproductbadge;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}test_product_badges");
		$testproductbadge = $result->fetch_object();
		return $testproductbadge->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Product Id:$this->product_id<br> 
		Badge:$this->badge<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbTestProductBadge")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}test_product_badges");
		while ($testproductbadge = $result->fetch_object()) {
			$html .= "<option value ='$testproductbadge->id'>$testproductbadge->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}test_product_badges $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,product_id,badge from {$tx}test_product_badges $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "testproductbadge/create", "text" => "New TestProductBadge"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Product Id</th><th>Badge</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Product Id</th><th>Badge</th></tr>";
		}
		while ($testproductbadge = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "testproductbadge/show/$testproductbadge->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "testproductbadge/edit/$testproductbadge->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "testproductbadge/confirm/$testproductbadge->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$testproductbadge->id</td><td>$testproductbadge->product_id</td><td>$testproductbadge->badge</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,product_id,badge from {$tx}test_product_badges where id={$id}");
		$testproductbadge = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">TestProductBadge Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$testproductbadge->id</td></tr>";
		$html .= "<tr><th>Product Id</th><td>$testproductbadge->product_id</td></tr>";
		$html .= "<tr><th>Badge</th><td>$testproductbadge->badge</td></tr>";

		$html .= "</table>";
		return $html;
	}
}

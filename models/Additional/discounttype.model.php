<?php
class DiscountType extends Model implements JsonSerializable
{
	public $id;
	public $name;

	public function __construct() {}
	public function set($id, $name)
	{
		$this->id = $id;
		$this->name = $name;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}discount_types(name)values('$this->name')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;
		$db->query("update {$tx}discount_types set name='$this->name' where id='$this->id'");
	}
	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}discount_types where id={$id}");
	}
	public function jsonSerialize()
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,name from {$tx}discount_types");
		$data = [];
		while ($discounttype = $result->fetch_object()) {
			$data[] = $discounttype;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,name from {$tx}discount_types $criteria limit $top,$perpage");
		$data = [];
		while ($discounttype = $result->fetch_object()) {
			$data[] = $discounttype;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}discount_types $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,name from {$tx}discount_types where id='$id'");
		$discounttype = $result->fetch_object();
		return $discounttype;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}discount_types");
		$discounttype = $result->fetch_object();
		return $discounttype->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Name:$this->name<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbDiscountType")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name' class='select'> ";
		$html .= "<option value=''>Select $name</option>";
		$result = $db->query("select id,name from {$tx}discount_types");
		while ($discounttype = $result->fetch_object()) {
			$html .= "<option value ='$discounttype->id'>$discounttype->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}discount_types $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,name from {$tx}discount_types $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "discounttype/create", "text" => "New DiscountType"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Name</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Name</th></tr>";
		}
		while ($discounttype = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "discounttype/show/$discounttype->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "discounttype/edit/$discounttype->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "discounttype/confirm/$discounttype->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$discounttype->id</td><td>$discounttype->name</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,name from {$tx}discount_types where id={$id}");
		$discounttype = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">DiscountType Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$discounttype->id</td></tr>";
		$html .= "<tr><th>Name</th><td>$discounttype->name</td></tr>";

		$html .= "</table>";
		return $html;
	}
}

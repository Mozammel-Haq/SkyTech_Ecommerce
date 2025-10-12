<?php
class Tax extends Model implements JsonSerializable
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
		$db->query("insert into {$tx}taxes(name)values('$this->name')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;
		$db->query("update {$tx}taxes set name='$this->name' where id='$this->id'");
	}
	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}taxes where id={$id}");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,name from {$tx}taxes");
		$data = [];
		while ($taxe = $result->fetch_object()) {
			$data[] = $taxe;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,name from {$tx}taxes $criteria limit $top,$perpage");
		$data = [];
		while ($taxe = $result->fetch_object()) {
			$data[] = $taxe;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}taxes $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,name from {$tx}taxes where id='$id'");
		$taxe = $result->fetch_object();
		return $taxe;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}taxes");
		$taxe = $result->fetch_object();
		return $taxe->last_id;
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

	static function html_select($name = "cmbtax")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name' class='select'> ";
		$html .= "<option value=''>Select $name</option>";
		$result = $db->query("select id,name from {$tx}taxes");
		while ($tax = $result->fetch_object()) {
			$html .= "<option value ='$tax->id'>$tax->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}taxes $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,name from {$tx}taxes $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "taxe/create", "text" => "New Taxe"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Name</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Name</th></tr>";
		}
		while ($taxe = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "taxe/show/$taxe->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "taxe/edit/$taxe->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "taxe/confirm/$taxe->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$taxe->id</td><td>$taxe->name</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,name from {$tx}taxes where id={$id}");
		$taxe = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">Taxe Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$taxe->id</td></tr>";
		$html .= "<tr><th>Name</th><td>$taxe->name</td></tr>";

		$html .= "</table>";
		return $html;
	}
}

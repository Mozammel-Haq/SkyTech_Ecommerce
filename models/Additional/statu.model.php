<?php
class Statu extends Model implements JsonSerializable
{
	public $id;
	public $person_status;
	public $item_status;

	public function __construct() {}
	public function set($id, $person_status, $item_status)
	{
		$this->id = $id;
		$this->person_status = $person_status;
		$this->item_status = $item_status;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}status(person_status,item_status)values('$this->person_status','$this->item_status')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;
		$db->query("update {$tx}status set person_status='$this->person_status',item_status='$this->item_status' where id='$this->id'");
	}
	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}status where id={$id}");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,person_status,item_status from {$tx}status");
		$data = [];
		while ($statu = $result->fetch_object()) {
			$data[] = $statu;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,person_status,item_status from {$tx}status $criteria limit $top,$perpage");
		$data = [];
		while ($statu = $result->fetch_object()) {
			$data[] = $statu;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}status $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,person_status,item_status from {$tx}status where id='$id'");
		$statu = $result->fetch_object();
		return $statu;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}status");
		$statu = $result->fetch_object();
		return $statu->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Person Status:$this->person_status<br> 
		Item Status:$this->item_status<br> 
";
	}

	//-------------HTML----------//

	static function html_select_Product_status($name = "cmbStatus")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select * from {$tx}status");
		while ($status = $result->fetch_object()) {
			$html .= "<option value ='$status->id'>$status->item_status</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}status $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,person_status,item_status from {$tx}status $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "statu/create", "text" => "New Statu"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Person Status</th><th>Item Status</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Person Status</th><th>Item Status</th></tr>";
		}
		while ($statu = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "statu/show/$statu->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "statu/edit/$statu->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "statu/confirm/$statu->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$statu->id</td><td>$statu->person_status</td><td>$statu->item_status</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,person_status,item_status from {$tx}status where id={$id}");
		$statu = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">Statu Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$statu->id</td></tr>";
		$html .= "<tr><th>Person Status</th><td>$statu->person_status</td></tr>";
		$html .= "<tr><th>Item Status</th><td>$statu->item_status</td></tr>";

		$html .= "</table>";
		return $html;
	}
}

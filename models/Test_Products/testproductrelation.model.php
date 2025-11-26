<?php
class TestProductRelation extends Model implements JsonSerializable
{
	public $id;
	public $product_id;
	public $related_id;

	public function __construct() {}
	public function set($id, $product_id, $related_id)
	{
		$this->id = $id;
		$this->product_id = $product_id;
		$this->related_id = $related_id;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}test_product_relations(product_id,related_id)values('$this->product_id','$this->related_id')");
		return $db->insert_id;
	}
	public function update($incomingRelations = null)
    {
        global $db, $tx;

        if (is_array($incomingRelations)) {
            // Normalize incoming IDs
            $incomingIds = [];
            foreach ($incomingRelations as $r) {
                if (is_array($r) && isset($r['id'])) {
                    $incomingIds[] = intval($r['id']);
                } elseif (!is_array($r)) {
                    $incomingIds[] = intval($r);
                }
            }
            $idsToKeep = implode(',', array_filter($incomingIds));

            // Delete relations not in incoming data
            $deleteQuery = "DELETE FROM {$tx}test_product_relations 
                            WHERE product_id = '{$this->product_id}'" .
                            (!empty($idsToKeep) ? " AND related_id NOT IN ($idsToKeep)" : "");
            $db->query($deleteQuery);

            // Insert new relations
            foreach ($incomingRelations as $r) {
                $relatedId = is_array($r) ? intval($r['id'] ?? $r['related_id'] ?? 0) : intval($r);
                if ($relatedId <= 0) continue;

                $check = $db->query("SELECT id FROM {$tx}test_product_relations 
                                     WHERE product_id='{$this->product_id}' AND related_id='$relatedId'");
                if ($check->num_rows === 0) {
                    $db->query("
                        INSERT INTO {$tx}test_product_relations
                            (product_id, related_id)
                        VALUES
                            ('{$this->product_id}', '$relatedId')
                    ");
                }
            }

            return true;
        }

        // Fallback: single insert/update (legacy behavior)
        if (!empty($this->id) && is_numeric($this->id)) {
            $db->query("
                UPDATE {$tx}test_product_relations SET
                    product_id = '$this->product_id',
                    related_id = '$this->related_id'
                WHERE id = '$this->id'
            ");
        } else {
            $db->query("
                INSERT INTO {$tx}test_product_relations
                    (product_id, related_id)
                VALUES
                    ('$this->product_id', '$this->related_id')
            ");
        }
    }

	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}test_product_relations where product_id=$id");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,product_id,related_id from {$tx}test_product_relations");
		$data = [];
		while ($testproductrelation = $result->fetch_object()) {
			$data[] = $testproductrelation;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,product_id,related_id from {$tx}test_product_relations $criteria limit $top,$perpage");
		$data = [];
		while ($testproductrelation = $result->fetch_object()) {
			$data[] = $testproductrelation;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}test_product_relations $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,product_id,related_id from {$tx}test_product_relations where id='$id'");
		$testproductrelation = $result->fetch_object();
		return $testproductrelation;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}test_product_relations");
		$testproductrelation = $result->fetch_object();
		return $testproductrelation->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Product Id:$this->product_id<br> 
		Related Id:$this->related_id<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbTestProductRelation")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}test_product_relations");
		while ($testproductrelation = $result->fetch_object()) {
			$html .= "<option value ='$testproductrelation->id'>$testproductrelation->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}test_product_relations $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,product_id,related_id from {$tx}test_product_relations $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "testproductrelation/create", "text" => "New TestProductRelation"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Product Id</th><th>Related Id</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Product Id</th><th>Related Id</th></tr>";
		}
		while ($testproductrelation = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "testproductrelation/show/$testproductrelation->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "testproductrelation/edit/$testproductrelation->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "testproductrelation/confirm/$testproductrelation->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$testproductrelation->id</td><td>$testproductrelation->product_id</td><td>$testproductrelation->related_id</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,product_id,related_id from {$tx}test_product_relations where id={$id}");
		$testproductrelation = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">TestProductRelation Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$testproductrelation->id</td></tr>";
		$html .= "<tr><th>Product Id</th><td>$testproductrelation->product_id</td></tr>";
		$html .= "<tr><th>Related Id</th><td>$testproductrelation->related_id</td></tr>";

		$html .= "</table>";
		return $html;
	}
}

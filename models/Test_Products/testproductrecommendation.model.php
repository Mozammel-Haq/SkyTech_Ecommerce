<?php
class TestProductRecommendation extends Model implements JsonSerializable
{
	public $id;
	public $product_id;
	public $recommended_id;

	public function __construct() {}
	public function set($id, $product_id, $recommended_id)
	{
		$this->id = $id;
		$this->product_id = $product_id;
		$this->recommended_id = $recommended_id;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}test_product_recommendations(product_id,recommended_id)values('$this->product_id','$this->recommended_id')");
		return $db->insert_id;
	}
	public function update($incomingRecommendations = null)
    {
        global $db, $tx;

        if (is_array($incomingRecommendations)) {
            // Normalize incoming IDs
            $incomingIds = [];
            foreach ($incomingRecommendations as $r) {
                if (is_array($r) && isset($r['id'])) {
                    $incomingIds[] = intval($r['id']);
                } elseif (!is_array($r)) {
                    $incomingIds[] = intval($r);
                }
            }
            $idsToKeep = implode(',', array_filter($incomingIds));

            // Delete recommendations not in incoming data
            $deleteQuery = "DELETE FROM {$tx}test_product_recommendations 
                            WHERE product_id = '{$this->product_id}'" .
                            (!empty($idsToKeep) ? " AND recommended_id NOT IN ($idsToKeep)" : "");
            $db->query($deleteQuery);

            // Insert new recommendations
            foreach ($incomingRecommendations as $r) {
                $recommendedId = is_array($r) ? intval($r['id'] ?? $r['recommended_id'] ?? 0) : intval($r);
                if ($recommendedId <= 0) continue;

                $check = $db->query("SELECT id FROM {$tx}test_product_recommendations 
                                     WHERE product_id='{$this->product_id}' AND recommended_id='$recommendedId'");
                if ($check->num_rows === 0) {
                    $db->query("
                        INSERT INTO {$tx}test_product_recommendations
                            (product_id, recommended_id)
                        VALUES
                            ('{$this->product_id}', '$recommendedId')
                    ");
                }
            }

            return true;
        }

        // Fallback: single insert/update (legacy behavior)
        if (!empty($this->id) && is_numeric($this->id)) {
            $db->query("
                UPDATE {$tx}test_product_recommendations SET
                    product_id     = '$this->product_id',
                    recommended_id = '$this->recommended_id'
                WHERE id = '$this->id'
            ");
        } else {
            $db->query("
                INSERT INTO {$tx}test_product_recommendations
                    (product_id, recommended_id)
                VALUES
                    ('$this->product_id', '$this->recommended_id')
            ");
        }
    }

	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}test_product_recommendations where product_id=$id");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,product_id,recommended_id from {$tx}test_product_recommendations");
		$data = [];
		while ($testproductrecommendation = $result->fetch_object()) {
			$data[] = $testproductrecommendation;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,product_id,recommended_id from {$tx}test_product_recommendations $criteria limit $top,$perpage");
		$data = [];
		while ($testproductrecommendation = $result->fetch_object()) {
			$data[] = $testproductrecommendation;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}test_product_recommendations $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,product_id,recommended_id from {$tx}test_product_recommendations where id='$id'");
		$testproductrecommendation = $result->fetch_object();
		return $testproductrecommendation;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}test_product_recommendations");
		$testproductrecommendation = $result->fetch_object();
		return $testproductrecommendation->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Product Id:$this->product_id<br> 
		Recommended Id:$this->recommended_id<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbTestProductRecommendation")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}test_product_recommendations");
		while ($testproductrecommendation = $result->fetch_object()) {
			$html .= "<option value ='$testproductrecommendation->id'>$testproductrecommendation->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}test_product_recommendations $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,product_id,recommended_id from {$tx}test_product_recommendations $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "testproductrecommendation/create", "text" => "New TestProductRecommendation"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Product Id</th><th>Recommended Id</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Product Id</th><th>Recommended Id</th></tr>";
		}
		while ($testproductrecommendation = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "testproductrecommendation/show/$testproductrecommendation->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "testproductrecommendation/edit/$testproductrecommendation->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "testproductrecommendation/confirm/$testproductrecommendation->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$testproductrecommendation->id</td><td>$testproductrecommendation->product_id</td><td>$testproductrecommendation->recommended_id</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,product_id,recommended_id from {$tx}test_product_recommendations where id={$id}");
		$testproductrecommendation = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">TestProductRecommendation Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$testproductrecommendation->id</td></tr>";
		$html .= "<tr><th>Product Id</th><td>$testproductrecommendation->product_id</td></tr>";
		$html .= "<tr><th>Recommended Id</th><td>$testproductrecommendation->recommended_id</td></tr>";

		$html .= "</table>";
		return $html;
	}
}

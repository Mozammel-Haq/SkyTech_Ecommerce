<?php
class TestProductSpec extends Model implements JsonSerializable
{
	public $id;
	public $product_id;
	public $spec_text;

	public function __construct() {}
	public function set($id, $product_id, $spec_text)
	{
		$this->id = $id;
		$this->product_id = $product_id;
		$this->spec_text = $spec_text;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}test_product_specs(product_id,spec_text)values('$this->product_id','$this->spec_text')");
		return $db->insert_id;
	}
public function update($incomingSpecs = null)
    {
        global $db, $tx;

        if (is_array($incomingSpecs)) {
            // Extract IDs present in incoming data
            $incomingIds = array_filter(array_map(function($s) {
                return isset($s['id']) ? intval($s['id']) : null;
            }, $incomingSpecs));

            $idsToKeep = implode(',', $incomingIds);

            // Delete specs not in incoming data
            $deleteQuery = "DELETE FROM {$tx}test_product_specs 
                            WHERE product_id = '{$this->product_id}'" .
                            (!empty($idsToKeep) ? " AND id NOT IN ($idsToKeep)" : "");
            $db->query($deleteQuery);

            // Insert/update incoming specs
            foreach ($incomingSpecs as $s) {
                $spec = new TestProductSpec();
                $spec->id = isset($s['id']) ? intval($s['id']) : null;
                $spec->product_id = $this->product_id;
                $spec->spec_text = $db->real_escape_string($s['value'] ?? $s['spec_text'] ?? $s['key'] ?? '');

                if ($spec->id) {
                    // Update existing
                    $db->query("
                        UPDATE {$tx}test_product_specs SET
                            spec_text = '{$spec->spec_text}'
                        WHERE id = '{$spec->id}'
                    ");
                } else {
                    // Insert new
                    $db->query("
                        INSERT INTO {$tx}test_product_specs
                            (product_id, spec_text)
                        VALUES
                            ('{$spec->product_id}', '{$spec->spec_text}')
                    ");
                }
            }

            return true;
        }

        // Fallback: single insert/update (legacy behavior)
        if (!empty($this->id) && is_numeric($this->id)) {
            $db->query("
                UPDATE {$tx}test_product_specs SET
                    spec_text = '{$this->spec_text}',
                    product_id = '{$this->product_id}'
                WHERE id = '{$this->id}'
            ");
        } else {
            $db->query("
                INSERT INTO {$tx}test_product_specs
                    (product_id, spec_text)
                VALUES
                    ('{$this->product_id}', '{$this->spec_text}')
            ");
        }
    }


	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}test_product_specs where product_id=$id");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,product_id,spec_text from {$tx}test_product_specs");
		$data = [];
		while ($testproductspec = $result->fetch_object()) {
			$data[] = $testproductspec;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,product_id,spec_text from {$tx}test_product_specs $criteria limit $top,$perpage");
		$data = [];
		while ($testproductspec = $result->fetch_object()) {
			$data[] = $testproductspec;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}test_product_specs $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,product_id,spec_text from {$tx}test_product_specs where id='$id'");
		$testproductspec = $result->fetch_object();
		return $testproductspec;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}test_product_specs");
		$testproductspec = $result->fetch_object();
		return $testproductspec->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Product Id:$this->product_id<br> 
		Spec Text:$this->spec_text<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbTestProductSpec")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}test_product_specs");
		while ($testproductspec = $result->fetch_object()) {
			$html .= "<option value ='$testproductspec->id'>$testproductspec->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}test_product_specs $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,product_id,spec_text from {$tx}test_product_specs $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "testproductspec/create", "text" => "New TestProductSpec"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Product Id</th><th>Spec Text</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Product Id</th><th>Spec Text</th></tr>";
		}
		while ($testproductspec = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "testproductspec/show/$testproductspec->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "testproductspec/edit/$testproductspec->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "testproductspec/confirm/$testproductspec->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$testproductspec->id</td><td>$testproductspec->product_id</td><td>$testproductspec->spec_text</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,product_id,spec_text from {$tx}test_product_specs where id={$id}");
		$testproductspec = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">TestProductSpec Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$testproductspec->id</td></tr>";
		$html .= "<tr><th>Product Id</th><td>$testproductspec->product_id</td></tr>";
		$html .= "<tr><th>Spec Text</th><td>$testproductspec->spec_text</td></tr>";

		$html .= "</table>";
		return $html;
	}
}

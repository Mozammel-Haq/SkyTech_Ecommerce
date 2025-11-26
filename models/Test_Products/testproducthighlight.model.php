<?php
class TestProductHighlight extends Model implements JsonSerializable
{
	public $id;
	public $product_id;
	public $highlight_text;

	public function __construct() {}
	public function set($id, $product_id, $highlight_text)
	{
		$this->id = $id;
		$this->product_id = $product_id;
		$this->highlight_text = $highlight_text;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}test_product_highlights(product_id,highlight_text)values('$this->product_id','$this->highlight_text')");
		return $db->insert_id;
	}
	 public function update($incomingHighlights = null)
    {
        global $db, $tx;

        if (is_array($incomingHighlights)) {
            // Extract IDs present in incoming data
            $incomingIds = array_filter(array_map(function($h) {
                return isset($h['id']) ? intval($h['id']) : null;
            }, $incomingHighlights));

            $idsToKeep = implode(',', $incomingIds);

            // Delete highlights not in incoming data
            $deleteQuery = "DELETE FROM {$tx}test_product_highlights 
                            WHERE product_id = '{$this->product_id}'" .
                            (!empty($idsToKeep) ? " AND id NOT IN ($idsToKeep)" : "");
            $db->query($deleteQuery);

            // Insert/update incoming highlights
            foreach ($incomingHighlights as $h) {
                $highlight = new TestProductHighlight();
                $highlight->id = isset($h['id']) ? intval($h['id']) : null;
                $highlight->product_id = $this->product_id;
                $highlight->highlight_text = $db->real_escape_string($h['text'] ?? $h['value'] ?? '');

                if ($highlight->id) {
                    // Update existing
                    $db->query("
                        UPDATE {$tx}test_product_highlights SET
                            highlight_text = '{$highlight->highlight_text}'
                        WHERE id = '{$highlight->id}'
                    ");
                } else {
                    // Insert new
                    $db->query("
                        INSERT INTO {$tx}test_product_highlights
                            (product_id, highlight_text)
                        VALUES
                            ('{$highlight->product_id}', '{$highlight->highlight_text}')
                    ");
                }
            }

            return true;
        }

        // Fallback: single insert/update (legacy behavior)
        if (!empty($this->id) && is_numeric($this->id)) {
            $db->query("
                UPDATE {$tx}test_product_highlights SET
                    product_id = '{$this->product_id}',
                    highlight_text = '{$this->highlight_text}'
                WHERE id = '{$this->id}'
            ");
        } else {
            $db->query("
                INSERT INTO {$tx}test_product_highlights
                    (product_id, highlight_text)
                VALUES
                    ('{$this->product_id}', '{$this->highlight_text}')
            ");
        }
    }
	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}test_product_highlights where product_id=$id");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,product_id,highlight_text from {$tx}test_product_highlights");
		$data = [];
		while ($testproducthighlight = $result->fetch_object()) {
			$data[] = $testproducthighlight;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,product_id,highlight_text from {$tx}test_product_highlights $criteria limit $top,$perpage");
		$data = [];
		while ($testproducthighlight = $result->fetch_object()) {
			$data[] = $testproducthighlight;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}test_product_highlights $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,product_id,highlight_text from {$tx}test_product_highlights where id='$id'");
		$testproducthighlight = $result->fetch_object();
		return $testproducthighlight;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}test_product_highlights");
		$testproducthighlight = $result->fetch_object();
		return $testproducthighlight->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Product Id:$this->product_id<br> 
		Highlight Text:$this->highlight_text<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbTestProductHighlight")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}test_product_highlights");
		while ($testproducthighlight = $result->fetch_object()) {
			$html .= "<option value ='$testproducthighlight->id'>$testproducthighlight->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}test_product_highlights $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,product_id,highlight_text from {$tx}test_product_highlights $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "testproducthighlight/create", "text" => "New TestProductHighlight"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Product Id</th><th>Highlight Text</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Product Id</th><th>Highlight Text</th></tr>";
		}
		while ($testproducthighlight = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "testproducthighlight/show/$testproducthighlight->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "testproducthighlight/edit/$testproducthighlight->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "testproducthighlight/confirm/$testproducthighlight->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$testproducthighlight->id</td><td>$testproducthighlight->product_id</td><td>$testproducthighlight->highlight_text</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,product_id,highlight_text from {$tx}test_product_highlights where id={$id}");
		$testproducthighlight = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">TestProductHighlight Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$testproducthighlight->id</td></tr>";
		$html .= "<tr><th>Product Id</th><td>$testproducthighlight->product_id</td></tr>";
		$html .= "<tr><th>Highlight Text</th><td>$testproducthighlight->highlight_text</td></tr>";

		$html .= "</table>";
		return $html;
	}
}

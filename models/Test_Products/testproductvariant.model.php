<?php
class TestProductVariant extends Model implements JsonSerializable
{
	public $id;
	public $product_id;
	public $color;
	public $storage;
	public $price;
	public $created_at;

	public function __construct() {}
	public function set($id, $product_id, $color, $storage, $price, $created_at)
	{
		$this->id = $id;
		$this->product_id = $product_id;
		$this->color = $color;
		$this->storage = $storage;
		$this->price = $price;
		$this->created_at = $created_at;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}test_product_variants(product_id,color,storage,price,created_at)values('$this->product_id','$this->color','$this->storage','$this->price','$this->created_at')");
		return $db->insert_id;
	}
public function update($incomingVariants = null)
    {
        global $db, $tx;

        if (is_array($incomingVariants)) {
            // Extract IDs that exist in frontend data
            $incomingIds = array_filter(array_map(function($v) {
                return isset($v['id']) ? intval($v['id']) : null;
            }, $incomingVariants));

            $idsToKeep = implode(',', $incomingIds);

            // Delete variants that are not in incoming data
            $deleteQuery = "DELETE FROM {$tx}test_product_variants 
                            WHERE product_id = '$this->product_id'" .
                            (!empty($idsToKeep) ? " AND id NOT IN ($idsToKeep)" : "");
            $db->query($deleteQuery);

            // Insert/update incoming variants
            foreach ($incomingVariants as $v) {
                $variant = new TestProductVariant();
                $variant->id = isset($v['id']) ? intval($v['id']) : null;
                $variant->product_id = $this->product_id;
                $variant->color = $db->real_escape_string($v['color'] ?? '');
                $variant->storage = $db->real_escape_string($v['storage'] ?? '');
                $variant->price = floatval($v['price'] ?? 0);
                $variant->created_at = date('Y-m-d H:i:s');

                if ($variant->id) {
                    // Update existing
                    $db->query("
                        UPDATE {$tx}test_product_variants SET
                            color = '$variant->color',
                            storage = '$variant->storage',
                            price = '$variant->price'
                        WHERE id = '$variant->id'
                    ");
                } else {
                    // Insert new
                    $db->query("
                        INSERT INTO {$tx}test_product_variants
                            (product_id, color, storage, price, created_at)
                        VALUES
                            ('$variant->product_id', '$variant->color', '$variant->storage', '$variant->price', '$variant->created_at')
                    ");
                }
            }

            return true;
        }

        // Fallback: single insert/update (legacy behavior)
        if (!empty($this->id) && is_numeric($this->id)) {
            $db->query("
                UPDATE {$tx}test_product_variants SET
                    color = '$this->color',
                    storage = '$this->storage',
                    price = '$this->price'
                WHERE id = '$this->id'
            ");
        } else {
            $db->query("
                INSERT INTO {$tx}test_product_variants
                    (product_id, color, storage, price, created_at)
                VALUES
                    ('$this->product_id', '$this->color', '$this->storage', '$this->price', '$this->created_at')
            ");
        }
    }

	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}test_product_variants where product_id=$id");
	}
	public function jsonSerialize(): mixed
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,product_id,color,storage,price,created_at from {$tx}test_product_variants");
		$data = [];
		while ($testproductvariant = $result->fetch_object()) {
			$data[] = $testproductvariant;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,product_id,color,storage,price,created_at from {$tx}test_product_variants $criteria limit $top,$perpage");
		$data = [];
		while ($testproductvariant = $result->fetch_object()) {
			$data[] = $testproductvariant;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}test_product_variants $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,product_id,color,storage,price,created_at from {$tx}test_product_variants where id='$id'");
		$testproductvariant = $result->fetch_object();
		return $testproductvariant;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}test_product_variants");
		$testproductvariant = $result->fetch_object();
		return $testproductvariant->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Product Id:$this->product_id<br> 
		Color:$this->color<br> 
		Storage:$this->storage<br> 
		Price:$this->price<br> 
		Created At:$this->created_at<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbTestProductVariant")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}test_product_variants");
		while ($testproductvariant = $result->fetch_object()) {
			$html .= "<option value ='$testproductvariant->id'>$testproductvariant->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}test_product_variants $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,product_id,color,storage,price,created_at from {$tx}test_product_variants $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		$html .= "<tr><th colspan='3'>" . Html::link(["class" => "btn btn-success", "route" => "testproductvariant/create", "text" => "New TestProductVariant"]) . "</th></tr>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Product Id</th><th>Color</th><th>Storage</th><th>Price</th><th>Created At</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Product Id</th><th>Color</th><th>Storage</th><th>Price</th><th>Created At</th></tr>";
		}
		while ($testproductvariant = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons .= Event::button(["name" => "show", "value" => "Show", "class" => "btn btn-info", "route" => "testproductvariant/show/$testproductvariant->id"]);
				$action_buttons .= Event::button(["name" => "edit", "value" => "Edit", "class" => "btn btn-primary", "route" => "testproductvariant/edit/$testproductvariant->id"]);
				$action_buttons .= Event::button(["name" => "delete", "value" => "Delete", "class" => "btn btn-danger", "route" => "testproductvariant/confirm/$testproductvariant->id"]);
				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$testproductvariant->id</td><td>$testproductvariant->product_id</td><td>$testproductvariant->color</td><td>$testproductvariant->storage</td><td>$testproductvariant->price</td><td>$testproductvariant->created_at</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("select id,product_id,color,storage,price,created_at from {$tx}test_product_variants where id={$id}");
		$testproductvariant = $result->fetch_object();
		$html = "<table class='table'>";
		$html .= "<tr><th colspan=\"2\">TestProductVariant Show</th></tr>";
		$html .= "<tr><th>Id</th><td>$testproductvariant->id</td></tr>";
		$html .= "<tr><th>Product Id</th><td>$testproductvariant->product_id</td></tr>";
		$html .= "<tr><th>Color</th><td>$testproductvariant->color</td></tr>";
		$html .= "<tr><th>Storage</th><td>$testproductvariant->storage</td></tr>";
		$html .= "<tr><th>Price</th><td>$testproductvariant->price</td></tr>";
		$html .= "<tr><th>Created At</th><td>$testproductvariant->created_at</td></tr>";

		$html .= "</table>";
		return $html;
	}
}

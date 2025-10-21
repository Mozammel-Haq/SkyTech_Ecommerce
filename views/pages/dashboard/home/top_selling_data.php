<?php
include_once("../../../../configs/db_config.php");
header('Content-Type: application/json');

$sql = "
    SELECT 
    p.name AS product_name,
    SUM(od.quantity) AS total_sold
    FROM order_details od
    JOIN products p ON od.product_id = p.id
    GROUP BY p.id, p.name
    ORDER BY total_sold DESC
    LIMIT 3
";

$result = $db->query($sql);

$labels = [];
$series = [];

while ($row = $result->fetch_assoc()) {
    $labels[] = $row['product_name'];
    $series[] = (int)$row['total_sold'];
}

echo json_encode([
    'labels' => $labels,
    'series' => $series
]);

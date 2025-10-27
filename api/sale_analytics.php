<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database config
include_once '../configs/db_config.php';

// Include base model first
include_once '../models/model.php';
include_once '../models/Orders/order.model.php';

// Get period from GET or POST (default: monthly)
$period = $_GET['period'] ?? $_POST['period'] ?? 'monthly';

try {
    $result = Order::getSalesAnalytics($period);

    $labels = [];
    $paid_series = [];
    $pending_series = [];

    foreach ($result as $row) {
        $labels[] = $row['period'];
        $paid_series[] = (float)$row['paid'];
        $pending_series[] = (float)$row['pending'];
    }

    echo json_encode([
        'success' => true,
        'labels' => $labels,
        'series' => [
            ['name' => 'Paid', 'data' => $paid_series],
            ['name' => 'Pending', 'data' => $pending_series]
        ]
    ]);
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}

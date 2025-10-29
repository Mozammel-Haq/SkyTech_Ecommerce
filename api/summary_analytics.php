<?php
// Database config
include_once '../configs/db_config.php';

// Include base model first
include_once '../models/model.php';
include_once '../models/Orders/order.model.php';
include_once '../models/Purchases/purchase.model.php';

header('Content-Type: application/json');

$period = strtolower($_GET['period'] ?? 'monthly');

// --- SALES & RECEIPTS ---
$order = Order::calculateOrderAmount($period);
$totalSales = (float)$order->order_amount;
$receipts = (float)$order->order_amount; // assuming receipts = sales (modify if different)

// --- EXPENSES ---
$purchase = Purchase::calculateTotalPurchase($period);
$totalExpenses = (float)$purchase->total_purchase;

// --- EARNINGS ---
$earnings = $totalSales - $totalExpenses;

echo json_encode([
    'success' => true,
    'sales' => $totalSales,
    'receipts' => $receipts,
    'expenses' => $totalExpenses,
    'earnings' => $earnings
]);
exit;

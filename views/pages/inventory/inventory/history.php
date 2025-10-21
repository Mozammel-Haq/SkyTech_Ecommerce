<?php
$product_id = $_GET['id'] ?? null;

$product = $product_id ? Product::findProduct($product_id) : null;
// print_r($product);
?>

<div class="container py-4" id="printContainer">
    <!-- Header Section -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
        <div class=" ps-3 mb-3 mb-md-0 product-header" id="productInfo">
            <h4 class="fw-bold mb-1">Inventory History</h4>
            <p class="mb-0 text-muted">
                <strong>Product:&nbsp;&nbsp;</strong> <?= htmlspecialchars($product[0]['name'] ?? 'N/A') ?><br>
                <strong>SKU:&nbsp;&nbsp;</strong> <?= htmlspecialchars($product[0]['sku'] ?? 'N/A') ?>
            </p>
        </div>

        <div class="d-flex gap-2" id="actionButtons">
            <button class="btn btn-outline-secondary d-flex align-items-center gap-1" id="printHistoryBtn">
                <i class="isax isax-printer"></i> Print
            </button>
            <button class="btn btn-outline-secondary d-flex align-items-center gap-1" id="downloadHistoryBtn">
                <i class="isax isax-export"></i> Download
            </button>
            <a href="<?= $base_url ?>/inventory" class="btn btn-primary d-flex align-items-center gap-1">
                <i class="isax isax-arrow-left"></i> Back to Inventory
            </a>
        </div>
    </div>

    <!-- Inventory Table Card -->
    <div class="card shadow-sm print-card">
        <div class="card-body p-3 p-md-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" id="historyTable">
                    <thead class="table-light text-center text-uppercase">
                        <tr>
                            <th>Date</th>
                            <th>Unit</th>
                            <th>Adjustment</th>
                            <th>Stock</th>
                            <th>Reason</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($data)): ?>
                            <?php foreach ($data as $row): ?>
                                <tr>
                                    <td class="text-center"><?= htmlspecialchars($row->date) ?></td>
                                    <td class="text-center"><?= htmlspecialchars($row->unit) ?></td>
                                    <td class="text-center fw-semibold 
                <?= ($row->adjustments > 0) ? 'text-success' : (($row->adjustments < 0) ? 'text-danger' : 'text-muted') ?>">
                                        <?= htmlspecialchars($row->adjustments) ?>
                                    </td>
                                    <td class="text-center"><?= htmlspecialchars($row->stock) ?></td>
                                    <td><?= htmlspecialchars($row->reason) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center text-muted py-3">No history found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

<!-- Print Styling -->
<style>
    @media print {
        body * {
            visibility: hidden;
        }

        #printContainer,
        #printContainer * {
            visibility: visible;
        }

        #printContainer {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            max-width: 100%;
            padding: 0 1rem;
        }

        .print-card .card-body {
            padding: 0.5rem !important;
            /* remove extra space for print */
        }

        #actionButtons {
            display: none !important;
            /* Hide buttons */
        }

        /* Center product info for print */
        #productInfo {
            text-align: center !important;
            border-left: none !important;
            margin-bottom: 1rem;
        }

        /* Remove card borders and shadows in print */
        .print-card {
            border: none !important;
            box-shadow: none !important;
        }

        /* Full-width bottom border for header section */
        .product-header {
            border-bottom: 0.5px solid #dee2e6;
            padding-bottom: 0.75rem;
        }

        /* Minimal modern borders for print table */
        table,
        th,
        td {
            border: 0.5px solid #ccc !important;
            border-collapse: collapse;
            padding: 0.5rem !important;
        }

        thead {
            background-color: #e9ecef !important;
            -webkit-print-color-adjust: exact;
        }

        tr {
            page-break-inside: avoid;
        }
    }
</style>

<!-- Print Script -->
<script>
    document.getElementById('printHistoryBtn').addEventListener('click', function() {
        window.print();
    });
</script>
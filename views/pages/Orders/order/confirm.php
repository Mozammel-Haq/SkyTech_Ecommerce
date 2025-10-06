<?php

$data1 = $data['data1'] ?? null;
$data2 = $data['data2'];

// print_r($data1);
// print_r($data2);

while ($row = $data2->fetch_object()): ?>
    <div class="content content-two d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="card shadow-lg border-0 text-center" style="max-width: 550px; width: 100%;">
            <div class="card-body p-5">
                <h4 class="card-title mb-4 text-danger fw-bold">Confirm Delete</h4>
                <h6 class="mb-3 text-muted">Are you sure you want to delete this order?</h6>

                <div class="d-flex flex-column align-items-center mb-4">
                    <img src="<?= $base_url ?>/assets/img/products/<?= $row->image_path ?>"
                        alt="Product Image"
                        class="rounded-circle mb-3 shadow-sm"
                        width="90" height="90">

                    <div class="text-start w-100 px-4">
                        <p><strong>Order ID:</strong> <?= $row->order_id ?></p>
                        <p><strong>Product:</strong> <?= $row->product_name ?></p>
                        <p><strong>Quantity:</strong> <?= $row->quantity ?></p>
                        <p><strong>Total Amount:</strong> $<?= $row->total_amount ?></p>
                        <p><strong>Status:</strong> <?= $row->status ?></p>
                        <p><strong>Tracking:</strong> <?= $row->tracking ?></p>
                        <p><strong>Order Date:</strong> <?= $row->order_date ?></p>
                    </div>
                </div>

                <form method="POST" action="delete_order.php" class="d-flex justify-content-center gap-3">
                    <input type="hidden" name="order_id" value="<?= $row->id ?>">
                    <button type="submit" name="confirm_delete" class="btn btn-danger px-4">
                        <i class="fa fa-trash me-2"></i> Yes, Delete
                    </button>
                    <a href="<?= $base_url ?>/order" class="btn btn-outline-secondary px-4">
                        <i class="fa fa-times me-2"></i> Cancel
                    </a>
                </form>
            </div>
        </div>
    </div>
<?php endwhile; ?>
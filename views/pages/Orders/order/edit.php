<div class="content content-two">
	<div class="card shadow-lg border-0 mx-auto" style="max-width: 700px;">
		<div class="card-body p-5">
			<h4 class="card-title mb-4 text-primary fw-bold">Edit Order #<?= $order->id ?></h4>
			<form method="POST" action="<?= $base_url ?>/order/edit/<?= $order->id ?>">

				<div class="row">
					<!-- Order ID (readonly) -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Order ID</label>
						<input type="text" class="form-control" name="order_id" value="<?= $order->id ?>" readonly>
					</div>

					<!-- Product -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Product <span class="text-danger">*</span></label>
						<select class="form-select" name="product" required>
							<?php
							global $db;
							$stmt = $db->query("SELECT id, name FROM products ORDER BY name ASC");
							$products = $stmt->fetch_all(MYSQLI_ASSOC);
							foreach ($products as $product):
								$selected = ($product['id'] == $order->product_id) ? 'selected' : '';
							?>
								<option value="<?= $product['id'] ?>" <?= $selected ?>><?= htmlspecialchars($product['name']) ?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<!-- Quantity -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Quantity <span class="text-danger">*</span></label>
						<input type="number" class="form-control" name="quantity" value="<?= $order->quantity ?>" required>
					</div>

					<!-- Total Amount -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Total Amount ($)</label>
						<input type="text" class="form-control" name="total_amount" value="<?= $order->total_amount ?>">
					</div>

					<!-- Status -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Status <span class="text-danger">*</span></label>
						<select class="form-select" name="status" required>
							<?php
							$statuses = ['Pending', 'Processing', 'Shipped', 'Delivered', 'Cancelled'];
							foreach ($statuses as $status):
								$selected = ($status == $order->status) ? 'selected' : '';
							?>
								<option value="<?= $status ?>" <?= $selected ?>><?= $status ?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<!-- Tracking -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Tracking</label>
						<select class="form-select" name="tracking">
							<?php
							$stmt = $db->query("SELECT id, name FROM trackings ORDER BY name ASC");
							$trackings = $stmt->fetch_all(MYSQLI_ASSOC);
							foreach ($trackings as $tracking):
								$selected = ($tracking['id'] == $order->tracking_id) ? 'selected' : '';
							?>
								<option value="<?= $tracking['id'] ?>" <?= $selected ?>><?= htmlspecialchars($tracking['name']) ?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<!-- Order Date -->
					<div class="col-md-12 mb-3">
						<label class="form-label">Order Date <span class="text-danger">*</span></label>
						<input type="date" class="form-control" name="order_date" value="<?= $order->order_date ?>" required>
					</div>
				</div>

				<!-- Buttons -->
				<div class="mt-4 d-flex justify-content-between">
					<a href="<?= $base_url ?>/order" class="btn btn-outline-secondary px-4">
						<i class="fa fa-times me-2"></i> Cancel
					</a>
					<button type="submit" name="update_btn" class="btn btn-primary px-4">
						<i class="fa fa-save me-2"></i> Update Order
					</button>
				</div>

			</form>
		</div>
	</div>
</div>
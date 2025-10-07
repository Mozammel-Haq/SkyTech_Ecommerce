<?php
print_r($data);
?>

<div class="card border-0 mx-auto" style="max-width: 900px;">
		<div class="card-body p-5">
			<h4 class="card-title mb-4 text-primary fw-bold">Create New Order</h4>
			<form method="POST" action="<?= $base_url ?>/order/save">

				<div class="row">
					<!-- Product -->
					<input type="hidden" name="id" value="">
					<div class="col-md-6 mb-3">
						<label class="form-label">Product <span class="text-danger">*</span></label>
						<select class="form-select" name="product" required>
							<option value="">Select Product</option>
							<?php
							global $db;
							$stmt = $db->query("SELECT id, name FROM products ORDER BY name ASC");
							$products = $stmt->fetch_all(MYSQLI_ASSOC);
							foreach ($products as $product):
							?>
								<option value="<?= $product['id'] ?>"><?= htmlspecialchars($product['name']) ?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<!-- Quantity -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Quantity <span class="text-danger">*</span></label>
						<input type="number" class="form-control" name="quantity" placeholder="Enter quantity" required>
					</div>

					<!-- Total Amount -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Total Amount ($)</label>
						<input type="text" class="form-control" name="total_amount" placeholder="Auto-calculated or manual">
					</div>

					<!-- Discount -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Discount (%)</label>
						<input type="number" class="form-control" name="discount" placeholder="Enter discount">
					</div>

					<!-- Tax -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Tax (%)</label>
						<input type="number" class="form-control" name="tax" placeholder="Enter tax">
					</div>

					<!-- Paid Amount -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Paid Amount ($)</label>
						<input type="number" class="form-control" name="paid_amount" placeholder="Enter paid amount">
					</div>

					<!-- Delivery Date -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Delivery Date</label>
						<input type="date" class="form-control" name="delivery_date">
					</div>

					<!-- Shipping Address -->
					<div class="col-md-12 mb-3">
						<label class="form-label">Shipping Address</label>
						<textarea class="form-control" name="shipping_address" rows="2" placeholder="Enter shipping address"></textarea>
					</div>

					<!-- Status -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Status <span class="text-danger">*</span></label>
						<select class="form-select" name="status" required>
							<option value="">Select Status</option>
							<option value="Pending">Pending</option>
							<option value="Processing">Processing</option>
							<option value="Shipped">Shipped</option>
							<option value="Delivered">Delivered</option>
							<option value="Cancelled">Cancelled</option>
						</select>
					</div>

					<!-- Tracking -->
					<div class="col-md-6 mb-3">
						<label class="form-label">Tracking</label>
						<select class="form-select" name="tracking">
							<option value="">Select Tracking</option>
							<?php
							$stmt = $db->query("SELECT id, name FROM trackings ORDER BY name ASC");
							$trackings = $stmt->fetch_all(MYSQLI_ASSOC);
							foreach ($trackings as $tracking):
							?>
								<option value="<?= $tracking['id'] ?>"><?= htmlspecialchars($tracking['name']) ?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<!-- Order Date -->
					<div class="col-md-12 mb-3">
						<label class="form-label">Order Date <span class="text-danger">*</span></label>
						<input type="date" class="form-control" name="order_date" required>
					</div>
				</div>

				<!-- Buttons -->
				<div class="mt-4 d-flex justify-content-between">
					<a href="<?= $base_url ?>/order" class="btn btn-outline-secondary px-4">
						<i class="fa fa-times me-2"></i> Cancel
					</a>
					<button type="submit" name="save_btn" class="btn btn-primary px-4">
						<i class="fa fa-plus me-2"></i> Add Order
					</button>
				</div>

			</form>
		</div>
	</div>
</div>
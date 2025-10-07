<!-- Start Content -->
<div class="content content-two">

	<!-- Page Header -->
	<div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
		<div>
			<h6>Add New Warehouse</h6>
		</div>
		<div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
			<div>
				<a href="warehouse.html" class="btn btn-outline-secondary d-flex align-items-center">
					<i class="isax isax-arrow-left me-1"></i>Back to Warehouses
				</a>
			</div>
		</div>
	</div>
	<!-- End Page Header -->

	<!-- Form Card -->
	<div class="card">
		<div class="card-body">
			<form action="<?=$base_url?>/warehouse/save" method="POST">
				<div class="row">

					<!-- Warehouse Name -->
					<div class="col-md-6 mb-3">
						<label for="warehouse_name" class="form-label">Warehouse Name</label>
						<input type="text" id="warehouse_name" name="name" class="form-control" placeholder="e.g., Main Storage" required>
					</div>

					<!-- Manager -->
					<div class="col-md-6 mb-3">
						<label for="warehouse_manager" class="form-label">Manager</label>
						<input type="text" id="warehouse_manager" name="manager" class="form-control" placeholder="e.g., Rahim Uddin">
					</div>

					<!-- Address -->
					<div class="col-md-12 mb-3">
						<label for="warehouse_address" class="form-label">Address</label>
						<input type="text" id="warehouse_address" name="location" class="form-control" placeholder="e.g., 123 Banani, Dhaka" required>
					</div>

					<!-- Email -->
					<div class="col-md-6 mb-3">
						<label for="warehouse_email" class="form-label">Email</label>
						<input type="email" id="warehouse_email" name="email" class="form-control" placeholder="e.g., manager@email.com">
					</div>

					<!-- Phone -->
					<div class="col-md-6 mb-3">
						<label for="warehouse_phone" class="form-label">Phone</label>
						<input type="text" id="warehouse_phone" name="phone" class="form-control" placeholder="e.g., +8801XXXXXXXXX">
					</div>

					<!-- Submit -->
					<div class="text-end mt-3">
						<button name="create" type="submit" class="btn btn-primary">Save Warehouse</button>
					</div>

				</div>
			</form>
		</div>
	</div>
	<!-- End Form Card -->

</div>
<!-- End Content -->
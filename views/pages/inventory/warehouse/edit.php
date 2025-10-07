<?php
print_r($warehouse)
?>

<!-- Start Content -->
<div class="content content-two">

	<!-- Page Header -->
	<div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
		<div>
			<h6>Update Warehouse</h6>
		</div>
		<div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
			<div>
				<a href="<?= $base_url ?>/warehouse" class="btn btn-outline-secondary d-flex align-items-center">
					<i class="isax isax-arrow-left me-1"></i>Back to Warehouses
				</a>
			</div>
		</div>
	</div>
	<!-- End Page Header -->

	<!-- Form Card -->
	<div class="card">
		<div class="card-body">
			<form action="<?= $base_url ?>/warehouse/update" method="POST">
				<div class="row">

					<!-- Hidden ID -->
					<input type="hidden" id="warehouse_id" name="id" value="<?= $warehouse->id ?>">

					<!-- Warehouse Name -->
					<div class="col-md-6 mb-3">
						<label for="warehouse_name" class="form-label">Warehouse Name</label>
						<input type="text" id="warehouse_name" name="name" class="form-control" value="<?= $warehouse->name ?>" required>
					</div>

					<!-- Manager -->
					<div class="col-md-6 mb-3">
						<label for="warehouse_manager" class="form-label">Manager</label>
						<input type="text" id="warehouse_manager" name="manager" class="form-control" value="<?= $warehouse->manager ?>">
					</div>

					<!-- Address -->
					<div class="col-md-12 mb-3">
						<label for="warehouse_address" class="form-label">Address</label>
						<input type="text" id="warehouse_address" name="location" class="form-control" value="<?= $warehouse->location ?>" required>
					</div>

					<!-- Email -->
					<div class="col-md-6 mb-3">
						<label for="warehouse_email" class="form-label">Email</label>
						<input type="email" id="warehouse_email" name="email" class="form-control" value="<?= $warehouse->email ?>">
					</div>

					<!-- Phone -->
					<div class="col-md-6 mb-3">
						<label for="warehouse_phone" class="form-label">Phone</label>
						<input type="text" id="warehouse_phone" name="phone" class="form-control" value="<?= $warehouse->phone ?>">
					</div>

					<!-- Update Button -->
					<div class="text-end mt-3">
						<button name="update" type="submit" class="btn btn-primary">Update Warehouse</button>
					</div>

				</div>
			</form>
		</div>
	</div>
	<!-- End Form Card -->

</div>
<!-- End Content -->
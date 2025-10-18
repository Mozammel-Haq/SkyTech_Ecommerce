<!-- Start Content -->
<div class="content content-two">

	<!-- Page Header -->
	<div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
		<div>
			<h6>Add New Supplier</h6>
		</div>
		<div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
			<div>
				<a href="<?= $base_url ?>/supplier" class="btn btn-outline-secondary d-flex align-items-center">
					<i class="isax isax-arrow-left me-1"></i>Back to Suppliers
				</a>
			</div>
		</div>
	</div>
	<!-- End Page Header -->

	<!-- Form Card -->
	<div class="card">
		<div class="card-body">
			<form action="<?= $base_url ?>/supplier/save" method="POST">
				<div class="row">

					<!-- Supplier Name -->
					<div class="col-md-6 mb-3">
						<label for="supplier_name" class="form-label">Supplier Name</label>
						<input type="text" id="supplier_name" name="name" class="form-control" placeholder="e.g., ABC Traders Ltd." required>
					</div>

					<!-- Contact Person -->
					<div class="col-md-6 mb-3">
						<label for="contact_person" class="form-label">Contact Person</label>
						<input type="text" id="contact_person" name="contact_person" class="form-control" placeholder="e.g., Mr. Rahim Uddin">
					</div>

					<!-- Phone -->
					<div class="col-md-6 mb-3">
						<label for="supplier_phone" class="form-label">Phone</label>
						<input type="text" id="supplier_phone" name="phone" class="form-control" placeholder="e.g., +8801XXXXXXXXX">
					</div>

					<!-- Email -->
					<div class="col-md-6 mb-3">
						<label for="supplier_email" class="form-label">Email</label>
						<input type="email" id="supplier_email" name="email" class="form-control" placeholder="e.g., supplier@email.com">
					</div>

					<!-- Submit -->
					<div class="text-end mt-3">
						<button name="create" type="submit" class="btn btn-primary">Save Supplier</button>
					</div>

				</div>
			</form>
		</div>
	</div>
	<!-- End Form Card -->

</div>
<!-- End Content -->
<div class="content">

	<!-- start row -->
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div>
				<div class="d-flex align-items-center justify-content-between mb-3">
					<h6><a href="<?=$base_url?>/customer"><i class="isax isax-arrow-left me-2"></i>Customer</a></h6>
				</div>
				<div class="card">
					<div class="card-body">
						<h5 class="mb-3">Update Customer</h5>
						<form action="<?= $base_url ?>/customer/update" method="post" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="id" value="<?= $customer->id ?>" readonly>

							<div class="mb-3 image-wrapper">
								<label class="form-label">Customer Image</label>
								<div class="d-flex align-items-center">
									<div class="avatar avatar-xxl border border-dashed bg-light me-3 flex-shrink-0 d-flex align-items-center justify-content-center imagePreview">
										<img id="add_customer_image_preview" src="<?= $base_url ?>/assets/img/profiles/<?= $customer->photo ?>" class="rounded-circle" alt="Customer Image">
									</div>
									<div class="d-inline-flex flex-column align-items-start">
										<div class="drag-upload-btn btn btn-sm btn-primary position-relative mb-2">
											<i class="isax isax-image me-1"></i>Upload Image
											<input type="file" name="photo" class="category_image form-control image-sign position-absolute top-0 start-0 w-100 h-100 opacity-0" accept="image/*">
										</div>
										<span class="text-gray-9 fs-12 imageName">JPG or PNG format, max size 5MB.</span>
									</div>
								</div>
							</div>
							<div class="row gx-3">
								<div class="col-lg-4 col-md-6">
									<div class="mb-3">
										<label class="form-label">Name <span class="text-danger ms-1">*</span></label>
										<input type="text" class="form-control" name="name" value="<?= $customer->name ?>">
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="mb-3">
										<label class="form-label">Email <span class="text-danger ms-1">*</span></label>
										<input name="email" type="email" class="form-control" value="<?= $customer->email ?>">
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="mb-3">
										<label class="form-label">Phone Number <span class="text-danger ms-1">*</span></label>
										<input name="phone" type="text" class="form-control" value="<?= $customer->phone ?>">
									</div>
								</div>

								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select" aria-hidden="true" name="status">
											<option value="">Select</option>
											<option value="Active">Active</option>
											<option value="Offline">Offline</option>
										</select>
									</div>
								</div>

							</div>
							<div class="border-top my-2">
								<div class="row gx-5">
									<div class="col-md-6 ">
										<h6 class="mb-3 pt-4">Billing Address</h6>
										<div class="row">
											<div class="col-12">
												<div class="mb-3">
													<label class="form-label">Address <span class="text-danger ms-1">*</span></label>
													<input type="text" class="form-control" name="address" value="<?= $customer->address ?>" required>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 ">
										<h6 class="mb-3 pt-4">Shipping Address</h6>
										<div class="row">
											<div class="col-12">
												<div class="mb-3">
													<label class="form-label">Address</label>
													<input type="text" class="form-control" name="shipping_address" value="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="d-flex align-items-center justify-content-between pt-4 border-top">
								<a href="<?= $base_url ?>/customer" class="btn btn-outline-white">Cancel</a>
								<button name="update" type="submit" class="btn btn-primary">Update Customer</button>
							</div>
						</form>
					</div><!-- end card body -->
				</div><!-- end card -->
			</div>
		</div><!-- end col -->
	</div>
	<!-- end row -->

</div>
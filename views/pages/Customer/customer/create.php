<div class="content">

	<!-- start row -->
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div>
				<div class="d-flex align-items-center justify-content-between mb-3">
					<h6><a href="<?= $base_url ?>/customer"><i class="isax isax-arrow-left me-2"></i>Customer</a></h6>
				</div>
				<div class="card">
					<div class="card-body">
						<h5 class="mb-3">Add Customer</h5>
						<form action="<?= $base_url ?>/customer/save" method="post" enctype="multipart/form-data">
							<div class="mb-3 image-wrapper">
								<label class="form-label">Customer Image</label>
								<div class="d-flex align-items-center">
									<div class="avatar avatar-xxl border border-dashed bg-light me-3 flex-shrink-0 d-flex align-items-center justify-content-center imagePreview">
										<img id="add_customer_image_preview" src="" class="rounded-circle d-none" alt="Customer Image">
										<i class="isax isax-image text-primary fs-24" id="add_customer_image_icon"></i>
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
							<input type="hidden" class="form-control" name="id" value="">
							<div class="row gx-3">
								<div class="col-lg-4 col-md-6">
									<div class="mb-3">
										<label class="form-label">Name <span class="text-danger ms-1">*</span></label>
										<input type="text" class="form-control" name="name">
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="mb-3">
										<label class="form-label">Email <span class="text-danger ms-1">*</span></label>
										<input name="email" type="email" class="form-control">
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="mb-3">
										<label class="form-label">Phone Number <span class="text-danger ms-1">*</span></label>
										<input name="phone" type="text" class="form-control">
									</div>
								</div>

								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select" aria-hidden="true" name="status">
											<option>Select</option>
											<option>Active</option>
											<option>Offline</option>
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
													<input type="text" class="form-control" name="address" required>
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
													<input type="text" class="form-control" name="shipping_address">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="d-flex align-items-center justify-content-between pt-4 border-top">
								<a href="<?= $base_url ?>/customer" class="btn btn-outline-white">Cancel</a>
								<button name="create" type="submit" class="btn btn-primary">Create New</button>
							</div>
						</form>
					</div><!-- end card body -->
				</div><!-- end card -->
			</div>
		</div><!-- end col -->
	</div>
	<!-- end row -->

</div>
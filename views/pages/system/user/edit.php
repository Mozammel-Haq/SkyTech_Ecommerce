<div class="content">

	<!-- start row -->
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div>
				<!-- Back link -->
				<div class="d-flex align-items-center justify-content-between mb-3">
					<h6><a href="<?= $base_url ?>/user"><i class="isax isax-arrow-left me-2"></i>User List</a></h6>
				</div>

				<!-- Main Card -->
				<div class="card">
					<div class="card-body">
						<h5 class="mb-3">Edit User</h5>

						<form action="<?= $base_url ?>/user/update" method="post" enctype="multipart/form-data">
							<!-- Image Upload -->
							<div class="mb-3 image-wrapper">
								<label class="form-label">Profile Image</label>
								<div class="d-flex align-items-center">
									<div class="avatar avatar-xxl border border-dashed bg-light me-3 flex-shrink-0 d-flex align-items-center justify-content-center imagePreview">
										<!-- Existing image shown if available -->
										<img id="edit_user_image_preview" src="" class="rounded-circle" alt="User Image">
										<i class="isax isax-image text-primary fs-24 " id="edit_user_image_icon"></i>
									</div>
									<div class="d-inline-flex flex-column align-items-start">
										<div class="drag-upload-btn btn btn-sm btn-primary position-relative mb-2">
											<i class="isax isax-image me-1"></i>Change Image
											<input type="file" name="photo" class="form-control image-sign position-absolute top-0 start-0 w-100 h-100 opacity-0" accept="image/*">
										</div>
										<span class="text-gray-9 fs-12 imageName">JPG or PNG format, max size 5MB.</span>
									</div>
								</div>
							</div>

							<input type="hidden" class="form-control" name="id" value="<?= $user->id ?>">

							<div class="row gx-3">
								<!-- First Name -->
								<div class="col-lg-6 col-md-6">
									<div class="mb-3">
										<label class="form-label">First Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="name" value="<?= $user->name ?>" required>
									</div>
								</div>


								<!-- Username -->
								<div class="col-lg-12">
									<div class="mb-3">
										<label class="form-label">Username <span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="username" value="<?= $user->username ?>" required>
									</div>
								</div>

								<!-- Email -->
								<div class="col-lg-6 col-md-6">
									<div class="mb-3">
										<label class="form-label">Email <span class="text-danger">*</span></label>
										<input type="email" class="form-control" name="email" value="<?= $user->email ?>" required>
									</div>
								</div>

								<!-- Phone -->
								<div class="col-lg-6 col-md-6">
									<div class="mb-3">
										<label class="form-label">Phone Number <span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="phone" value="<?= $user->phone ?>" required>
									</div>
								</div>

								<!-- Password -->
								<div class="col-lg-6 col-md-6">
									<div class="mb-3">
										<label class="form-label">Password</label>
										<div class="position-relative">
											<input type="password" class="form-control pass-input" name="password" placeholder="">
											<span class="isax toggle-password isax-eye-slash text-gray-7 fs-14 position-absolute end-0 top-50 translate-middle-y me-3"></span>
										</div>
									</div>
								</div>

								<!-- Confirm Password -->
								<div class="col-lg-6 col-md-6">
									<div class="mb-3">
										<label class="form-label">Confirm Password</label>
										<div class="position-relative">
											<input type="password" class="form-control pass-confirm" name="confirm_password" placeholder="">
											<span class="isax toggle-confirm isax-eye-slash text-gray-7 fs-14 position-absolute end-0 top-50 translate-middle-y me-3"></span>
										</div>
									</div>
								</div>

								<!-- Role -->
								<div class="col-lg-6 col-md-6">
									<div class="mb-3">
										<label class="form-label">Role</label>
										<?php
										echo Role::html_select('role');
										?>
									</div>
								</div>

								<!-- Status -->
								<div class="col-lg-6 col-md-6">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select" name="status">
											<option>Select</option>
											<option>Active</option>
											<option>offline</option>
										</select>
									</div>
								</div>
							</div>

							<!-- Footer Buttons -->
							<div class="d-flex align-items-center justify-content-between pt-4 border-top">
								<a href="<?= $base_url ?>/user" class="btn btn-outline-white">Cancel</a>
								<button type="submit" name="update" class="btn btn-primary">Update User</button>
							</div>

						</form>
					</div><!-- end card body -->
				</div><!-- end card -->
			</div>
		</div><!-- end col -->
	</div>
	<!-- end row -->

</div>
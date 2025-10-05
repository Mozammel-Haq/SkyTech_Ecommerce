<!-- Start Content -->
<div class="content content-two">

	<!-- Page Header -->
	<div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
		<div>
			<h6>Category</h6>
		</div>
		<div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
			<div>
				<a href="#" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_modal"><i class="isax isax-add-circle5 me-1"></i>New Category</a>
			</div>
		</div>
	</div>
	<!-- End Page Header -->

	<!-- Table Search -->
	<div class="mb-3">
		<div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
			<div class="d-flex align-items-center flex-wrap gap-2">
				<div class="table-search d-flex align-items-center mb-0">
					<div class="search-input">
						<a href="javascript:void(0);" class="btn-searchset"><i class="isax isax-search-normal fs-12"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Table Search -->

	<!-- Table List -->
	<div class="table-responsive">
		<table class="table table-nowrap datatable">
			<thead class="thead-light">
				<tr>
					<th class="no-sort">
						<div class="form-check form-check-md">
							<input class="form-check-input" type="checkbox" id="select-all">
						</div>
					</th>
					<th class="no-sort">Category</th>
					<th class="no-sort">Description</th>
					<th class="no-sort">Status</th>
					<th class="no-sort">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data as $row): ?>
					<tr>
						<td>
							<div class="form-check form-check-md">
								<input class="form-check-input" type="checkbox">
							</div>
						</td>
						<td>
							<div class="d-flex align-items-center">
								<a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
									<img src="<?= $base_url ?>/assets/img/products/<?= $row['image_path'] ?>" class="rounded-circle" alt="img">
								</a>
								<div>
									<h6 class="fs-14 fw-medium mb-0"><?= htmlspecialchars($row['name']) ?></h6>
								</div>
							</div>
						</td>
						<td><?= htmlspecialchars($row['description']) ?></td>
						<td>
							<div class="form-check form-switch">
								<input class="form-check-input toggle-status"
									type="checkbox"
									data-id="<?= intval($row['id']) ?>"
									<?= ($row['status'] == 1 ? 'checked' : '') ?>>
							</div>
						</td>
						<td class="action-item">
							<a href="javascript:void(0);" data-bs-toggle="dropdown">
								<i class="isax isax-more"></i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="javascript:void(0);"
										class="dropdown-item editBtn"
										data-bs-toggle="modal"
										data-bs-target="#edit_modal"
										data-id="<?= $row['id'] ?>"
										data-name="<?= htmlspecialchars($row['name'], ENT_QUOTES) ?>"
										data-description="<?= htmlspecialchars($row['description'], ENT_QUOTES) ?>"
										data-status="<?= $row['status'] ?>"
										data-image="<?= $row['image_path'] ?>">
										<i class="isax isax-edit me-2"></i>Edit
									</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal">
										<i class="isax isax-trash me-2"></i>Delete
									</a>
								</li>
							</ul>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<!-- /Table List -->

</div>
<!-- End Content -->

<!-- Add Category Modal -->
<div class="modal fade" id="add_modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h5 class="modal-title">Add New Category</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<!-- Modal Body -->
			<div class="modal-body">
				<form action="<?= $base_url ?>/products/saveCategory" method="POST" enctype="multipart/form-data">

					<!-- Category Name -->
					<div class="mb-3">
						<label for="category_name" class="form-label">Category Name</label>
						<input type="text" class="form-control" id="category_name" name="name" required>
					</div>

					<!-- Category Image Upload with Preview -->
					<div class="mb-3 image-wrapper">
						<label class="form-label">Category Image</label>
						<div class="d-flex align-items-center">
							<div class="avatar avatar-xxl border border-dashed bg-light me-3 flex-shrink-0 d-flex align-items-center justify-content-center imagePreview">
								<img id="add_category_image_preview" src="" class="rounded-circle d-none" alt="Category Image">
								<i class="isax isax-image text-primary fs-24" id="add_category_image_icon"></i>
							</div>
							<div class="d-inline-flex flex-column align-items-start">
								<div class="drag-upload-btn btn btn-sm btn-primary position-relative mb-2">
									<i class="isax isax-image me-1"></i>Upload Image
									<input type="file" name="image" class="category_image form-control image-sign position-absolute top-0 start-0 w-100 h-100 opacity-0" accept="image/*">
								</div>
								<span class="text-gray-9 fs-12 imageName">JPG or PNG format, max size 5MB.</span>
							</div>
						</div>
					</div>

					<!-- Category Description -->
					<div class="mb-3">
						<label for="category_description" class="form-label">Description</label>
						<textarea class="form-control" id="category_description" name="description" rows="3"></textarea>
					</div>

					<!-- Status -->
					<div class="mb-3 form-check form-switch">
						<input class="form-check-input" type="checkbox" id="category_status" name="status" value="1" checked>
						<label class="form-check-label" for="category_status">Active</label>
					</div>

					<!-- Submit Button -->
					<div class="text-end">
						<button name="submit_btn" type="submit" class="btn btn-primary">Save Category</button>
					</div>

				</form>
			</div>

		</div>
	</div>
</div>

<!-- Update Category Modal -->
<div class="modal fade" id="edit_modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h5 class="modal-title">Update Category</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<!-- Modal Body -->
			<div class="modal-body">
				<form action="<?= $base_url ?>/products/updateCategory" method="POST" enctype="multipart/form-data">

					<!-- ID -->
					<input type="hidden" id="edit_category_id" name="id">

					<!-- Category Name -->
					<div class="mb-3">
						<label for="edit_category_name" class="form-label">Category Name</label>
						<input type="text" class="form-control" id="edit_category_name" name="name" required>
					</div>

					<!-- Category Image Upload with Preview -->
					<div class="mb-3 image-wrapper">
						<label class="form-label">Category Image</label>
						<div class="d-flex align-items-center">
							<div class="avatar avatar-xxl border border-dashed bg-light me-3 flex-shrink-0 d-flex align-items-center justify-content-center imagePreview">
								<img id="edit_category_image_preview" src="" class="rounded-circle" alt="Category Image">
							</div>
							<div class="d-inline-flex flex-column align-items-start">
								<div class="drag-upload-btn btn btn-sm btn-primary position-relative mb-2">
									<i class="isax isax-image me-1"></i>Upload Image
									<input type="file" name="image" class="category_image form-control image-sign position-absolute top-0 start-0 w-100 h-100 opacity-0" accept="image/*">
								</div>
								<span class="text-gray-9 fs-12 imageName">JPG or PNG format, max size 5MB.</span>
							</div>
						</div>
					</div>

					<!-- Category Description -->
					<div class="mb-3">
						<label for="edit_category_description" class="form-label">Description</label>
						<textarea class="form-control" id="edit_category_description" name="description" rows="3"></textarea>
					</div>

					<!-- Status -->
					<div class="mb-3 form-check form-switch">
						<input class="form-check-input" type="checkbox" id="edit_category_status" name="status" value="1">
						<label class="form-check-label" for="edit_category_status">Active</label>
					</div>

					<!-- Submit Button -->
					<div class="text-end">
						<button name="update_btn" type="submit" class="btn btn-primary">Update Category</button>
					</div>

				</form>
			</div>

		</div>
	</div>
</div>

<!-- Delete Category Modal -->
<div class="modal fade" id="delete_modal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h5 class="modal-title text-danger">Delete Category</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<!-- Modal Body -->
			<div class="modal-body">
				<p class="mb-0">Are you sure you want to delete this category?</p>
			</div>

			<!-- Modal Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
				<a href="<?= $base_url ?>/products/deleteCategory/<?= $row['id'] ?>" id="confirmDelete" class="btn btn-danger">Delete</a>
			</div>

		</div>
	</div>
</div>
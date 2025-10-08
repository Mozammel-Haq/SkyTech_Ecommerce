			<!-- Start Content -->
			<div class="content content-two">

				<!-- Page Header -->
				<div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
					<div>
						<h6>Units</h6>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
						<div>
							<a href="#" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_unit_modal"><i class="isax isax-add-circle5 me-1"></i>New Unit</a>
						</div>
					</div>
				</div>
				<!-- End Page Header -->

				<!-- start row -->
				<div class="row">
					<div class="col-md-3">
						<div class="input-group mb-3">
							<span class="input-group-text bg-white border-end-0">
								<i class="isax isax-search-normal fs-12"></i>
							</span>
							<input type="text" class="form-control border-start-0 ps-0 bg-white" placeholder="Search">
						</div>
					</div> <!-- end col -->
				</div>
				<!-- end row -->

				<div class="table-responsive border border-bottom-0 rounded">
					<table class="table table-nowrap datatable m-0">
						<thead class="table-light">
							<tr>
								<th class="no-sort">
									<div class="form-check form-check-md">
										<input class="form-check-input" type="checkbox" id="select-all">
									</div>
								</th>
								<th>Unit Name</th>
								<th class="no-sort">Short Name</th>
								<th class="no-sort">Actions</th>
							</tr>
						</thead>
						<tbody>

							<?php
							foreach ($data as $row) :
							?>
								<tr>
									<td>
										<div class="form-check form-check-md">
											<input class="form-check-input" type="checkbox">
										</div>
									</td>
									<td>
										<h6 class="fs-14 fw-medium mb-0"><?= $row['name'] ?></h6>
									</td>
									<td><?= $row['short_name'] ?></td>
									<td class="action-item">
										<a href="javascript:void(0);" data-bs-toggle="dropdown">
											<i class="isax isax-more"></i>
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="javascript:void(0);"
													class="dropdown-item editUnitBtn"
													data-bs-toggle="modal"
													data-bs-target="#edit_unit_modal"
													data-id="<?= $row['id'] ?>"
													data-name="<?= htmlspecialchars($row['name'], ENT_QUOTES) ?>"
													data-short_name="<?= htmlspecialchars($row['short_name'], ENT_QUOTES) ?>"
													data-status="<?= $row['status'] ?>">
													<i class="isax isax-edit me-2"></i>Edit
												</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
											</li>
										</ul>
									</td>
								</tr>
							<?php
							endforeach;
							?>
						</tbody>
					</table> <!-- end table -->
				</div>

			</div>
			<!-- End Content -->


			<!-- Add Unit Modal -->
			<div class="modal fade" id="add_unit_modal" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">

						<!-- Modal Header -->
						<div class="modal-header">
							<h5 class="modal-title">Add New Unit</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>

						<!-- Modal Body -->
						<div class="modal-body">
							<form action="<?= $base_url ?>/products/saveUnit" method="POST">

								<!-- Unit Name -->
								<div class="mb-3">
									<label for="unit_name" class="form-label">Unit Name</label>
									<input type="text" class="form-control" id="unit_name" name="name" placeholder="e.g., Piece" required>
								</div>

								<!-- Short Name -->
								<div class="mb-3">
									<label for="unit_short_name" class="form-label">Short Name</label>
									<input type="text" class="form-control" id="unit_short_name" name="short_name" placeholder="e.g., pc" required>
								</div>
								<!-- Submit Button -->
								<div class="text-end">
									<button name="save_btn" type="submit" class="btn btn-primary">Save Unit</button>
								</div>

							</form>
						</div>

					</div>
				</div>
			</div>
			<!-- Edit Unit Modal -->
			<div class="modal fade" id="edit_unit_modal" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">

						<!-- Modal Header -->
						<div class="modal-header">
							<h5 class="modal-title">Update Unit</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>

						<!-- Modal Body -->
						<div class="modal-body">
							<form action="<?= $base_url ?>/products/updateUnit" method="POST">

								<!-- Hidden ID -->
								<input type="hidden" id="edit_unit_id" name="id">
								<!-- Unit Name -->
								<div class="mb-3">
									<label for="edit_unit_name" class="form-label">Unit Name</label>
									<input type="text" class="form-control" id="edit_unit_name" name="name" required>
								</div>

								<!-- Short Name -->
								<div class="mb-3">
									<label for="edit_unit_short_name" class="form-label">Short Name</label>
									<input type="text" class="form-control" id="edit_unit_short_name" name="short_name" required>
								</div>

								<!-- Submit Button -->
								<div class="text-end">
									<button name="update_btn" type="submit" class="btn btn-primary">Update Unit</button>
								</div>

							</form>
						</div>

					</div>
				</div>
			</div>


			<!-- Delete Unit Modal -->
			<div class="modal fade" id="delete_modal" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-sm">
					<div class="modal-content">

						<!-- Modal Header -->
						<div class="modal-header">
							<h5 class="modal-title text-danger">Delete Unit</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>

						<!-- Modal Body -->
						<div class="modal-body">
							<p class="mb-0">Are you sure you want to delete this Unit?</p>
						</div>

						<!-- Modal Footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
							<a href="<?= $base_url ?>/products/deleteUnit/<?= $row['id'] ?>" id="confirmDelete" class="btn btn-danger">Delete</a>
						</div>

					</div>
				</div>
			</div>
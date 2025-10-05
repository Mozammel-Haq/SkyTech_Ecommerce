<!-- Start Content -->
<div class="content content-two">

    <!-- Page Header -->
    <div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
        <div>
            <h6>Brands</h6>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
            <div>
                <a href="#" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_brand_modal">
                    <i class="isax isax-add-circle5 me-1"></i>New Brand
                </a>
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
        </div>
    </div>
    <!-- end row -->

    <div class="table-responsive border border-bottom-0 rounded">
        <table class="table table-nowrap m-0">
            <thead class="table-light">
                <tr>
                    <th class="no-sort">
                        <div class="form-check form-check-md">
                            <input class="form-check-input" type="checkbox" id="select-all">
                        </div>
                    </th>
                    <th>Brand Name</th>
                    <th class="no-sort">Description</th>
                    <th class="no-sort">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) : ?>
                    <tr>
                        <td>
                            <div class="form-check form-check-md">
                                <input class="form-check-input" type="checkbox">
                            </div>
                        </td>
                        <td>
                            <h6 class="fs-14 fw-medium mb-0"><?= $row['name'] ?></h6>
                        </td>
                        <td><?= $row['description'] ?></td>
                        <td class="action-item">
                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                <i class="isax isax-more"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="javascript:void(0);"
                                        class="dropdown-item editBrandBtn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#edit_brand_modal"
                                        data-id="<?= $row['id'] ?>"
                                        data-name="<?= htmlspecialchars($row['name'], ENT_QUOTES) ?>"
                                        data-description="<?= htmlspecialchars($row['description'], ENT_QUOTES) ?>">
                                        <i class="isax isax-edit me-2"></i>Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"
                                        class="dropdown-item deleteBrandBtn d-flex align-items-center"
                                        data-bs-toggle="modal"
                                        data-bs-target="#delete_modal"
                                        data-id="<?= $row['id'] ?>">
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

</div>
<!-- End Content -->

<!-- Add Brand Modal -->
<div class="modal fade" id="add_brand_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= $base_url ?>/products/saveBrand" method="POST">
                    <div class="mb-3">
                        <label for="brand_name" class="form-label">Brand Name</label>
                        <input type="text" class="form-control" id="brand_name" name="name" placeholder="e.g., Samsung" required>
                    </div>
                    <div class="mb-3">
                        <label for="brand_description" class="form-label">Description</label>
                        <textarea class="form-control" id="brand_description" name="description" rows="3" placeholder="Short description..."></textarea>
                    </div>
                    <div class="text-end">
                        <button name="save_btn" type="submit" class="btn btn-primary">Save Brand</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Brand Modal -->
<div class="modal fade" id="edit_brand_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= $base_url ?>/products/updateBrand" method="POST">
                    <input type="hidden" id="edit_brand_id" name="id">
                    <div class="mb-3">
                        <label for="edit_brand_name" class="form-label">Brand Name</label>
                        <input type="text" class="form-control" id="edit_brand_name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_brand_description" class="form-label">Description</label>
                        <textarea class="form-control" id="edit_brand_description" name="description" rows="3"></textarea>
                    </div>
                    <div class="text-end">
                        <button name="update_btn" type="submit" class="btn btn-primary">Update Brand</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Brand Modal -->
<div class="modal fade" id="delete_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger">Delete Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Are you sure you want to delete this Brand?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="<?= $base_url ?>/products/deleteBrand/<?= $row['id'] ?>" id="confirmDelete" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>
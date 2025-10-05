<!-- Start Container  -->
<div class='content content-two'>

    <!-- Page Header -->
    <div class='d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3'>
        <div>
            <h6>Products</h6>
        </div>
        <div class='d-flex my-xl-auto right-content align-items-center flex-wrap gap-2'>
            <div class='dropdown'>
                <a href='javascript:void(0);' class='btn btn-outline-white d-inline-flex align-items-center' data-bs-toggle='dropdown'>
                    <i class='isax isax-export-1 me-1'></i>Export
                </a>
                <ul class='dropdown-menu'>
                    <li>
                        <a class='dropdown-item' href='javascript:void(0);'>Download as PDF</a>
                    </li>
                    <li>
                        <a class='dropdown-item' href='javascript:void(0);'>Download as Excel</a>
                    </li>
                </ul>
            </div>
            <div>
                <a href='<?= $base_url ?>/products/add' class='btn btn-primary d-flex align-items-center'><i class='isax isax-add-circle5 me-1'></i>New Product</a>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Start Table Search -->
    <div class='mb-3'>
        <div class='d-flex align-items-center justify-content-between flex-wrap gap-3'>
            <div class='d-flex align-items-center flex-wrap gap-2'>
                <div class='table-search d-flex align-items-center mb-0'>
                    <div class='search-input'>
                        <a href='javascript:void(0);' class='btn-searchset'><i class='isax isax-search-normal fs-12'></i></a>
                    </div>
                </div>
                <a class='btn btn-outline-white fw-normal d-inline-flex align-items-center' href='javascript:void(0);' data-bs-toggle='offcanvas' data-bs-target='#customcanvas'>
                    <i class='isax isax-filter me-1'></i>Filter
                </a>
            </div>
            <div class='d-flex align-items-center flex-wrap gap-2'>
                <div class='dropdown me-2'>
                    <a href='javascript:void(0);' class='dropdown-toggle btn btn-outline-white d-inline-flex align-items-center' data-bs-toggle='dropdown'>
                        <i class='isax isax-sort me-1'></i>Sort By : <span class='fw-normal ms-1'>Latest</span>
                    </a>
                    <ul class='dropdown-menu  dropdown-menu-end'>
                        <li>
                            <a href='javascript:void(0);' class='dropdown-item'>Latest</a>
                        </li>
                        <li>
                            <a href='javascript:void(0);' class='dropdown-item'>Oldest</a>
                        </li>
                    </ul>
                </div>
                <div class='dropdown'>
                    <a href='javascript:void(0);' class='dropdown-toggle btn btn-outline-white d-inline-flex align-items-center' data-bs-toggle='dropdown' data-bs-auto-close='outside'>
                        <i class='isax isax-grid-3 me-1'></i>Column
                    </a>
                    <ul class='dropdown-menu  dropdown-menu'>
                        <li>
                            <label class='dropdown-item d-flex align-items-center form-switch'>
                                <i class='fa-solid fa-grip-vertical me-3 text-default'></i>
                                <input class='form-check-input m-0 me-2' type='checkbox' checked>
                                <span>Code</span>
                            </label>
                        </li>
                        <li>
                            <label class='dropdown-item d-flex align-items-center form-switch'>
                                <i class='fa-solid fa-grip-vertical me-3 text-default'></i>
                                <input class='form-check-input m-0 me-2' type='checkbox' checked>
                                <span>Product</span>
                            </label>
                        </li>
                        <li>
                            <label class='dropdown-item d-flex align-items-center form-switch'>
                                <i class='fa-solid fa-grip-vertical me-3 text-default'></i>
                                <input class='form-check-input m-0 me-2' type='checkbox' checked>
                                <span>Category</span>
                            </label>
                        </li>
                        <li>
                            <label class='dropdown-item d-flex align-items-center form-switch'>
                                <i class='fa-solid fa-grip-vertical me-3 text-default'></i>
                                <input class='form-check-input m-0 me-2' type='checkbox' checked>
                                <span>Unit</span>
                            </label>
                        </li>
                        <li>
                            <label class='dropdown-item d-flex align-items-center form-switch'>
                                <i class='fa-solid fa-grip-vertical me-3 text-default'></i>
                                <input class='form-check-input m-0 me-2' type='checkbox' checked>
                                <span>Quantity</span>
                            </label>
                        </li>
                        <li>
                            <label class='dropdown-item d-flex align-items-center form-switch'>
                                <i class='fa-solid fa-grip-vertical me-3 text-default'></i>
                                <input class='form-check-input m-0 me-2' type='checkbox' checked>
                                <span>Selling Price</span>
                            </label>
                        </li>
                        <li>
                            <label class='dropdown-item d-flex align-items-center form-switch'>
                                <i class='fa-solid fa-grip-vertical me-3 text-default'></i>
                                <input class='form-check-input m-0 me-2' type='checkbox'>
                                <span>Purchase Price</span>
                            </label>
                        </li>
                        <li>
                            <label class='dropdown-item d-flex align-items-center form-switch'>
                                <i class='fa-solid fa-grip-vertical me-3 text-default'></i>
                                <input class='form-check-input m-0 me-2' type='checkbox'>
                                <span>Status</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Filter Info -->
        <div class='align-items-center gap-2 flex-wrap filter-info mt-3'>
            <h6 class='fs-13 fw-semibold'>Filters</h6>
            <span class='tag bg-light border rounded-1 fs-12 text-dark badge'><span class='num-count d-inline-flex align-items-center justify-content-center bg-success fs-10 me-1'>5</span>Products Selected<span class='ms-1 tag-close'><i class='fa-solid fa-x fs-10'></i></span></span>
            <span class='tag bg-light border rounded-1 fs-12 text-dark badge'><span class='num-count d-inline-flex align-items-center justify-content-center bg-success fs-10 me-1'>5</span>Unit Selected<span class='ms-1 tag-close'><i class='fa-solid fa-x fs-10'></i></span></span>
            <span class='tag bg-light border rounded-1 fs-12 text-dark badge'><span class='num-count d-inline-flex align-items-center justify-content-center bg-success fs-10 me-1'>5</span>Price Selected<span class='ms-1 tag-close'><i class='fa-solid fa-x fs-10'></i></span></span>
            <a href='#' class='link-danger fw-medium text-decoration-underline ms-md-1'>Clear All</a>
        </div>
        <!-- /Filter Info -->

    </div>
    <!-- End Table Search -->

    <!-- Start Table List -->
    <div class='table-responsive'>
        <table class='table table-nowrap datatable'>
            <thead>
                <tr>
                    <th class='no-sort'>
                        <div class='form-check form-check-md'>
                            <input class='form-check-input' type='checkbox' id='select-all'>
                        </div>
                    </th>
                    <th class='no-sort'>Code</th>
                    <th class='no-sort'>Product</th>
                    <th class='no-sort'>Category</th>
                    <th class='no-sort'>Unit</th>
                    <th>Selling Price</th>
                    <th>Purchase Price</th>
                    <th class='no-sort'></th>
                    <th class='no-sort'></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $row) {
                    echo "
    <tr>
        <td>
            <div class='form-check form-check-md'>
                <input class='form-check-input' type='checkbox'>
            </div>
        </td>
        <td><a href='javascript:void(0);' class='link-default'>{$row['code']}</a></td>
        <td>
            <div class='d-flex align-items-center'>
                <a href='javascript:void(0);' class='avatar avatar-sm rounded-circle me-2 flex-shrink-0'>
                    <img src='{$base_url}/assets/img/products/{$row['image_path']}' class='rounded-circle' alt='img'>
                </a>
                <div>
                    <h6 class='fs-14 fw-medium mb-0'><a href='javascript:void(0);'>{$row['name']}</a></h6>
                </div>
            </div>
        </td>
        <td>{$row['category']}</td>
        <td class='text-dark'>{$row['unit']}</td>
        <td class='text-dark'>$ {$row['selling_price']}</td>
        <td class='text-dark'>$ {$row['purchase_price']}</td>
        <td>
            <div class='form-check form-switch'>
                <input class='form-check-input' type='checkbox' role='switch' checked>
            </div>
        </td>
        <td class='action-item'>
            <a href='javascript:void(0);' data-bs-toggle='dropdown'>
                <i class='isax isax-more'></i>
            </a>
            <ul class='dropdown-menu'>
                <li>
                    <a href='edit-product.html' class='dropdown-item d-flex align-items-center'>
                        <i class='isax isax-edit me-2'></i>Edit
                    </a>
                </li>
                <li>
                    <a href='#' 
                       class='dropdown-item d-flex align-items-center deleteBtn'
                       data-id='{$row['id']}'
                       data-bs-toggle='modal'
                       data-bs-target='#delete_modal'>
                        <i class='isax isax-trash me-2'></i>Delete
                    </a>
                </li>
            </ul>
        </td>
    </tr>";
                }
                ?>



            </tbody>
        </table>
    </div>
    <!-- End Table List -->

</div>
<!-- container  -->

<!-- Delete Modal -->
<div class="modal fade" id="delete_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger">Delete Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Are you sure you want to delete this Product?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="#" id="confirmDelete" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>
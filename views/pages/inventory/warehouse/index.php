<?php
// print_r($data)
?>


<!-- Start Content -->
<div class="content content-two">

    <!-- Page Header -->
    <div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
        <div>
            <h6>Warehouses</h6>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
            <div>
                <a href="<?= $base_url ?>/warehouse/create" class="btn btn-primary d-flex align-items-center">
                    <i class="isax isax-add-circle5 me-1"></i>New Warehouse
                </a>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Search -->
    <div class="row">
        <div class="col-md-3">
            <div class="input-group mb-3">
                <span class="input-group-text bg-white border-end-0">
                    <i class="isax isax-search-normal fs-12"></i>
                </span>
                <input type="text" class="form-control border-start-0 ps-0 bg-white" placeholder="Search Warehouse">
            </div>
        </div>
    </div>
    <!-- End Search -->

    <!-- Table -->
    <div class="table-responsive border border-bottom-0 rounded">
        <table class="table table-nowrap m-0">
            <thead class="table-light">
                <tr>
                    <th class="no-sort">
                        <div class="form-check form-check-md">
                            <input class="form-check-input" type="checkbox" id="select-all">
                        </div>
                    </th>
                    <th>Warehouse Name</th>
                    <th>Address</th>
                    <th>Manager</th>
                    <th>Email</th>
                    <th>Phone</th>
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
                            <h6 class="fs-14 fw-medium mb-0"><?= $row->name ?></h6>
                        </td>
                        <td><?= $row->location ?></td>
                        <td><?= $row->manager ?></td>
                        <td><?= $row->email ?></td>
                        <td><?= $row->phone ?></td>
                        <td class="action-item">
                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                <i class="isax isax-more"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?= $base_url ?>/warehouse/edit/<?= $row->id ?>" class="dropdown-item">
                                        <i class="isax isax-edit me-2"></i>Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $base_url ?>/warehouse/delete/<?= $row->id ?>" class="dropdown-item text-danger">
                                        <i class="isax isax-trash me-2"></i>Delete
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>

            </tbody>
        </table>
    </div>
    <!-- End Table -->

</div>
<!-- End Content -->
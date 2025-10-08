<?php
// print_r($data);
?>

<div class="content content-two">

    <!-- Page Header -->
    <div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
        <div>
            <h6>Orders</h6>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
            <div class="dropdown">
                <a href="javascript:void(0);" class="btn btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                    <i class="isax isax-export-1 me-1"></i>Export
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#">Download as PDF</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Download as Excel</a>
                    </li>
                </ul>
            </div>
            <div>
                <a href="<?= $base_url ?>/order/create" class="btn btn-primary d-flex align-items-center">
                    <i class="isax isax-add-circle5 me-1"></i>New Order
                </a>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Table Search Start -->
    <div class="mb-3">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
            <div class="d-flex align-items-center flex-wrap gap-2">
                <div class="table-search d-flex align-items-center mb-0">
                    <div class="search-input">
                        <a href="javascript:void(0);" class="btn-searchset"><i class="isax isax-search-normal fs-12"></i></a>
                        <div id="DataTables_Table_0_filter" class="dataTables_filter"><label> <input type="search" class="form-control form-control-sm" placeholder="Search" aria-controls="DataTables_Table_0"></label></div>
                    </div>
                </div>
                <a class="btn btn-outline-white fw-normal d-inline-flex align-items-center" href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#customcanvas">
                    <i class="isax isax-filter me-1"></i>Filter
                </a>
            </div>
            <div class="d-flex align-items-center flex-wrap gap-2">
                <div class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="isax isax-sort me-1"></i>Sort By : <span class="fw-normal ms-1">Latest</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" style="">
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">Latest</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">Oldest</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <i class="isax isax-grid-3 me-1"></i>Column
                    </a>
                    <ul class="dropdown-menu" style="">
                        <li>
                            <label class="dropdown-item d-flex align-items-center form-switch">
                                <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                <input class="form-check-input m-0 me-2" type="checkbox" checked="">
                                <span>Orders</span>
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center form-switch">
                                <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                <input class="form-check-input m-0 me-2" type="checkbox" checked="">
                                <span>Phone</span>
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center form-switch">
                                <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                <input class="form-check-input m-0 me-2" type="checkbox" checked="">
                                <span>Counrty</span>
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center form-switch">
                                <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                <input class="form-check-input m-0 me-2" type="checkbox">
                                <span>Balance</span>
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center form-switch">
                                <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                <input class="form-check-input m-0 me-2" type="checkbox" checked="">
                                <span>Total Invoice</span>
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center form-switch">
                                <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                <input class="form-check-input m-0 me-2" type="checkbox">
                                <span>Created On</span>
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center form-switch">
                                <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                <input class="form-check-input m-0 me-2" type="checkbox" checked="">
                                <span>Status</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Filter Info -->
        <div class="align-items-center gap-2 flex-wrap filter-info mt-3">
            <h6 class="fs-13 fw-semibold">Filters</h6>
            <span class="tag bg-light border rounded-1 fs-12 text-dark badge"><span class="num-count d-inline-flex align-items-center justify-content-center bg-success fs-10 me-1">5</span>orders Selected<span class="ms-1 tag-close"><i class="fa-solid fa-x fs-10"></i></span></span>
            <span class="tag bg-light border rounded-1 fs-12 text-dark badge"><span class="num-count d-inline-flex align-items-center justify-content-center bg-success fs-10 me-1">1</span>$10,000 - $25,000<span class="ms-1 tag-close"><i class="fa-solid fa-x fs-10"></i></span></span>
            <span class="tag bg-light border rounded-1 fs-12 text-dark badge"><span class="num-count d-inline-flex align-items-center justify-content-center bg-success fs-10 me-1">2</span>Status Selected<span class="ms-1 tag-close"><i class="fa-solid fa-x fs-10"></i></span></span>
            <a href="#" class="link-danger fw-medium text-decoration-underline ms-md-1">Clear All</a>
        </div>
        <!-- /Filter Info -->
    </div>
    <!-- Table Search End -->

    <!-- Table List -->
    <div class="table-responsive">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer  mb-3">
            <table class="table table-nowrap datatable dataTable no-footer" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                <thead class="thead-light">
                    <tr>
                        <th class="no-sort sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="CheckBox: activate to sort column descending">
                            <div class="form-check form-check-md">
                                <input class="form-check-input" type="checkbox" id="select-all">
                            </div>
                        </th>
                        <th class="no-sort" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="OrderNumber: activate to sort column ascending">Order ID</th>
                        <th class="no-sort" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Product: activate to sort column ascending">Product</th>
                        <th class="no-sort" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Quantity: activate to sort column ascending">Quantity</th>

                        <th class="no-sort" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Total Amount: activate to sort column ascending">Total Amount</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Tracking: activate to sort column ascending">Tracking</th>

                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Created On: activate to sort column ascending">Order_date</th>


                        <th class="no-sort sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending"></th>
                        <th class="no-sort sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($data as $row) :
                    ?>

                        <tr class="odd">
                            <td class="sorting_1">
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                #<?= $row->order_id ?>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                        <img src="<?= $base_url ?>/assets/img/products/<?= $row->image_path ?>" class="rounded-circle" alt="img">
                                    </a>
                                    <div>
                                        <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);"><?= $row->product_name ?></a></h6>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <?= $row->quantity ?>
                            </td>

                            <td>$ <?= $row->total_amount ?></td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center"> <?= $row->status ?> <i class="isax isax-tick-circle ms-1"></i></span>
                            </td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center"> <?= $row->tracking ?> <i class="isax isax-tick-circle ms-1"></i></span>
                            </td>
                            <td> <?= $row->order_date ?></td>
                            <td>
                                <a href="<?= $base_url ?>/order/create/<?= $row->order_id ?>" class="btn btn-sm btn-outline-white d-inline-flex align-items-center me-1">
                                    <i class="isax isax-add-circle me-1"></i> Invoice
                                </a>
                            </td>

                            <td class="action-item">
                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="">
                                    <i class="isax isax-more"></i>
                                </a>
                                <ul class="dropdown-menu" style="">
                                    <li>
                                        <a href="<?= $base_url ?>/order/show/<?= $row->order_id ?>" class="dropdown-item d-flex align-items-center"><i class="isax isax-eye me-2"></i>View</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-archive-2 me-2"></i>Archive</a>
                                    </li>
                                    <li>
                                        <a href="<?= $base_url ?>/order/confirm/<?= $row->order_id ?>" class="dropdown-item d-flex align-items-center"><i class="isax isax-trash me-2"></i>Delete</a>
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
        <!-- /Table List -->

    </div>



</div>
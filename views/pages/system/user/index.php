<div class="content content-two">

    <!-- Page Header -->
    <div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
        <div>
            <h6>Users</h6>
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
                <a href="<?= $base_url ?>/user/create" class="btn btn-primary d-flex align-items-center">
                    <i class="isax isax-add-circle5 me-1"></i>New User
                </a>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

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
                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                        <i class="isax isax-sort me-1"></i>Sort By : <span class="fw-normal ms-1">Latest</span>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end">
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">Latest</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">Oldest</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                        <i class="isax isax-grid-3 me-1"></i>Column
                    </a>
                    <ul class="dropdown-menu  dropdown-menu">
                        <li>
                            <label class="dropdown-item d-flex align-items-center form-switch">
                                <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                <input class="form-check-input m-0 me-2" type="checkbox" checked="">
                                <span>User</span>
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
                                <span>Role</span>
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center form-switch">
                                <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                <input class="form-check-input m-0 me-2" type="checkbox">
                                <span>Last Activity</span>
                            </label>
                        </li>
                        <li>
                            <label class="dropdown-item d-flex align-items-center form-switch">
                                <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                <input class="form-check-input m-0 me-2" type="checkbox" checked="">
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
        <div class="align-items-center gap-2 flex-wrap filter-info mt-3">
            <h6 class="fs-13 fw-semibold">Filters</h6>
            <span class="tag bg-light border rounded-1 fs-12 text-dark badge"><span class="num-count d-inline-flex align-items-center justify-content-center bg-success fs-10 me-1">5</span>Users Selected<span class="ms-1 tag-close"><i class="fa-solid fa-x fs-10"></i></span></span>
            <span class="tag bg-light border rounded-1 fs-12 text-dark badge"><span class="num-count d-inline-flex align-items-center justify-content-center bg-success fs-10 me-1">5</span>Status Selected<span class="ms-1 tag-close"><i class="fa-solid fa-x fs-10"></i></span></span>
            <a href="#" class="link-danger fw-medium text-decoration-underline ms-md-1">Clear All</a>
        </div>
    </div>

    <div class="table-responsive">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
            <table class="table table-nowrap datatable dataTable no-footer" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                <thead class="thead-light">
                    <tr>
                        <th class="no-sort sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                    
                                        
                                    
                                : activate to sort column descending">
                            <div class="form-check form-check-md">
                                <input class="form-check-input" type="checkbox" id="select-all">
                            </div>
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="User: activate to sort column ascending">User</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending">Phone</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending">Role</th>
                        <th class="no-sort sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Activity: activate to sort column ascending">Last Activity</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Create On: activate to sort column ascending">Create On</th>
                        <th class="no-sort sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
                        <th class="no-sort sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending"></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($data as $row) :
                        $role = Role::find($row->role_id);
                    ?>

                        <tr class="odd">
                            <td class="sorting_1">
                                <div class="form-check form-check-md">
                                    <input class="form-check-input" type="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                        <img src="<?= $base_url ?>/assets/img/profiles/<?= $row->photo ?>" class="rounded-circle" alt="img">
                                    </a>
                                    <div>
                                        <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);"><?= $row->name ?></a></h6>
                                    </div>
                                </div>
                            </td>
                            <td><?= $row->phone ?></td>
                            <td class="text-dark"><?= $role->name ?? "" ?></td>
                            <td class="text-dark">Online</td>
                            <td>22 Feb 2025</td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center"><?= $row->status ?>
                                    <i class="isax isax-tick-circle ms-1"></i>
                                </span>
                            </td>
                            <td class="action-item">
                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="isax isax-more"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?= $base_url ?>/user/edit/<?= $row->id ?>" class="dropdown-item d-flex align-items-center">
                                            <i class="isax isax-edit me-2"></i>Edit
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"
                                            data-bs-toggle="modal" data-bs-target="#delete_modal_<?= $row->id ?>">
                                            <i class="isax isax-trash me-2"></i>Delete
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>

                        <!-- Individual Delete Modal  -->
                        <div class="modal fade" id="delete_modal_<?= $row->id ?>">
                            <div class="modal-dialog modal-dialog-centered modal-sm">
                                <div class="modal-content">
                                    <div class="modal-body text-center">
                                        <div class="mb-3">
                                            <img src="<?= $base_url ?>/assets/img/icons/delete.svg" alt="img">
                                        </div>
                                        <h6 class="mb-1">Delete User</h6>
                                        <p class="mb-3">Are you sure you want to delete <b><?= $row->name ?></b>?</p>
                                        <div class="d-flex justify-content-center">
                                            <a href="<?= $base_url ?>/user" class="btn btn-outline-white me-3" data-bs-dismiss="modal">Cancel</a>
                                            <a href="<?= $base_url ?>/user/delete/<?= $row->id ?>" class="btn btn-primary">Yes, Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </tbody>
            </table>

            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">1 - 10 of 14 items</div>
        </div>
        <!-- end table -->

    </div>

</div>
<!-- Delete Modal -->
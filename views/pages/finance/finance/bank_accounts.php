            <!-- Start Content -->
            <div class="content content-two">

                <!-- Start Breadcrumb -->
                <div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
                    <div>
                        <h6 class="mb-0">Bank Accounts</h6>
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
                        <a href="bank-accounts-type.html" class="btn btn-dark d-inline-flex align-items-center">Account Type</a>
                        <a href="#" class="btn btn-primary d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_modal">
                            <i class="isax isax-add-circle5 me-1"></i>New Bank Account
                        </a>
                    </div>
                </div>
                <!-- End Breadcrumb -->

                <!-- Start Table Search -->
                <div class="mb-3">

                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <div class="table-search d-flex align-items-center mb-0">
                                <div class="search-input">
                                    <a href="javascript:void(0);" class="btn-searchset"><i class="isax isax-search-normal fs-12"></i></a>
                                </div>
                            </div>
                            <a class="btn btn-outline-white fw-normal d-inline-flex align-items-center" href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#customcanvas">
                                <i class="isax isax-filter me-1"></i>Filter
                            </a>
                        </div>
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-outline-white d-inline-flex align-items-center fw-medium" data-bs-toggle="dropdown">
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
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Account Holder</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Account No</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Account Type</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Notes</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Opening Balance</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox">
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
                        <span class="tag bg-light border rounded-1 fs-12 text-dark badge"><span class="num-count d-inline-flex align-items-center justify-content-center bg-success fs-10 me-1">5</span>Account Holders Selected<span class="ms-1 tag-close"><i class="fa-solid fa-x fs-10"></i></span></span>
                        <span class="tag bg-light border rounded-1 fs-12 text-dark badge"><span class="num-count d-inline-flex align-items-center justify-content-center bg-success fs-10 me-1">5</span>$10,000 - $25,500<span class="ms-1 tag-close"><i class="fa-solid fa-x fs-10"></i></span></span>
                        <a href="#" class="link-danger fw-medium text-decoration-underline ms-md-1">Clear All</a>
                    </div>
                    <!-- /Filter Info -->
                </div>
                <!-- End Table Search -->

                <!-- Start Table List -->
                <div class="table-responsive">
                    <table class="table table-nowrap datatable">
                        <thead class="thead-light">
                            <tr>
                                <th class="no-sort">
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox" id="select-all">
                                    </div>
                                </th>
                                <th class="no-sort">Account Holder Name</th>
                                <th class="no-sort">Account No</th>
                                <th class="no-sort">Account Type</th>
                                <th class="no-sort">Notes</th>
                                <th>Opening Balance</th>
                                <th class="no-sort">Status</th>
                                <th class="no-sort"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-28.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-28.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Emily Clark</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    3298784309485
                                </td>
                                <td>
                                    Savings Account
                                </td>
                                <td>Account that allows individuals to save money</td>
                                <td class="text-dark">$200</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-soft-success badge-sm d-inline-flex align-items-center">
                                            Active <i class="isax isax-tick-circle4 ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-29.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-29.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">John Carter</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    5475878970090
                                </td>
                                <td>
                                    Current Account
                                </td>
                                <td>Designed for businesses and individuals</td>
                                <td class="text-dark">$50</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-soft-danger badge-sm d-inline-flex align-items-center">
                                            Inactive <i class="isax isax-close-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-12.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-12.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Sophia White</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    3255465758698
                                </td>
                                <td>
                                    Savings account
                                </td>
                                <td>Account that allows individuals to save money</td>
                                <td class="text-dark">$800</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-soft-success badge-sm d-inline-flex align-items-center">
                                            Active <i class="isax isax-tick-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-06.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-06.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Michael Johnson</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    4353689870544
                                </td>
                                <td>
                                    Salary Account
                                </td>
                                <td>Savings account specifically for salaried employees</td>
                                <td class="text-dark">$100</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-soft-danger badge-sm d-inline-flex align-items-center">
                                            Inactive <i class="isax isax-close-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-30.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-30.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Olivia Harris</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    4324356677889
                                </td>
                                <td>
                                    Savings account
                                </td>
                                <td>Account that allows individuals to save money</td>
                                <td class="text-dark">$700</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-soft-success badge-sm d-inline-flex align-items-center">
                                            Active <i class="isax isax-tick-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-16.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-16.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">David Anderson</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    2343547586900
                                </td>
                                <td>
                                    Current Account
                                </td>
                                <td>Designed for businesses and individuals</td>
                                <td class="text-dark">$1000</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-soft-danger badge-sm d-inline-flex align-items-center">
                                            Inactive <i class="isax isax-close-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-17.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-17.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Emma Lewis</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    3354456565687
                                </td>
                                <td>
                                    Salary Account
                                </td>
                                <td>Savings account specifically for salaried employees</td>
                                <td class="text-dark">$1200</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-success d-inline-flex align-items-center">
                                            Active <i class="isax isax-tick-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-23.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-23.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Robert Thomas</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    3453647664889
                                </td>
                                <td>
                                    Savings account
                                </td>
                                <td>Account that allows individuals to save money</td>
                                <td class="text-dark">$500</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-soft-danger badge-sm d-inline-flex align-items-center">
                                            Inactive <i class="isax isax-close-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-07.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Isabella Scott</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    9876543210123
                                </td>
                                <td>
                                    Current Account
                                </td>
                                <td>Designed for businesses and individuals</td>
                                <td class="text-dark">$600</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-success d-inline-flex align-items-center">
                                            Active <i class="isax isax-tick-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-31.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-31.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Daniel Martinez</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    4567891234567
                                </td>
                                <td>
                                    Salary Account
                                </td>
                                <td>Savings account specifically for salaried employees</td>
                                <td class="text-dark">$450</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-soft-danger badge-sm d-inline-flex align-items-center">
                                            Inactive <i class="isax isax-close-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-09.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-09.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Charlotte Brown</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    6543217896543
                                </td>
                                <td>
                                    Savings account
                                </td>
                                <td>Account that allows individuals to save money</td>
                                <td class="text-dark">$300</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-success d-inline-flex align-items-center">
                                            Active <i class="isax isax-tick-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-21.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-21.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">William Parker</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    3692581473692
                                </td>
                                <td>
                                    Current Account
                                </td>
                                <td>Designed for businesses and individuals</td>
                                <td class="text-dark">$850</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-soft-danger badge-sm d-inline-flex align-items-center">
                                            Inactive <i class="isax isax-close-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-30.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-30.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Mia Thompson</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    3214569873214
                                </td>
                                <td>
                                    Savings account
                                </td>
                                <td>Account that allows individuals to save money</td>
                                <td class="text-dark">$450</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-success d-inline-flex align-items-center">
                                            Active <i class="isax isax-tick-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-07.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Amelia Robinson</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    1597534682597
                                </td>
                                <td>
                                    Current Account
                                </td>
                                <td>Designed for businesses and individuals</td>
                                <td class="text-dark">$750</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-soft-danger badge-sm d-inline-flex align-items-center">
                                            Inactive <i class="isax isax-close-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- End Table List -->

            </div>
            <!-- End Content -->
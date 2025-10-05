            <!-- Start Content -->
            <div class="content content-two">

                <!-- Page Header -->
                <div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
                    <div>
                        <h6>Tickets List</h6>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
                        <div class="d-flex align-items-center">
                            <a href="tickets-list.html" class="btn btn-primary p-2 d-inline-flex align-items-center justify-content-center me-2"><i class="isax isax-menu-1"></i></a>
                            <a href="tickets.html" class="btn btn-outline-white p-2 d-inline-flex align-items-center justify-content-center me-2"><i class="isax isax-grid-25"></i></a>
                            <a href="ticket-kanban.html" class="btn btn-outline-white p-2 d-inline-flex align-items-center justify-content-center me-1"><i class="isax isax-kanban"></i></a>
                        </div>
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
                            <a href="javascript:void(0);" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_modal">
                                <i class="isax isax-add-circle5 me-1"></i>New Tickets

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
                                <ul class="dropdown-menu  dropdown-menu-lg">
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Company</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Plan</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Billing Cycle</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox">
                                            <span>Payment Mode</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Amount</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Created On</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Expiring Date</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Status</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table Search End -->

                <!-- Table List Start -->
                <div class="table-responsive">
                    <table class="table table-nowrap datatable">
                        <thead class="thead-light">
                            <tr>
                                <th class="no-sort">
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox" id="select-all">
                                    </div>
                                </th>
                                <th class="no-sort">Ticket ID</th>
                                <th class="">Subject</th>
                                <th class="">Assigned</th>
                                <th class="">Assigned Date</th>
                                <th class="no-sort">Priority</th>
                                <th class="">Created On</th>
                                <th class="">Assignee</th>
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
                                <td><a href="ticket-details.html">TK00025</a></td>
                                <td>Support for theme</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-28.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-28.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Emily Clark</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>22 Feb 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-warning">
                                            Medium
                                        </span>
                                    </div>
                                </td>
                                <td>04 Mar 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-16.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-16.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Sarah Michelle</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-success">
                                            Resolved<i class="isax isax-tick-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="ticket-details.html" class="dropdown-item d-flex align-items-center"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification me-2"></i>Activate</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification-bing me-2"></i>Deactivate</a>
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
                                <td><a href="ticket-details.html">TK00024</a></td>
                                <td>Verify your email</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-01.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-01.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">John Carter</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>07 Feb 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-info">
                                            Low
                                        </span>
                                    </div>
                                </td>
                                <td>20 Feb 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-26.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-26.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Daniel Patrick</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-warning">
                                            Pending<i class="isax isax-slash ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="ticket-details.html" class="dropdown-item d-flex align-items-center"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification me-2"></i>Activate</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification-bing me-2"></i>Deactivate</a>
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
                                <td><a href="ticket-details.html">TK00023</a></td>
                                <td>Calling for help</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-16.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-16.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Sophia White</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>30 Jan 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-danger">
                                            High
                                        </span>
                                    </div>
                                </td>
                                <td>13 Feb 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-27.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-27.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Emily Lauren</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-danger">
                                            Closed<i class="isax isax-close-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="ticket-details.html" class="dropdown-item d-flex align-items-center"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification me-2"></i>Activate</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification-bing me-2"></i>Deactivate</a>
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
                                <td><a href="ticket-details.html">TK00022</a></td>
                                <td>Management</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-08.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-08.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Michael Johnson</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>17 Jan 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-warning">
                                            Medium
                                        </span>
                                    </div>
                                </td>
                                <td>30 Jan 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-28.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-28.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Braun Kelton</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-info">
                                            Open<i class="isax isax-timer ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="ticket-details.html" class="dropdown-item d-flex align-items-center"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification me-2"></i>Activate</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification-bing me-2"></i>Deactivate</a>
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
                                <td><a href="ticket-details.html">TK00021</a></td>
                                <td>Invoice not generating</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-30.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-30.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">David Anderson</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>09 Dec 2024</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-danger">
                                            High
                                        </span>
                                    </div>
                                </td>
                                <td>22 Jan 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-18.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-18.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Ryan Christopher</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-success">
                                            Resolved<i class="isax isax-tick-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="ticket-details.html" class="dropdown-item d-flex align-items-center"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification me-2"></i>Activate</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification-bing me-2"></i>Deactivate</a>
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
                                <td><a href="ticket-details.html">TK00020</a></td>
                                <td>Unable to log in</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-22.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-22.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Olivia Harris</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>04 Jan 2024</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-info">
                                            Low
                                        </span>
                                    </div>
                                </td>
                                <td>17 Jan 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-29.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-29.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Jessica Renee</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-warning">
                                            Pending<i class="isax isax-slash ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="ticket-details.html" class="dropdown-item d-flex align-items-center"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification me-2"></i>Activate</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification-bing me-2"></i>Deactivate</a>
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
                                <td><a href="ticket-details.html">TK00019</a></td>
                                <td>Payment gateway issue</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-25.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-25.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Emma Lewis</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>02 Dec 2024</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-warning">
                                            Medium
                                        </span>
                                    </div>
                                </td>
                                <td>15 Jan 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-27.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-27.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Abigail Harper</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-danger">
                                            closed<i class="isax isax-close-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="ticket-details.html" class="dropdown-item d-flex align-items-center"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification me-2"></i>Activate</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification-bing me-2"></i>Deactivate</a>
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
                                <td><a href="ticket-details.html">TK00019</a></td>
                                <td>Support for theme</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-21.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-21.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Robert Thomas</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>15 Nov 2024</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-info">
                                            low
                                        </span>
                                    </div>
                                </td>
                                <td>28 Jan 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-31.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-31.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Michael Johnson</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-info">
                                            open<i class="isax isax-timer ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="ticket-details.html" class="dropdown-item d-flex align-items-center"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification me-2"></i>Activate</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification-bing me-2"></i>Deactivate</a>
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
                                <td><a href="ticket-details.html">TK00017</a></td>
                                <td>Verify your email</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-24.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-24.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Isabella Scott</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>30 Nov 2024</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-danger">
                                            High
                                        </span>
                                    </div>
                                </td>
                                <td>12 Nov 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-06.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-06.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Madison Brooke</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-success">
                                            Resolved<i class="isax isax-tick-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="ticket-details.html" class="dropdown-item d-flex align-items-center"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification me-2"></i>Activate</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification-bing me-2"></i>Deactivate</a>
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
                                <td><a href="ticket-details.html">TK00016</a></td>
                                <td>Calling for help</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-15.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-15.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Daniel Martinez</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>12 Oct 2024</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-warning">
                                            Medium
                                        </span>
                                    </div>
                                </td>
                                <td>25 Oct 2025</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-33.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-33.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">William Andrew</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-warning">
                                            Pending<i class="isax isax-slash ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="ticket-details.html" class="dropdown-item d-flex align-items-center"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification me-2"></i>Activate</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification-bing me-2"></i>Deactivate</a>
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
                                <td><a href="ticket-details.html">TK00015</a></td>
                                <td>Management</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-02.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-02.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Charlotte Brown</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>05 Oct 2024</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-info">
                                            Low
                                        </span>
                                    </div>
                                </td>
                                <td>18 Oct 2024</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-34.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-34.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Victoria Celeste</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-danger">
                                            closed<i class="isax isax-close-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="ticket-details.html" class="dropdown-item d-flex align-items-center"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification me-2"></i>Activate</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification-bing me-2"></i>Deactivate</a>
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
                                <td><a href="ticket-details.html">TK00014</a></td>
                                <td>Invoice not generating</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-23.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-23.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">William Parker</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>09 Sep 2024</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-danger">
                                            High
                                        </span>
                                    </div>
                                </td>
                                <td>22 Sep 2024</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-10.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-10.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Nathaniel Blake</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-info">
                                            open<i class="isax isax-tick-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="ticket-details.html" class="dropdown-item d-flex align-items-center"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification me-2"></i>Activate</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification-bing me-2"></i>Deactivate</a>
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
                                <td><a href="ticket-details.html">TK00013</a></td>
                                <td>Payment gateway issue</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-24.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-24.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Mia Thompson</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>02 Sep 2024</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-warning">

                                            Medium
                                        </span>
                                    </div>
                                </td>
                                <td>15 Sep 2024</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-29.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-29.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Natalie Paige</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="badge badge-sm badge-soft-success">
                                            Resolved<i class="isax isax-tick-circle ms-1"></i>
                                        </span>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="ticket-details.html" class="dropdown-item d-flex align-items-center"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification me-2"></i>Activate</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-notification-bing me-2"></i>Deactivate</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Table List End -->

            </div>
            <!-- End Content -->
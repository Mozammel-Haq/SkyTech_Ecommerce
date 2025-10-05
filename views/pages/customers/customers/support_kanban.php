<!-- Start Content -->
<div class="content content-two">

    <!-- Page Header -->
    <div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
        <div>
            <h6>Tickets Kanban View</h6>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
            <div class="d-flex align-items-center">
                <a href="tickets-list.html" class="btn btn-outline-white p-2 d-inline-flex align-items-center justify-content-center me-2"><i class="isax isax-menu-1"></i></a>
                <a href="tickets.html" class="btn btn-outline-white p-2 d-inline-flex align-items-center justify-content-center me-2"><i class="isax isax-grid-25"></i></a>
                <a href="ticket-kanban.html" class="btn btn-primary p-2 d-inline-flex align-items-center justify-content-center me-1"><i class="isax isax-kanban"></i></a>
            </div>
            <div class="dropdown">
                <a href="javascript:void(0);" class="btn btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                    <i class="isax isax-export-1 me-1"></i>Export
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#tab">Download as PDF</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#tab">Download as Excel</a>
                    </li>
                </ul>
            </div>
            <div>
                <a href="javascript:void(0);" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_modal">
                    <i class="isax isax-add-circle5 me-1"></i>New Ticket
                </a>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- start row -->
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="card position-relative">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-2 pb-2 border-bottom">
                        <div>
                            <p class="mb-1">Total Tickets</p>
                            <h6 class="fs-16 fw-semibold">298</h6>
                        </div>
                        <div>
                            <span class="avatar bg-primary rounded-circle">
                                <i class="isax isax-receipt-item"></i>
                            </span>
                        </div>
                    </div>
                    <p class="fs-13 mb-0"><span class="text-success"><i class="isax isax-send text-success me-1"></i>5.62%</span>from last month</p>
                    <span class="position-absolute end-0 bottom-0">
                        <img src="<?= $base_url ?>/assets/img/bg/card-overlay-01.svg" alt="User Img">
                    </span>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="card position-relative">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-2 pb-2 border-bottom">
                        <div>
                            <p class="mb-1">Completed Tickets</p>
                            <h6 class="fs-16 fw-semibold">185</h6>
                        </div>
                        <div>
                            <span class="avatar bg-success rounded-circle">
                                <i class="isax isax-tick-circle"></i>
                            </span>
                        </div>
                    </div>
                    <p class="fs-13 mb-0"><span class="text-success"><i class="isax isax-send text-success me-1"></i>11.4%</span> from last month</p>
                    <span class="position-absolute end-0 bottom-0">
                        <img src="<?= $base_url ?>/assets/img/bg/card-overlay-02.svg" alt="User Img">
                    </span>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="card position-relative">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-2 pb-2 border-bottom">
                        <div>
                            <p class="mb-1">In Progress Tickets</p>
                            <h6 class="fs-16 fw-semibold">32</h6>
                        </div>
                        <div>
                            <span class="avatar bg-warning rounded-circle">
                                <i class="isax isax-timer"></i>
                            </span>
                        </div>
                    </div>
                    <p class="fs-13 mb-0"><span class="text-success"><i class="isax isax-send text-success me-1"></i>8.52%</span> from last month</p>
                    <span class="position-absolute end-0 bottom-0">
                        <img src="<?= $base_url ?>/assets/img/bg/card-overlay-03.svg" alt="User Img">
                    </span>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="card position-relative">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-2 pb-2 border-bottom">
                        <div>
                            <p class="mb-1">Closed Tickets</p>
                            <h6 class="fs-16 fw-semibold">24</h6>
                        </div>
                        <div>
                            <span class="avatar bg-danger rounded-circle">
                                <i class="isax isax-information"></i>
                            </span>
                        </div>
                    </div>
                    <p class="fs-13 mb-0"><span class="text-danger"><i class="isax isax-received text-danger me-1"></i>7.45%</span> from last month</p>
                    <span class="position-absolute end-0 bottom-0">
                        <img src="<?= $base_url ?>/assets/img/bg/card-overlay-04.svg" alt="User Img">
                    </span>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end row -->

    <!-- Tabs Start-->
    <ul class="nav nav-tabs nav-bordered mb-3 gap-2">
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#All_tab">All</a></li>
        <li class="nav-item"><a class="nav-link" href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#Open_tab">Open</a></li>
        <li class="nav-item"><a class="nav-link" href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#Resolved_tab">Resolved</a></li>
        <li class="nav-item"><a class="nav-link" href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#Pending_tab">Pending</a></li>
        <li class="nav-item"><a class="nav-link" href="javascript:void(0);" data-bs-toggle="tab" data-bs-target="#Closed_tab">Closed</a></li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="All_tab" role="tabpanel">
            <div class="d-flex align-items-start overflow-auto project-status flex-wrap flex-lg-nowrap flex-md-nowrap">
                <div class="p-3 rounded bg-light w-100 me-3">
                    <div class="bg-white border p-2 rounded mb-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <span class="bg-soft-pink p-1 d-flex rounded-circle me-2"><span class="bg-info rounded-circle d-block p-1"></span></span>
                                <h6 class="me-2 fs-16 fw-semibold">Open</h6>
                                <span class="badge bg-light rounded-circle fs-10 avatar avatar-xs text-dark">5</span>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="d-inline-flex align-items-center btn btn-white border-0" data-bs-toggle="dropdown">
                                    <i class="isax isax-more"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="kanban-drag-wrap">
                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-light badge-sm border-info d-flex align-items-center justify-content-center text-info fs-12 fw-medium">Low</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Support For Theme</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-primary fs-10 text-primary fw-medium d-flex align-items-center justify-content-center"> <i class="fa-solid fa-circle text-primary me-1 fs-5"></i> Open</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-soft-orange badge-sm border d-flex align-items-center justify-content-center text-orange fs-12 fw-medium text-danger">Medium</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Verify your email</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-primary fs-10 text-primary fw-medium d-flex align-items-center justify-content-center"> <i class="fa-solid fa-circle text-primary me-1 fs-5"></i> Open</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2">
                        <a href="#" class="btn btn-white bg-white border d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_modal">
                            <i class="isax isax-add-circle text-gray-9 fs-13 me-1"></i> New Ticket
                        </a>
                    </div>
                </div>
                <div class="p-3 rounded bg-light w-100 me-3">
                    <div class="bg-white border p-2 rounded mb-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <span class="bg-transparent-primary p-1 d-flex rounded-circle me-2"><span class="bg-primary rounded-circle d-block p-1"></span></span>
                                <h6 class="me-2 fs-16 fw-semibold">Pending</h6>
                                <span class="badge bg-light rounded-circle fs-10 avatar avatar-xs text-dark">9</span>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="d-inline-flex align-items-center btn btn-white border-0" data-bs-toggle="dropdown">
                                    <i class="isax isax-more"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="kanban-drag-wrap">
                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-light badge-sm border-info d-flex align-items-center justify-content-center text-info fs-12 fw-medium">Low</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Support For Theme</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-warning fs-10 text-warning fw-medium d-flex align-items-center justify-content-center"> <i class="fa-solid fa-circle text-warning me-1 fs-5"></i> Pending</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-soft-orange badge-sm border d-flex align-items-center justify-content-center text-orange fs-12 fw-medium text-danger">Medium</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Verify your email</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-warning fs-10 text-warning fw-medium d-flex align-items-center justify-content-center"> <i class="fa-solid fa-circle text-warning me-1 fs-5"></i> Pending</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-light badge-sm border-info d-flex align-items-center justify-content-center text-info fs-12 fw-medium">Low</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Support For Theme</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-warning fs-10 text-warning fw-medium d-flex align-items-center justify-content-center"> <i class="fa-solid fa-circle text-warning me-1 fs-5"></i> Pending</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-soft-orange badge-sm border d-flex align-items-center justify-content-center text-orange fs-12 fw-medium text-danger">Medium</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Verify your email</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-warning fs-10 text-warning fw-medium d-flex align-items-center justify-content-center"> <i class="fa-solid fa-circle text-warning me-1 fs-5"></i> Pending</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2">
                        <a href="#" class="btn btn-white bg-white border d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_modal">
                            <i class="isax isax-add-circle text-gray-9 fs-13 me-1"></i> New Ticket
                        </a>
                    </div>
                </div>
                <div class="p-3 rounded bg-light w-100 me-3">
                    <div class="bg-white border p-2 rounded mb-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <span class="bg-soft-danger p-1 d-flex rounded-circle me-2"><span class="bg-danger rounded-circle d-block p-1"></span></span>
                                <h6 class="me-2 fs-16 fw-semibold">Closed</h6>
                                <span class="badge bg-light rounded-circle fs-10 avatar avatar-xs text-dark">7</span>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="d-inline-flex align-items-center btn btn-white border-0" data-bs-toggle="dropdown">
                                    <i class="isax isax-more"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="kanban-drag-wrap">
                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-light badge-sm border-info d-flex align-items-center justify-content-center text-info fs-12 fw-medium">Low</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Support For Theme</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-primary fs-10 text-primary fw-medium d-flex align-items-center justify-content-center"> <i class="fa-solid fa-circle text-primary me-1 fs-5"></i> Open</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-soft-orange badge-sm border d-flex align-items-center justify-content-center text-orange fs-12 fw-medium text-danger">Medium</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Verify your email</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-primary fs-10 text-primary fw-medium d-flex align-items-center justify-content-center"> <i class="fa-solid fa-circle text-primary me-1 fs-5"></i> Open</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2">
                        <a href="#" class="btn btn-white bg-white border d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_modal">
                            <i class="isax isax-add-circle text-gray-9 fs-13 me-1"></i> New Ticket
                        </a>
                    </div>
                </div>
                <div class="p-3 rounded bg-light w-100">
                    <div class="bg-white border p-2 rounded mb-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <span class="bg-transparent-success p-1 d-flex rounded-circle me-2"><span class="bg-success rounded-circle d-block p-1"></span></span>
                                <h6 class="me-2 fs-16 fw-semibold">Resolved</h6>
                                <span class="badge bg-light rounded-circle fs-10 avatar avatar-xs text-dark">7</span>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="d-inline-flex align-items-center btn btn-white border-0" data-bs-toggle="dropdown">
                                    <i class="isax isax-more"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="kanban-drag-wrap">
                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-light badge-sm border-info d-flex align-items-center justify-content-center text-info fs-12 fw-medium">Low</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Support For Theme</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-warning fs-10 text-warning fw-medium d-flex align-items-center justify-content-center"> <i class="fa-solid fa-circle text-warning me-1 fs-5"></i> Pending</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-soft-orange badge-sm border d-flex align-items-center justify-content-center text-orange fs-12 fw-medium text-danger">Medium</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Verify your email</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-warning fs-10 text-warning fw-medium"> <i class="fa-solid fa-circle text-warning me-1 fs-6"></i> Pending</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2">
                        <a href="#" class="btn btn-white bg-white border d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_modal">
                            <i class="isax isax-add-circle text-gray-9 fs-13 me-1"></i> New Ticket
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="Open_tab" role="tabpanel">
            <div class="d-flex align-items-start overflow-auto project-status flex-wrap flex-lg-nowrap flex-md-nowrap">
                <div class="p-3 rounded bg-light w-100 me-3">
                    <div class="bg-white border p-2 rounded mb-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <span class="bg-soft-pink p-1 d-flex rounded-circle me-2"><span class="bg-info rounded-circle d-block p-1"></span></span>
                                <h6 class="me-2 fs-16 fw-semibold">Open</h6>
                                <span class="badge bg-light rounded-circle fs-10 avatar avatar-xs text-dark">5</span>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="d-inline-flex align-items-center btn btn-white border-0" data-bs-toggle="dropdown">
                                    <i class="isax isax-more"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="kanban-drag-wrap">
                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-light badge-sm border-info d-flex align-items-center justify-content-center text-info fs-12 fw-medium">Low</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Support For Theme</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-primary fs-10 text-primary fw-medium d-flex align-items-center justify-content-center"> <i class="fa-solid fa-circle text-primary me-1 fs-5"></i> Open</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-soft-orange badge-sm border d-flex align-items-center justify-content-center text-orange fs-12 fw-medium text-danger">Medium</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Verify your email</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-primary fs-10 text-primary fw-medium d-flex align-items-center justify-content-center"> <i class="fa-solid fa-circle text-primary me-1 fs-5"></i> Open</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2">
                        <a href="#" class="btn btn-white bg-white border d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_modal">
                            <i class="isax isax-add-circle text-gray-9 fs-13 me-1"></i> New Ticket
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="Resolved_tab" role="tabpanel">
            <div class="d-flex align-items-start overflow-auto project-status pb-3 flex-wrap flex-lg-nowrap flex-md-nowrap">
                <div class="p-3 rounded bg-light w-100">
                    <div class="bg-white border p-2 rounded mb-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <span class="bg-transparent-success p-1 d-flex rounded-circle me-2"><span class="bg-success rounded-circle d-block p-1"></span></span>
                                <h6 class="me-2 fs-16 fw-semibold">Resolved</h6>
                                <span class="badge bg-light rounded-circle fs-10 avatar avatar-xs text-dark">7</span>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="d-inline-flex align-items-center btn btn-white border-0" data-bs-toggle="dropdown">
                                    <i class="isax isax-more"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="kanban-drag-wrap">
                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-light badge-sm border-info d-flex align-items-center justify-content-center text-info fs-12 fw-medium">Low</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Support For Theme</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-warning fs-10 text-warning fw-medium d-flex align-items-center justify-content-center"> <i class="fa-solid fa-circle text-warning me-1 fs-5"></i> Pending</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-soft-orange badge-sm border d-flex align-items-center justify-content-center text-orange fs-12 fw-medium text-danger">Medium</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Verify your email</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-warning fs-10 text-warning fw-medium"> <i class="fa-solid fa-circle text-warning me-1 fs-6"></i> Pending</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2">
                        <a href="#" class="btn btn-white bg-white border d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_modal">
                            <i class="isax isax-add-circle text-gray-9 fs-13 me-1"></i> New Ticket
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="Pending_tab" role="tabpanel">
            <div class="d-flex align-items-start overflow-auto project-status pb-3 flex-wrap flex-lg-nowrap flex-md-nowrap">
                <div class="p-3 rounded bg-light w-100 me-3">
                    <div class="bg-white border p-2 rounded mb-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <span class="bg-transparent-primary p-1 d-flex rounded-circle me-2"><span class="bg-primary rounded-circle d-block p-1"></span></span>
                                <h6 class="me-2 fs-16 fw-semibold">Pending</h6>
                                <span class="badge bg-light rounded-circle fs-10 avatar avatar-xs text-dark">9</span>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="d-inline-flex align-items-center btn btn-white border-0" data-bs-toggle="dropdown">
                                    <i class="isax isax-more"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="kanban-drag-wrap">
                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-light badge-sm border-info d-flex align-items-center justify-content-center text-info fs-12 fw-medium">Low</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Support For Theme</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-warning fs-10 text-warning fw-medium d-flex align-items-center justify-content-center"> <i class="fa-solid fa-circle text-warning me-1 fs-5"></i> Pending</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-soft-orange badge-sm border d-flex align-items-center justify-content-center text-orange fs-12 fw-medium text-danger">Medium</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Verify your email</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-warning fs-10 text-warning fw-medium d-flex align-items-center justify-content-center"> <i class="fa-solid fa-circle text-warning me-1 fs-5"></i> Pending</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-light badge-sm border-info d-flex align-items-center justify-content-center text-info fs-12 fw-medium">Low</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Support For Theme</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-warning fs-10 text-warning fw-medium d-flex align-items-center justify-content-center"> <i class="fa-solid fa-circle text-warning me-1 fs-5"></i> Pending</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-soft-orange badge-sm border d-flex align-items-center justify-content-center text-orange fs-12 fw-medium text-danger">Medium</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Verify your email</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-warning fs-10 text-warning fw-medium d-flex align-items-center justify-content-center"> <i class="fa-solid fa-circle text-warning me-1 fs-5"></i> Pending</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2">
                        <a href="#" class="btn btn-white bg-white border d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_modal">
                            <i class="isax isax-add-circle text-gray-9 fs-13 me-1"></i> New Ticket
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="Closed_tab" role="tabpanel">
            <div class="d-flex align-items-start overflow-auto project-status pb-3 flex-wrap flex-lg-nowrap flex-md-nowrap">
                <div class="p-3 rounded bg-light w-100 me-3">
                    <div class="bg-white border p-2 rounded mb-2">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <span class="bg-soft-danger p-1 d-flex rounded-circle me-2"><span class="bg-danger rounded-circle d-block p-1"></span></span>
                                <h6 class="me-2 fs-16 fw-semibold">Closed</h6>
                                <span class="badge bg-light rounded-circle fs-10 avatar avatar-xs text-dark">7</span>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="d-inline-flex align-items-center btn btn-white border-0" data-bs-toggle="dropdown">
                                    <i class="isax isax-more"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="kanban-drag-wrap">
                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-light badge-sm border-info d-flex align-items-center justify-content-center text-info fs-12 fw-medium">Low</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Support For Theme</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-primary fs-10 text-primary fw-medium d-flex align-items-center justify-content-center"> <i class="fa-solid fa-circle text-primary me-1 fs-5"></i> Open</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card kanban-card mb-2">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                        <div class="d-flex align-items-center">
                                            <span class="badge bg-soft-orange badge-sm border d-flex align-items-center justify-content-center text-orange fs-12 fw-medium text-danger">Medium</span>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center bg-white rounded-circle p-1 border justify-content-center" data-bs-toggle="dropdown">
                                                <i class="isax isax-more d-flex align-items-center justify-content-center text-gray-5"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start mb-3 border-bottom border-1 border-light pb-3 mb-3 flex-column">
                                        <h6 class="d-flex align-items-center mb-3">Verify your email</h6>

                                        <div class="d-flex align-items-center gap-3">
                                            <span class="badge badge-sm badge-soft-light border fs-10 text-dark"> #1234</span>
                                            <span class="badge badge-sm badge-soft-primary fs-10 text-primary fw-medium d-flex align-items-center justify-content-center"> <i class="fa-solid fa-circle text-primary me-1 fs-5"></i> Open</span>
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="avatar-list-stacked avatar-group-sm me-3">
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-10.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-08.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-07.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-02.jpg" alt="img"></noscript>
                                            </span>
                                            <span class="avatar avatar-rounded">
                                                <img class="border border-white" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img class="border border-white" src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" alt="img"></noscript>
                                            </span>
                                            <a href="#" class="avatar avatar-rounded bg-primary fs-12 text-white">
                                                1+
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center fs-12 text-gray-9">
                                            <i class="isax isax-calendar-2 text-gray-5 fs-14 me-1"></i>30 Jan 2025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2">
                        <a href="#" class="btn btn-white bg-white border d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_modal">
                            <i class="isax isax-add-circle text-gray-9 fs-13 me-1"></i> New Ticket
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tabs End -->



</div>
<!-- End Content -->
            <!-- Start Content -->
            <div class="content content-two">

                <!-- Page Header -->
                <div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
                    <div>
                        <h6>Supplier</h6>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                <i class="isax isax-export-1 me-1"></i>Export
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">Download as PDF</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">Download as Excel</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <a href="javascript:void(0);" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_modal"><i class="isax isax-add-circle5 me-1"></i>New Supplier</a>
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
                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                    <i class="isax isax-sort me-1"></i>Sort By :
                                    <span class="fw-normal ms-1">Latest</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
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
                                <ul class="dropdown-menu dropdown-menu">
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Vendor</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Phone</span>
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
                                            <input class="form-check-input m-0 me-2" type="checkbox">
                                            <span>Balance</span>
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
                        <span class="tag bg-light border rounded-1 fs-12 text-dark badge"><span
                                class="num-count d-inline-flex align-items-center justify-content-center bg-success fs-10 me-1">5</span>Suppliers Selected
                            <span class="ms-1 tag-close"><i class="fa-solid fa-x fs-10"></i></span></span>
                        <span class="tag bg-light border rounded-1 fs-12 text-dark badge"><span
                                class="num-count d-inline-flex align-items-center justify-content-center bg-success fs-10 me-1">5</span>$10,000 - $25,500<span class="ms-1 tag-close"><i class="fa-solid fa-x fs-10"></i></span></span>
                        <a href="#" class="link-danger fw-medium text-decoration-underline ms-md-1">Clear All</a>
                    </div>
                    <!-- /Filter Info -->

                </div>
                <!-- Table Search End -->

                <!-- Table List Start -->
                <div class="table-responsive">
                    <table class="table table-nowrap datatable">
                        <thead>
                            <tr>
                                <th class="no-sort">
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox" id="select-all">
                                    </div>
                                </th>
                                <th>Supplier</th>
                                <th>Phone</th>
                                <th>Created On</th>
                                <th>Balance</th>
                                <th>Currency</th>
                                <th class="no-sort"></th>
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
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-17.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-17.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0">
                                                <a href="javascript:void(0);">Emma Rose</a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>+1 202-555-0198</td>
                                <td>22 Feb 2025</td>
                                <td class="text-dark">$10,000</td>
                                <td>USD ($)</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="btn btn-outline-white btn-sm justify-content-center d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#ledger_modal"><i
                                                class="isax isax-document-text-1 me-1"></i>Ledger</a>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="isax isax-trash me-2"></i>Delete</a>
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
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-05.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-05.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0">
                                                <a href="javascript:void(0);">Ethan James</a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>+1 305-456-7821</td>
                                <td>07 Feb 2025</td>
                                <td class="text-dark">$25,750</td>
                                <td>CAD (C$)</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="btn btn-outline-white btn-sm justify-content-center d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#ledger_modal"><i
                                                class="isax isax-document-text-1 me-1"></i>Ledger</a>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-target="#edit_modal" data-bs-toggle="modal"><i
                                                    class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="isax isax-trash me-2"></i>Delete</a>
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
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-12.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-12.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0">
                                                <a href="javascript:void(0);">Olivia Grace</a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>+1 415-678-1234</td>
                                <td>30 Jan 2025</td>
                                <td class="text-dark">$50,125</td>
                                <td>GBP (£)</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="btn btn-outline-white btn-sm justify-content-center d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#ledger_modal"><i
                                                class="isax isax-document-text-1 me-1"></i>Ledger</a>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="isax isax-trash me-2"></i>Delete</a>
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
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-29.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-29.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0">
                                                <a href="javascript:void(0);">Liam Michael</a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>+1 718-987-6543</td>
                                <td>17 Jan 2025</td>
                                <td class="text-dark">$75,900</td>
                                <td>AUD (A$)</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="btn btn-outline-white btn-sm justify-content-center d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#ledger_modal"><i
                                                class="isax isax-document-text-1 me-1"></i>Ledger</a>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="isax isax-trash me-2"></i>Delete</a>
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
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-32.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-32.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0">
                                                <a href="javascript:void(0);">Sophia Marie</a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>+1 909-234-5678</td>
                                <td>04 Jan 2025</td>
                                <td class="text-dark">$99,999</td>
                                <td>EUR (€)</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="btn btn-outline-white btn-sm justify-content-center d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#ledger_modal"><i
                                                class="isax isax-document-text-1 me-1"></i>Ledger</a>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="isax isax-trash me-2"></i>Delete</a>
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
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-32.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-32.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0">
                                                <a href="javascript:void(0);">Sophia Marie</a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>+1 602-789-3456</td>
                                <td>09 Dec 2024</td>
                                <td class="text-dark">$1,20,500</td>
                                <td>JPY (¥)</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="btn btn-outline-white btn-sm justify-content-center d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#ledger_modal"><i
                                                class="isax isax-document-text-1 me-1"></i>Ledger</a>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="isax isax-trash me-2"></i>Delete</a>
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
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-34.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-34.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0">
                                                <a href="javascript:void(0);">Isabella Faith</a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>+1 812-456-9087</td>
                                <td>02 Dec 2024</td>
                                <td class="text-dark">$2,50,000</td>
                                <td>INR (₹)</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="btn btn-outline-white btn-sm justify-content-center d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#ledger_modal"><i
                                                class="isax isax-document-text-1 me-1"></i>Ledger</a>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="isax isax-trash me-2"></i>Delete</a>
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
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-23.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-23.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0">
                                                <a href="javascript:void(0);">Oliver Scott</a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>+1 214-123-4567</td>
                                <td>15 Nov 2024</td>
                                <td class="text-dark">$5,00,750</td>
                                <td>SGD (S$)</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="btn btn-outline-white btn-sm justify-content-center d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#ledger_modal"><i
                                                class="isax isax-document-text-1 me-1"></i>Ledger</a>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="isax isax-trash me-2"></i>Delete</a>
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
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-23.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-23.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0">
                                                <a href="javascript:void(0);">Ava Louise</a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>+1 646-789-1230</td>
                                <td>30 Nov 2024</td>
                                <td class="text-dark">$7,50,300</td>
                                <td>EUR (€)</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="btn btn-outline-white btn-sm justify-content-center d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#ledger_modal"><i
                                                class="isax isax-document-text-1 me-1"></i>Ledger</a>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="isax isax-trash me-2"></i>Delete</a>
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
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-36.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-36.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0">
                                                <a href="javascript:void(0);">James Robert</a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>+1 901-678-4321</td>
                                <td>12 Oct 2024</td>
                                <td class="text-dark">$9,99,999</td>
                                <td>EUR (€)</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="btn btn-outline-white btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#ledger_modal"><i
                                                class="isax isax-document-text-1 me-1"></i>Ledger</a>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="isax isax-trash me-2"></i>Delete</a>
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
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-36.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-36.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0">
                                                <a href="javascript:void(0);">Charlotte Anne</a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>+1 503-987-2105</td>
                                <td>05 Oct 2024</td>
                                <td class="text-dark">$87,650</td>
                                <td>KRW (₩)</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="btn btn-outline-white btn-sm justify-content-center d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#ledger_modal"><i
                                                class="isax isax-document-text-1 me-1"></i>Ledger</a>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="isax isax-trash me-2"></i>Delete</a>
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
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-38.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-38.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0">
                                                <a href="javascript:void(0);">Benjamin Thomas</a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>+1 320-345-6789</td>
                                <td>09 Sep 2024</td>
                                <td class="text-dark">$69,420</td>
                                <td>BRL (R$)</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="btn btn-outline-white btn-sm justify-content-center d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#ledger_modal"><i
                                                class="isax isax-document-text-1 me-1"></i>Ledger</a>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="isax isax-trash me-2"></i>Delete</a>
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
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-39.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-39.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0">
                                                <a href="javascript:void(0);">Amelia Jane</a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>+1 720-654-7890</td>
                                <td>02 Sep 2024</td>
                                <td class="text-dark">$33,210</td>
                                <td>MXN ($)</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="btn btn-outline-white btn-sm justify-content-center d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#ledger_modal"><i
                                                class="isax isax-document-text-1 me-1"></i>Ledger</a>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="isax isax-trash me-2"></i>Delete</a>
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
                                            <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-40.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-40.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0">
                                                <a href="javascript:void(0);">Mia Elizabeth</a>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>+1 919-321-9876</td>
                                <td>07 Aug 2024</td>
                                <td class="text-dark">$2,10,000</td>
                                <td>ZAR (R)</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="btn btn-outline-white btn-sm justify-content-center d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#ledger_modal"><i
                                                class="isax isax-document-text-1 me-1"></i>Ledger</a>
                                    </div>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i
                                                    class="isax isax-trash me-2"></i>Delete</a>
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
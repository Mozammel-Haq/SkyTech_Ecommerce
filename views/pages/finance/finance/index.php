            <!-- Start Content -->
            <div class="content content-two">

                <!-- Page Header -->
                <div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
                    <div>
                        <h6>Expense</h6>
                    </div>
                    <div class="my-xl-auto d-flex align-items-center gap-2">
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

                        <a href="javascript:void(0);" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_expence"><i class="isax isax-add-circle5 me-1"></i>New Expense</a>
                    </div>
                </div>
                <!-- End Page Header -->


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
                                            <span>ID</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Date</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Reference Number</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Description</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Attachment</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox">
                                            <span>Amount</span>
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
                        <span class="tag bg-light border rounded-1 fs-12 text-dark badge"><span class="num-count d-inline-flex align-items-center justify-content-center bg-success fs-10 me-1">1</span>Status Selected<span class="ms-1 tag-close"><i class="fa-solid fa-x fs-10"></i></span></span>
                        <span class="tag bg-light border rounded-1 fs-12 text-dark badge"><span class="num-count d-inline-flex align-items-center justify-content-center bg-success fs-10 me-1">1</span>$10,000 - $25,500<span class="ms-1 tag-close"><i class="fa-solid fa-x fs-10"></i></span></span>
                        <a href="#" class="link-danger fw-medium text-decoration-underline ms-md-1">Clear All</a>
                    </div>
                    <!-- /Filter Info -->

                </div>
                <!-- End Table Search -->

                <!-- Start Table List -->
                <div class="table-responsive">
                    <table class="table table-nowrap datatable">
                        <thead>
                            <tr>
                                <th class="no-sort">
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox" id="select-all">
                                    </div>
                                </th>
                                <th class="no-sort">ID</th>
                                <th>Date</th>
                                <th class="no-sort">Reference Number</th>
                                <th class="no-sort">Description</th>
                                <th class="no-sort">Attachment</th>
                                <th class="no-sort">Amount</th>
                                <th>Payment Mode</th>
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
                                <td><a href="javascript:void(0);">EXP00025</a></td>
                                <td>22 Feb 2025</td>
                                <td>PO-202402-012</td>
                                <td>Payment for raw materials</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn p-1 bg-light text-dark d-inline-flex align-item-center justify-content-center"><i class="isax isax-document-text5 fs-12"></i></a>
                                </td>
                                <td>
                                    <p class="text-dark">$10,000</p>
                                </td>
                                <td>

                                    <p class="text-dark">Cash</p>
                                </td>
                                <td>
                                    <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm badge-sm">Paid<i class="isax isax-tick-circle ms-1"></i></span>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#details_expense"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_expence"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-document-download4 me-2"></i>Download</a>
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
                                <td><a href="javascript:void(0);">EXP00024</a></td>
                                <td>07 Feb 2025</td>
                                <td>INV00025</td>
                                <td>Purchase of packaging materials</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn p-1 bg-light text-dark d-inline-flex align-item-center justify-content-center"><i class="isax isax-document-text5 fs-12"></i></a>
                                </td>
                                <td>
                                    <p class="text-dark">$25,750</p>
                                </td>
                                <td>

                                    <p class="text-dark">Cheque</p>
                                </td>
                                <td>
                                    <span class="badge badge-soft-warning d-inline-flex align-items-center badge-sm">Pending<i class="isax isax-timer ms-1"></i></span>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#details_expense"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_expence"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-document-download4 me-2"></i>Download</a>
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
                                <td><a href="javascript:void(0);">EXP00023</a></td>
                                <td>30 Jan 2025</td>
                                <td>PO-202401-011</td>
                                <td>Payment for electronic components</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn p-1 bg-light text-dark d-inline-flex align-item-center justify-content-center"><i class="isax isax-document-text5 fs-12"></i></a>
                                </td>
                                <td>
                                    <p class="text-dark">$50,125</p>
                                </td>
                                <td>

                                    <p class="text-dark">Paypal</p>
                                </td>
                                <td>
                                    <span class="badge badge-soft-danger d-inline-flex align-items-center badge-sm">Cancelled<i class="isax isax-close-circle ms-1"></i></span>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#details_expense"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_expence"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-document-download4 me-2"></i>Download</a>
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
                                <td><a href="javascript:void(0);">EXP00022</a></td>
                                <td>17 Jan 2025</td>
                                <td>REF12345</td>
                                <td>Social media ad campaign</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn p-1 bg-light text-dark d-inline-flex align-item-center justify-content-center"><i class="isax isax-document-text5 fs-12"></i></a>
                                </td>
                                <td>
                                    <p class="text-dark">$75,900</p>
                                </td>
                                <td>

                                    <p class="text-dark">Bank Transfer</p>
                                </td>
                                <td>
                                    <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">Paid<i class="isax isax-tick-circle ms-1"></i></span>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#details_expense"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_expence"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-document-download4 me-2"></i>Download</a>
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
                                <td><a href="javascript:void(0);">EXP00021</a></td>
                                <td>04 Jan 2025</td>
                                <td>REF18294</td>
                                <td>Business trip for sales meeting</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn p-1 bg-light text-dark d-inline-flex align-item-center justify-content-center"><i class="isax isax-document-text5 fs-12"></i></a>
                                </td>
                                <td>
                                    <p class="text-dark">$99,999</p>
                                </td>
                                <td>

                                    <p class="text-dark">Stripe</p>
                                </td>
                                <td>
                                    <span class="badge badge-soft-warning d-inline-flex align-items-center badge-sm">Pending<i class="isax isax-timer ms-1"></i></span>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#details_expense"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_expence"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-document-download4 me-2"></i>Download</a>
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
                                <td><a href="javascript:void(0);">EXP00020</a></td>
                                <td>09 Dec 2024</td>
                                <td>PO-202412-010</td>
                                <td>Wholesale purchase of inventory</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn p-1 bg-light text-dark d-inline-flex align-item-center justify-content-center"><i class="isax isax-document-text5 fs-12"></i></a>
                                </td>
                                <td>
                                    <p class="text-dark">$1,20,500</p>
                                </td>
                                <td>

                                    <p class="text-dark">Cash</p>
                                </td>
                                <td>
                                    <span class="badge badge-soft-danger d-inline-flex align-items-center badge-sm">Cancelled<i class="isax isax-close-circle ms-1"></i></span>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#details_expense"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_expence"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-document-download4 me-2"></i>Download</a>
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
                                <td><a href="javascript:void(0);">EXP00019</a></td>
                                <td>02 Dec 2024</td>
                                <td>UTI20241219</td>
                                <td>Electricity bill</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn p-1 bg-light text-dark d-inline-flex align-item-center justify-content-center"><i class="isax isax-document-text5 fs-12"></i></a>
                                </td>
                                <td>
                                    <p class="text-dark">$2,50,000</p>
                                </td>
                                <td>

                                    <p class="text-dark">Cheque</p>
                                </td>
                                <td>
                                    <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">Paid<i class="isax isax-tick-circle ms-1"></i></span>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#details_expense"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_expence"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-document-download4 me-2"></i>Download</a>
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
                                <td><a href="javascript:void(0);">EXP00018</a></td>
                                <td>15 Nov 2024</td>
                                <td>PO-202411-008</td>
                                <td>Purchase of office furniture</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn p-1 bg-light text-dark d-inline-flex align-item-center justify-content-center"><i class="isax isax-document-text5 fs-12"></i></a>
                                </td>
                                <td>
                                    <p class="text-dark">$5,00,750</p>
                                </td>
                                <td>

                                    <p class="text-dark">Paypal</p>
                                </td>
                                <td>
                                    <span class="badge badge-soft-warning d-inline-flex align-items-center badge-sm">Pending<i class="isax isax-timer ms-1"></i></span>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#details_expense"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_expence"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-document-download4 me-2"></i>Download</a>
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
                                <td><a href="javascript:void(0);">EXP00017</a></td>
                                <td>30 Nov 2024</td>
                                <td>PO-202411-007</td>
                                <td>Purchase of manufacturing tools</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn p-1 bg-light text-dark d-inline-flex align-item-center justify-content-center"><i class="isax isax-document-text5 fs-12"></i></a>
                                </td>
                                <td>
                                    <p class="text-dark">$7,50,300</p>
                                </td>
                                <td>

                                    <p class="text-dark">Bank Transfer</p>
                                </td>
                                <td>
                                    <span class="badge badge-soft-danger d-inline-flex align-items-center badge-sm">Cancelled<i class="isax isax-close-circle ms-1"></i></span>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#details_expense"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_expence"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-document-download4 me-2"></i>Download</a>
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
                                <td><a href="javascript:void(0);">EXP00016</a></td>
                                <td>12 Oct 2024</td>
                                <td>REF17420</td>
                                <td>Server maintenance costs</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn p-1 bg-light text-dark d-inline-flex align-item-center justify-content-center"><i class="isax isax-document-text5 fs-12"></i></a>
                                </td>
                                <td>
                                    <p class="text-dark">$9,99,999</p>
                                </td>
                                <td>

                                    <p class="text-dark">Stripe</p>
                                </td>
                                <td>
                                    <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">Paid<i class="isax isax-tick-circle ms-1"></i></span>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#details_expense"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_expence"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-document-download4 me-2"></i>Download</a>
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
                                <td><a href="javascript:void(0);">EXP00015</a></td>
                                <td>05 Oct 2024</td>
                                <td>REF16302</td>
                                <td>Digital marketing campaign</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn p-1 bg-light text-dark d-inline-flex align-item-center justify-content-center"><i class="isax isax-document-text5 fs-12"></i></a>
                                </td>
                                <td>
                                    <p class="text-dark">$87,650</p>
                                </td>
                                <td>

                                    <p class="text-dark">Cheque</p>
                                </td>
                                <td>
                                    <span class="badge badge-soft-warning d-inline-flex align-items-center badge-sm">Pending<i class="isax isax-timer ms-1"></i></span>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#details_expense"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_expence"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-document-download4 me-2"></i>Download</a>
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
                                <td><a href="javascript:void(0);">EXP00014</a></td>
                                <td>09 Sep 2024</td>
                                <td>REF15035</td>
                                <td>Equipment repairs and servicing</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn p-1 bg-light text-dark d-inline-flex align-item-center justify-content-center"><i class="isax isax-document-text5 fs-12"></i></a>
                                </td>
                                <td>
                                    <p class="text-dark">$69,420</p>
                                </td>
                                <td>

                                    <p class="text-dark">Paypal</p>
                                </td>
                                <td>
                                    <span class="badge badge-soft-danger d-inline-flex align-items-center badge-sm">Cancelled<i class="isax isax-close-circle ms-1"></i></span>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#details_expense"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_expence"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-document-download4 me-2"></i>Download</a>
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
                                <td><a href="javascript:void(0);">EXP00013</a></td>
                                <td>02 Sep 2024</td>
                                <td>REF14710</td>
                                <td>Renovation of office workspace</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn p-1 bg-light text-dark d-inline-flex align-item-center justify-content-center"><i class="isax isax-document-text5 fs-12"></i></a>
                                </td>
                                <td>
                                    <p class="text-dark">$33,210</p>
                                </td>
                                <td>

                                    <p class="text-dark">Bank Transfer</p>
                                </td>
                                <td>
                                    <span class="badge badge-soft-success d-inline-flex align-items-center badge-sm">Paid<i class="isax isax-tick-circle ms-1"></i></span>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#details_expense"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_expence"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-document-download4 me-2"></i>Download</a>
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
                                <td><a href="javascript:void(0);">EXP00012</a></td>
                                <td>07 Aug 2024</td>
                                <td>INV00020</td>
                                <td>Bulk order freight costs</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn p-1 bg-light text-dark d-inline-flex align-item-center justify-content-center"><i class="isax isax-document-text5 fs-12"></i></a>
                                </td>
                                <td>
                                    <p class="text-dark">$2,10,000</p>
                                </td>
                                <td>

                                    <p class="text-dark">Cash</p>
                                </td>
                                <td>
                                    <span class="badge badge-soft-warning d-inline-flex align-items-center badge-sm">Pending<i class="isax isax-timer ms-1"></i></span>
                                </td>
                                <td class="action-item">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <i class="isax isax-more"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#details_expense"><i class="isax isax-eye me-2"></i>View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_expence"><i class="isax isax-edit me-2"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-document-download4 me-2"></i>Download</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end Table List -->

            </div>
            <!-- End Content -->
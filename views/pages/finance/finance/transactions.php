            <!-- Start Content -->
            <div class="content content-two">

                <!-- Page Header -->
                <div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
                    <div>
                        <h6>Transactions</h6>
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
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- Table Search -->
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
                                            <span>Cusomer</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Payment ID</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="dropdown-item d-flex align-items-center form-switch">
                                            <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                            <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                            <span>Paid Date</span>
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
                                            <input class="form-check-input m-0 me-2" type="checkbox">
                                            <span>Payment Mode</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Filter Info -->
                    <div class="align-items-center gap-2 flex-wrap filter-info mt-3">
                        <h6 class="fs-13 fw-semibold">Filters</h6>
                        <span class="tag bg-light border rounded-1 fs-12 text-dark badge"><span class="num-count d-inline-flex align-items-center justify-content-center bg-success fs-10 me-1">5</span>Customers Selected<span class="ms-1 tag-close"><i class="fa-solid fa-x fs-10"></i></span></span>
                        <span class="tag bg-light border rounded-1 fs-12 text-dark badge"><span class="num-count d-inline-flex align-items-center justify-content-center bg-success fs-10 me-1">1</span>$10,000 - $25,500<span class="ms-1 tag-close"><i class="fa-solid fa-x fs-10"></i></span></span>
                        <a href="#" class="link-danger fw-medium text-decoration-underline ms-md-1">Clear All</a>
                    </div>
                    <!-- /Filter Info -->
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
                                <th class="no-sort">Transaction ID</th>
                                <th class="no-sort">Invoice ID</th>
                                <th class="no-sort">Customer</th>
                                <th>Paid Date</th>
                                <th>Amount</th>
                                <th class="no-sort">Payment Mode</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td> <a href="#" class="text-gray-5"> TXN2025022212 </a> </td>
                                <td> <a href="invoice-details.html" class="link-default">INV00025</a> </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="customer-details.html" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-28.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-28.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="customer-details.html">Emily Clark</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    22 Feb 2025, 05:30 AM
                                </td>
                                <td class="text-dark">$200</td>
                                <td>Cash</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td> <a href="#" class="text-gray-5"> TXN2025022211 </a> </td>
                                <td> <a href="invoice-details.html" class="link-default">INV00024</a> </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="customer-details.html" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-27.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-27.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="customer-details.html">John Carter</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    20 Feb 2025, 07:30 AM
                                </td>
                                <td class="text-dark">$300</td>
                                <td>Cheque</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td> <a href="#" class="text-gray-5"> TXN2025098789 </a> </td>
                                <td> <a href="invoice-details.html" class="link-default">INV00023</a> </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="customer-details.html" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-26.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-26.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="customer-details.html">Sophia White</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    09 Feb 2025, 03:30 AM
                                </td>
                                <td class="text-dark">$6000</td>
                                <td>Paypal</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td> <a href="#" class="text-gray-5"> TXN2025056436 </a> </td>
                                <td> <a href="invoice-details.html" class="link-default">INV00022</a> </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="customer-details.html" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-25.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-25.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="customer-details.html">Michael Johnson</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    22 Jan 2025, 05:30 AM
                                </td>
                                <td class="text-dark">$7000</td>
                                <td>Bank Transfer</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td> <a href="#" class="text-gray-5"> TXN2025045321 </a> </td>
                                <td> <a href="invoice-details.html" class="link-default">INV00021</a> </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="customer-details.html" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-23.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-23.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="customer-details.html">Olivia Harris</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    15 Jan 2025, 03:30 AM
                                </td>
                                <td class="text-dark">$2500</td>
                                <td>Stripe</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td> <a href="#" class="text-gray-5"> TXN2025012341 </a> </td>
                                <td> <a href="invoice-details.html" class="link-default">INV00020</a> </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="customer-details.html" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-20.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-20.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="customer-details.html">Robert Thomas</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    05 Jan 2025, 02:30 AM
                                </td>
                                <td class="text-dark">$5000</td>
                                <td>Cash</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td> <a href="#" class="text-gray-5"> TXN2025076754 </a> </td>
                                <td> <a href="invoice-details.html" class="link-default">INV00019</a></td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="customer-details.html" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-19.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-19.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="customer-details.html">Emma Lewis</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    09 Dec 2024, 9:45 AM
                                </td>
                                <td class="text-dark">$1900</td>
                                <td>Cheque</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td> <a href="#" class="text-gray-5"> TXN2025022435 </a> </td>
                                <td> <a href="invoice-details.html" class="link-default">INV00018</a> </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="customer-details.html" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-15.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-15.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="customer-details.html">John Clark</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    01 Dec 2024, 5:45 AM
                                </td>
                                <td class="text-dark">$2000</td>
                                <td>Paypal</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td> <a href="#" class="text-gray-5"> TXN2025087865 </a> </td>
                                <td> <a href="invoice-details.html" class="link-default">INV00017</a> </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="customer-details.html" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-14.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-14.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="customer-details.html">Jordan dine</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    30 Nov 2024, 5:25 AM
                                </td>
                                <td class="text-dark">$3000</td>
                                <td>Bank Transfer</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td> <a href="#" class="text-gray-5"> TXN2025076543 </a> </td>
                                <td> <a href="invoice-details.html" class="link-default">INV00016</a> </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="customer-details.html" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-13.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-13.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="customer-details.html">Jack Rias</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    22 Feb 2025, 05:30 AM
                                </td>
                                <td class="text-dark">$200</td>
                                <td>Cash</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td> <a href="#" class="text-gray-5"> TXN2025022212 </a> </td>
                                <td> <a href="invoice-details.html" class="link-default">INV00015</a> </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="customer-details.html" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                            <img class="rounded-circle" alt="img" data-cfsrc="assets/img/profiles/avatar-11.jpg" style="display:none;visibility:hidden;"><noscript><img src="assets/img/profiles/avatar-11.jpg" class="rounded-circle" alt="img"></noscript>
                                        </a>
                                        <div>
                                            <h6 class="fs-14 fw-medium mb-0"><a href="customer-details.html">Emily Clark</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    22 Feb 2025, 05:30 AM
                                </td>
                                <td class="text-dark">$1500</td>
                                <td>Cash</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- Table List End -->

            </div>
            <!-- End Content -->
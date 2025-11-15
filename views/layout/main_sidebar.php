    <!-- Sidenav Menu Start -->
    <div class="two-col-sidebar" id="two-col-sidebar">
        <div class="twocol-mini">
            <!-- Add -->
            <div class="dropdown">
                <a class="btn btn-primary bg-gradient btn-sm btn-icon rounded-circle d-flex align-items-center justify-content-center" data-bs-toggle="dropdown" href="javascript:void(0);" role="button" data-bs-display="static" data-bs-reference="parent">
                    <i class="isax isax-add"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-start">
                    <li>
                        <a href="add-invoice.html" class="dropdown-item d-flex align-items-center">
                            <i class="isax isax-document-text-1 me-2"></i>Invoice
                        </a>
                    </li>
                    <li>
                        <a href="expenses.html" class="dropdown-item d-flex align-items-center">
                            <i class="isax isax-money-send me-2"></i>Expense
                        </a>
                    </li>
                    <li>
                        <a href="add-credit-notes.html" class="dropdown-item d-flex align-items-center">
                            <i class="isax isax-money-add me-2"></i>Credit Notes
                        </a>
                    </li>
                    <li>
                        <a href="add-debit-notes.html" class="dropdown-item d-flex align-items-center">
                            <i class="isax isax-money-recive me-2"></i>Debit Notes
                        </a>
                    </li>
                    <li>
                        <a href="add-purchases-orders.html" class="dropdown-item d-flex align-items-center">
                            <i class="isax isax-document me-2"></i>Purchase Order
                        </a>
                    </li>
                    <li>
                        <a href="add-quotation.html" class="dropdown-item d-flex align-items-center">
                            <i class="isax isax-document-download me-2"></i>Quotation
                        </a>
                    </li>
                    <li>
                        <a href="add-delivery-challan.html" class="dropdown-item d-flex align-items-center">
                            <i class="isax isax-document-forward me-2"></i>Delivery Challan
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /Add -->

            <ul class="menu-list">
                <li>
                    <a href="account-settings.html" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Settings"><i class="isax isax-setting-25"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Documentation"><i class="isax isax-document-normal4"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Changelog"><i class="isax isax-cloud-change5"></i></a>
                </li>
                <li>
                    <a href="login.html"><i class="isax isax-login-15"></i></a>
                </li>
            </ul>
        </div>
        <div class="sidebar" id="sidebar-two">

            <!-- Start Logo -->
            <div class="sidebar-logo d-flex align-items-center gap-2">
                <a href="<?= $base_url ?>/home" class="logo logo-normal">
                    <img src="<?= $base_url ?>/assets/img/logo.svg" alt="Logo">
                </a>
                <a href="<?= $base_url ?>/home" class="logo-small">
                    <img src="<?= $base_url ?>/assets/img/logo-small.svg" alt="Logo">
                </a>
                <a href="<?= $base_url ?>/home" class="dark-logo">
                    <img src="<?= $base_url ?>/assets/img/logo.svg" alt="Logo">
                </a>
                <a href="<?= $base_url ?>/home" class="dark-small">
                    <img src="<?= $base_url ?>/assets/img/logo-small.svg" alt="Logo">
                </a>

                <!-- Sidebar Hover Menu Toggle Button -->
                <a id="toggle_btn" href="javascript:void(0);">
                    <i class="isax isax-menu-1 mt-2"></i>
                </a>
            </div>
            <!-- End Logo -->

            <!-- Search -->
            <div class="sidebar-search">
                <div class="input-icon-end position-relative">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-icon-addon">
                        <i class="isax isax-search-normal"></i>
                    </span>
                </div>
            </div>
            <!-- /Search -->

            <!--- Sidenav Menu -->
            <div class="sidebar-inner" data-simplebar>
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <?php
                        include_once 'views/layout/menus/menu.php';
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
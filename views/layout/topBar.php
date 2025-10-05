    <!-- Topbar Start -->
    <div class="header">
        <div class="main-header">

            <!-- Logo -->
            <div class="header-left">
                <a href="<?= $base_url ?>/home" class="logo">
                    <img src="<?= $base_url ?>/assets/img/logo.svg" alt="Logo">
                </a>
                <a href="<?= $base_url ?>/home" class="dark-logo">
                    <img src="<?= $base_url ?>/assets/img/logo-white.svg" alt="Logo">
                </a>
            </div>

            <!-- Sidebar Menu Toggle Button -->
            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <div class="header-user">
                <div class="nav user-menu nav-list">
                    <div class="me-auto d-flex align-items-center" id="header-search">

                        <!-- Add -->
                        <div class="dropdown me-3">
                            <a class="btn btn-primary bg-gradient btn-xs btn-icon rounded-circle d-flex align-items-center justify-content-center" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
                                <i class="isax isax-add text-white"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-start p-2">
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

                        <!-- Start Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-divide mb-0">
                                <li class="breadcrumb-item d-flex align-items-center"><a href="<?= $base_url ?>/home"><i class="isax isax-home-2 me-1"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                        <!-- End Breadcrumb -->

                    </div>

                    <div class="d-flex align-items-center">

                        <!-- Search -->
                        <div class="input-icon-end position-relative me-2">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-icon-addon">
                                <i class="isax isax-search-normal"></i>
                            </span>
                        </div>
                        <!-- /Search -->

                        <!-- Language Dropdown -->
                        <div class="nav-item dropdown has-arrow flag-nav me-2">
                            <a class="btn btn-menubar" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
                                <img src="<?= $base_url ?>/assets/img/flags/us.svg" alt="Language" class="img-fluid">
                            </a>
                            <ul class="dropdown-menu p-2">

                                <!-- item-->
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="<?= $base_url ?>/assets/img/flags/us.svg" alt="flag" class="me-2">English
                                    </a>
                                </li>

                                <!-- item-->
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="<?= $base_url ?>/assets/img/flags/de.svg" alt="flag" class="me-2">German
                                    </a>
                                </li>

                                <!-- item-->
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="<?= $base_url ?>/assets/img/flags/fr.svg" alt="flag" class="me-2">French
                                    </a>
                                </li>

                                <!-- item-->
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <img src="<?= $base_url ?>/assets/img/flags/ae.svg" alt="flag" class="me-2">Arabic
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <!-- Notification -->
                        <div class="notification_item me-2">
                            <a href="#" class="btn btn-menubar position-relative" id="notification_popup" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <i class="isax isax-notification-bing5"></i>
                                <span class="position-absolute badge bg-success border border-white"></span>
                            </a>
                            <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg" style="min-height: 300px;">

                                <div class="p-2 border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
                                        </div>
                                        <div class="col-auto">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle drop-arrow-none link-dark" data-bs-toggle="dropdown" data-bs-offset="0,15" aria-expanded="false">
                                                    <i class="isax isax-setting-2 fs-16 text-body align-middle"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-bell-check me-1"></i>Mark as Read</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-trash me-1"></i>Delete All</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Notification Dropdown -->
                                <div class="notification-body position-relative z-2 rounded-0" data-simplebar>

                                    <!-- Item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap border-bottom" id="notification-1">
                                        <div class="d-flex">
                                            <div class="me-2 position-relative flex-shrink-0">
                                                <script type="text/javascript" style="display:none">
                                                    //<![CDATA[
                                                    window.__mirage2 = {
                                                        petok: "3OBL6K5sYivYV7esBpUifaUFuKS91njoPKloCbF3m.A-1800-0.0.1.1"
                                                    };
                                                    //]]>
                                                </script>
                                                <script type="text/javascript" src="<?= $base_url ?>/assets/js/mirage2.min.js"></script>
                                                <img class="avatar-md rounded-circle" alt="User Img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-05.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-05.jpg" class="avatar-md rounded-circle" alt="User Img"></noscript>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-semibold text-dark">John Smith</p>
                                                <p class="mb-1 text-wrap fs-14">
                                                    A <span class="fw-semibold">new sale</span> has been recorded.
                                                </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fs-12"><i class="isax isax-clock me-1"></i>4 min ago</span>
                                                    <div class="notification-action d-flex align-items-center float-end gap-2">
                                                        <a href="javascript:void(0);" class="notification-read rounded-circle bg-info" data-bs-toggle="tooltip" title="" data-bs-original-title="Make as Read" aria-label="Make as Read"></a>
                                                        <button class="btn rounded-circle text-danger p-0" data-dismissible="#notification-1">
                                                            <i class="isax isax-close-circle fs-12"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap border-bottom" id="notification-2">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-2">
                                                    <span class="avatar-title bg-soft-info text-info fs-18 rounded-circle">
                                                        D
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-semibold text-dark">Donoghue Susan</p>
                                                <p class="mb-0 text-wrap fs-14">
                                                    Switched to a lower-tier package
                                                </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fs-12"><i class="isax isax-clock me-1"></i>4 min ago</span>
                                                    <div class="notification-action d-flex align-items-center float-end gap-2">
                                                        <a href="javascript:void(0);" class="notification-read rounded-circle bg-info" data-bs-toggle="tooltip" title="" data-bs-original-title="Make as Read" aria-label="Make as Read"></a>
                                                        <button class="btn rounded-circle text-danger p-0" data-dismissible="#notification-2">
                                                            <i class="isax isax-close-circle fs-12"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap border-bottom" id="notification-3">
                                        <div class="d-flex">
                                            <div class="me-2 position-relative flex-shrink-0">
                                                <img class="avatar-md rounded-circle" alt="User Img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-03.jpg" class="avatar-md rounded-circle" alt="User Img"></noscript>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-semibold text-dark">Robert Fox </p>
                                                <p class="mb-1 text-wrap fs-14">
                                                    Completed payment for <span class="fw-semibold">#INV00025</span>
                                                </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fs-12"><i class="isax isax-clock me-1"></i>4 min ago</span>
                                                    <div class="notification-action d-flex align-items-center float-end gap-2">
                                                        <a href="javascript:void(0);" class="notification-read rounded-circle bg-info" data-bs-toggle="tooltip" title="" data-bs-original-title="Make as Read" aria-label="Make as Read"></a>
                                                        <button class="btn rounded-circle text-danger p-0" data-dismissible="#notification-3">
                                                            <i class="isax isax-close-circle fs-12"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap border-bottom" id="notification-4">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-2">
                                                    <span class="avatar-title bg-soft-warning text-warning fs-18 rounded-circle">
                                                        <i class="isax isax-message"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 text-wrap fs-14">You have received <span class="fw-semibold">20</span> new messages in the conversation</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fs-12"><i class="isax isax-clock me-1"></i>3 min ago</span>
                                                    <div class="notification-action d-flex align-items-center float-end gap-2">
                                                        <a href="javascript:void(0);" class="notification-read rounded-circle bg-info" data-bs-toggle="tooltip" title="" data-bs-original-title="Make as Read" aria-label="Make as Read"></a>
                                                        <button class="btn rounded-circle text-danger p-0" data-dismissible="#notification-4">
                                                            <i class="isax isax-close-circle fs-12"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Item-->
                                    <div class="dropdown-item notification-item py-2 text-wrap border-bottom" id="notification-5">
                                        <div class="d-flex">
                                            <div class="me-2 position-relative flex-shrink-0">
                                                <img class="avatar-md rounded-circle" alt="User Img" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-17.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-17.jpg" class="avatar-md rounded-circle" alt="User Img"></noscript>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-semibold text-dark">Charlotte Brown</p>
                                                <p class="mb-1 text-wrap fs-14">
                                                    New invoice generated <span class="fw-semibold"> #INV00028</span>
                                                </p>
                                                <div class="mb-1">
                                                    <a class="badge bg-success p-2 py-1 me-1" href="#">Approve</a>
                                                    <a class="badge bg-danger p-2 py-1" href="#">Deny</a>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="fs-12"><i class="isax isax-clock me-1"></i>45 min ago</span>
                                                    <div class="notification-action d-flex align-items-center float-end gap-2">
                                                        <a href="javascript:void(0);" class="notification-read rounded-circle bg-info" data-bs-toggle="tooltip" title="" data-bs-original-title="Make as Read" aria-label="Make as Read"></a>
                                                        <button class="btn rounded-circle text-danger p-0" data-dismissible="#notification-5">
                                                            <i class="isax isax-close-circle fs-12"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- View All-->
                                <div class="p-2 rounded-bottom border-top text-center">
                                    <a href="notifications.html" class="text-center fw-medium fs-14 mb-0">
                                        View All
                                    </a>
                                </div>

                            </div>
                        </div>

                        <!-- Light/Dark Mode Button -->
                        <div class="me-2 theme-item">
                            <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle btn btn-menubar">
                                <i class="isax isax-moon"></i>
                            </a>
                            <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle btn btn-menubar">
                                <i class="isax isax-sun-1"></i>
                            </a>
                        </div>

                        <!-- User Dropdown -->
                        <div class="dropdown profile-dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <span class="avatar online">
                                    <img alt="Img" class="img-fluid rounded-circle" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-01.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-01.jpg" alt="Img" class="img-fluid rounded-circle"></noscript>
                                </span>
                            </a>
                            <div class="dropdown-menu p-2">
                                <div class="d-flex align-items-center bg-light rounded-1 p-2 mb-2">
                                    <span class="avatar avatar-lg me-2">
                                        <img alt="img" class="rounded-circle" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-01.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-01.jpg" alt="img" class="rounded-circle"></noscript>
                                    </span>
                                    <div>
                                        <h6 class="fs-14 fw-medium mb-1">Jafna Cremson</h6>
                                        <p class="fs-13">Administrator</p>
                                    </div>
                                </div>

                                <!-- Item-->
                                <a class="dropdown-item d-flex align-items-center" href="account-settings.html">
                                    <i class="isax isax-profile-circle me-2"></i>Profile Settings
                                </a>

                                <!-- Item-->
                                <a class="dropdown-item d-flex align-items-center" href="inventory-report.html">
                                    <i class="isax isax-document-text me-2"></i>Reports
                                </a>

                                <!-- Item-->
                                <div class="form-check form-switch form-check-reverse d-flex align-items-center justify-content-between dropdown-item mb-0">
                                    <label class="form-check-label" for="notify"><i class="isax isax-notification me-2"></i>Notifications</label>
                                    <input class="form-check-input" type="checkbox" role="switch" id="notify">
                                </div>

                                <hr class="dropdown-divider my-2">

                                <!-- Item-->
                                <a class="dropdown-item logout d-flex align-items-center" href="login.html">
                                    <i class="isax isax-logout me-2"></i>Sign Out
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="dropdown mobile-user-menu profile-dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <span class="avatar avatar-md online">
                        <img alt="Img" class="img-fluid rounded-circle" data-cfsrc="<?= $base_url ?>/assets/img/profiles/avatar-01.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/profiles/avatar-01.jpg" alt="Img" class="img-fluid rounded-circle"></noscript>
                    </span>
                </a>
                <div class="dropdown-menu p-2 mt-0">
                    <a class="dropdown-item d-flex align-items-center" href="profile.html">
                        <i class="isax isax-profile-circle me-2"></i>Profile Settings
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="reports.html">
                        <i class="isax isax-document-text me-2"></i>Reports
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="account-settings.html">
                        <i class="isax isax-setting me-2"></i>Settings
                    </a>
                    <a class="dropdown-item logout d-flex align-items-center" href="login.html">
                        <i class="isax isax-logout me-2"></i>Signout
                    </a>
                </div>
            </div>
            <!-- /Mobile Menu -->

        </div>
    </div>
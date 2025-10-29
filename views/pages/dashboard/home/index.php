<?php
$hour = date('H'); // 24-hour format (00-23)

if ($hour >= 5 && $hour < 12) {
    $greeting = "Good Morning";
} elseif ($hour >= 12 && $hour < 17) {
    $greeting = "Good Afternoon";
} elseif ($hour >= 17 && $hour < 21) {
    $greeting = "Good Evening";
} else {
    $greeting = "Good Night";
}

$period = $_GET['period'] ?? 'monthly';


?>


<div class="content">

    <!-- Start Breadcrumb -->
    <div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
        <div>
            <h6>Dashboard</h6>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
            <div class="dropdown">
                <a class="btn btn-primary d-flex align-items-center justify-content-center dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
                    Create New
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
            <div id="reportrange" class="reportrange-picker d-flex align-items-center">
                <i class="isax isax-calendar text-gray-5 fs-14 me-1"></i><span class="reportrange-picker-field">16 Apr 25 - 16 Apr 25</span>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <div class="bg-primary rounded welcome-wrap position-relative mb-3">

        <!-- start row -->
        <div class="row">
            <div class="col-lg-8 col-md-9 col-sm-7">
                <div>
                    <h5 class="text-white mb-1"><?= $greeting ?>, <?= $_SESSION["uname"] ?></h5>
                    <p class="text-white mb-3">You have 15+ invoices saved to draft that have to send to customers</p>
                    <div class="d-flex align-items-center flex-wrap gap-3">
                        <p class="d-flex align-items-center fs-13 text-white mb-0">
                            <i class="isax isax-calendar5 me-1"></i>
                            <?= date('l, d M Y') ?>
                        </p>
                        <p class="d-flex align-items-center fs-13 text-white mb-0">
                            <i class="isax isax-clock5 me-1"></i>
                            <?= date('h:i A') ?>
                        </p>
                    </div>
                </div>

            </div><!-- end col -->
        </div>
        <!-- end row -->


        <div class="position-absolute end-0 top-50 translate-middle-y p-2 d-none d-sm-block">
            <img src="assets/img/icons/dashboard.svg" alt="img">
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="mb-4">
                        <h6 class="d-flex align-items-center mb-1"><i class="isax isax-category5 text-default me-2"></i>Overview</h6>
                    </div>
                    <div class="row g-4 mb-4">
                        <div class="col-xl-6">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-44 avatar-rounded bg-primary-subtle text-primary flex-shrink-0 me-2">
                                    <i class="isax isax-document-text-1 fs-20"></i>
                                </span>
                                <div>
                                    <p class="mb-1 text-truncate">Products</p>
                                    <h6 class="fs-16 fw-semibold mb-0 text-truncate">
                                        <?= Product::countTotalProduct()->total_products ?>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex align-items-center me-2">
                                <span class="avatar avatar-44 avatar-rounded bg-success-subtle text-success-emphasis flex-shrink-0 me-2">
                                    <i class="isax isax-profile-2user fs-20"></i>
                                </span>
                                <div>
                                    <p class="mb-1 text-truncate">Customers</p>
                                    <h6 class="fs-16 fw-semibold mb-0 text-truncate"><?= Customer::countTotalCustomer()->customers ?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-44 avatar-rounded bg-warning-subtle text-warning-emphasis flex-shrink-0 me-2">
                                    <i class="isax isax-dcube fs-20"></i>
                                </span>
                                <div>
                                    <p class="mb-1 text-truncate">Categories</p>
                                    <h6 class="fs-16 fw-semibold mb-0 text-truncate"><?= Category::countTotalCategory()->categories ?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex align-items-center me-2">
                                <span class="avatar avatar-44 avatar-rounded bg-info-subtle text-info-emphasis flex-shrink-0 me-2">
                                    <i class="isax isax-document-text fs-20"></i>
                                </span>
                                <div>
                                    <p class="mb-1 text-truncate">Orders</p>
                                    <h6 class="fs-16 fw-semibold mb-0 text-truncate"><?= Order::countTotalOrders()->orders ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h6 class="d-flex align-items-center mb-1"><i class="isax isax-chart-success5 text-default me-2"></i>Inventory Statistics</h6>
                    </div>
                    <div class="row g-4 mb-4">
                        <div class="col-xl-6">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-44 avatar-rounded bg-primary-subtle text-primary flex-shrink-0 me-2">
                                    <i class="isax isax-document fs-20"></i>
                                </span>
                                <div>
                                    <p class="mb-1 text-truncate">Total Stock</p>
                                    <h6 class="fs-16 fw-semibold mb-0"><?= Inventory::calculateTotalStock()->total_stock ?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex align-items-center me-2">
                                <span class="avatar avatar-44 avatar-rounded bg-success-subtle text-success-emphasis flex-shrink-0 me-2">
                                    <i class="isax isax-programming-arrow fs-20"></i>
                                </span>
                                <div>
                                    <p class="mb-1 text-truncate">Purchases</p>
                                    <h6 class="fs-16 fw-semibold mb-0 text-truncate"><?= Purchase::countTotalPurchase()->total_purchase ?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex align-items-center">
                                <span class="avatar avatar-44 avatar-rounded bg-warning-subtle text-warning-emphasis flex-shrink-0 me-2">
                                    <i class="isax isax-building fs-20"></i>
                                </span>
                                <div>
                                    <p class="mb-1 text-truncate">Suppliers</p>
                                    <h6 class="fs-16 fw-semibold mb-0 text-truncate"><?= Supplier::countSuppliers()->suppliers ?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex align-items-center me-2">
                                <span class="avatar avatar-44 avatar-rounded bg-info-subtle text-info-emphasis flex-shrink-0 me-2">
                                    <i class="isax isax-building-3 fs-20"></i>
                                </span>
                                <div>
                                    <p class="mb-1 text-truncate">Warhouses</p>
                                    <h6 class="fs-16 fw-semibold text-truncate mb-0"><?= Warehouse::countWarehouses()->warehouses ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-xl-8 d-flex">
            <div class="card flex-fill">
                <div class="card-body pb-0">
                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <h6 class="mb-1">Sales Analytics</h6>
                        <div class="select-sm mb-1">
                            <select class="select" id="period_selector">
                                <option>Monthly</option>
                                <option>Weekly</option>
                                <option>Yearly</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <div>
                            <div class="d-flex align-items-center flex-wrap gap-4">
                                <div>
                                    <p class="fs-13 mb-1">Total Sales</p>
                                    <h6 class="fs-16 fw-semibold text-primary" data-summary="sales">
                                        $<?= (int) Order::calculateOrderAmount($period)->order_amount ?>
                                    </h6>
                                </div>
                                <div>
                                    <p class="fs-13 mb-1">Receipts</p>
                                    <h6 class="fs-16 fw-semibold text-success" data-summary="receipts">
                                        $<?= (int) Order::calculateOrderAmount($period)->order_amount ?>
                                    </h6>
                                </div>
                                <div>
                                    <p class="fs-13 mb-1">Expenses</p>
                                    <h6 class="fs-16 fw-semibold text-danger" data-summary="expenses">
                                        $<?= (int) Purchase::calculateTotalPurchase($period)->total_purchase ?>
                                    </h6>
                                </div>
                                <div>
                                    <p class="fs-13 mb-1">Earnings</p>
                                    <h6 class="fs-16 fw-semibold" data-summary="earnings">
                                        <?php
                                        $total_purchase = (int) Purchase::calculateTotalPurchase($period)->total_purchase;
                                        $total_sales = (int) Order::calculateOrderAmount($period)->order_amount;
                                        $income = $total_purchase - $total_sales;
                                        ?>
                                        $<?= $income ?>
                                    </h6>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <p class="fs-13 text-dark d-flex align-items-center mb-0"><i class="fa-solid fa-circle text-info fs-12 me-1"></i>Received </p>
                            <p class="fs-13 text-dark d-flex align-items-center mb-0"><i class="fa-solid fa-circle text-warning fs-12 me-1"></i>Pending</p>
                        </div>
                    </div>
                    <div id="sales_analytic"></div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div>


    </div>
    <div class="row">

        <!-- Start Amount -->
        <?php
        function renderMonthlyCard($label, $current, $previous, $icon, $bgClass = 'bg-primary', $iconSize = 'fs-16', $prefix = '$', $decimals = 2)
        {
            $change = $previous > 0 ? (($current - $previous) / $previous) * 100 : 0;
            $changeClass = $change >= 0 ? 'text-success' : 'text-danger';
            $iconClass   = $change >= 0 ? 'isax isax-send' : 'isax isax-received';
            $sign        = $change >= 0 ? '+' : '';

        ?>
            <div class="col-sm-6 col-xl-3 d-flex">
                <div class="card overflow-hidden z-1 flex-fill">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between border-bottom mb-2 pb-2">
                            <div>
                                <p class="mb-1"><?= htmlspecialchars($label) ?></p>
                                <h6 class="fs-16 fw-semibold"><?= $prefix . number_format($current, $decimals) ?></h6>
                            </div>
                            <span class="avatar avatar-lg <?= $bgClass ?> text-white avatar-rounded">
                                <i class="<?= $icon ?> <?= $iconSize ?>"></i>
                            </span>
                        </div>
                        <p class="fs-13">
                            <span class="<?= $changeClass ?> d-inline-flex align-items-center">
                                <i class="<?= $iconClass ?> me-1"></i>
                                <?= $sign . number_format($change, 2) ?>%
                            </span> from last month
                        </p>
                    </div>
                </div>
            </div>
        <?php
        }

        ?>

        <?php
        $salesData    = Order::calculateMonthlyComparison();

        renderMonthlyCard('Sales', $salesData->current, $salesData->previous, 'isax isax-receipt-item fs-16', 'bg-primary', 'fs-16', '$', 2);
        ?>
        <!-- end col -->
        <!-- End Amount -->

        <!-- Start Customers -->
        <?php
        $customerData = Customer::calculateMonthlyCustomerComparison();
        renderMonthlyCard('Customers', $customerData->current, $customerData->previous, 'isax isax-user fs-16', 'bg-info', 'fs-16', '', 0);



        ?>
        <!-- End Customers -->

        <!-- Start Invoices -->
        <?php
        $purchaseData = Purchase::calculateMonthlyPurchaseComparison();
        renderMonthlyCard('Purchases', $purchaseData->current, $purchaseData->previous, 'isax isax-programming-arrow fs-20', 'bg-warning', 'fs-20', '$', 2);
        ?>
        <!-- End Invoices -->

        <!-- Start Estimates -->
        <div class="col-sm-6 col-xl-3 d-flex">
            <div class="card overflow-hidden z-1 flex-fill">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between border-bottom mb-2 pb-2">
                        <div>
                            <p class="mb-1">(DEVELOP_ESTIMATES)</p>
                            <h6 class="fs-16 fw-semibold">######</h6>
                        </div>
                        <span class="avatar avatar-lg bg-danger text-white avatar-rounded">
                            <i class="isax isax-information fs-16"></i>
                        </span>
                    </div>
                    <p class="fs-13"><span class="text-danger d-inline-flex align-items-center"><i class="isax isax-received me-1"></i>7.45%</span> from last month</p>
                </div> <!-- end card body -->
                <div class="position-absolute end-0 bottom-0 z-n1">
                    <img src="<?= $base_url ?>/assets/img/bg/card-bg-07.svg" alt="img">
                </div>
            </div><!-- end card -->
        </div><!-- end col -->
        <!-- End Estimates -->

    </div>
    <!-- start row -->

    <!-- end row -->

    <!-- start row -->
    <div class="row">

        <div class="col-md-4 col-xl-4 d-flex flex-column">
            <div class="card w-100">

                <div class="card-body">
                    <h6 class="mb-1">Top Selling Products</h6>
                    <div id="radial-chart" class="chart-set"></div>
                </div><!-- end card body -->
            </div><!-- end card --><!-- end card -->
        </div>
        <!-- Start Sales Analytics -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap mb-3">
                        <h6 class="mb-1">Recent Orders</h6>
                        <a href="<?= $base_url ?>/order" class="btn btn-sm btn-dark mb-1">View all orders</a>
                    </div>
                    <div class="table-responsive no-filter no-pagination">
                        <table class="table table-nowrap border mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Order Date</th>
                                    <th>Invoice</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($data as $row) :
                                ?>

                                    <tr class="odd">

                                        <td>
                                            #<?= $row->id ?>
                                        </td>
                                        <td>
                                            <h6 class="fs-14 fw-medium mb-0"><?= htmlspecialchars($row->customer_name) ?></h6>
                                        </td>

                                        <td>$ <?= $row->total_amount ?></td>
                                        <td>
                                            <?php if ($row->status == 'paid'): ?>
                                                <span class="badge bg-success-subtle text-success">Paid</span>

                                            <?php elseif ($row->status == 'unpaid'): ?>
                                                <span class="badge bg-danger-subtle text-info">unpaid</span>

                                            <?php else: ?>
                                                <span class="badge bg-danger-subtle text-danger"><?= ucfirst($row->status) ?></span>
                                            <?php endif; ?>

                                        </td>

                                        <td><?= date('Y-m-d', strtotime($row->order_date)) ?></td>
                                        <td>
                                            <a href="<?= $base_url ?>/order/show/<?= $row->id ?>" class="btn btn-sm btn-outline-white d-inline-flex align-items-center me-1">
                                                <i class="isax isax-add-circle me-1"></i> Invoice
                                            </a>
                                        </td>

                                        <td class="action-item">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="">
                                                <i class="isax isax-more"></i>
                                            </a>
                                            <ul class="dropdown-menu" style="">
                                                <li>
                                                    <a href="<?= $base_url ?>/order/show/<?= $row->id ?>" class="dropdown-item d-flex align-items-center"><i class="isax isax-eye me-2"></i>View</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i class="isax isax-archive-2 me-2"></i>Archive</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="dropdown-item d-flex align-items-center deleteOrderBtn"
                                                        data-id="<?= $row->id ?>"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete_Order_modal">
                                                        <i class="isax isax-trash me-2"></i> Delete
                                                    </a>

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
                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
        <!-- End Sales Analytics -->

        <!-- Start Invoice Analytics -->
        <!-- end col -->
        <!-- End Invoice Analytics -->

    </div>
    <!-- end row -->

    <!-- start row -->
    <div class="row">

        <!-- Start Recent Invoices -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap mb-3">
                        <h6 class="mb-1">Recent Invoices</h6>
                        <a href="invoices.html" class="btn btn-sm btn-dark mb-1">View all</a>
                    </div>
                    <div class="table-responsive border table-nowrap">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Amount</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                                <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-25.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-25.jpg" class="rounded-circle" alt="img"></noscript>
                                            </a>
                                            <div>
                                                <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Emily Clark</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-dark">$10,000</td>
                                    <td>04 Mar 2025</td>
                                    <td>
                                        <span class="badge badge-soft-success badge-sm d-inline-flex align-items-center">Paid<i class="isax isax-tick-circle ms-1"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                                <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-19.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-19.jpg" class="rounded-circle" alt="img"></noscript>
                                            </a>
                                            <div>
                                                <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">John Carter</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-dark">$25,750</td>
                                    <td>20 Feb 2025</td>
                                    <td>
                                        <span class="badge badge-soft-warning badge-sm d-inline-flex align-items-center">Partially Paid<i class="isax isax-slash ms-1"></i></span>
                                    </td>
                                </tr>
                                <tr>
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
                                    <td class="text-dark">$1,20,500</td>
                                    <td>12 Nov 2024</td>
                                    <td>
                                        <span class="badge badge-soft-danger badge-sm d-inline-flex align-items-center">Overdue<i class="isax isax-close-circle ms-1"></i></span>
                                    </td>
                                </tr>
                                <tr>
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
                                    <td class="text-dark">$7,50,300</td>
                                    <td>25 Oct 2024</td>
                                    <td>
                                        <span class="badge badge-soft-info badge-sm d-inline-flex align-items-center">Sent<i class="isax isax-timer ms-1"></i></span>
                                    </td>
                                </tr>
                                <tr>
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
                                    <td class="text-dark">$9,99,999</td>
                                    <td>18 Oct 2024</td>
                                    <td>
                                        <span class="badge badge-soft-info badge-sm d-inline-flex align-items-center">Sent<i class="isax isax-timer ms-1"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                                <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-39.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-39.jpg" class="rounded-circle" alt="img"></noscript>
                                            </a>
                                            <div>
                                                <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Charlotte Brown</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-dark">$87,650</td>
                                    <td>22 Sep 2024</td>
                                    <td>
                                        <span class="badge badge-soft-success badge-sm d-inline-flex align-items-center">Paid<i class="isax isax-tick-circle ms-1"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                                <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-21.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-21.jpg" class="rounded-circle" alt="img"></noscript>
                                            </a>
                                            <div>
                                                <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">William Parker</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-dark">$69,420</td>
                                    <td>15 Sep 2024</td>
                                    <td>
                                        <span class="badge badge-soft-info badge-sm d-inline-flex align-items-center">Sent<i class="isax isax-timer ms-1"></i></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
        <!-- End Recent Invoices -->

        <!-- Start Recent Estimates -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap mb-3">
                        <h6 class="mb-1">Recent Estimates</h6>
                        <a href="quotations.html" class="btn btn-sm btn-dark mb-1">View all</a>
                    </div>
                    <div class="table-responsive border table-nowrap">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Expiry Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
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
                                    <td>10 Mar 2020</td>
                                    <td class="text-dark">$24,050</td>
                                    <td>
                                        <span class="badge badge-soft-success badge-sm d-inline-flex align-items-center">Accepted<i class="isax isax-tick-circle ms-1"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                                <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-05.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-05.jpg" class="rounded-circle" alt="img"></noscript>
                                            </a>
                                            <div>
                                                <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">David Anderson</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>26 Feb 2025</td>
                                    <td class="text-dark">$16,362</td>
                                    <td>
                                        <span class="badge badge-soft-warning badge-sm d-inline-flex align-items-center">Expired<i class="isax isax-slash ms-1"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                                <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-38.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-38.jpg" class="rounded-circle" alt="img"></noscript>
                                            </a>
                                            <div>
                                                <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Emma Lewis</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>18 Nov 2024</td>
                                    <td class="text-dark">$1,45,355</td>
                                    <td>
                                        <span class="badge badge-soft-info badge-sm d-inline-flex align-items-center">Sent<i class="isax isax-timer ms-1"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                                <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-03.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-03.jpg" class="rounded-circle" alt="img"></noscript>
                                            </a>
                                            <div>
                                                <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Robert Thomas</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>31 Oct 2024</td>
                                    <td class="text-dark">$35,000</td>
                                    <td>
                                        <span class="badge badge-soft-success badge-sm d-inline-flex align-items-center">Accepted<i class="isax isax-tick-circle ms-1"></i></span>
                                    </td>
                                </tr>
                                <tr>
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
                                    <td>24 Oct 2024</td>
                                    <td class="text-dark">$99,999</td>
                                    <td>
                                        <span class="badge badge-soft-warning badge-sm d-inline-flex align-items-center">Expired<i class="isax isax-slash ms-1"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                                <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-22.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-22.jpg" class="rounded-circle" alt="img"></noscript>
                                            </a>
                                            <div>
                                                <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Mia Thompson</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>28 Sep 2024</td>
                                    <td class="text-dark">$1,27,900</td>
                                    <td>
                                        <span class="badge badge-soft-info badge-sm d-inline-flex align-items-center">Sent<i class="isax isax-timer ms-1"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                                <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/users/user-06.jpg" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/users/user-06.jpg" class="rounded-circle" alt="img"></noscript>
                                            </a>
                                            <div>
                                                <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);">Amelia Robinson</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>21 Sep 2024</td>
                                    <td class="text-dark">$39,280</td>
                                    <td>
                                        <span class="badge badge-soft-success badge-sm d-inline-flex align-items-center">Accepted<i class="isax isax-tick-circle ms-1"></i></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
        <!-- End Recent Estimates -->

    </div>
    <!-- end row -->
</div>
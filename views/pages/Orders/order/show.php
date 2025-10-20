<?php
$customer = Customer::find($order->customer_id);
$order_details = OrderDetail::find_by_order_id($order->id);
?>

<style>
    /* =======================
   PRINT OPTIMIZATION
   ======================= */
    @media print {
        @page {
            size: A4 portrait;
            margin: 12mm;
        }

        body * {
            visibility: hidden !important;
        }

        #invoiceArea,
        #invoiceArea * {
            visibility: visible !important;
        }

        #invoiceArea {
            position: absolute !important;
            left: 0;
            top: 0;
            width: 100%;
            background: #fff !important;
            color: #000 !important;
            -webkit-print-color-adjust: exact;
            font-size: 11pt !important;
            line-height: 1.4 !important;
        }

        .invoice_info {
            padding: 20px;
        }

        /* Header layout: Invoice / Bill From / Bill To */
        .row.gy-3.position-relative.z-1 {
            display: flex !important;
            flex-wrap: nowrap !important;
            justify-content: space-between !important;
            align-items: flex-start !important;
            gap: 10px !important;
        }

        .row.gy-3.position-relative.z-1>.col-lg-4 {
            flex: 1 1 32% !important;
            max-width: 32% !important;
            padding: 0 6px !important;
            box-sizing: border-box !important;
            page-break-inside: avoid !important;
        }

        /* Tables */
        table {
            width: 100% !important;
            border-collapse: collapse !important;
            font-size: 10.5pt !important;
        }

        th,
        td {
            border: 1px solid #000 !important;
            padding: 6px 8px !important;
            vertical-align: middle !important;
        }

        thead th {
            background: #f2f2f2 !important;
            -webkit-print-color-adjust: exact;
        }

        /* Compact spacing */
        .p-4 {
            padding: 1rem !important;
        }

        .mb-3,
        .mb-2,
        .mb-1 {
            margin-bottom: 4px !important;
        }

        .bg-light.p-4.rounded.position-relative.mb-3 {
            margin-bottom: 10px !important;
        }

        /* Totals & Bank details row */
        .border-bottom.mb-3>.row {
            display: flex !important;
            flex-wrap: nowrap !important;
            justify-content: space-between !important;
            gap: 10px !important;
        }

        .border-bottom.mb-3 .col-lg-6 {
            flex: 1 1 50% !important;
            max-width: 50% !important;
            padding: 0 6px !important;
            box-sizing: border-box !important;
            page-break-inside: avoid !important;
        }

        /* Alignments */
        .print_align_right {
            text-align: end;
        }

        .print_align_right_sign {
            text-align: end;
            padding-right: 1rem;
        }

        /* Hide buttons and navigation */
        .btn,
        nav,
        header,
        footer,
        a[href^="#"] {
            display: none !important;
        }

        /* Image scaling */
        #invoiceArea img {
            max-width: 100% !important;
            height: auto !important;
        }

        /* Prevent breaking inside sections */
        .row.gy-3.position-relative.z-1,
        .row.gy-3.position-relative.z-1>*,
        .col-lg-6:last-child {
            page-break-inside: avoid !important;
        }
    }
</style>

<div class="content">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div>
                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3">
                    <h6>
                        <a href="<?= $base_url ?>/order">
                            <i class="isax isax-arrow-left me-2"></i>Invoice (Admin)
                        </a>
                    </h6>
                    <div class="d-flex align-items-center flex-wrap row-gap-3">
                        <a href="#" class="btn btn-outline-white d-inline-flex align-items-center me-3">
                            <i class="isax isax-document-like me-1"></i>Download PDF
                        </a>
                        <a href="#" class="btn btn-outline-white d-inline-flex align-items-center me-3">
                            <i class="isax isax-message-notif me-1"></i>Send Email
                        </a>
                        <a href="#" id="print_invoice" class="btn btn-primary d-inline-flex align-items-center me-3">
                            <i class="isax isax-printer me-1"></i>Print
                        </a>
                    </div>
                </div>

                <!-- ===================== -->
                <!-- INVOICE SECTION START -->
                <!-- ===================== -->
                <div class="card" id="invoiceArea">
                    <div class="card-body">
                        <div class="bg-light p-4 rounded position-relative mb-3">
                            <div class="position-absolute top-0 end-0 z-0">
                                <img alt="img" src="<?= $base_url ?>/assets/img/bg/card-bg.png">
                            </div>

                            <!-- Invoice Header -->
                            <div class=" d-flex align-items-center justify-content-between border-bottom flex-wrap mb-3 pb-2 position-relative z-1">
                                <div class="mb-3 ">
                                    <h4 class="mb-1">Invoice</h4>
                                    <div class="d-flex align-items-center flex-wrap row-gap-3">
                                        <div class="me-4">
                                            <h6 class="fs-14 fw-semibold mb-1">Dreams Technologies Pvt Ltd.,</h6>
                                            <p>15 Hodges Mews, High Wycombe HP12 3JL, United Kingdom</p>
                                        </div>
                                        <span>
                                            <img alt="img" width="48" height="48" src="<?= $base_url ?>/assets/img/icons/not-paid.png">
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <img src="<?= $base_url ?>/assets/img/invoice-logo.svg" class="invoice-logo-dark" alt="img">
                                    <img src="<?= $base_url ?>/assets/img/invoice-logo-white-2.svg" class="invoice-logo-white" alt="img">
                                </div>
                            </div>

                            <!-- Invoice Info Row -->
                            <div class="row gy-3 position-relative z-1 invoice_info">
                                <div class="col-lg-4">
                                    <h6 class="mb-2 fs-16 fw-semibold">Invoice Details</h6>
                                    <p class="mb-1">Invoice ID : <span class="text-dark"><?= $order->id ?></span></p>
                                    <p class="mb-1">Issued On : <span class="text-dark"><?= $order->created_at ?></span></p>
                                    <p class="mb-1">Due Date : <span class="text-dark">Date87</span></p>
                                    <span class="badge bg-danger badge-sm">Due in 8 days</span>
                                </div>
                                <div class="col-lg-4">
                                    <h6 class="mb-2 fs-16 fw-semibold">Bill From</h6>
                                    <h6 class="fs-14 fw-semibold mb-1">SkyTech</h6>
                                    <p class="mb-1">23 Distilary Road, Dhaka-1204</p>
                                    <p class="mb-1">+09666666</p>
                                    <p class="mb-1">skytech@infy.uk</p>
                                    <p class="mb-0">GST : 243E45767889</p>
                                </div>
                                <div class="col-lg-4">
                                    <h6 class="mb-2 fs-16 fw-semibold">Bill To</h6>
                                    <div class="bg-white rounded p-3">
                                        <div class="d-flex align-items-center mb-1">
                                            <img src="<?= $base_url ?>/assets/img/icons/billing-to-image.svg" alt="img" class="avatar avatar-lg me-2">
                                            <div>
                                                <h6 class="fs-14 fw-semibold"><?= $customer->name ?></h6>
                                            </div>
                                        </div>
                                        <p class="mb-1"><?= $customer->address ?></p>
                                        <p class="mb-1"><?= $customer->phone ?></p>
                                        <p class="mb-1"><?= $customer->email ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Table Section -->
                        <div class="mb-3">
                            <h6 class="mb-3">Product / Service Items</h6>
                            <div class="table-responsive rounded border mb-3">
                                <table class="table table-bordered table-striped table-hover align-middle m-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th>Product</th>
                                            <th class="text-center">Quantity</th>
                                            <th class="text-end">Rate</th>
                                            <th class="text-end">Tax</th>
                                            <th class="text-end">Discount</th>
                                            <th class="text-end">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count = 1;
                                        $discount = 0.0;
                                        $line_total = 0.0;
                                        foreach ($order_details as $row) :
                                            $product = Product::findProductRow($row['product_id']);
                                            $price = (float)$row['price'];
                                            $quantity = (float)$row['quantity'];
                                            $product_discount = (float)$product['discount'];
                                            $vat = (float)$row['vat'];
                                            $total_amount = ($price * $quantity) - $product_discount + $vat;
                                        ?>
                                            <tr>
                                                <td class="text-center"><?= $count ?></td>
                                                <td><?= $product['name'] ?></td>
                                                <td class="text-center"><?= number_format($quantity, 2) ?></td>
                                                <td class="text-end"><?= number_format($price, 2) ?></td>
                                                <td class="text-end"><?= number_format($vat, 2) ?></td>
                                                <td class="text-end"><?= number_format($product_discount, 2) ?></td>
                                                <td class="text-end"><?= number_format($total_amount, 2) ?></td>
                                            </tr>
                                        <?php
                                            $count++;
                                            $discount += $product_discount;
                                            $line_total += $total_amount;
                                        endforeach;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Totals & Bank Details -->
                        <div class="border-bottom mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center p-4 mb-3">
                                        <div class="me-3">
                                            <p class="mb-2">Scan to Pay</p>
                                            <img alt="QR" src="<?= $base_url ?>/assets/img/icons/qr.png">
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Bank Details</h6>
                                            <p class="mb-1">Bank Name : <span class="text-dark">ABC Bank</span></p>
                                            <p class="mb-1">Account Number : <span class="text-dark">782459739212</span></p>
                                            <p class="mb-1">IFSC Code : <span class="text-dark">ABC0001345</span></p>
                                            <p class="mb-0">Payment Ref : <span class="text-dark">INV-20250220-001</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3 p-4">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h6 class="fs-14 fw-semibold">Total</h6>
                                            <h6 class="fs-14 fw-semibold">$<?= $line_total ?></h6>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h6 class="fs-14 fw-semibold">Tax/Vat</h6>
                                            <h6 class="fs-14 fw-semibold">$<?= $vat ?></h6>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                            <h6 class="fs-14 fw-semibold">Discount</h6>
                                            <h6 class="fs-14 fw-semibold text-danger">$<?= $discount ?></h6>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
                                            <h6>Grand Total (USD)</h6>
                                            <h6>$<?= ($line_total + $vat) - $discount ?></h6>
                                        </div>
                                        <div class="print_align_right">
                                            <h6 class="fs-14 fw-semibold mb-1">Total In Words</h6>
                                            <p>Five Hundred &amp; Ninety Six Dollars</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="mb-3">
                                    <h6 class="fs-14 fw-semibold mb-1">Terms and Conditions</h6>
                                    <p>The Payment must be returned in the same condition.</p>
                                    <h6 class="fs-14 fw-semibold mb-1">Notes</h6>
                                    <p>All charges are final and include applicable taxes, fees, and additional costs.</p>
                                </div>
                            </div>
                            <div class="col-lg-5 text-lg-end mb-3 print_align_right_sign">
                                <img class="sign-dark" alt="img" src="<?= $base_url ?>/assets/img/icons/sign.png">
                                <h6 class="fs-14 fw-semibold mb-1">Ted M. Davis</h6>
                                <p>Manager</p>
                            </div>
                        </div>

                        <!-- Footer Logo -->
                        <div class="bg-light d-flex align-items-center justify-content-between p-4 rounded card-bg">
                            <div>
                                <h6 class="fs-14 fw-semibold mb-1">Dreams Technologies Pvt Ltd.,</h6>
                                <p>15 Hodges Mews, High Wycombe HP12 3JL, United Kingdom</p>
                            </div>
                            <div>
                                <img src="<?= $base_url ?>/assets/img/invoice-logo.svg" class="invoice-logo-dark" alt="img">
                                <img src="<?= $base_url ?>/assets/img/invoice-logo-white-2.svg" class="invoice-logo-white" alt="img">
                            </div>
                        </div>

                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
        </div>
    </div>
</div>

<script>
    let isPrinting = false;
    document.getElementById('print_invoice').addEventListener('click', function(e) {
        e.preventDefault();
        if (isPrinting) return;
        isPrinting = true;
        window.print();
        setTimeout(() => isPrinting = false, 1000);
    });
</script>
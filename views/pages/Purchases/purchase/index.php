<!-- Start Content -->
<div class="content content-two">

    <!-- Page Header -->
    <div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
        <div>
            <h6>Purchase Orders</h6>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
            <div>
                <a href="<?= $base_url ?>/purchase/create" class="btn btn-primary d-flex align-items-center">
                    <i class="isax isax-add-circle5 me-1"></i>New Purchase
                </a>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Search -->
    <div class="row">
        <div class="col-md-3">
            <div class="input-group mb-3">
                <span class="input-group-text bg-white border-end-0">
                    <i class="isax isax-search-normal fs-12"></i>
                </span>
                <input type="text" class="form-control border-start-0 ps-0 bg-white" placeholder="Search Purchase">
            </div>
        </div>
    </div>
    <!-- End Search -->

    <!-- Table -->
    <div class="table-responsive border border-bottom-0 rounded">
        <table class="table table-nowrap m-0">
            <thead class="table-light">
                <tr>
                    <th class="no-sort">
                        <div class="form-check form-check-md">
                            <input class="form-check-input" type="checkbox" id="select-all">
                        </div>
                    </th>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Product</th>
                    <th>Supplier</th>
                    <th>Warehouse</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th class="no-sort">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row): ?>
                    <tr>
                        <td>
                            <div class="form-check form-check-md">
                                <input class="form-check-input" type="checkbox">
                            </div>
                        </td>
                        <td>#<?= $row->purchase_id ?></td>
                        <td><?= date('Y-m-d', strtotime($row->order_date)) ?></td>
                        <td>
                            <h6 class="fs-14 fw-medium mb-0">
                                <?= htmlspecialchars($row->product_name ?? 'Multiple Products') ?>
                            </h6>
                        </td>
                        <td><?= htmlspecialchars($row->supplier_name) ?></td>
                        <td><?= htmlspecialchars($row->warehouse_name) ?></td>
                        <td><?= htmlspecialchars($row->quantity) ?></td>
                        <td><?= number_format($row->price, 2) ?></td>
                        <td>
                            <?php if ($row->status == 'paid'): ?>
                                <span class="badge bg-success-subtle text-success">Paid</span>
                            <?php elseif ($row->status == 'unpaid'): ?>
                                <span class="badge bg-danger-subtle text-warning">unpaid</span>
                            <?php else: ?>
                                <span class="badge bg-danger-subtle text-danger"><?= ucfirst($row->status) ?></span>
                            <?php endif; ?>
                        </td>
                        <td class="action-item">
                            <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                <i class="isax isax-more"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?= $base_url ?>/purchase/delete/<?= $row->purchase_id ?>" class="dropdown-item text-danger">
                                        <i class="isax isax-trash me-2"></i>Delete
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- End Table -->

</div>
<!-- End Content -->
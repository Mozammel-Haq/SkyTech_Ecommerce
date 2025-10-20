<!-- Start Content -->
<div class="content content-two">

	<!-- Page Header -->
	<div class="d-flex align-items-center justify-content-between mb-3">
		<h6><a href="<?= $base_url ?>/purchase"><i class="isax isax-arrow-left me-2"></i>Purchases</a></h6>
		<button type="button" class="btn btn-outline-white" id="preview_btn">
			<i class="isax isax-eye me-1"></i>Preview
		</button>
	</div>

	<div class="card">
		<div class="card-body">
			<h6 class="mb-3">Add Purchase Order</h6>
			<form id="purchase_form">

				<!-- Purchase Info -->
				<div class="row mb-3">
					<div class="col-md-4">
						<label class="form-label">Supplier</label>
						<?php
						echo Supplier::html_select('supplier')
						?>
					</div>
					<div class="col-md-4">
						<label class="form-label">Order Date</label>
						<div class="input-group position-relative mb-3">
							<input id="purchase_date" type="text" class="form-control datetimepicker rounded-end" placeholder="25 Mar 2025">
							<span class="input-icon-addon fs-16 text-gray-9">
								<i class="isax isax-calendar-2"></i>
							</span>
						</div>
					</div>
					<div class="col-md-4">
						<label class="form-label">Status</label>
						<select name="status" class="form-select" id="status">
							<option value="paid">paid</option>
							<option value="unpaid">unpaid</option>
						</select>
					</div>
				</div>

				<!-- Product Table -->
				<div class="table-responsive border rounded mb-3">
					<table class="table table-bordered table-striped align-middle m-0" id="product_table">
						<thead class="table-light fs-13">
							<tr>
								<th>Product</th>
								<th class="text-center">Qty</th>
								<th class="text-end">Unit Price</th>
								<th class="text-end">Amount</th>
								<th class="text-center">Action</th>
							</tr>
							<tr>
								<td>
									<?php
									echo Product::html_select("productForPurchase")
									?>
								</td>
								<td>
									<input type="number" id="quantity" class="form-control form-control-sm text-center" value="1" min="1">
								</td>
								<td>
									<input type="number" id="unit_price" class="form-control form-control-sm text-end">
								</td>
								<td>
									<input type="number" id="line_total" class="form-control form-control-sm text-end" readonly>
								</td>
								<td class="text-center">
									<button type="button" class="btn btn-success btn-sm" id="add_purchase">Add</button>
								</td>
							</tr>
						</thead>
						<tbody id="product_rows">
							<!-- Added product rows appear here -->
						</tbody>
					</table>
				</div>


				<!-- Summary -->
				<div class="row mb-3">
					<div class="col-lg-7"></div>
					<div class="col-lg-5">
						<div class="p-3 border rounded">
							<div class="d-flex justify-content-between border-bottom pb-2 mb-2">
								<h6 class="fs-14 fw-bold">Grand Total</h6>
								<h6 class="fs-14 fw-bold" id="summary_total"><span>$</span>0.00</h6>
							</div>
							<!-- Total in Words -->
							<div>
								<h6 class="fs-14 fw-semibold mb-1">Total In Words</h6>
								<p id="summary_total_words">Zero Dollars</p>
							</div>
						</div>
					</div>
				</div>

				<div class="d-flex justify-content-between">
					<button type="button" class="btn btn-outline-white">Cancel</button>
					<button type="button" class="btn btn-primary" id="save_purchase_btn">Save Purchase</button>
				</div>

			</form>
		</div>
	</div>

</div>
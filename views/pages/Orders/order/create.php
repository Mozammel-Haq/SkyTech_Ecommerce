<div class="content">

	<!-- Start row  -->
	<div class="row">
		<div class="col-md-11 mx-auto">
			<div>
				<div class="d-flex align-items-center justify-content-between mb-3">
					<h6><a href="invoices.html"><i class="isax isax-arrow-left me-2"></i>Invoice</a></h6>
					<a href="invoice-details.html" class="btn btn-outline-white d-inline-flex align-items-center"><i class="isax isax-eye me-1"></i>Preview</a>
				</div>
				<div class="card">
					<div class="card-body">
						<h6 class="mb-3">Invoice Details</h6>
						<form action="add-invoice.html">
							<div class="border-bottom mb-3 pb-1">
								<!-- start row -->
								<div class="row justify-content-between">
									<div class="col-xl-5 col-lg-7">
										<div class="row gx-3">
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Invoice Number</label>
													<input type="text" class="form-control" placeholder="#000<?= Order::get_last_id() + 1 ?>" readonly="">
												</div>
											</div>

											<div class="col-lg-12">
												<label class="form-label">Issue Date:</label><br>
												<div class="input-group position-relative mb-3">
													<input id="order_date" type="text" class="form-control datetimepicker rounded-end" placeholder="25 Mar 2025">
													<span class="input-icon-addon fs-16 text-gray-9">
														<i class="isax isax-calendar-2"></i>
													</span>
												</div>
											</div>
											<div class="col-lg-12">
												<label class="form-label">Due Date:</label><br>
												<div class="input-group position-relative mb-3">
													<input id="due_date" type="text" class="form-control datetimepicker rounded-end" placeholder="25 Mar 2025">
													<span class="input-icon-addon fs-16 text-gray-9">
														<i class="isax isax-calendar-2"></i>
													</span>
												</div>
											</div>


										</div>
									</div><!-- end col -->
									<div class="col-xl-4 col-lg-5">
										<div class="row">
											<div class="col-lg-12">
												<div class="border border-dashed bg-light rounded text-center p-3 mb-3">
													<img src="assets/img/invoice-logo.svg" class="invoice-logo-dark" alt="img">
													<img src="assets/img/invoice-logo-white-2.svg" class="invoice-logo-white" alt="img">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="row gx-3">
													<div class="col-md-6">
														<div class="mb-3">
															<select name="status" class="form-select" id="status">
																<option value="available">Available</option>
																<option value="out of stock">Out of Stock</option>
																<option value="discontinued">Discontinued</option>
																<option value="coming soon">Coming soon</option>
																<option value="pre-order">Pre-order</option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="mb-3">
															<select class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
																<option>Currency</option>
																<option>Dollar</option>
																<option>Euro</option>
																<option>Yen</option>
																<option>Pound</option>
																<option>Rupee</option>
															</select>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div><!-- end col -->
								</div>
								<!-- end row -->

							</div>

							<div class="border-bottom mb-3">
								<!-- start row -->
								<div class="row">
									<div class="col-lg-6">
										<div class="card shadow-none">
											<div class="card-body">
												<h6 class="mb-3">Bill From</h6>
												<div>
													<label class="form-label">Billed By</label>
													<select class="select select2-hidden-accessible" data-select2-id="select2-data-13-uag3" tabindex="-1" aria-hidden="true">
														<option data-select2-id="select2-data-15-7afg">Select</option>
														<option>Kanakku</option>
													</select>
												</div>
											</div><!-- end card body -->
										</div><!-- end card -->
									</div>
									<div class="col-lg-6">
										<div class="card shadow-none">
											<div class="card-body">
												<h6 class="mb-3">Bill To</h6>
												<div>
													<div class="d-flex align-items-center justify-content-between">
														<label class="form-label">Customer</label>
														<a href="#" class="d-inline-flex align-items-center">
															<i class="isax isax-add-circle5 text-primary me-1"></i>Add New
														</a>
													</div>
													<div class="d-flex align-items-center justify-content-between">

														<?php
														echo Customer::html_select('customer');

														?>


													</div>
													<textarea id="billAddress" class="form-control form-control-sm mt-2 address" rows="2" readonly>Billing address</textarea><br>
													<label class="form-label">Receipant</label>
													<textarea id="shipAddress" class="form-control form-control-sm mt-2 address" rows="2">Shipping address</textarea>
												</div>
											</div>
										</div><!-- end col -->
									</div>
									<!-- end row -->
								</div>
								<div class="border-bottom mb-3 pb-3">
									<!-- start row -->
									<div class="row">


										<!-- Table List Start -->
										<div class="table-responsive rounded border mb-3">
											<table class="table table-bordered table-striped table-hover align-middle m-0">
												<thead class="table-light">
													<tr>
														<th>Product</th>
														<th class="text-center">Quantity</th>
														<th class="text-end">Rate</th>
														<th class="text-end">Vat</th>
														<th class="text-end">Discount</th>
														<th class="text-end">Amount</th>
														<th class="text-center">Action</th>
													</tr>
													<tr>
														<td>
															<?php echo Product::html_select('product') ?>
														</td>
														<td>
															<input id="qty" type="number" min="0" class="form-control text-center" value="1">
														</td>
														<td>
															<input id="selling_price" type="number" min="0" class="form-control text-end" value="" readonly>
														</td>
														<td>
															<input id="vat" type="number" min="0" class="form-control text-end" value="">
														</td>
														<td>
															<input id="discount" type="number" min="0" class="form-control text-end" value="" readonly>
														</td>
														<td>
															<input id="line_total" type="number" min="0" class="form-control text-end" value="" style="min-width: 80px;" readonly>
														</td>
														<td class="text-center">
															<button type="button" class="btn btn-success add_btn">Add</button>
														</td>
													</tr>
												</thead>
												<tbody id="add_row">
													<!-- Added rows will appear here -->
												</tbody>
											</table>
										</div>
										<!-- Table List End -->


									</div>
									<div class="border-bottom mb-3">
										<!-- start row -->
										<div class="row">
											<div class="col-lg-7">
												<div class="mb-3">
													<h6 class="mb-3">Extra Information</h6>
													<div>
														<ul class="nav nav-tabs nav-solid-primary tab-style-1 border-0 p-0 d-flex flex-wrap gap-3 mb-3" role="tablist">
															<li class="nav-item" role="presentation">
																<a class="nav-link active d-inline-flex align-items-center border fs-12 fw-semibold rounded-2" data-bs-toggle="tab" data-bs-target="#notes" aria-current="page" href="javascript:void(0);" aria-selected="true" role="tab"><i class="isax isax-document-text me-1"></i>Add Notes</a>
															</li>
															<li class="nav-item" role="presentation">
																<a class="nav-link d-inline-flex align-items-center border fs-12 fw-semibold rounded-2" data-bs-toggle="tab" data-bs-target="#terms" href="javascript:void(0);" aria-selected="false" tabindex="-1" role="tab"><i class="isax isax-document me-1"></i>Add Terms &amp; Conditions</a>
															</li>
															<li class="nav-item" role="presentation">
																<a class="nav-link d-inline-flex align-items-center border fs-12 fw-semibold rounded-2" data-bs-toggle="tab" data-bs-target="#bank" href="javascript:void(0);" aria-selected="false" tabindex="-1" role="tab"><i class="isax isax-bank me-1"></i>Bank Details</a>
															</li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane active show" id="notes" role="tabpanel">
																<label class="form-label">Additional Notes</label>
																<textarea class="form-control"></textarea>
															</div>
															<div class="tab-pane fade" id="terms" role="tabpanel">
																<label class="form-label">Terms &amp; Conditions</label>
																<textarea class="form-control"></textarea>
															</div>
															<div class="tab-pane fade" id="bank" role="tabpanel">
																<label class="form-label">Account</label>
																<select class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
																	<option>Select</option>
																	<option>Andrew - 5225655545555454 (Swiss Bank)</option>
																	<option>Mark Salween - 4654145644566 (International Bank)</option>
																	<option>Sophia Martinez - 7890123456789012 (Global Finance)</option>
																	<option>David Chen - 2345678901234567 (National Bank)</option>
																	<option>Emily Johnson - 3456789012345678 (Community Credit Union)</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div><!-- end col -->
											<div class="col-lg-5">
												<div class="mb-3 p-4 border">
													<!-- Total Amount -->
													<div class="d-flex align-items-center justify-content-between mb-3">
														<h6 class="fs-14 fw-semibold">Amount</h6>
														<h6 class="fs-14 fw-semibold" id="summary_amount"><span>$</span>0.00</h6>
													</div>

													<!-- VAT / Tax -->
													<div class="d-flex align-items-center justify-content-between mb-3">
														<h6 class="fs-14 fw-semibold">Tax / VAT</h6>
														<h6 class="fs-14 fw-semibold" id="summary_vat"><span>$</span>0.00</h6>
													</div>

													<!-- Discount -->
													<div class="d-flex align-items-center justify-content-between mb-3">
														<h6 class="fs-14 fw-semibold">Discount</h6>
														<h6 class="fs-14 fw-semibold text-danger" id="summary_discount"><span>$</span>0.00</h6>
													</div>

													<!-- Grand Total -->
													<div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
														<h6 class="fs-14 fw-bold">Grand Total (USD)</h6>
														<h6 class="fs-14 fw-bold" id="summary_grand_total"><span>$</span>0.00</h6>
													</div>

													<!-- Total in Words -->
													<div>
														<h6 class="fs-14 fw-semibold mb-1">Total In Words</h6>
														<p id="summary_total_words">Zero Dollars</p>
													</div>
												</div>
											</div>
											<!-- end col -->
										</div>
										<!-- end row -->

									</div>

									<div class="d-flex align-items-center justify-content-between">
										<button type="button" class="btn btn-outline-white">Cancel</button>
										<button id="save_btn" type="button" class="btn btn-primary">Save</button>
									</div>

						</form>
					</div><!-- end card body -->
				</div><!-- end card -->
			</div>
		</div><!-- end col -->
	</div>
	<!-- end row -->

</div>
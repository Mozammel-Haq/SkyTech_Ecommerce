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
													<input type="text" class="form-control" placeholder="9876543" readonly="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Reference Number</label>
													<input type="text" class="form-control" value="1254569">
												</div>
											</div>
											<div class="col-lg-12">
												<div class="input-group position-relative mb-3">
													<input type="text" class="form-control datetimepicker rounded-end" placeholder="25 Mar 2025">
													<span class="input-icon-addon fs-16 text-gray-9">
														<i class="isax isax-calendar-2"></i>
													</span>
												</div>
											</div>
											<div class="col-md-12">
												<div class="mb-3">
													<a href="#" class="d-inline-flex align-items-center"><i class="isax isax-add-circle5 text-primary me-1"></i>Add Due Date</a>
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
															<select class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
																<option> Select Status</option>
																<option>Paid</option>
																<option>Unpaid</option>
																<option>Cancelled</option>
																<option>Partially Paid</option>
																<option>Uncollectable</option>
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
													<select class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
														<option>Select</option>
														<option>Kanakku</option>
													</select>
													<textarea id="Address" class="form-control form-control-sm mt-2 billAddress" rows="2">Branch address City, Country</textarea>
												</div>
											</div><!-- end card body -->
										</div><!-- end card -->
									</div><!-- end col -->
									<div class="col-lg-6">
										<div class="card shadow-none">
											<div class="card-body">
												<h6 class="mb-3">Bill To</h6>
												<div>
													<div class="d-flex align-items-center justify-content-between">
														<label class="form-label">Customer Name</label>
														<a href="#" class="d-inline-flex align-items-center">
															<i class="isax isax-add-circle5 text-primary me-1"></i>Add New
														</a>
													</div>
													<select class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
														<option>Select</option>
														<option>Timesquare Tech</option>
													</select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-4a1v-container" aria-controls="select2-4a1v-container"><span class="select2-selection__rendered" id="select2-4a1v-container" role="textbox" aria-readonly="true" title="Timesquare Tech">Timesquare Tech</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
											</div>
										</div>
									</div><!-- end col -->
								</div>
								<!-- end row -->
							</div>
							<div class="border-bottom mb-3 pb-3">
								<!-- start row -->
								<div class="row">
									<div class="col-xl-4 col-md-6">
										<h6 class="mb-3">Items &amp; Details</h6>
										<div>
											<label class="form-label">Item Type</label>
											<div class="d-flex align-items-center mb-3">
												<div class="form-check me-3">
													<input class="form-check-input" type="radio" name="Radio" id="Radio-sm-1" checked="">
													<label class="form-check-label" for="Radio-sm-1">
														Product
													</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio" name="Radio" id="Radio-sm-2">
													<label class="form-check-label" for="Radio-sm-2">
														Service
													</label>
												</div>
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label">Products/Services</label>
											<select class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
												<option>Select</option>
												<option>Apple iPhone 15</option>
												<option>Dell XPS 13 9310</option>
												<option>Bose QuietComfort 45</option>
												<option>Nike Dri-FIT T-shirt</option>
												<option>Adidas Ultraboost </option>
											</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-5zfd-container" aria-controls="select2-5zfd-container"><span class="select2-selection__rendered" id="select2-5zfd-container" role="textbox" aria-readonly="true" title="Select">Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
									</div><!-- end col -->
								</div>
								<!-- end row -->

								<!-- Table List Start -->
								<div class="table-responsive rounded border-bottom-0 border mb-3">
									<table class="table table-nowrap add-table m-0">
										<thead class="table-dark">
											<tr>
												<th>Product/Service</th>
												<th>Quantity</th>
												<th>Unit</th>
												<th>Rate</th>
												<th>Discount</th>
												<th>Amount</th>
												<th></th>
											</tr>
										</thead>
										<tbody class="add-tbody">
											<tr>
												<td>
													<input type="text" class="form-control" value="Nike Jordon">
												</td>
												<td>
													<input type="text" class="form-control" value="1" style="min-width: 66px;">
												</td>
												<td>
													<input type="text" class="form-control" value="Pcs" style="min-width: 66px;">
												</td>
												<td>
													<input type="text" class="form-control" value="$1360.00" style="min-width: 66px;">
												</td>

												<td>
													<input type="text" class="form-control" value="18" style="min-width: 66px;">
												</td>
												<td>
													<input type="text" class="form-control" value="$1358.00" style="min-width: 66px;">
												</td>
												<td>
												</td>
											</tr>
											<tr>
												<td>
													<input type="text" class="form-control" value="Enter Product Name">
												</td>
												<td>
													<input type="text" class="form-control" value="0">
												</td>
												<td>
													<input type="text" class="form-control" value="Unit">
												</td>
												<td>
													<input type="text" class="form-control" value="0">
												</td>

												<td>
													<input type="text" class="form-control" value="0">
												</td>
												<td>
													<input type="text" class="form-control" value="0" style="min-width: 66px;">
												</td>
												<td>
													<div>
														<a href="javascript:void(0);" class="text-danger remove-table"><i class="isax isax-close-circle"></i></a>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- Table List End -->

								<div>
									<a href="#" class="d-inline-flex align-items-center add-invoice-data"><i class="isax isax-add-circle5 text-primary me-1"></i>Add New</a>
								</div>

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
														</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-7y88-container" aria-controls="select2-7y88-container"><span class="select2-selection__rendered" id="select2-7y88-container" role="textbox" aria-readonly="true" title="Select">Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
													</div>
												</div>
											</div>
										</div>
									</div><!-- end col -->
									<div class="col-lg-5">
										<div class="mb-3">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<h6 class="fs-14 fw-semibold">Amount</h6>
												<h6 class="fs-14 fw-semibold">$565</h6>
											</div>
											<div class="d-flex align-items-center justify-content-between mb-3">
												<h6 class="fs-14 fw-semibold">CGST (9%)</h6>
												<h6 class="fs-14 fw-semibold">$18</h6>
											</div>
											<div class="d-flex align-items-center justify-content-between mb-3">
												<h6 class="fs-14 fw-semibold">SGST (9%)</h6>
												<h6 class="fs-14 fw-semibold">$18</h6>
											</div>
											<div class="mb-3">
												<a href="#" class="d-inline-flex align-items-center">
													<i class="isax isax-add-circle5 text-primary me-1"></i>Add Additional Charges
												</a>
											</div>
											<div class="d-flex align-items-center justify-content-between mb-3">
												<h6 class="fs-14 fw-semibold">Discount</h6>
												<input type="text" class="form-control" value="0%" style="width: 106px;">
											</div>
											<div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
												<div class="form-check form-switch me-4">
													<input class="form-check-input" type="checkbox" role="switch" id="require_check_2" checked="">
													<label class="form-check-label" for="require_check_2">Round Off Total</label>
												</div>
												<h6 class="fs-14 fw-semibold">$596</h6>
											</div>
											<div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
												<h6>Total (USD)</h6>
												<h6>$596</h6>
											</div>
											<div class="border-bottom mb-3 pb-3">
												<h6 class="fs-14 fw-semibold mb-1">Total In Words</h6>
												<p>Five Hundred &amp; Ninety Six Dollars</p>
											</div>
											<div class="mb-3">
												<div class="mb-3">
													<select class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
														<option>Select Signature</option>
														<option>Adrian</option>
														<option>Emily Clark</option>
														<option>John Carter</option>
														<option>Michael Johnson</option>
														<option>Olivia Harris</option>
													</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-lwv9-container" aria-controls="select2-lwv9-container"><span class="select2-selection__rendered" id="select2-lwv9-container" role="textbox" aria-readonly="true" title="Select Signature">Select Signature</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
												<p class="mb-0 text-center">OR</p>
											</div>
											<div class="mb-2">
												<label class="form-label">Signature Name</label>
												<input type="text" class="form-control" value="Adrian">
											</div>
											<div class="file-upload drag-file w-100 h-auto py-3 d-flex align-items-center justify-content-center flex-column">
												<span class="upload-img d-block"><i class="isax isax-image text-primary me-1"></i>Upload Signature</span>
												<input type="file" accept="video/image">
											</div>
										</div>
									</div><!-- end col -->
								</div>
								<!-- end row -->

							</div>

							<div class="d-flex align-items-center justify-content-between">
								<button type="button" class="btn btn-outline-white">Cancel</button>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>

						</form>
					</div><!-- end card body -->
				</div><!-- end card -->
			</div>
		</div><!-- end col -->
	</div>
	<!-- end row -->

</div>
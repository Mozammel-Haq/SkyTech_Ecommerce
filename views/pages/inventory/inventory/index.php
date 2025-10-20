   <?php
    print_r($data)
    ?>

   <!-- Start Content -->
   <div class="content content-two">

       <!-- Start Breadcrumb -->
       <div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
           <div>
               <h6>Inventory</h6>
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
               <div>
                   <a href="#" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_modal">
                       <i class="isax isax-add-circle5 me-1"></i>New Inventory
                   </a>
               </div>
           </div>
       </div>
       <!-- End Breadcrumb -->

       <!-- Table Search Start -->
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
                       <a href="javascript:void(0);" class="dropdown-toggle btn btn-outline-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
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
                                   <span>Product</span>
                               </label>
                           </li>
                           <li>
                               <label class="dropdown-item d-flex align-items-center form-switch">
                                   <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                   <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                   <span>Code</span>
                               </label>
                           </li>
                           <li>
                               <label class="dropdown-item d-flex align-items-center form-switch">
                                   <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                   <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                   <span>Warehouse</span>
                               </label>
                           </li>
                           <li>
                               <label class="dropdown-item d-flex align-items-center form-switch">
                                   <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                   <input class="form-check-input m-0 me-2" type="checkbox" checked>
                                   <span>Quantity</span>
                               </label>
                           </li>

                           <li>
                               <label class="dropdown-item d-flex align-items-center form-switch">
                                   <i class="fa-solid fa-grip-vertical me-3 text-default"></i>
                                   <input class="form-check-input m-0 me-2" type="checkbox">
                                   <span>Purchase Price</span>
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
                       <th class="no-sort">Product</th>
                       <th class="no-sort">Code</th>
                       <th class="no-sort">Warehouse</th>
                       <th>Quantity</th>
                       <th>Purchase Price</th>
                       <th class="no-sort">Operations</th>
                       <th class="no-sort">Actions</th>
                   </tr>
               </thead>
               <tbody>
                   <?php
                    foreach ($data as $row):
                    ?>
                       <tr>
                           <td>
                               <div class="form-check form-check-md">
                                   <input class="form-check-input" type="checkbox">
                               </div>
                           </td>
                           <td>
                               <div class="d-flex align-items-center">
                                   <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle me-2 flex-shrink-0">
                                       <img class="rounded-circle" alt="img" data-cfsrc="<?= $base_url ?>/assets/img/products/<?= $row->image_path ?>" style="display:none;visibility:hidden;"><noscript><img src="<?= $base_url ?>/assets/img/products/<?= $row->image_path ?>" class="rounded-circle" alt="img"></noscript>
                                   </a>
                                   <div>
                                       <h6 class="fs-14 fw-medium mb-0"><a href="javascript:void(0);"><?= $row->product_name ?></a></h6>
                                   </div>
                               </div>
                           </td>
                           <td>
                               <a href="javascript:void(0);" class="link-default"><?= $row->sku ?></a>
                           </td>
                           <td class="text-dark"><?= $row->warehouse_name ?></td>
                           <td><?= $row->total_quantity ?></td>
                           <td class="text-dark">$<?= $row->purchase_price ?></td>
                           <td>
                               <div class="d-flex align-items-center">
                                   <a href="#" class="btn btn-sm btn-soft-primary border-0 d-inline-flex align-items-center me-1 fs-12 fw-regular" data-bs-toggle="modal" data-bs-target="#view_history">
                                       <i class="isax isax-document-sketch5 me-1"></i> History
                                   </a>
                                   <a href="#" class="btn btn-sm btn-soft-success border-0  d-inline-flex align-items-center me-1 fs-12 fw-regular" data-bs-toggle="modal" data-bs-target="#add_stockin">
                                       <i class="isax isax-document-sketch5 me-1"></i> Stock In
                                   </a>
                                   <a href="#" class="btn btn-sm btn-soft-danger border-0 d-inline-flex align-items-center fs-12 fw-regular" data-bs-toggle="modal" data-bs-target="#add_stockout">
                                       <i class="isax isax-document-sketch5 me-1"></i> Stock Out
                                   </a>
                               </div>
                           </td>
                           <td class="action-item">
                               <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                   <i class="isax isax-more"></i>
                               </a>
                               <ul class="dropdown-menu">
                                   <li>
                                       <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#edit_modal"><i class="isax isax-edit me-2"></i>Edit</a>
                                   </li>
                                   <li>
                                       <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="isax isax-trash me-2"></i>Delete</a>
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
       <!-- Table List End -->

   </div>
   <!-- End Content -->


   <!-- Add Modal -->
   <div id="add_modal" class="modal fade">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title">Add Inventory</h4>
                   <button type="button" class="btn-close btn-close-modal custom-btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-x"></i></button>
               </div>
               <form action="https://kanakku.dreamstechnologies.com/html/template/inventory.html">
                   <div class="modal-body">

                       <div class="mb-3">
                           <label class="form-label">Item <span class="text-danger">*</span></label>
                           <select class="select select2-hidden-accessible" data-select2-id="select2-data-4-t4gs" tabindex="-1" aria-hidden="true">
                               <option data-select2-id="select2-data-6-vfyq">Select</option>
                               <option>Apple iPhone 15</option>
                               <option>Dell XPS 13 9310</option>
                               <option>Bose QuietComfort 45</option>
                               <option>Nike Dri-FIT T-shirt</option>
                               <option>Adidas Ultraboost </option>
                               <option>Samsung French</option>
                               <option>Dyson V15 Detect</option>
                           </select>
                       </div>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="mb-3">
                                   <label class="form-label">Code</label>
                                   <input type="text" class="form-control" readonly="">
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="mb-3">
                                   <label class="form-label">Units</label>
                                   <input type="text" class="form-control" readonly="">
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="mb-3">
                                   <label class="form-label">Selling Price ($)</label>
                                   <input type="text" class="form-control" readonly="">
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="mb-3">
                                   <label class="form-label">Purchase Price ($)</label>
                                   <input type="text" class="form-control" readonly="">
                               </div>
                           </div>
                           <div class="col-md-12">
                               <div class="mb-3">
                                   <label class="form-label">Quantity <span class="text-danger">*</span></label>
                                   <input type="text" class="form-control">
                               </div>
                           </div>
                           <div class="col-md-12">
                               <div>
                                   <label class="form-label">Status <span class="text-danger">*</span></label>
                                   <select class="select select2-hidden-accessible" data-select2-id="select2-data-7-i7bo" tabindex="-1" aria-hidden="true">
                                       <option data-select2-id="select2-data-9-58a7">Select</option>
                                       <option>Stock In</option>
                                       <option>Stock Out</option>
                                   </select>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="modal-footer d-flex align-items-center justify-content-between gap-1">
                       <button type="button" class="btn btn-outline-white" data-bs-dismiss="modal">Cancel</button>
                       <button type="submit" class="btn btn-primary">Add New</button>
                   </div>
               </form>
           </div>
       </div>
   </div>

   <!-- Edit Modal -->
   <div id="edit_modal" class="modal fade" aria-hidden="true" style="display: none;">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title">Edit Category</h4>
                   <button type="button" class="btn-close btn-close-modal custom-btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-x"></i></button>
               </div>
               <form action="https://kanakku.dreamstechnologies.com/html/template/inventory.html">
                   <div class="modal-body">
                       <div class="mb-3">
                           <label class="form-label">Item <span class="text-danger">*</span></label>
                           <select class="select select2-hidden-accessible" data-select2-id="select2-data-10-o3co" tabindex="-1" aria-hidden="true">
                               <option>Select</option>
                               <option selected="" data-select2-id="select2-data-12-t8mq">Apple iPhone 15</option>
                               <option>Dell XPS 13 9310</option>
                               <option>Bose QuietComfort 45</option>
                               <option>Nike Dri-FIT T-shirt</option>
                               <option>Adidas Ultraboost </option>
                               <option>Samsung French</option>
                               <option>Dyson V15 Detect</option>
                           </select>
                       </div>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="mb-3">
                                   <label class="form-label">Code</label>
                                   <input type="text" class="form-control" value="PR00025" readonly="">
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="mb-3">
                                   <label class="form-label">Units</label>
                                   <input type="text" class="form-control" value="Box" readonly="">
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="mb-3">
                                   <label class="form-label">Selling Price ($)</label>
                                   <input type="text" class="form-control" value="98" readonly="">
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="mb-3">
                                   <label class="form-label">Purchase Price ($)</label>
                                   <input type="text" class="form-control" value="78" readonly="">
                               </div>
                           </div>
                           <div class="col-md-12">
                               <div class="mb-3">
                                   <label class="form-label">Quantity <span class="text-danger">*</span></label>
                                   <input type="text" class="form-control" value="15">
                               </div>
                           </div>
                           <div class="col-md-12">
                               <div>
                                   <label class="form-label">Status <span class="text-danger">*</span></label>
                                   <select class="select select2-hidden-accessible" data-select2-id="select2-data-13-t97u" tabindex="-1" aria-hidden="true">
                                       <option>Select</option>
                                       <option selected="" data-select2-id="select2-data-15-n9td">Stock In</option>
                                       <option>Stock Out</option>
                                   </select>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="modal-footer d-flex align-items-center justify-content-between gap-1">
                       <button type="button" class="btn btn-outline-white" data-bs-dismiss="modal">Cancel</button>
                       <button type="submit" class="btn btn-primary">Save Changes</button>
                   </div>
               </form>
           </div>
       </div>
   </div>

   <!-- StocK In modal -->
   <div id="add_stockin" class="modal fade" aria-hidden="true" style="display: none;">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title">Add Stock In</h4>
                   <button type="button" class="btn-close btn-close-modal custom-btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-x"></i></button>
               </div>
               <form action="https://kanakku.dreamstechnologies.com/html/template/inventory.html" data-select2-id="select2-data-32-fb1v">
                   <div class="modal-body" data-select2-id="select2-data-31-627f">

                       <div class="mb-3">
                           <label class="form-label">Item<span class="text-danger ms-1">*</span></label>
                           <select class="select select2-hidden-accessible" disabled="" data-select2-id="select2-data-16-qyy1" tabindex="-1" aria-hidden="true">
                               <option>Select</option>
                               <option selected="" data-select2-id="select2-data-18-idwb">Apple iPhone 15</option>
                               <option>Dell XPS 13 9310</option>
                               <option>Bose QuietComfort 45</option>
                               <option>Nike Dri-FIT T-shirt</option>
                               <option>Adidas Ultraboost </option>
                               <option>Samsung French</option>
                               <option>Dyson V15 Detect</option>
                           </select>
                       </div>
                       <div class="row" data-select2-id="select2-data-30-oxix">
                           <div class="col-md-6">
                               <div class="mb-3">
                                   <label class="form-label">Code</label>
                                   <input type="text" class="form-control" value="PR00025" readonly="">
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="mb-3" data-select2-id="select2-data-29-k6fh">
                                   <label class="form-label">Units<span class="text-danger ms-1">*</span></label>
                                   <select class="select select2-hidden-accessible" data-select2-id="select2-data-19-juau" tabindex="-1" aria-hidden="true">
                                       <option data-select2-id="select2-data-34-494a">Select</option>
                                       <option data-select2-id="select2-data-35-5zvg">Select</option>
                                       <option selected="" data-select2-id="select2-data-21-lv3x">Box</option>
                                       <option data-select2-id="select2-data-36-ztis">Gram (g)</option>
                                       <option data-select2-id="select2-data-37-jh3c">Liter (l)</option>
                                       <option data-select2-id="select2-data-38-plui">Millimetre (mm)</option>
                                       <option data-select2-id="select2-data-39-6ztq">Milliliter (ml)</option>
                                       <option data-select2-id="select2-data-40-lmug">Pack (pk)</option>
                                       <option data-select2-id="select2-data-41-26ut">Piece (pc)</option>
                                   </select>
                               </div>
                           </div>
                           <div class="col-md-12">
                               <div class="mb-3">
                                   <label class="form-label">Quantity<span class="text-danger ms-1">*</span></label>
                                   <input type="text" class="form-control" value="15">
                               </div>
                           </div>
                           <div class="col-md-12">
                               <div>
                                   <label class="form-label">Notes</label>
                                   <textarea class="form-control" rows="2"></textarea>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="modal-footer d-flex align-items-center justify-content-between gap-1">
                       <button type="button" class="btn btn-outline-white" data-bs-dismiss="modal">Cancel</button>
                       <button type="submit" class="btn btn-primary">Add Quantity</button>
                   </div>
               </form>
           </div>
       </div>
   </div>

   <!-- Stock Out -->
   <div id="add_stockout" class="modal fade" aria-hidden="true" style="display: none;">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title">Add Stock Out</h4>
                   <button type="button" class="btn-close btn-close-modal custom-btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-x"></i></button>
               </div>
               <form action="https://kanakku.dreamstechnologies.com/html/template/inventory.html">
                   <div class="modal-body">
                       <div class="mb-3">
                           <label class="form-label">Item <span class="text-danger ms-1">*</span></label>
                           <select class="select select2-hidden-accessible" disabled="" data-select2-id="select2-data-22-r6z4" tabindex="-1" aria-hidden="true">
                               <option>Select</option>
                               <option selected="" data-select2-id="select2-data-24-m44a">Apple iPhone 15</option>
                               <option>Dell XPS 13 9310</option>
                               <option>Bose QuietComfort 45</option>
                               <option>Nike Dri-FIT T-shirt</option>
                               <option>Adidas Ultraboost </option>
                               <option>Samsung French</option>
                               <option>Dyson V15 Detect</option>
                           </select>
                       </div>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="mb-3">
                                   <label class="form-label">Code</label>
                                   <input type="text" class="form-control" value="PR00025" readonly="">
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="mb-3">
                                   <label class="form-label">Units<span class="text-danger ms-1">*</span></label>
                                   <select class="select select2-hidden-accessible" data-select2-id="select2-data-25-m7fy" tabindex="-1" aria-hidden="true">
                                       <option>Select</option>
                                       <option>Select</option>
                                       <option selected="" data-select2-id="select2-data-27-hm0v">Box</option>
                                       <option>Gram (g)</option>
                                       <option>Liter (l)</option>
                                       <option>Millimetre (mm)</option>
                                       <option>Milliliter (ml)</option>
                                       <option>Pack (pk)</option>
                                       <option>Piece (pc)</option>
                                   </select>
                               </div>
                           </div>
                           <div class="col-md-12">
                               <div class="mb-3">
                                   <label class="form-label">Quantity<span class="text-danger ms-1">*</span></label>
                                   <input type="text" class="form-control" value="15">
                               </div>
                           </div>
                           <div class="col-md-12">
                               <div>
                                   <label class="form-label">Notes</label>
                                   <textarea class="form-control" rows="2"></textarea>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="modal-footer d-flex align-items-center justify-content-between gap-1">
                       <button type="button" class="btn btn-outline-white" data-bs-dismiss="modal">Cancel</button>
                       <button type="submit" class="btn btn-primary">Remove Quantity</button>
                   </div>
               </form>
           </div>
       </div>
   </div>
   <!-- Stock History -->
   <div id="view_history" class="modal fade" aria-hidden="true" style="display: none;">
       <div class="modal-dialog modal-dialog-centered modal-lg">
           <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title">Inventory History</h4>
                   <button type="button" class="btn-close btn-close-modal custom-btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-x"></i></button>
               </div>
               <div class="modal-body">
                   <div class="bg-light d-flex align-items-center justify-content-between flex-wrap row-gap-3 p-3 rounded mb-3">
                       <div>
                           <h6 class="fs-14 fw-semibold mb-1">Apple iPhone 15</h6>
                           <span class="text-primary">PR00014</span>
                       </div>
                       <div class="d-flex align-items-center">
                           <button type="button" class="btn btn-outline-white me-3"><i class="isax isax-document-like me-1"></i>Download PDF</button>
                           <button type="button" class="btn btn-outline-white"><i class="isax isax-printer me-1"></i>Print</button>
                       </div>
                   </div>
                   <!-- Table List -->
                   <div class="table-responsive border border-bottom-0">
                       <table class="table">
                           <thead class="thead-light">
                               <tr>
                                   <th>Date</th>
                                   <th>Unit</th>
                                   <th>Adjustments</th>
                                   <th>Stock</th>
                                   <th class="no-sort">Reason</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>
                                       <h6 class="fw-medium fs-14">06 Jan 2025, 04:12 AM</h6>
                                   </td>
                                   <td class="text-dark">Piece</td>
                                   <td class="text-success fw-medium">+2</td>
                                   <td>2</td>
                                   <td class="text-dark">Transfer</td>
                               </tr>
                               <tr>
                                   <td>
                                       <h6 class="fw-medium fs-14">12 Jan 2025, 06:12 AM</h6>
                                   </td>
                                   <td class="text-dark">Piece</td>
                                   <td class="text-danger fw-medium">-4</td>
                                   <td>12</td>
                                   <td class="text-dark">Sale</td>
                               </tr>
                               <tr>
                                   <td>
                                       <h6 class="fw-medium fs-14">13 Jan 2025, 05:13 PM</h6>
                                   </td>
                                   <td class="text-dark">Piece</td>
                                   <td class="text-success fw-medium">+14</td>
                                   <td>34</td>
                                   <td class="text-dark">Sale</td>
                               </tr>
                               <tr>
                                   <td>
                                       <h6 class="fw-medium fs-14">18 Jan 2025, 08:16 AM</h6>
                                   </td>
                                   <td class="text-dark">Pack</td>
                                   <td class="text-success fw-medium">+45</td>
                                   <td>24</td>
                                   <td class="text-dark">Sale</td>
                               </tr>
                               <tr>
                                   <td>
                                       <h6 class="fw-medium fs-14">22 Jan 2025, 09:20 PM</h6>
                                   </td>
                                   <td class="text-dark">Pack</td>
                                   <td class="text-danger fw-medium">-2</td>
                                   <td>13</td>
                                   <td class="text-dark">Damage</td>
                               </tr>
                               <tr>
                                   <td>
                                       <h6 class="fw-medium fs-14">26 Jan 2025, 04:45 AM</h6>
                                   </td>
                                   <td class="text-dark">Liter</td>
                                   <td class="text-success fw-medium">+55</td>
                                   <td>67</td>
                                   <td class="text-dark">Transfer</td>
                               </tr>
                               <tr>
                                   <td>
                                       <h6 class="fw-medium fs-14">31 Jan 2025, 09:22 APM</h6>
                                   </td>
                                   <td class="text-dark">Piece</td>
                                   <td class="text-success fw-medium">+47</td>
                                   <td>13</td>
                                   <td class="text-dark">Damage</td>
                               </tr>
                               <tr>
                                   <td>
                                       <h6 class="fw-medium fs-14">02 Feb 2025, 05:16 AM</h6>
                                   </td>
                                   <td class="text-dark">Piece</td>
                                   <td class="text-success fw-medium">+32</td>
                                   <td>25</td>
                                   <td class="text-dark">Sale</td>
                               </tr>
                               <tr>
                                   <td>
                                       <h6 class="fw-medium fs-14">04 Feb 2025, 08:12 AM</h6>
                                   </td>
                                   <td class="text-dark">Piece</td>
                                   <td class="text-danger fw-medium">-6</td>
                                   <td>24</td>
                                   <td class="text-dark">Damage</td>
                               </tr>
                               <tr>
                                   <td>
                                       <h6 class="fw-medium fs-14">06 Feb 2025, 09:22 AM</h6>
                                   </td>
                                   <td class="text-dark">Piece</td>
                                   <td class="text-success fw-medium">+5</td>
                                   <td>65</td>
                                   <td class="text-dark">Sale</td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   <!-- /Table List -->
               </div>
           </div>
       </div>
   </div>
   <!-- Delete Modal -->
   <div class="modal fade" id="delete_modal">
       <div class="modal-dialog modal-dialog-centered modal-sm">
           <div class="modal-content">
               <div class="modal-body text-center">
                   <div class="mb-3">
                       <img src="assets/img/icons/delete.svg" alt="img">
                   </div>
                   <h6 class="mb-1">Delete Inventory</h6>
                   <p class="mb-3">Are you sure, you want to delete Inventory?</p>
                   <div class="d-flex justify-content-center">
                       <a href="javascript:void(0);" class="btn btn-outline-white me-3" data-bs-dismiss="modal">Cancel</a>
                       <a href="inventory.html" class="btn btn-primary">Yes, Delete</a>
                   </div>
               </div>
           </div>
       </div>
   </div>
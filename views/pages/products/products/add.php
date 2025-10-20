<!-- Start Content -->
<div class="content">

    <!-- start row -->
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h6><a href="products.html"><i class="isax isax-arrow-left me-2"></i>Products</a></h6>
                    <a href="#" class="btn btn-outline-white d-inline-flex align-items-center"><i class="isax isax-eye me-1"></i>Preview</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-3">Basic Details</h6>
                        <form id="add_product" action="<?= $base_url ?>/products/saveProduct" method="POST" enctype="multipart/form-data">

                            <!-- Single Product Image -->
                            <div class="mb-3">
                                <span class="text-gray-9 fw-bold mb-2 d-flex">Project Image<span class="text-danger ms-1">*</span></span>
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xxl border border-dashed bg-light me-3 flex-shrink-0 position-relative" id="imageWrapper">
                                        <!-- Placeholder Icon -->
                                        <i class="isax isax-image text-primary fs-24 position-absolute top-50 start-50 translate-middle" id="placeholderIcon"></i>

                                        <!-- Trash Icon (hidden initially) -->
                                        <a href="javascript:void(0);" class="rounded-trash trash-top d-flex align-items-center justify-content-center"
                                            style="display:none; position:absolute; top:5px; right:5px;" id="trashIcon">
                                            <i class="isax isax-trash"></i>
                                        </a>
                                    </div>

                                    <div class="d-inline-flex flex-column align-items-start ms-3">
                                        <div class="drag-upload-btn btn btn-sm btn-primary position-relative mb-2">
                                            <i class="isax isax-image me-1"></i>Upload Image
                                            <input name="image" type="file" id="imageInput" class="form-control" accept="image/*">
                                        </div>
                                        <span class="text-gray-9 fs-12">JPG or PNG format, not exceeding 5MB.</span>
                                    </div>
                                </div>
                            </div>


                            <!-- Product Details -->
                            <div class="row gx-3">
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name <span class="text-danger">*</span></label>
                                        <input name="name" type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Code <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <input name="code" type="text" class="form-control" value="">
                                            <a href="#" class="btn btn-sm btn-dark position-absolute end-0 top-0 bottom-0 mx-2 my-1 d-inline-flex align-items-center">Generate</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Category <span class="text-danger">*</span></label>
                                        <?php
                                        echo Category::html_select("category");
                                        ?>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Brand <span class="text-danger">*</span></label>
                                        <?php
                                        echo Brand::html_select("brand");
                                        ?>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Selling Price ($) <span class="text-danger">*</span></label>
                                        <input name="selling_price" type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Purchase Price ($) <span class="text-danger">*</span></label>
                                        <input name="purchase_price" type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Units <span class="text-danger">*</span></label>
                                        <?php
                                        echo Unit::html_select("unit");
                                        ?>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Discount <span class="text-danger">*</span></label>
                                        <input name="discount" type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Barcode <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <input name="barcode" type="text" class="form-control" value="">
                                            <a href="#" class="btn btn-sm btn-dark position-absolute end-0 top-0 bottom-0 mx-2 my-1 d-inline-flex align-items-center">Generate</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Alert Quantity <span class="text-danger">*</span></label>
                                        <input name="alert_quantity" type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tax <span class="text-danger">*</span></label>
                                        <input name="tax" id="tax" type="text" class="form-control" value="">
                                    </div>
                                </div>


                                <!-- Product Description -->
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Product Description</label>
                                        <div class="editor"></div>
                                    </div>
                                </div>
                                <textarea name="description" id="product_description" hidden></textarea>


                                <!-- Gallery Images -->
                                <div class="mb-3 pb-3 border-bottom">
                                    <label class="form-label">Gallery Images</label>
                                    <div class="file-upload drag-file w-100 d-flex align-items-center justify-content-center flex-column mb-3">
                                        <span class="upload-img d-block mb-2"><i class="isax isax-image text-primary"></i></span>
                                        <p class="mb-0 text-gray-9 fw-semibold">Drop Your Files or
                                            <a href="#" class="browse-link text-primary text-decoration-underline">Browse</a>
                                        </p>
                                        <input name="gallery[]" type="file" accept="image/*" multiple class="gallery-input">
                                        <p class="fs-13">Max Upload Size 800x800px. PNG / JPEG file, Maximum Upload size 5MB</p>
                                    </div>
                                    <div class="d-flex align-items-center gap-3 gallery-preview"></div>
                                </div>


                            </div>

                            <div class="d-flex align-items-center justify-content-end">
                                <button name="save_btn" type="submit" class="btn btn-primary">Save Product</button>
                            </div>

                        </form>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div>
        </div><!-- end col -->
    </div>
    <!-- end row -->

</div>
<!-- End Content -->
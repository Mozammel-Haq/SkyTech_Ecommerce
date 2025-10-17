<?php
$product = $data['product'] ?? null;
$mainImage = $data['mainImage'] ?? null;
$gallery = $data['gallery'] ?? [];

?>

<?php foreach ($product as $row) : ?>

    <!-- Edit Product Page -->
    <div class="content">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h6><a href="<?= $base_url ?>/products"><i class="isax isax-arrow-left me-2"></i>Products</a></h6>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-3">Edit Product</h6>

                        <form id="edit_product" action="<?= $base_url ?>/products/updateProduct/<?= $row['id'] ?>" method="POST" enctype="multipart/form-data">

                            <!-- Product Image -->
                            <div class="mb-3">
                                <span class="text-gray-9 fw-bold mb-2 d-flex">Product Image<span class="text-danger ms-1">*</span></span>
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xxl border border-dashed bg-light me-3 flex-shrink-0 position-relative" id="imageWrapper">
                                        <?php if (!empty($mainImage)): ?>
                                            <img id="previewImage" src="<?= $base_url ?>/assets/img/products/<?= $mainImage ?>" class="rounded-circle" width="100" height="100" style="object-fit:cover;">
                                        <?php else: ?>
                                            <i class="isax isax-image text-primary fs-24 position-absolute top-50 start-50 translate-middle"></i>
                                        <?php endif; ?>
                                    </div>
                                    <div class="d-inline-flex flex-column align-items-start ms-3">
                                        <div class="drag-upload-btn btn btn-sm btn-primary position-relative mb-2">
                                            <i class="isax isax-image me-1"></i>Change Image
                                            <input name="image" type="file" id="imageInput" class="form-control" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Keep old image -->
                            <input type="hidden" name="old_image" value="<?= htmlspecialchars($mainImage ?? '') ?>">

                            <!-- Product Fields -->
                            <div class="row gx-3">
                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control" value="<?= htmlspecialchars($row['name']) ?>">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Code</label>
                                        <input name="code" type="text" class="form-control" value="<?= htmlspecialchars($row['sku']) ?>">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Category</label>
                                        <select class="select" name="category">
                                            <option value="">Select</option>
                                            <option value="1" <?= $row['category_id'] == 1 ? 'selected' : '' ?>>Smartphones</option>
                                            <option value="2" <?= $row['category_id'] == 2 ? 'selected' : '' ?>>Laptops</option>
                                            <option value="3" <?= $row['category_id'] == 3 ? 'selected' : '' ?>>Headphones</option>
                                            <option value="4" <?= $row['category_id'] == 4 ? 'selected' : '' ?>>Computer Service</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Selling Price ($)</label>
                                        <input name="selling_price" type="text" class="form-control" value="<?= $row['selling_price'] ?>">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Purchase Price ($)</label>
                                        <input name="purchase_price" type="text" class="form-control" value="<?= $row['purchase_price'] ?>">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Unit</label>
                                        <select class="select" name="unit">
                                            <option value="1" <?= $row['unit_id'] == 1 ? 'selected' : '' ?>>Pack (pk)</option>
                                            <option value="2" <?= $row['unit_id'] == 2 ? 'selected' : '' ?>>Piece (pc)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Discount <span class="text-danger">*</span></label>
                                        <input name="discount" type="text" class="form-control" value="<?= $row['discount'] ?>">

                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Barcode</label>
                                        <input name="barcode" type="text" class="form-control" value="<?= htmlspecialchars($row['barcode']) ?>">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Alert Quantity</label>
                                        <input name="alert_quantity" type="text" class="form-control" value="<?= $row['alert_quantity'] ?>">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tax</label>
                                        <select class="select" name="tax">
                                            <option value="1" <?= $row['tax_id'] == 1 ? 'selected' : '' ?>>VAT (10%)</option>
                                            <option value="2" <?= $row['tax_id'] == 2 ? 'selected' : '' ?>>CGST (08%)</option>
                                            <option value="3" <?= $row['tax_id'] == 3 ? 'selected' : '' ?>>SGST (10%)</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Product Description -->
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Product Description</label>
                                        <div class="editor"><?= $row['description'] ?></div>
                                        <textarea name="description" id="product_description" hidden><?= htmlspecialchars($row['description']) ?></textarea>
                                    </div>
                                </div>

                            </div> <!-- row end -->

                            <!-- Gallery Images -->
                            <div class="mb-3 pb-3 border-bottom">
                                <label class="form-label">Gallery Images</label>

                                <div class="d-flex align-items-center gap-3 gallery-preview">
                                    <?php if (!empty($gallery)): ?>
                                        <?php foreach ($gallery as $img): ?>
                                            <div class="avatar avatar-xl border gallery-img p-1 position-relative">
                                                <img src="<?= $base_url ?>/assets/img/products/<?= $img['image_path'] ?>" style="width:80px;height:80px;object-fit:cover;">
                                                <a href="javascript:void(0)" class="rounded-trash gallery-trash d-flex align-items-center justify-content-center" data-image-id="<?= $img['id'] ?>">
                                                    <i class="isax isax-trash"></i>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>

                                <div class="file-upload drag-file w-100 d-flex align-items-center justify-content-center flex-column mt-2 mb-3">
                                    <span class="upload-img d-block mb-2"><i class="isax isax-image text-primary"></i></span>
                                    <p class="mb-0 text-gray-9 fw-semibold">Drop Your Files or
                                        <a href="#" class="browse-link text-primary text-decoration-underline">Browse</a>
                                    </p>
                                    <input name="gallery[]" type="file" accept="image/*" multiple class="gallery-input form-control">
                                    <p class="fs-13">Max Upload Size 800x800px. PNG / JPEG file, Maximum Upload size 5MB</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-end">
                                <button name="update_btn" type="submit" class="btn btn-primary">Update Product</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>
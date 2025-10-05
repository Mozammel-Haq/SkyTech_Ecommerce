// ===================== CATEGORY IMAGE PREVIEW =====================
document.querySelectorAll(".category_image").forEach((input) => {
  input.addEventListener("change", function (event) {
    const wrapper = this.closest(".image-wrapper");
    const previewDiv = wrapper.querySelector(".imagePreview");
    const imgTag = previewDiv.querySelector("img");
    const iconTag = previewDiv.querySelector("i");
    const nameSpan = wrapper.querySelector(".imageName");
    const file = event.target.files[0];

    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        imgTag.src = e.target.result;
        imgTag.classList.remove("d-none");
        if (iconTag) iconTag.classList.add("d-none");
      };
      reader.readAsDataURL(file);
      nameSpan.textContent = file.name;
    } else {
      nameSpan.textContent = "JPG or PNG format, max size 5MB.";
      if (imgTag) imgTag.classList.add("d-none");
      if (iconTag) iconTag.classList.remove("d-none");
    }
  });
});

// ===================== SINGLE PRODUCT IMAGE PREVIEW =====================
const imageInput = document.getElementById("imageInput");
const imageWrapper = document.getElementById("imageWrapper");
const placeholderIcon = document.getElementById("placeholderIcon");
const trashIcon = document.getElementById("trashIcon");
let productImage = null;

if (imageInput) {
  imageInput.addEventListener("change", function (event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        if (!productImage) {
          productImage = document.createElement("img");
          productImage.id = "productImage";
          productImage.className = "avatar avatar-xl";
          productImage.style.width = "100%";
          productImage.style.height = "100%";
          productImage.style.objectFit = "cover";
          imageWrapper.insertBefore(productImage, trashIcon);
        }

        productImage.src = e.target.result;
        productImage.style.display = "block";
        placeholderIcon.style.display = "none";
        trashIcon.style.display = "flex";
      };
      reader.readAsDataURL(file);
    }
  });

  trashIcon.addEventListener("click", function () {
    if (productImage) {
      productImage.remove();
      productImage = null;
    }
    placeholderIcon.style.display = "block";
    imageInput.value = "";
    trashIcon.style.display = "none";
  });
}

// ===================== GALLERY IMAGES PREVIEW =====================
const galleryInput = document.querySelector(".gallery-input");
const galleryContainer = document.querySelector(".gallery-preview");
const browseLink = document.querySelector(".browse-link");

if (browseLink && galleryInput) {
  browseLink.addEventListener("click", function (e) {
    e.preventDefault();
    galleryInput.click();
  });

  galleryInput.addEventListener("change", function (event) {
    const files = Array.from(event.target.files);
    files.forEach((file) => {
      const reader = new FileReader();
      reader.onload = function (e) {
        const div = document.createElement("div");
        div.classList.add(
          "avatar",
          "avatar-xl",
          "border",
          "gallery-img",
          "p-1"
        );
        div.innerHTML = `
          <img src="${e.target.result}" alt="Gallery Img">
          <a href="javascript:void(0);" class="rounded-trash gallery-trash d-flex align-items-center justify-content-center">
            <i class="isax isax-trash"></i>
          </a>
        `;
        galleryContainer.appendChild(div);

        div
          .querySelector(".gallery-trash")
          .addEventListener("click", () => div.remove());
      };
      reader.readAsDataURL(file);
    });
    galleryInput.value = "";
  });
}

// ===================== MODAL POPULATION (CATEGORY / UNIT / BRAND) =====================
document.addEventListener("click", function (e) {
  const brandBtn = e.target.closest(".editBrandBtn");
  const categoryBtn = e.target.closest(".editBtn");
  const unitBtn = e.target.closest(".editUnitBtn");

  // === Brand Edit Modal ===
  if (brandBtn) {
    document.getElementById("edit_brand_id").value = brandBtn.dataset.id || "";
    document.getElementById("edit_brand_name").value =
      brandBtn.dataset.name || "";
    document.getElementById("edit_brand_description").value =
      brandBtn.dataset.description || "";
  }

  // === Category Edit Modal ===
  if (categoryBtn) {
    document.getElementById("edit_category_id").value =
      categoryBtn.dataset.id || "";
    document.getElementById("edit_category_name").value =
      categoryBtn.dataset.name || "";
    document.getElementById("edit_category_description").value =
      categoryBtn.dataset.description || "";
    document.getElementById("edit_category_status").checked =
      categoryBtn.dataset.status == "1";
    const previewDiv = document.getElementById("edit_category_image_preview");
    if (previewDiv && categoryBtn.dataset.image) {
      previewDiv.src =
        "<?= $base_url ?>/assets/img/products/" + categoryBtn.dataset.image;
    }
  }

  // === Unit Edit Modal ===
  if (unitBtn) {
    document.getElementById("edit_unit_id").value = unitBtn.dataset.id || "";
    document.getElementById("edit_unit_name").value =
      unitBtn.dataset.name || "";
    document.getElementById("edit_unit_short_name").value =
      unitBtn.dataset.short_name || "";
  }
});

// ==== GET product Description from Quill Editor

const form = document.getElementById("add_product");
if (form) {
  form.addEventListener("submit", function (e) {
    document.getElementById("product_description").value = quill.root.innerHTML;
  });
}

const addForm = document.getElementById("add_product");
if (addForm) {
  addForm.addEventListener("submit", function () {
    const editorContent = document.querySelector(".editor").innerHTML;
    document.querySelector("#product_description").value = editorContent;
  });
}

// Delete Product Modal

document.addEventListener("DOMContentLoaded", function () {
  const deleteButtons = document.querySelectorAll(".deleteBtn");
  const confirmDelete = document.getElementById("confirmDelete");

  deleteButtons.forEach((btn) => {
    btn.addEventListener("click", function () {
      const productId = this.getAttribute("data-id");
      confirmDelete.setAttribute(
        "href",
        BASE_URL + "/products/deleteProduct/" + productId
      );
    });
  });
});

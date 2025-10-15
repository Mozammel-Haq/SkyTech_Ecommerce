<!-- Start Footer-->
<div class="footer d-sm-flex align-items-center justify-content-between bg-white py-2 px-4 border-top">
    <p class="text-dark mb-0">&copy; 2025 <a href="javascript:void(0);" class="link-primary">Kanakku</a>, All Rights Reserved</p>
    <p class="text-dark">Version : 1.3.8</p>
</div>
<!-- End Footer-->

</div>

<!-- ========================
			End Page Content
		========================= -->

</div>
<!-- End Wrapper -->

<!-- jQuery -->
<script src="<?= $base_url ?>/assets/js/jquery-3.7.1.min.js" type="text/javascript"></script>
<script src="<?= $base_url ?>/assets/js/jquery.dataTables.min.js" type="text/javascript"></script>

<!-- Simplebar JS -->
<script src="<?= $base_url ?>/assets/plugins/simplebar/simplebar.min.js" type="text/javascript"></script>

<!-- Feather Icon JS -->
<script src="<?= $base_url ?>/assets/js/feather.min.js" type="text/javascript"></script>

<!-- Bootstrap Core JS -->
<script src="<?= $base_url ?>/assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="<?= $base_url ?>/assets/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>
<script src="<?= $base_url ?>/assets/js/moment.js" type="text/javascript"></script>
<script src="<?= $base_url ?>/assets/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

<!-- Select2 JS -->
<script src="<?= $base_url ?>/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>

<!-- Daterangepikcer JS -->
<script src="<?= $base_url ?>/assets/js/moment.min.js" type="text/javascript"></script>
<script src="<?= $base_url ?>/assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

<!-- Chart JS -->
<script src="<?= $base_url ?>/assets/plugins/chartjs/chart.min.js" type="text/javascript"></script>
<script src="<?= $base_url ?>/assets/plugins/chartjs/chart-data.js" type="text/javascript"></script>

<!-- Chart JS -->
<script src="<?= $base_url ?>/assets/plugins/apexchart/apexcharts.min.js" type="text/javascript"></script>
<script src="<?= $base_url ?>/assets/plugins/apexchart/chart-data.js" type="text/javascript"></script>

<!-- Bootstrap Tagsinput JS -->
<script src="<?= $base_url ?>/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="text/javascript"></script>
<script src="<?= $base_url ?>/assets/js/rocket-loader.min.js" data-cf-settings="be00f69dc5f35c49bb07ab3f-|49" defer></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"9850bd91cd7b33bc","version":"2025.9.1","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>

<!-- Quill JS -->
<script src="<?= $base_url ?>/assets/plugins/quill/quill.min.js" type="text/javascript"></script>

<script script src="<?= $base_url ?>/assets/js/script.js"
    type="text/javascript"></script>


<!-- Custom JS -->


<!-- Cart Script -->
<script>
    class Cart {
        constructor(name) {
            this.name = name;
            if (!localStorage.getItem(this.name)) {
                localStorage.setItem(this.name, JSON.stringify([]));
            }
        }

        getData() {
            try {
                return JSON.parse(localStorage.getItem(this.name)) || [];
            } catch {
                return [];
            }
        }

        saveData(data) {
            localStorage.setItem(this.name, JSON.stringify(data));
        }

        AddItem(item) {
            let cartItems = this.getData();
            let existing = cartItems.find(i => i.id === item.id);

            if (existing) {
                existing.qty += item.qty;
                existing.vat = item.vat;
                existing.line_total = (existing.qty * existing.price) - existing.discount + existing.vat;
            } else {
                item.line_total = (item.qty * item.price) - item.discount + item.vat;
                cartItems.push(item);
            }

            this.saveData(cartItems);
        }

        delItem(id) {
            let updated = this.getData().filter(item => item.id !== id);
            this.saveData(updated);
        }

        decrementItem(id) {
            let cartItems = this.getData();
            let item = cartItems.find(i => i.id === id);

            if (item && item.qty > 1) {
                item.qty -= 1;
                item.line_total = (item.qty * item.price) - item.discount + item.vat;
            }

            this.saveData(cartItems);
        }

        clearAll() {
            localStorage.removeItem(this.name);
        }
    }

    // Number to words (basic version)
    function numberToWords(num) {
        const a = ['', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'];
        const b = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];
        if (num === 0) return 'Zero';
        if (num < 20) return a[num];
        if (num < 100) return b[Math.floor(num / 10)] + (num % 10 ? ' ' + a[num % 10] : '');
        if (num < 1000) return a[Math.floor(num / 100)] + ' Hundred' + (num % 100 ? ' ' + numberToWords(num % 100) : '');
        if (num < 1000000) return numberToWords(Math.floor(num / 1000)) + ' Thousand' + (num % 1000 ? ' ' + numberToWords(num % 1000) : '');
        return num;
    }

    $(function() {
        $("select").select2();
        const cart = new Cart("order");

        // Calculate line total dynamically
        function calculateLineTotal() {
            let qty = parseFloat($("#qty").val()) || 0;
            let price = parseFloat($("#selling_price").val()) || 0;
            let discount = parseFloat($("#discount").val()) || 0;
            let vat = parseFloat($("#vat").val()) || 0;
            let total = (qty * price) - discount + vat;
            $("#line_total").val(total.toFixed(2));
        }

        // Render cart table and summary
        function renderCart() {
            let data = cart.getData();
            let html = '';
            let totalAmount = 0;
            let totalDiscount = 0;
            let totalVat = 0;

            if (data.length === 0) {
                $("#add_row").html('<tr><td colspan="7" class="text-center text-muted">No items added</td></tr>');
                $("#summary_amount").text("$0.00");
                $("#summary_vat").text("$0.00");
                $("#summary_discount").text("$0.00");
                $("#summary_grand_total").text("$0.00");
                $("#summary_total_words").text("Zero Dollars");
                return;
            }

            data.forEach(item => {
                const price = parseFloat(item.price || 0);
                const discount = parseFloat(item.discount || 0);
                const vat = parseFloat(item.vat || 0);
                const qty = parseFloat(item.qty || 0);
                const line_total = parseFloat(item.line_total || 0);

                html += `
                <tr>
                    <td>${item.product}</td>
                    <td>${qty}</td>
                    <td>${price.toFixed(2)}</td>
                    <td>${discount.toFixed(2)}</td>
                    <td>${vat.toFixed(2)}</td>
                    <td>${line_total.toFixed(2)}</td>
                    <td>
                        <a href="javascript:void(0);" data-id="${item.id}" class="text-danger remove-table">
                            <i class="isax isax-close-circle"></i>
                        </a>
                    </td>
                </tr>`;
                totalAmount += qty * price;
                totalDiscount += discount;
                totalVat += vat;
            });

            $("#add_row").html(html);

            let grandTotal = (totalAmount + totalVat) - totalDiscount;

            // Update summary section
            $("#summary_amount").text(`$${totalAmount.toFixed(2)}`);
            $("#summary_vat").text(`$${totalVat.toFixed(2)}`);
            $("#summary_discount").text(`$${totalDiscount.toFixed(2)}`);
            $("#summary_grand_total").text(`$${grandTotal.toFixed(2)}`);
            $("#summary_total_words").text(numberToWords(Math.round(grandTotal)) + " Dollars");
        }

        // Fetch customer info
        $("#customer").on("change", function() {
            let id = $(this).val();
            $.get("http://localhost/elctro_Ecom_project/Admin/api/customer/find", {
                id
            }, function(res) {
                let data = JSON.parse(res);
                $(".address").val(data.address || "");
            });
        });

        // Fetch product info
        $("#product").on("change", function() {
            let id = $(this).val();
            $.get("http://localhost/elctro_Ecom_project/admin/api/product/find", {
                id
            }, function(res) {
                let data = JSON.parse(res).product;
                $("#selling_price").val(data.selling_price || 0);
                $("#discount").val(data.discount || 0);
                $("#vat").val(data.vat || 0);
                $("#qty").val(1);
                calculateLineTotal();
            });
        });

        // Auto-calc line total
        $("#qty, #selling_price, #discount, #vat").on("input", calculateLineTotal);

        // Add item
        $(".add_btn").on("click", function(e) {
            e.preventDefault();
            let product_id = parseInt($("#product").val());
            if (!product_id) return alert("Select a product!");
            let item = {
                id: product_id,
                product: $("#product option:selected").text(),
                qty: parseFloat($("#qty").val()) || 1,
                price: parseFloat($("#selling_price").val()) || 0,
                discount: parseFloat($("#discount").val()) || 0,
                vat: parseFloat($("#vat").val()) || 0,
                line_total: parseFloat($("#line_total").val()) || 0
            };
            cart.AddItem(item);
            renderCart();
        });

        // Remove item
        $(document).on("click", ".remove-table", function() {
            cart.delItem($(this).data("id"));
            renderCart();
        });

        // Render on load
        renderCart();


        $('#save_btn').on("click", function() {
            let customer_id = $("#customer").val();
            let order_date = $("#order_date").val();
            let status = $("#status").val();
            let delivery_date = $("#due_date").val();
            let shipping_address = $("#shipAddress").val();
            let total_amount = $("#summary_grand_total").text();
            let discount = $("#summary_discount").text();
            let vat = $('#summary_vat').text();

            let products = cart.getData();

            let data = {
                customer_id,
                order_date,
                status,
                delivery_date,
                shipping_address,
                total_amount,
                discount,
                vat,
                products
            };

            $.ajax({
                url: "<?= $base_url ?>/api/order/save_order",
                type: "POST",
                data: {
                    data
                },
                success: function(res) {
                    // let data = JSON.parse(res);
                    console.log(data);
                    cart.clearAll();
                    renderCart();
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });
    });
</script>




<script script src="<?= $base_url ?>/assets/js/custom.js">
</script>

</html>

</body>
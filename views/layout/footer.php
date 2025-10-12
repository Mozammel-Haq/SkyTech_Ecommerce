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
<script>
    const BASE_URL = "<?= $base_url ?>";

    // JQUERY
    $(function() {
        $("select").select2();

        $("#customer").on("change", function() {

            let customer_id = $(this).val();

            $.ajax({
                url: "http://localhost/elctro_Ecom_project/Admin/api/customer/find",
                type: "GET",
                data: {
                    id: customer_id
                },
                success: function(res) {
                    let data = JSON.parse(res);
                    $(".address").val(data.address);
                },
                error: function(err) {
                    console.log(error)
                }
            })

        })
        $("#product").on("change", function() {
            let product_id = $(this).val();

            $.ajax({
                url: 'http://localhost/elctro_Ecom_project/admin/api/product/find',
                total: 'GET',
                data: {
                    id: product_id
                },
                success: function(res) {
                    let data = JSON.parse(res).product;
                    console.log(data)
                    $("#selling_price").val(data.selling_price);
                    $("#discount").val(data.discount);
                    $('#line_total').val(data.selling_price)
                },
                error: function(err) {
                    console.log(err)
                }
            })
        })

        $("#qty").on("change", function() {
            let val = $(this).val();
            let price = $("#selling_price").val();
            let line_total = $('#line_total').val(val * price);
        })

        $(".add_btn").on("click", function(e) {
            e.preventDefault();
            let product = $("#product").find("option:selected").text();
            let qty = $("#qty").val()
            let price = $("#selling_price").val();
            let discount = $("#discount").val();
            let line_total = $("#line_total").val();

            let html = `<tr>
            <td>${product}</td>
            <td>${qty}</td>
            <td>${price}</td>
            <td>${discount}</td>
            <td>${line_total}</td>
            <td><div><a href="javascript:void(0);" class="text-danger remove-table"><i class="isax isax-close-circle"></i></a></div>
			</td>
            </tr>
            `
            $("#add_row").append(html);
        })



    })
</script>
<script script src="<?= $base_url ?>/assets/js/custom.js">
</script>

</html>

</body>
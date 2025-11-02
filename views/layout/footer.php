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
        AddPurchaseItem(item) {
            let cartItems = this.getData();
            let existing = cartItems.find(i => i.id === item.id);

            if (existing) {
                existing.qty += item.qty;
                existing.line_total = (existing.qty * existing.price);
            } else {
                item.line_total = (item.qty * item.price);
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
        const orderCart = new Cart("order");
        const purchaseCart = new Cart("purchase")

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
        function renderOrderCart() {
            let data = orderCart.getData();
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
                    <td>${vat.toFixed(2)}</td>
                    <td>${discount.toFixed(2)}</td>
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
        // Render on load
        renderOrderCart();
        // Fetch customer info
        $("#customer").on("change", function() {
            let id = $(this).val();
            $.get("<?= $base_url ?>/api/customer/find", {
                id
            }, function(res) {
                let data = JSON.parse(res);
                $(".address").val(data.address || "");
            });
        });

        // Fetch product info
        $("#product").on("change", function() {
            let id = $(this).val();
            $.get("<?= $base_url ?>/api/product/find", {
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

        $("#quantity").on("input change", function() {
            let quantity = parseFloat($("#quantity").val()) || 0;
            let unit_price = parseFloat($("#unit_price").val()) || 0;
            let amount = quantity * unit_price;

            $("#line_total").val(amount.toFixed(2));
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
            orderCart.AddItem(item);
            renderOrderCart();
        });

        // Remove item
        $(document).on("click", ".remove-table", function() {
            orderCart.delItem($(this).data("id"));
            renderOrderCart();
        });




        $('#save_btn').on("click", function() {
            let customer_id = $("#customer").val();
            let order_date = $("#order_date").val();
            let status = $("#status").val();
            let delivery_date = $("#due_date").val();
            let shipping_address = $("#shipAddress").val();
            let total_amount = $("#summary_grand_total").text();
            let discount = $("#summary_discount").text();
            let vat = $('#summary_vat').text();

            let products = orderCart.getData();

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
                    //  let data = JSON.parse(res);
                    console.log(res);
                    orderCart.clearAll();
                    renderOrderCart();
                    window.location.href = "<?= $base_url ?>/order";
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });


        // Purchase Logic===========

        function renderPurchaseCart() {
            let data = purchaseCart.getData();
            let html = '';
            let totalAmount = 0;
            if (data.length === 0) {
                $("#product_rows").html('<tr><td colspan="7" class="text-center text-muted">No items added</td></tr>');
                $("#summary_amount").text("$0.00");
                $("#summary_grand_total").text("$0.00");
                $("#summary_total_words").text("Zero Dollars");
                return;
            }

            data.forEach(item => {
                const price = parseFloat(item.unit_price || 0);
                const qty = parseFloat(item.qty || 0);
                const line_total = parseFloat(item.unit_price || 0) * qty;

                html += `
                <tr>
                    <td>${item.product}</td>
                    <td>${qty}</td>
                    <td>${price.toFixed(2)}</td>
                    <td>${line_total.toFixed(2)}</td>
                    <td>
                        <a href="javascript:void(0);" data-id="${item.id}" class="text-danger remove-table">
                            <i class="isax isax-close-circle"></i>
                        </a>
                    </td>
                </tr>`;
                totalAmount += qty * price;
            });

            $("#product_rows").html(html);

            // Update summary section
            $("#summary_total").text(`${totalAmount.toFixed(2)}`);
            $("#summary_total_words").text(numberToWords(Math.round(totalAmount)) + " Dollars");
        }
        renderPurchaseCart();
        $("#productForPurchase").on("change", function() {
            let id = $(this).val();

            $.get("<?= $base_url ?>/api/product/find", {
                id
            }, function(res) {
                let data = JSON.parse(res).product;
                $("#unit_price").val(data.purchase_price || 0);
                $("#quantity").val(1);
                // Calculate total
                let unit_price = parseFloat(data.purchase_price || 0);
                let quantity = 1;
                let amount = quantity * unit_price;

                $("#line_total").val(amount.toFixed(2));
            });
        });
        $("#unit_price").on("change", function() {
            let quantity = $("#quantity").val();
            let unit_price = parseFloat($("#unit_price").val());
            let amount = quantity * unit_price;
            $("#line_total").val(amount.toFixed(2));

        })

        $("#add_purchase").on("click", function(e) {
            e.preventDefault();
            let product_id = parseInt($("#productForPurchase").val());
            if (!product_id) return alert("Select a product!");
            let item = {
                id: product_id,
                product: $("#productForPurchase option:selected").text(),
                qty: parseFloat($("#quantity").val()) || 1,
                unit_price: parseFloat($("#unit_price").val()) || 0,
                amount: parseFloat($("#line_total").val()) || 0
            };
            purchaseCart.AddItem(item);
            renderPurchaseCart();
        })

        $(document).on("click", ".remove-table", function() {
            purchaseCart.delItem($(this).data("id"));
            renderPurchaseCart();
        });



        $('#save_purchase_btn').on("click", function() {
            let supplier_id = $("#supplier").val();
            let warehouse_id = $("#warehouse").val();

            let purchase_date = $("#purchase_date").val();
            let status = $("#status").val();
            let total_amount = $("#summary_total").text();

            let products = purchaseCart.getData();

            let data = {
                supplier_id,
                warehouse_id,
                purchase_date,
                status,
                total_amount,
                products
            };

            $.ajax({
                url: "<?= $base_url ?>/api/purchase/save_purchase",
                type: "POST",
                data: {
                    data
                },
                success: function(res) {
                    //  let data = JSON.parse(res);
                    console.log(res);
                    purchaseCart.clearAll();
                    renderPurchaseCart();
                    window.location.href = "<?= $base_url ?>/purchase";
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });

        // Product Inventory History

        $('.view-history-btn').on('click', function() {
            var productId = $(this).data('product-id');
            var productName = $(this).closest('tr').find('td:nth-child(2) h6').text();
            var productCode = $(this).closest('tr').find('td:nth-child(3) a').text();

            $('#view_history .modal-title').text('Inventory History - ' + productName + ' (' + productCode + ')');

            $('#view_history tbody').empty(); // clear previous rows

            $.ajax({
                url: '<?= $base_url ?>/inventory/getHistory', // new controller method
                method: 'GET',
                data: {
                    product_id: productId
                },
                dataType: 'json',
                success: function(data) {
                    if (data.length === 0) {
                        $('#view_history tbody').append('<tr><td colspan="5">No history found</td></tr>');
                        return;
                    }

                    $.each(data, function(index, row) {
                        var tr = '<tr>' +
                            '<td>' + row.date + '</td>' +
                            '<td>' + row.unit + '</td>' +
                            '<td>' + row.adjustments + '</td>' +
                            '<td>' + row.stock + '</td>' +
                            '<td>' + row.reason + '</td>' +
                            '</tr>';
                        $('#view_history tbody').append(tr);
                    });
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });



    });
</script>
<!-- ApexCharts JS -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
    $(document).ready(function() {
        if ($('#total_sales').length > 0) {

            // Initialize empty chart first
            var options = {
                series: [],
                chart: {
                    type: 'donut',
                    height: 300,
                },
                labels: [],
                colors: ['#F38BBB', '#5297FE', '#7DCEA0', '#FFB84C'],
                plotOptions: {
                    pie: {
                        startAngle: -110,
                        endAngle: 110,
                        donut: {
                            size: '60%',
                            labels: {
                                show: true,
                                total: {
                                    show: true,
                                    label: 'Total Sold',
                                    formatter: function() {
                                        return 0;
                                    }
                                }
                            }
                        }
                    }
                },
                dataLabels: {
                    enabled: false
                },
                legend: {
                    show: true,
                    position: 'bottom'
                },
            };

            var chart = new ApexCharts(document.querySelector("#total_sales"), options);
            chart.render();

            // Load data dynamically using jQuery
            $.ajax({
                url: 'top_selling_data.php',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    if (data.labels.length > 0 && data.series.length > 0) {
                        // Update chart dynamically
                        chart.updateOptions({
                            labels: data.labels,
                        });

                        chart.updateSeries(data.series);

                        // Optional: Update the total count label dynamically
                        var total = data.series.reduce((a, b) => a + b, 0);
                        chart.updateOptions({
                            plotOptions: {
                                pie: {
                                    donut: {
                                        labels: {
                                            total: {
                                                show: true,
                                                label: 'Total Sold',
                                                formatter: function() {
                                                    return total;
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        });
                    } else {
                        console.warn("No data available for chart.");
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error loading chart data:", error);
                }
            });
        }
    });
</script>

<script>
    $(document).ready(function() {
        if ($('#sales_analytic').length > 0) {

            var options = {
                chart: {
                    type: 'bar', // column style
                    height: 350,
                    stacked: false,
                    toolbar: {
                        show: true
                    }
                },
                series: [],
                xaxis: {
                    categories: [],
                    title: {
                        text: 'Period'
                    }
                },
                yaxis: {
                    title: {
                        text: 'Amount ($)',
                        offsetX: 1.5
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '50%',
                        endingShape: 'rounded'
                    }
                },
                colors: ['#06aed4', '#e2b93b'],
                legend: {
                    show: false
                },
                tooltip: {
                    shared: true,
                    intersect: false
                },
                // Disable numbers on bars
                dataLabels: {
                    enabled: false
                }
            };

            var chart = new ApexCharts(document.querySelector("#sales_analytic"), options);
            chart.render();

            function loadSalesAnalytics(period = 'monthly') {
                $.ajax({
                    url: '<?= $base_url ?>/api/Order/saleAnalytics',
                    method: 'GET',
                    data: {
                        period: period
                    },
                    dataType: 'json',
                    success: function(res) {
                        if (!res.success || !res.labels.length) {
                            chart.updateOptions({
                                xaxis: {
                                    categories: []
                                },
                                series: []
                            });
                            return;
                        }

                        let categories = res.labels;
                        let series = [];

                        if (period.toLowerCase() === 'yearly') {
                            // Align Paid/Pending by year
                            let paidData = [],
                                pendingData = [];
                            res.labels.forEach((label, i) => {
                                paidData.push(res.series[0].data[i] ?? 0);
                                pendingData.push(res.series[1].data[i] ?? 0);
                            });
                            series = [{
                                    name: 'Paid',
                                    data: paidData
                                },
                                {
                                    name: 'Pending',
                                    data: pendingData
                                }
                            ];
                        } else if (period.toLowerCase() === 'weekly') {
                            // Only current week data, x-axis as day names
                            series = [{
                                    name: 'Paid',
                                    data: res.series[0].data
                                },
                                {
                                    name: 'Pending',
                                    data: res.series[1].data
                                }
                            ];
                        } else if (period.toLowerCase() === 'monthly') {
                            // Month names on x-axis
                            categories = categories.map(c => {
                                const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                                const parts = c.split('-'); // '2025-10'
                                return parts.length > 1 ? monthNames[parseInt(parts[1]) - 1] : c;
                            });
                            series = [{
                                    name: 'Paid',
                                    data: res.series[0].data
                                },
                                {
                                    name: 'Pending',
                                    data: res.series[1].data
                                }
                            ];
                        }

                        chart.updateOptions({
                            xaxis: {
                                categories: categories
                            },
                            series: series
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX error:", status, error);
                    }
                });
            }

            function loadSummary(period = 'monthly') {
                $.ajax({
                    url: '<?= $base_url ?>/api/Order/summaryAnalytics',
                    method: 'GET',
                    data: {
                        period: period
                    },
                    dataType: 'json',
                    success: function(res) {
                        if (!res.success) return;

                        // Update numbers dynamically
                        $('[data-summary="sales"]').text('$' + res.sales.toLocaleString());
                        $('[data-summary="receipts"]').text('$' + res.receipts.toLocaleString());
                        $('[data-summary="expenses"]').text('$' + res.expenses.toLocaleString());
                        $('[data-summary="earnings"]').text('$' + res.earnings.toLocaleString());
                    },
                    error: function(xhr, status, error) {
                        console.error("Summary AJAX error:", status, error);
                    }
                });
            }

            // Initial load
            loadSalesAnalytics();
            loadSummary();

            // Change period
            $('.select').on('change', function() {
                const period = $(this).val().toLowerCase();
                loadSalesAnalytics(period);
                loadSummary(period);
            });
        }
    });
</script>







<script>
    const BASE_URL = "<?= $base_url ?>";
</script>
<script>
    $(function() {
        var radialOptions = {
            series: [], // will be percentages
            chart: {
                height: 350,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    dataLabels: {
                        show: true,
                        name: {
                            fontSize: '14px'
                        },
                        value: {
                            fontSize: '12px',
                            formatter: function(val) {
                                return val + "%"; // keep bar as percentage
                            }
                        },
                        total: {
                            show: true,
                            label: 'Total Sold',
                            fontSize: '16px',
                            fontWeight: 'bold',
                            formatter: function(w) {
                                // sum of the actual units, not percentages
                                return radialOptions.actualSeries.reduce((a, b) => a + b, 0);
                            }
                        }
                    }
                }
            },
            labels: [], // product names
            colors: ["#0d6efd", "#e2b93b", "#198754"],
            legend: {
                show: true,
                position: 'bottom'
            }
        };

        var radialChart = new ApexCharts(document.querySelector("#radial-chart"), radialOptions);
        radialChart.render();

        // Load data dynamically
        $.getJSON(BASE_URL + "/views/pages/dashboard/home/top_selling_data.php", function(data) {
            if (data && data.labels && data.series) {
                var total = data.series.reduce((a, b) => a + b, 0);
                var percentages = data.series.map(v => parseFloat(((v / total) * 100).toFixed(1)));

                // Store actual series to use in total formatter
                radialOptions.actualSeries = data.series;

                radialChart.updateOptions({
                    labels: data.labels
                });
                radialChart.updateSeries(percentages);
            } else {
                console.error("Invalid chart data:", data);
            }
        }).fail(function(xhr, status, error) {
            console.error("Failed to load chart data:", error);
        });
    });
</script>
<script script src="<?= $base_url ?>/assets/js/custom.js">
</script>

</html>

</body>
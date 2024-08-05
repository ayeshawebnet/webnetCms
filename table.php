<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Data Table Css -->
    <link href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.css" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet">
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css -->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Custom Css -->
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- Our Custom Css -->
    <link href="assets/css/our-custom.css" rel="stylesheet" type="text/css" />
</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include('includes/top-header.php'); ?>

        <?php include('includes/left-sidebar.php'); ?>

        <div class="main-content" id="result">
            <div class="page-content">
                <div class="container-fluid pagebg">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4>Dashboard</h4>
                                <ol class="breadcrumb m-0">
                                    <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Lexa</a></li> -->
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Table</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-sm-12">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="head-action-cont">

                                                    <div class="text-center tbl-checkbox-container">
                                                        <input class="form-check-input" type="checkbox" id="main-checkbox">
                                                    </div>
                                                    <div class="tbl-action-btn action-container-size header-btn d-none">
                                                        <a href="#" class="action-icon"><i class="ti-pencil-alt "></i></a>
                                                        <a href="#" class="action-icon"><i class="ti-trash"></i></a>
                                                        <a href="#" class="action-icon"><i class="ti-files"></i></a>
                                                    </div>
                                                </div>
                                                <div class="cms-tbl-header">
                                                    <form id="tbl-content">
                                                        <input type="search" name="search" class="tbl-search-input" placeholder="Search...">
                                                    </form>

                                                </div>
                                            </div>

                                            <!-- Cms Table section -->
                                            <table id='cmsdatatable' class="cms-table zebra-stripe ">
                                                <thead>
                                                    <tr>
                                                        <!-- <th class="tbl-checkbox-container">
                                                            <div class="text-center">
                                                                <input class="form-check-input" type="checkbox" id="main-checkbox">
                                                            </div>
                                                        </th> -->
                                                        <th class="text-center"></th>
                                                        <th data-sort="0">
                                                            <span>Name</span>
                                                            <span><i class="ti-split-v"></i></span>
                                                        </th>
                                                        <th data-sort="1">
                                                            <span>Name</span>
                                                            <span><i class="ti-split-v"></i></span>
                                                        </th>
                                                        <th data-sort="2">
                                                            <span>Unit</span>
                                                            <span><i class="ti-split-v"></i></span>
                                                        </th>
                                                        <th class="text-center" data-sort="4">
                                                            <span>Created At</span>
                                                            <span><i class="ti-split-v"></i></span>
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td class="tbl-checkbox-container">
                                                            <div class="text-center">
                                                                <input class="form-check-input" type="checkbox" id="checkbox1">
                                                            </div>
                                                        </td>
                                                        <td class="ellipsis">sdsderewrewrytutyusdss Packages</td>
                                                        <td class="ellipsis">Website Packages Website Packages Website Packages Website Packages Website Packages</td>
                                                        <td>-</td>
                                                        <td class="text-center">2022-01-25 17:36:35</td>
                                                        <td class="action-container-size">
                                                            <div class="tbl-action-btn d-none">
                                                                <a href="#" class="action-icon"><i class="ti-pencil-alt "></i></a>
                                                                <a href="#" class="action-icon"><i class="ti-trash "></i></a>
                                                                <a href="#" class="action-icon"><i class="ti-files "></i></a>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td class="tbl-checkbox-container">
                                                            <div class="text-center">
                                                                <input class="form-check-input" type="checkbox" id="checkbox1">
                                                            </div>
                                                        </td>
                                                        <td class="ellipsis">Website Packages</td>
                                                        <td>Ayesha</td>
                                                        <td>-</td>
                                                        <td class="text-center">2022-01-25 17:36:35</td>
                                                        <td class="action-container-size">
                                                            <div class="tbl-action-btn d-none">
                                                                <a href="#" class="action-icon"><i class="ti-pencil-alt "></i></a>
                                                                <a href="#" class="action-icon"><i class="ti-trash "></i></a>
                                                                <a href="#" class="action-icon"><i class="ti-files "></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="tbl-checkbox-container">
                                                            <div class="text-center">
                                                                <input class="form-check-input" type="checkbox" id="checkbox1">
                                                            </div>
                                                        </td>
                                                        <td class="ellipsis">Website Packages</td>
                                                        <td>Website Packages</td>
                                                        <td>-</td>
                                                        <td class="text-center">2022-01-25 17:36:35</td>
                                                        <td class="action-container-size">
                                                            <div class="tbl-action-btn d-none">
                                                                <a href="#" class="action-icon"><i class="ti-pencil-alt "></i></a>
                                                                <a href="#" class="action-icon"><i class="ti-trash "></i></a>
                                                                <a href="#" class="action-icon"><i class="ti-files "></i></a>
                                                            </div>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td class="tbl-checkbox-container">
                                                            <div class="text-center">
                                                                <input class="form-check-input" type="checkbox" id="checkbox1">
                                                            </div>
                                                        </td>
                                                        <td class="ellipsis">Ayesha</td>
                                                        <td>Website Packages</td>
                                                        <td>-</td>
                                                        <td class="text-center">2022-01-25 17:36:35</td>
                                                        <td class="action-container-size">
                                                            <div class="tbl-action-btn d-none">
                                                                <a href="#" class="action-icon"><i class="ti-pencil-alt "></i></a>
                                                                <a href="#" class="action-icon"><i class="ti-trash "></i></a>
                                                                <a href="#" class="action-icon"><i class="ti-files "></i></a>
                                                            </div>
                                                        </td>

                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>

                        </div><!-- sm6 -->
                    </div><!-- row -->


                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>

        <?php include('includes/footer.php'); ?>

    </div>

    <!-- Right bar overlay-->
    <!-- <div class="rightbar-overlay"></div> -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>
    <!--Morris Chart-->

    <script src="assets/js/main.js"></script>

    <script>
        $(document).ready(function() {

            //starts - ellipsis functionality 
            function applyEllipsis() {
                var fullText = $(this).text();
                $('.ellipsis').each(function() {
                    var text = $(this).text();
                    console.log("textsize", text.length);
                    if (text.length > 30) {
                        var truncatedText = text.split("").slice(0, 30).join("") + '...';
                        $(this).text(truncatedText);
                    }
                });
            }
            //ends - ellipsis functionality

            //starts - select multiple checkbox functionality
            $('#main-checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $('.form-check-input').prop('checked', true);
                    $('.cms-table tbody tr').addClass('selected-tr');
                } else {
                    $('.form-check-input').prop('checked', false);
                    $('.cms-table tbody tr').removeClass('selected-tr');
                }
            });
            //ends - select multiple checkbox functionality

            //starts - add bg color on single checkbox checked
            $('tbody .form-check-input').click(function() {

                var totalCheckbox = $('.cms-table tbody tr').length;
                var checkedCheckbox = $('.cms-table tbody tr .form-check-input:checked').length;
                if (totalCheckbox === checkedCheckbox) {
                    $('#main-checkbox').prop('checked', true);
                } else {
                    $('#main-checkbox').prop('checked', false);
                }


                if ($(this).is(':checked')) {
                    $(this).closest('tr').addClass('selected-tr');
                } else {
                    $(this).closest('tr').removeClass('selected-tr');
                }
            });


            //  if any checkbox is checked, then remove that d-none class that lies under head-action-cont
            $('.form-check-input').click(function() {
                if ($('.form-check-input').is(':checked')) {
                    $('.header-btn').removeClass('d-none');
                } else {
                    $('.header-btn').addClass('d-none');
                }
            });


            //starts- whenever we hover over ellipsis class, we show tooltip with full text
            $('.ellipsis').hover(function() {
                // On mouse enter

                var fullText = $(this).data('full-text');
                if ($(this).text() !== fullText) {
                    if (fullText) {
                        // Remove any existing tooltip
                        $(this).find('.ellipsis-tooltip').remove();
                        // Append a new tooltip
                        $(this).append('<div class="ellipsis-tooltip">' + fullText + '</div>');
                    }
                }
            }, function() {
                // On mouse leave
                $(this).find('.ellipsis-tooltip').remove();
            });
            //starts- whenever we hover over ellipsis class, we show tooltip with full text


            //starts - set-style-on-hover on tr
            $('.cms-table tbody tr').hover(function() {
                // On mouse enter
                $(this).addClass('set-style-on-hover');
                $(this).find('.tbl-action-btn').removeClass('d-none');
            }, function() {

                // On mouse leave
                $(this).removeClass('set-style-on-hover');
                $(this).find('.tbl-action-btn').addClass('d-none');
            });
            //ends - set-style-on-hover on tr


            function addZebraStripes() {
                if ($('.cms-table').hasClass('zebra-stripe')) {
                    $('.cms-table tbody tr:nth-child(odd)').addClass("zebrastripe");
                    $('.cms-table tbody tr:nth-child(even)').removeClass("zebrastripe");
                } else {
                    $('.cms-table tbody tr:nth-child(odd)').removeClass("zebrastripe");
                    $('.cms-table tbody tr:nth-child(even)').removeClass("zebrastripe");
                }
            }

            // search functionality
            $(".tbl-search-input").on("keyup", function() {
                var value = $(this).val().toLowerCase();

                $(".cms-table tbody tr").filter(function() {
                    var rowText = $(this).text().toLowerCase();
                    $(this).toggle(rowText.indexOf(value) > -1);

                });
                addZebraStripes()
            });

            // Sorting functionality
            $(".cms-table th").on("click", function() {
                var table = $(this).parents("table").eq(0);
                var rows = table.find("tbody tr").toArray().sort(compare($(this).index()));
                this.asc = !this.asc;
                if (!this.asc) {
                    // addZebraStripes();
                    rows = rows.reverse();

                }
                table.children("tbody").empty().html(rows);
                addZebraStripes();
            });

            function compare(index) {
                return function(a, b) {
                    var valA = getCellValue(a, index);
                    var valB = getCellValue(b, index);
                    return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB);
                };
            }

            function getCellValue(row, index) {
                return $(row).children("td").eq(index).text();
            }


            //   Save the full text initially
            $('.ellipsis').each(function() {
                var fullText = $(this).text();
                $(this).data('full-text', fullText);
            });
            // Apply ellipsis on page load
            applyEllipsis();
            addZebraStripes();     
        });
    </script>
</body>

</html>
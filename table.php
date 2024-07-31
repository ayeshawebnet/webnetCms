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

                                            <h4 class="card-title"><b>Table Lists</b></h4>
                                            <!-- Cms Table section -->
                                            <table  class="cms-table">
                                                <thead>
                                                    <tr>
                                                        <th class="check">
                                                            <div class="form-check ">
                                                                <input class="form-check-input" type="checkbox" id="formCheck1">
                                                            </div>
                                                        </th>
                                                        <th>Name</th>
                                                        <th>Unit</th>
                                                        <th>Created At</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check
                ">
                                                                <input class="form-check-input" type="checkbox" id="formCheck2">
                                                            </div>
                                                        </td>
                                                        <td>Website Packages</td>
                                                        <td>-</td>
                                                        <td>2022-01-25 17:36:35</td>
                                                        <td>
                                                            <div class="Edit-btn-1">
                                                                <a href="#"><i class="ti-pencil-alt bg-902889"></i></a>
                                                                <a href="#"><i class="ti-trash bg-f5a31d"></i></a>
                                                                <a href="#"><i class="ti-files bg-c91974"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check ">
                                                                <input class="form-check-input" type="checkbox" id="formCheck3">
                                                            </div>
                                                        </td>
                                                        <td>Free Ecommerce Website Deliverables</td>
                                                        <td>-</td>
                                                        <td>2021-09-15 12:08:34</td>
                                                        <td>
                                                            <div class="Edit-btn-1">
                                                                <a href="#"><i class="ti-pencil-alt bg-902889"></i></a>
                                                                <a href="#"><i class="ti-trash bg-f5a31d"></i></a>
                                                                <a href="#"><i class="ti-files bg-c91974"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- <table id="datatable" class="cms-table table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                                <thead>
                                                    <tr>
                                                        <th class="check">
                                                            <div class="form-check mb-3">
                                                                <input class="form-check-input" type="checkbox" id="formCheck1">
                                                            </div>
                                                        </th>
                                                        <th>Name</th>
                                                        <th>Unit</th>
                                                        <th>Created At</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check mb-3">
                                                                <input class="form-check-input" type="checkbox" id="formCheck2">
                                                            </div>
                                                        </td>
                                                        <td>Website Packages</td>
                                                        <td>-</td>
                                                        <td>2022-01-25 17:36:35</td>
                                                        <td>
                                                            <div class="Edit-btn-1">
                                                                <a href="#"><i class="ti-pencil-alt bg-902889"></i></a>
                                                                <a href="#"><i class="ti-trash bg-f5a31d"></i></a>
                                                                <a href="#"><i class="ti-files bg-c91974"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check mb-3">
                                                                <input class="form-check-input" type="checkbox" id="formCheck3">
                                                            </div>
                                                        </td>
                                                        <td>Free Ecommerce Website Deliverables</td>
                                                        <td>-</td>
                                                        <td>2021-09-15 12:08:34</td>
                                                        <td>
                                                            <div class="Edit-btn-1">
                                                                <a href="#"><i class="ti-pencil-alt bg-902889"></i></a>
                                                                <a href="#"><i class="ti-trash bg-f5a31d"></i></a>
                                                                <a href="#"><i class="ti-files bg-c91974"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr> -->

                                                    <!--<tr>
                                                    <td>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck4">
                                                        </div>
                                                    </td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck5">
                                                        </div>
                                                    </td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck6">
                                                        </div>
                                                    </td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck7">
                                                        </div>
                                                    </td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck8">
                                                        </div>
                                                    </td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck9">
                                                        </div>
                                                    </td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck10">
                                                        </div>
                                                    </td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" id="formCheck11">
                                                        </div>
                                                    </td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                </tr> -->
                                                <!-- </tbody>
                                            </table> -->

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
    <!-- <script src="assets/js/ajax.js"></script> -->
    <!--Morris Chart-->
    <!-- <script src="assets/libs/morris.js/morris.min.js"></script>
	<script src="assets/libs/raphael/raphael.min.js"></script> -->
    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>
    <!--Morris Chart-->
    <!-- <script src="assets/libs/morris.js/morris.min.js"></script>
	<script src="assets/libs/raphael/raphael.min.js"></script>
	<script src="assets/js/pages/dashboard.init.js"></script>
	<script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
	<script src="assets/js/pages/jquery-knob.init.js"></script> -->
    <!--Morris Chart-->
    <!-- <script src="assets/libs/morris.js/morris.min.js"></script>
	<script src="assets/libs/raphael/raphael.min.js"></script> -->
    <!-- Init js -->
    <!-- <script src="assets/js/pages/morris.init.js"></script> -->
    <script src="assets/js/main.js"></script>

</body>

</html>
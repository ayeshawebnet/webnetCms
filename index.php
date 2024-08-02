<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Webnet-CMS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
	<meta content="Themesdesign" name="author" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">
	<!-- Bootstrap Css -->
	<link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
	<!-- Vector Map -->
	<link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
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
			<div class="page-content scrollbar pagebg" id="style-15">
				<div class="container-fluid force-overflow">

					<!---------------------------------------- Dashboard path ----------------------------->
					<!-- start page title -->
					<div class="row">
						<div class="col-sm-6">
							<div class="page-title-box">
								<h4>Dashboard</h4>
								<ol class="breadcrumb m-0">
									<li class="breadcrumb-item"><a href="javascript: void(0);">Lexa</a></li>
									<li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
									<li class="breadcrumb-item active">Dashboard</li>
								</ol>
							</div>
						</div>
					</div>
					<!-- end page title -->

					<!---------------------------------------- Header Cards -------------------------------->
					<div class="row dashboard-header-card">
						<div class="col-xl-3 col-sm-6">
							<div class="card mini-stat mini-stat-radius bg-light">
								<div class="card-body mini-stat-img">
									<div class="mini-stat-icon">
										<i class="mdi mdi-cube-outline float-end"></i>
									</div>
									<div class="text-white d-flex">

										<div class="" dir="ltr">
											<input class="knob" data-width="65" data-height="65" data-linecap=round data-fgColor="#902889" value="87" data-skin="tron" data-angleOffset="90" data-readOnly=true data-thickness=".25" />
										</div>

										<!-- <h6 class="text-uppercase mb-3 font-size-16 text-white">Active Blogs</h6> -->
										<h2 class="co-custom-1">Active Blogs</h2>
										<!-- <span class="badge bg-info"> +11% </span> <span class="ms-2">From previous period</span> -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6">
							<div class="card mini-stat mini-stat-radius bg-light yellowBg">
								<div class="card-body mini-stat-img">
									<div class="mini-stat-icon">
										<i class="mdi mdi-buffer float-end"></i>
									</div>
									<div class="text-white d-flex">

										<div class="" dir="ltr">
											<input class="knob" data-width="65" data-height="65" data-linecap=round data-fgColor="#f5a31d" value="87" data-skin="tron" data-angleOffset="90" data-readOnly=true data-thickness=".25" />
										</div>

										<!-- <h6 class="text-uppercase mb-3 font-size-16 text-white">Active Blogs</h6> -->
										<h2 class="co-custom-1">Inactive Blogs</h2>
										<!-- <span class="badge bg-info"> +11% </span> <span class="ms-2">From previous period</span> -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6">
							<div class="card mini-stat mini-stat-radius bg-light blueBg">
								<div class="card-body mini-stat-img">
									<div class="mini-stat-icon">
										<i class="mdi mdi-tag-text-outline float-end"></i>
									</div>
									<div class="text-white d-flex">

										<div class="" dir="ltr">
											<input class="knob" data-width="65" data-height="65" data-linecap=round data-fgColor="#39a8c6" value="87" data-skin="tron" data-angleOffset="90" data-readOnly=true data-thickness=".25" />
										</div>

										<!-- <h6 class="text-uppercase mb-3 font-size-16 text-white">Active Blogs</h6> -->
										<h2 class="co-custom-1">Approved Comments</h2>
										<!-- <span class="badge bg-info"> +11% </span> <span class="ms-2">From previous period</span> -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6">
							<div class="card mini-stat mini-stat-radius bg-light pinkBg">
								<div class="card-body mini-stat-img">
									<div class="mini-stat-icon">
										<i class="mdi mdi-briefcase-check float-end"></i>
									</div>
									<div class="text-white d-flex">

										<div class="" dir="ltr">
											<input class="knob" data-width="65" data-height="65" data-linecap=round data-fgColor="#c91974" value="87" data-skin="tron" data-angleOffset="90" data-readOnly=true data-thickness=".25" />
										</div>

										<!-- <h6 class="text-uppercase mb-3 font-size-16 text-white">Active Blogs</h6> -->
										<h2 class="co-custom-1">Ecommerce Demo Request</h2>
										<!-- <span class="badge bg-info"> +11% </span> <span class="ms-2">From previous period</span> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end row -->

					<!------------------------------------- Line Chart and World Map ------------------------->
					<div class="row">
						<!------------------------------- Line Chart ------------------------->
						<div class="col-sm-6">
							<div class="card card-shadow">
								<div class="card-body">

									<div class="fDiv mb-4">
										<div class="fLeft">
											<h4 class="card-title dashboard-card-title">Views & Visitors</h4>
											<ul class="nav nav-tabs nav-tabs-custom mnTabs" role="tablist">
												<li class="nav-item viewsitem" role="presentation">
													<a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab" aria-selected="true">
														<span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
														<span class="d-none d-sm-block">Views</span>
													</a>
												</li>
												<li class="nav-item visitors" role="presentation">
													<a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab" aria-selected="false" tabindex="-1">
														<span class="d-block d-sm-none"><i class="far fa-user"></i></span>
														<span class="d-none d-sm-block">Visitors</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- chart -->
									<div id="morris-line-example" class="morris-charts morris-charts-height" dir="ltr"></div>

								</div>
							</div>

						</div><!-- sm6 -->

						<!------------------------------------- World Map --------------------------------->

						<div class="col-sm-6">

							<div class="card card-shadow">
								<div class="card-body">
									<h4 class="card-title dashboard-card-title">Session By Countries</h4>
									<div class="geo-mt">
										<div class="geo-map">
											<div id="chartDiv" style="width: 100%; height: 100%; margin:auto;">
												<div id="world-map-markers" style="height: 100%"></div>
											</div>
										</div>
										<div class="geo-map-table">
											<h5 class="mb-4">Top 5 Locations</h5>
											<table class="world-map-tbl">
												<tr>
													<th>Countries</th>
													<th>Cities</th>
													<th>Sessions</th>
													<th>Visitors</th>
												</tr>
												<tr>
													<td>Pakistan</td>
													<td>Karachi</td>
													<td>22</td>
													<td>35</td>
												</tr>
												<tr>
													<td>Pakistan</td>
													<td>Lahore</td>
													<td>22</td>
													<td>35</td>
												</tr>
												<tr>
													<td>Pakistan</td>
													<td>Islamabad</td>
													<td>22</td>
													<td>35</td>
												</tr>
												<tr>
													<td>UAE</td>
													<td>Dubai</td>
													<td>22</td>
													<td>35</td>
												</tr>
												<tr>
													<td>UAE</td>
													<td>Ajman</td>
													<td>22</td>
													<td>35</td>
												</tr>
											</table>

										</div>
										
									</div>
									<div class="view-all">View all ></div>
								</div>
							</div>

						</div><!-- sm6 -->
					</div><!-- row -->

					<!--------------------------------- Active Users and Devices Chart----------------------------------->
					<div class="row">
						<!--------------------------------- Active Users Chart----------------------------------->
						<div class="col-sm-6">
							<div class="card card-shadow">
								<div class="card-body">
									<h4 class="card-title dashboard-card-title">Active Users</h4>
									<div class="text-center">
										<h2>
											Right Now<br>23
										</h2>
										<h5>Page views per minute</h5>
									</div>
									<hr />
									<div id="morris-bar-stacked" class="morris-charts morris-charts-height" dir="ltr"></div>

									<div class="card-container">
										<div class="chart-card card-red">
											<span class="card-bar"></span>
											<span class="card-text">Users</span>
											<span class="percent-container">
												<span class="arrow success">↑</span>
												<span class="percent">12.2%</span>
											</span>
											<span class="card-value">440</span>
										</div>
										<div class="chart-card card-green">
											<span class="card-bar"></span>
											<span class="card-text">Sessions</span>
											<span class="percent-container">
												<span class="arrow warn">↓</span>
												<span class="percent">19.8%</span>
											</span>
											<span class="card-value">576</span>
										</div>
										<div class="chart-card card-purple">
											<span class="card-bar"></span>
											<span class="card-text">Bounce Rate</span>
											<span class="percent-container">
												<span class="arrow warn">↓</span>
												<span class="percent">12.2%</span>
											</span>
											<span class="card-value">67.11%</span>
										</div>
										<div class="chart-card card-blue">
											<span class="card-bar"></span>
											<span class="card-text">Session Duration</span>
											<span class="percent-container">
												<span class="arrow warn">↓</span>
												<span class="percent">12.2%</span>
											</span>
											<span class="card-value">2m 22s</span>
										</div>

									</div>
								</div>
							</div>
						</div>
						<!--------------------------------- Devices Chart ----------------------------------->
						<div class="col-sm-6">
							<div class="card card-shadow">
								<div class="card-body">

									<h4 class="card-title dashboard-card-title">Devices</h4>
									<small>Last 7 Days</small>

									<div id="donut-chart">
										<div id="morris-donut-example" class="morris-charts morris-charts-height" dir="ltr">
										</div>
									</div>

								</div>
							</div>
							<!--------------------------------- Notification ----------------------------------->
							<div class="card py-2 card-shadow">
								<div class="card-body ">
									<div class="chart-card">
										<span class="card-icon "> <i class="mdi mdi-email-outline text-danger"></i></span>
										<span class="card2-text">Unread Mails</span>
										<span class="percent-container">
											<span class="arrow success">↑</span>
											<span class="card-value">01</span>
										</span>
									</div>

									<div class="chart-card">
										<span class="card-icon"><i class="mdi mdi-cash-usd-outline text-success"></i></span>
										<span class="card2-text">Today's Quotations</span>
										<span class="percent-container">
											<span class="arrow success">↑</span>
											<span class="card-value">20</span>
										</span>
									</div>

									<div class="chart-card">
										<span class="card-icon"><i class="mdi mdi-message-text-outline text-warning"></i></span>
										<span class="card2-text">Today's Comments</span>
										<span class="percent-container">
											<span class="arrow success">↑</span>
											<span class="card-value">16</span>
										</span>
									</div>

									<div class="chart-card">
										<span class="card-icon"> <i class="mdi mdi-face text-info"></i></span>
										<span class="card2-text">Active Users</span>
										<span class="percent-container">
											<span class="arrow success">↑</span>
											<span class="card-value">08</span>
										</span>
									</div>

								</div>
							</div>
						</div>
					</div>

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

	<!-- Main js -->


	<!-- App js -->
	<script src="assets/js/app.js"></script>
	<!-- <script src="assets/js/ajax.js"></script> -->

	<!--Morris Chart-->
	<script src="assets/libs/morris.js/morris.min.js"></script>
	<script src="assets/libs/raphael/raphael.min.js"></script>
	<script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

	<!-- Init js -->

	<!-- <script src="assets/js/pages/vector-maps.init.js"></script> -->
	<script src="assets/js/pages/dashboard.init.js"></script>
	<script src="assets/js/pages/jquery-knob.init.js"></script>
	<script src="assets/js/pages/morris.init.js"></script>

	<!-- Plugins js-->
	<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>
	<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-in-mill-en.js"></script>
	<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-au-mill-en.js"></script>
	<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
	<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-uk-mill-en.js"></script>
	<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-ca-lcc-en.js"></script>
	<script src="assets/js/main.js"></script>

	<script>
		//World Map regions defined
		let markers = [{
				latLng: [41.90, 12.45],
				name: 'Vatican City'
			},
			{
				latLng: [43.73, 7.41],
				name: 'Monaco'
			},
			{
				latLng: [-0.52, 166.93],
				name: 'Nauru'
			},
			{
				latLng: [-8.51, 179.21],
				name: 'Tuvalu'
			},
			{
				latLng: [43.93, 12.46],
				name: 'San Marino'
			},
			{
				latLng: [47.14, 9.52],
				name: 'Liechtenstein'
			},
			{
				latLng: [7.11, 171.06],
				name: 'Marshall Islands'
			},
			{
				latLng: [17.3, -62.73],
				name: 'Saint Kitts and Nevis'
			},
			{
				latLng: [3.2, 73.22],
				name: 'Maldives'
			},
			{
				latLng: [35.88, 14.5],
				name: 'Malta'
			},
			{
				latLng: [12.05, -61.75],
				name: 'Grenada'
			},
			{
				latLng: [13.16, -61.23],
				name: 'Saint Vincent and the Grenadines'
			},
			{
				latLng: [13.16, -59.55],
				name: 'Barbados'
			},
			{
				latLng: [17.11, -61.85],
				name: 'Antigua and Barbuda'
			},
			{
				latLng: [-4.61, 55.45],
				name: 'Seychelles'
			},
			{
				latLng: [7.35, 134.46],
				name: 'Palau'
			},
			{
				latLng: [42.5, 1.51],
				name: 'Andorra'
			},
			{
				latLng: [14.01, -60.98],
				name: 'Saint Lucia'
			},
			{
				latLng: [6.91, 158.18],
				name: 'Federated States of Micronesia'
			},
			{
				latLng: [1.3, 103.8],
				name: 'Singapore'
			},
			{
				latLng: [0.33, 6.73],
				name: 'São Tomé and Príncipe'
			}
		];


		function getRandomLightColor() {
			// Generate a random light color by limiting the range of each color component
			function getRandomLightValue() {
				// Light colors have higher values for the RGB components
				// Here we use a range from 128 to 255 to ensure the colors are light
				return Math.floor(Math.random() * (256 - 128) + 128);
			}

			const r = getRandomLightValue();
			const g = getRandomLightValue();
			const b = getRandomLightValue();

			// Convert RGB values to hexadecimal format
			return `#${((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1).toUpperCase()}`;
		}

		function generateRandomColorsForRegions() {
			const regions = {};
			// Example region codes, adjust according to your map

			const largeCountryCodes = ['RU', 'CA', 'US', 'CN', 'BR', 'AU', 'IN', 'AR', 'KZ', 'DZ', 'MX', 'ID', 'SA', 'SD', 'LY', 'VE', 'NZ', 'NO', 'FI', 'SE', 'PE', 'ET', 'MA', 'BD', 'MM'];

			largeCountryCodes.forEach(code => {
				regions[code] = getRandomLightColor(); // Assign random color to each region
			});

			return regions;
		}
		(function($) {
			"use strict";

			console.log('VectorMap Init');

			if (typeof $.fn.vectorMap === 'undefined') {
				console.error('VectorMap is not defined. Please check if the VectorMap library is loaded.');
				return;
			}

			$(document).ready(function() {
				$('#world-map-markers').vectorMap({
					map: 'world_mill_en',
					normalizeFunction: 'polynomial',
					hoverOpacity: 0.7,
					hoverColor: false,
					regionStyle: {
						initial: {
							fill: '#d1d5db' // Default color for regions
							// fill: '#3eb7ba' // Default color for regions
						},
						hover: {
							fill: '#4a9ba6' // Color on hover
						},

					},
					series: {
						regions: [{
							values: generateRandomColorsForRegions(),
							attribute: 'fill'
						}]
					},
					markerStyle: {
						initial: {
							r: 3,
							'fill': 'red',
							'fill-opacity': 0.9,
							'stroke': '#fff',
							'stroke-width': 5,
							'stroke-opacity': 0.2
						},
						hover: {
							'stroke': '#fff',
							'fill-opacity': 1,
							'stroke-width': 1.5
						},
					},
					backgroundColor: 'transparent',
					markers: markers
				});
			});

		}(window.jQuery));
	</script>
	<script>
		// search Button 
		$('.search-icon').on('click', function() {
			event.preventDefault()
			$('.search-wrapper').toggleClass('active');
		});

		$('.close').on('click', function() {
			event.preventDefault()
			$('.search-wrapper').removeClass('active');
		});
	</script>
</body>

</html>
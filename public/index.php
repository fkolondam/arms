<!-- app/Views/index.php -->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';
require_once '../config/routes.php';

$url = $_GET['url'] ?? '';
$controllerName = $routes[$url] ?? 'HomeController@index';
list($controller, $method) = explode('@', $controllerName);

$controller = "App\\Controllers\\{$controller}";
if (class_exists($controller)) {
    $controllerInstance = new $controller;
    $controllerInstance->$method();
} else {
    $errorController = new App\Controllers\ErrorController();
    $errorController->notFound();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Bootstrap Gallery - Support Admin Dashboard</title>

	<!-- Meta -->
	<meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
	<meta name="author" content="Bootstrap Gallery" />
	<link rel="canonical" href="https://www.bootstrap.gallery/">
	<meta property="og:url" content="https://www.bootstrap.gallery">
	<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
	<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
	<meta property="og:type" content="Website">
	<meta property="og:site_name" content="Bootstrap Gallery">
	<link rel="shortcut icon" href="assets/images/favicon.svg" />

	<!-- *************
		************ CSS Files *************
	************* -->
	<!-- Icomoon Font Icons css -->
	<link rel="stylesheet" href="assets/fonts/icomoon/style.css" />

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/main.min.css" />

	<!-- *************
		************ Vendor Css Files *************
	************ -->

	<!-- Scrollbar CSS -->
	<link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />
</head>
<body>
	<!-- Page wrapper start -->
	<div class="page-wrapper">
		<!-- App container starts -->
		<div class="app-container">
			<!-- Include header -->
			<?php include '../app/Views/layout/header.php'; ?>
			<!-- Include navbar -->
			<?php include '../app/Views/layout/navbar.php'; ?>
			<!-- App body starts -->
			<div class="app-body">
				<!-- Container starts -->
				<div class="container-fluid">
					<!-- Row start -->
					<div class="row gx-3">
						<div class="col-12 col-xl-6">
							<!-- Breadcrumb start -->
							<ol class="breadcrumb mb-3">
								<li class="breadcrumb-item">
									<i class="icon-house_siding lh-1"></i>
									<a href="index.html" class="text-decoration-none">Home</a>
								</li>
								<li class="breadcrumb-item">Pages</li>
								<li class="breadcrumb-item">Starter Page</li>
							</ol>
							<!-- Breadcrumb end -->
						</div>
					</div>
					<!-- Row end -->
					<!-- Row start -->
					<div class="row gx-3">
						<div class="col-12">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="card-title">Card Title</h5>
								</div>
								<div class="card-body">
									<!-- Your code goes here -->
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->
				</div>
				<!-- Container ends -->
			</div>
			<!-- App body ends -->
			<!-- Include footer -->
			<?php include '../app/Views/layout/footer.php'; ?>
		</div>
		<!-- App container ends -->
	</div>
	<!-- Page wrapper end -->
	<!-- *************
		************ JavaScript Files *************
	************* -->
	<!-- Required jQuery first, then Bootstrap Bundle JS -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!-- *************
		************ Vendor Js Files *************
	************* -->
	<!-- Overlay Scroll JS -->
	<script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
	<script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>
	<!-- Custom JS files -->
	<script src="assets/js/custom.js"></script>
</body>
</html>

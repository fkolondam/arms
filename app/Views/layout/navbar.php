<!-- app/Views/layout/navbar.php -->
<nav class="navbar navbar-expand-lg">
	<div class="container-fluid">
		<div class="offcanvas offcanvas-end" id="MobileMenu">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title semibold">Navigation</h5>
				<button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="offcanvas">
					<i class="icon-clear"></i>
				</button>
			</div>
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="icon-stacked_line_chart"></i> Dashboards
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="index.html"><span>Analytics</span></a></li>
						<li><a class="dropdown-item" href="reports.html"><span>Reports</span></a></li>
					</ul>
				</li>
				<!-- More navbar items -->
			</ul>
		</div>
	</div>
</nav>

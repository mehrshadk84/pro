<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Guess Painting Admin Page</title>
	<link rel="stylesheet" href="{{ url('vendors/mdi/css/materialdesignicons.min.css')}}">
	<link rel="stylesheet" href="{{ url('vendors/base/vendor.bundle.base.cssl')}}">
	<link rel="stylesheet" href="{{ url('css/style.css')}}">
	<link rel="shortcut icon" href="{{ url('images/favicon.png')}}" />
</head>
<body>
	<div class="container-scroller">
		<div class="horizontal-menu">
			<nav class="navbar top-navbar col-lg-12 col-12 p-0">
				<div class="container-fluid">
					<div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
						<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
							<a href="{{ route('admin') }}"><img src="{{ url('images/logo-mini.png')}}" width="150px" alt="logo" /></a>
						</div>
						<ul class="navbar-nav navbar-nav-right">
							<li class="nav-item nav-profile dropdown">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
									<span class="nav-profile-name">Admin</span>
									<span class="online-status"></span>
									<img src="{{ url('images/faces/face28.png')}}" alt="profile" />
								</a>
								<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
									<a class="dropdown-item" href="{{ route('home') }}">
										Home
									</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<nav class="bottom-navbar">
				<div class="container">
					<ul class="nav page-navigation">
						<li class="nav-item">
							<a class="nav-link" href="{{ route('admin.words') }}">
								<i class="mdi mdi-file-document-box menu-icon"></i>
								<span class="menu-title">Words</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.addwords') }}" class="nav-link">
								<i class="mdi mdi-cube-outline menu-icon"></i>
								<span class="menu-title">Add Words</span>
								<i class="menu-arrow"></i>
							</a>
							<!-- <li class="nav-item">
							<a href="{{ route('admin.games') }}" class="nav-link">
								<i class="mdi mdi-grid menu-icon"></i>
								<span class="menu-title">Users</span>
								<i class="menu-arrow"></i>
							</a>
						</li> -->
						<li class="nav-item">
							<a href="{{ url('publick/docs/documentation.html')}}" class="nav-link">
								<i class="mdi mdi-file-document-box-outline menu-icon"></i>
								<span class="menu-title">Notes</span></a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	@yield('content')
	<script src="{{ url('vendors/base/vendor.bundle.base.js')}}"></script>
	<script src="{{ url('js/template.js')}}"></script>
	<script src="{{ url('vendors/chart.js/Chart.min.js')}}"></script>
	<script src="{{ url('vendors/progressbar.js/progressbar.min.js')}}"></script>
	<script src="{{ url('vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js')}}"></script>
	<script src="{{ url('vendors/justgage/raphael-2.1.4.min.js')}}"></script>
	<script src="{{ url('vendors/justgage/justgage.js')}}"></script>
	<script src="{{ url('js/dashboard.js')}}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>General | AdminKit Demo</title>

	<link href="css/app.css" rel="stylesheet">
	<!-- {{ asset('css/app.css') }} -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
  @include('layouts.sidebar')
		<div class="main">
    @include('layouts.header')
			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">General</h1>

					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Breadcrumbs</h5>
									<h6 class="card-subtitle text-muted">Indicate the current page’s location within a navigational hierarchy.</h6>
								</div>
								<div class="card-body">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item active">Home</li>
										</ol>
									</nav>
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="index.html">Home</a></li>
											<li class="breadcrumb-item active">Library</li>
										</ol>
									</nav>
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="index.html">Home</a></li>
											<li class="breadcrumb-item"><a href="#">Library</a></li>
											<li class="breadcrumb-item active">Data</li>
										</ol>
									</nav>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Images</h5>
									<h6 class="card-subtitle text-muted">Lightweight styles for images.</h6>
								</div>
								<div class="card-body">
									<div class="text-center">
										<img class="rounded me-2 mb-2" src="img/avatars/avatar.jpg" alt="Placeholder" width="140" height="140">
										<img class="rounded-circle rounded me-2 mb-2" src="img/avatars/avatar.jpg" alt="Placeholder" width="140" height="140">
										<img class="img-thumbnail rounded me-2 mb-2" src="img/avatars/avatar.jpg" alt="Placeholder" width="140" height="140">
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Badges</h5>
									<h6 class="card-subtitle text-muted">Examples for badges.</h6>
								</div>
								<div class="card-body">

									<div class="mb-1">
										<span class="badge bg-primary">Primary</span>
										<span class="badge bg-secondary">Secondary</span>
										<span class="badge bg-success">Success</span>
										<span class="badge bg-danger">Danger</span>
										<span class="badge bg-warning">Warning</span>
										<span class="badge bg-info">Info</span>
									</div>

									<div class="mt-1">
										<span class="badge bg-primary rounded-pill">Primary</span>
										<span class="badge bg-secondary rounded-pill">Secondary</span>
										<span class="badge bg-success rounded-pill">Success</span>
										<span class="badge bg-danger rounded-pill">Danger</span>
										<span class="badge bg-warning rounded-pill">Warning</span>
										<span class="badge bg-info rounded-pill">Info</span>
									</div>

								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Dropdowns</h5>
									<h6 class="card-subtitle text-muted">Toggle contextual overlays for displaying lists of links.</h6>
								</div>
								<div class="card-body pb-0">

									<div class="row mb-3">
										<div class="col-12 col-md-6 col-lg-12 col-xl-6 col-xxl-4">
											<p class="mb-0">Basic:</p>
											<div class="dropdown-menu mb-2" style="position:static;display:block;">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
										<div class="col-12 col-md-6 col-lg-12 col-xl-6 col-xxl-4">
											<p class="mb-0">Active:</p>
											<div class="dropdown-menu mb-2" style="position:static;display:block;">
												<a class="dropdown-item" href="#">Regular link</a>
												<a class="dropdown-item active" href="#">Active link</a>
												<a class="dropdown-item" href="#">Another link</a>
											</div>
										</div>
										<div class="col-12 col-md-6 col-lg-12 col-xl-6 col-xxl-4">
											<p class="mb-0">Disabled:</p>
											<div class="dropdown-menu mb-2" style="position:static;display:block;">
												<a class="dropdown-item" href="#">Regular link</a>
												<a class="dropdown-item disabled" href="#">Disabled link</a>
												<a class="dropdown-item" href="#">Another link</a>
											</div>
										</div>
										<div class="col-12 col-md-6 col-lg-12 col-xl-6 col-xxl-4">
											<p class="mb-0">Header:</p>
											<div class="dropdown-menu mb-2" style="position:static;display:block;">
												<h6 class="dropdown-header">Dropdown header</h6>
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
										<div class="col-12 col-md-6 col-lg-12 col-xl-6 col-xxl-4">
											<p class="mb-0">Dividers:</p>
											<div class="dropdown-menu mb-2" style="position:static;display:block;">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="col-12 col-md-6 col-lg-12 col-xl-6 col-xxl-4">
											<p class="mb-0">Text:</p>
											<div class="dropdown-menu p-4 text-muted" style="max-width: 200px;position:static;display:block;">
												<p class="mb-0">
													Some example text that's free-flowing within the dropdown menu.
												</p>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
  @include('layouts.footer')
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>
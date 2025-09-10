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

	<title>Alerts | AdminKit Demo</title>

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

					<h1 class="h3 mb-3">Alerts</h1>

					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Default alerts</h5>
									<h6 class="card-subtitle text-muted">Alerts with contextual background color.</h6>
								</div>
								<div class="card-body">
									<div class="mb-3">
										<div class="alert alert-primary alert-dismissible" role="alert">
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
											<div class="alert-message">
												<strong>Hello there!</strong> A simple primary alert—check it out!
											</div>
										</div>
										<div class="alert alert-secondary alert-dismissible" role="alert">
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
											<div class="alert-message">
												<strong>Hello there!</strong> A simple secondary alert—check it out!
											</div>
										</div>
										<div class="alert alert-success alert-dismissible" role="alert">
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
											<div class="alert-message">
												<strong>Hello there!</strong> A simple success alert—check it out!
											</div>
										</div>
										<div class="alert alert-danger alert-dismissible" role="alert">
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
											<div class="alert-message">
												<strong>Hello there!</strong> A simple danger alert—check it out!
											</div>
										</div>
										<div class="alert alert-warning alert-dismissible" role="alert">
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
											<div class="alert-message">
												<strong>Hello there!</strong> A simple warning alert—check it out!
											</div>
										</div>
										<div class="alert alert-info alert-dismissible" role="alert">
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
											<div class="alert-message">
												<strong>Hello there!</strong> A simple info alert—check it out!
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Alerts with additonal content</h5>
									<h6 class="card-subtitle text-muted">Alerts with large contents.</h6>
								</div>
								<div class="card-body">
									<div class="mb-3">
										<div class="alert alert-success alert-dismissible" role="alert">
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
											<div class="alert-message">
												<h4 class="alert-heading">Well done!</h4>
												<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an
													alert works with this kind of content.</p>
												<hr>
												<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
											</div>
										</div>
									</div>

									<div class="mb-3">
										<div class="alert alert-primary alert-outline alert-dismissible" role="alert">
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
											<div class="alert-message">
												<h4 class="alert-heading">Well done!</h4>
												<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an
													alert works with this kind of content.</p>
												<hr>
												<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
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
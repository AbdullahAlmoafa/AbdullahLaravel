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

	<title>Buttons | AdminKit Demo</title>

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

					<h1 class="h3 mb-3">Buttons</h1>

					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Basic Buttons</h5>
									<h6 class="card-subtitle text-muted">Default Bootstrap buttons style.</h6>
								</div>
								<div class="card-body text-center">
									<div class="mb-3">
										<button class="btn btn-primary">Primary</button>
										<button class="btn btn-secondary">Secondary</button>
										<button class="btn btn-success">Success</button>
										<button class="btn btn-danger">Danger</button>
										<button class="btn btn-warning">Warning</button>
										<button class="btn btn-info">Info</button>
									</div>
									<div>
										<button class="btn btn-primary" disabled>Primary</button>
										<button class="btn btn-secondary" disabled>Secondary</button>
										<button class="btn btn-success" disabled>Success</button>
										<button class="btn btn-danger" disabled>Danger</button>
										<button class="btn btn-warning" disabled>Warning</button>
										<button class="btn btn-info" disabled>Info</button>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Button Sizes</h5>
									<h6 class="card-subtitle text-muted">Fancy larger or smaller buttons.</h6>
								</div>
								<div class="card-body text-center">
									<div class="mb-3">
										<button class="btn btn-primary btn-sm">Small</button>
										<button class="btn btn-primary">Medium</button>
										<button class="btn btn-primary btn-lg">Large</button>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Button Dropdown</h5>
									<h6 class="card-subtitle text-muted">Dropdowns styles with buttons.</h6>
								</div>
								<div class="card-body text-center">
									<div class="mb-3">
										<div class="btn-group">
											<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Primary
              </button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group">
											<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Secondary
              </button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group">
											<button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Success
              </button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group">
											<button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Danger
              </button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group">
											<button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Warning
              </button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group">
											<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Info
              </button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>

									<div>
										<div class="btn-group btn-group-sm">
											<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Primary
              </button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group btn-group-sm">
											<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Secondary
              </button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group btn-group-sm">
											<button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Success
              </button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group btn-group-sm">
											<button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Danger
              </button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group btn-group-sm">
											<button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Warning
              </button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
										<div class="btn-group btn-group-sm">
											<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Info
              </button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Button Group</h5>
									<h6 class="card-subtitle text-muted">Button group components.</h6>
								</div>
								<div class="card-body">
									<h6 class="card-subtitle mb-2 text-muted">Horizontal button group</h6>
									<div class="btn-group btn-group-lg mb-3" role="group" aria-label="Large button group">
										<button type="button" class="btn btn-secondary">Left</button>
										<button type="button" class="btn btn-secondary">Middle</button>
										<button type="button" class="btn btn-secondary">Right</button>
									</div>
									<br>
									<div class="btn-group mb-3" role="group" aria-label="Default button group">
										<button type="button" class="btn btn-secondary">Left</button>
										<button type="button" class="btn btn-secondary">Middle</button>
										<button type="button" class="btn btn-secondary">Right</button>
									</div>
									<br>
									<div class="btn-group btn-group-sm mb-4" role="group" aria-label="Small button group">
										<button type="button" class="btn btn-secondary">Left</button>
										<button type="button" class="btn btn-secondary">Middle</button>
										<button type="button" class="btn btn-secondary">Right</button>
									</div>

									<h6 class="card-subtitle mb-2 text-muted">Button toolbar</h6>
									<div class="btn-toolbar mb-4" role="toolbar" aria-label="Toolbar with button groups">
										<div class="btn-group me-2" role="group" aria-label="First group">
											<button type="button" class="btn btn-secondary">1</button>
											<button type="button" class="btn btn-secondary">2</button>
											<button type="button" class="btn btn-secondary">3</button>
											<button type="button" class="btn btn-secondary">4</button>
										</div>
										<div class="btn-group me-2" role="group" aria-label="Second group">
											<button type="button" class="btn btn-secondary">5</button>
											<button type="button" class="btn btn-secondary">6</button>
											<button type="button" class="btn btn-secondary">7</button>
										</div>
										<div class="btn-group" role="group" aria-label="Third group">
											<button type="button" class="btn btn-secondary">8</button>
										</div>
									</div>

									<h6 class="card-subtitle mb-2 text-muted">Vertical button group</h6>
									<div class="btn-toolbar">
										<div class="btn-group-vertical me-2" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-primary">Button</button>
											<button type="button" class="btn btn-primary">Button</button>
											<button type="button" class="btn btn-primary">Button</button>
										</div>
										<div class="btn-group-vertical me-2" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-success">Button</button>
											<button type="button" class="btn btn-success">Button</button>
											<button type="button" class="btn btn-success">Button</button>
										</div>
										<div class="btn-group-vertical me-2" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-warning">Button</button>
											<button type="button" class="btn btn-warning">Button</button>
											<button type="button" class="btn btn-warning">Button</button>
										</div>
										<div class="btn-group-vertical me-2" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-danger">Button</button>
											<button type="button" class="btn btn-danger">Button</button>
											<button type="button" class="btn btn-danger">Button</button>
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
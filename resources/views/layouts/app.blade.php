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

	<title>Blank Page | AdminKit Demo</title>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
  @include('layouts.sidebar')
		<div class="main">
	    @include('layouts.header')
			<main class="content">
				<div class="container-fluid p-0">

					@yield('content')

				</div>
			</main>
  @include('layouts.footer')
		</div>
	</div>

    <script src="{{ asset('js/app.js') }}"></script>

    
    <script>
    (function () {
      
      document.addEventListener('submit', function (e) {
        var form = e.target;
        if (!(form instanceof HTMLFormElement)) return;
        if (e.defaultPrevented) return;
        if (form.dataset.preventDoubleSubmit !== "true") return;
        if (form.dataset._submitted === "true") {
          e.preventDefault();
          return;
        }
        form.dataset._submitted = "true";
        var btns = form.querySelectorAll('button[type="submit"], input[type="submit"]');
        btns.forEach(function (b) {
          try {
            b.disabled = true;
            if (b.tagName === 'BUTTON') {
              b.setAttribute('data-old-html', b.innerHTML);
              b.innerHTML = b.dataset.loadingText || 'Please wait...';
            }
          } catch (err) { /* silent */ }
        });
      }, true);

      
      document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.alert.alert-success').forEach(function (al) {
          setTimeout(function () {
            if (al.classList.contains('fade')) {
              al.classList.remove('show');
              setTimeout(function () { if (al.parentNode) al.parentNode.removeChild(al); }, 300);
            } else {
              if (al.parentNode) al.parentNode.removeChild(al);
            }
          }, 4000);
        });
      });
    })();
    </script>
</body>
</html>
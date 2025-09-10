		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				    <a class="sidebar-brand" href="{{ url('/') }}">
          <span class="align-middle">AdminKit</span>
        </a>

				<ul class="sidebar-nav">
    <li class="sidebar-header">
        Pages
    </li>

    <li class="sidebar-item {{ Request::routeIs('dashboard') ? 'active' : '' }}"> {{-- Example for dashboard --}}
        <a class="sidebar-link" href="/dashboard">
            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
        </a>
    </li>

    
    <li class="sidebar-item {{ Request::routeIs('products.*') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('products.index') }}">
            <i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Products</span>
        </a>
    </li>
					

					<li class="sidebar-item {{ request()->is('profile') ? 'active':''}}">
						        <a class="sidebar-link" href="{{ url('/profile') }}">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
            </a>
					</li>

					<li class="sidebar-item {{ request()->is('settings') ? 'active':''}}">
						        <a class="sidebar-link" href="{{ url('/settings') }}">
              <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Settings</span>
            </a>
					</li>

					<li class="sidebar-item {{ request()->is('invoice') ? 'active':''}}">
						        <a class="sidebar-link" href="{{ url('/invoice') }}">
              <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Invoice</span>
            </a>
					</li>

					<li class="sidebar-item {{ request()->is('blank') ? 'active':''}}">
						        <a class="sidebar-link" href="{{ url('/blank') }}">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a href="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle">Auth</span>
            </a>
						<ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="{{ url('/sign-in') }}">Sign In</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/sign-up') }}">Sign Up</a></li>
						</ul>
					</li>

					<li class="sidebar-header">
						Tools & Components
					</li>
					<li class="sidebar-item">
						 <a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
              <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">UI Elements</span>
            </a>
						<ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item {{ request()->is('ui-alerts') ? 'active':''}}"><a class="sidebar-link" href="{{ url('/ui-alerts') }}">Alerts</a></li>
							<li class="sidebar-item {{ request()->is('ui-buttons') ? 'active':''}}"><a class="sidebar-link" href="{{ url('/ui-buttons') }}">Buttons</a></li>
							<li class="sidebar-item {{ request()->is('ui-cards') ? 'active':''}}"><a class="sidebar-link" href="{{ url('/ui-cards') }}">Cards</a></li>
							<li class="sidebar-item {{ request()->is('ui-general') ? 'active':''}}"><a class="sidebar-link" href="{{ url('/ui-general') }}">General</a></li>
							<li class="sidebar-item {{ request()->is('ui-grid') ? 'active':''}}"><a class="sidebar-link" href="{{ url('/ui-grid') }}">Grid</a></li>
							<li class="sidebar-item {{ request()->is('ui-typography') ? 'active':''}}"><a class="sidebar-link" href="{{ url('/ui-typography') }}">Typography</a></li>
						</ul>
					</li>

					<li class="sidebar-item {{ request()->is('icons') ? 'active':''}}">
						<a class="sidebar-link" href="{{ url('/icons') }}">
              <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
            </a>
					</li>

					<li class="sidebar-item {{ request()->is('forms') ? 'active':''}}">
						<a class="sidebar-link" href="{{ url('/forms') }}">
              <i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Forms</span>
            </a>
					</li>

					<li class="sidebar-header">
						Plugins & Addons
					</li>

					<li class="sidebar-item {{ request()->is('charts') ? 'active':''}}">
						<a class="sidebar-link" href="{{ url('/charts') }}">
              <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
            </a>
					</li>

					<li class="sidebar-item {{ request()->is('maps') ? 'active':''}}">
						<a class="sidebar-link" href="{{ url('/maps') }}">
              <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
            </a>
					</li>
				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Upgrade to Pro</strong>
						<div class="mb-3 text-sm">
							Are you looking for more components? Check out our premium version.
						</div>
						<div class="d-grid">
							 <a href="https://adminkit.io/pricing" target="_blank" class="btn btn-primary">Upgrade to Pro</a>
						</div>
					</div>
				</div>
			</div>
		</nav>
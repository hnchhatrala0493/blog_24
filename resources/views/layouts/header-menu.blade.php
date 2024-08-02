<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-600 menu-state-title-primary nav nav-flush fs-5 fw-semibold" id="kt_landing_menu">
	<!--begin::Menu item-->
	<div class="menu-item">
		<!--begin::Menu link-->
		<a class="menu-link nav-link py-3 px-4 px-xxl-6 {{ Request::segment(1) == 'home' ? 'active': '' }}" href="{{route('home')}}">Home</a>
		<!--end::Menu link-->
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item">
		<!--begin::Menu link-->
		<a class="menu-link nav-link py-3 px-4 px-xxl-6 {{ Request::segment(1) == 'about' ? 'active': '' }}" href="{{route('about')}}">About us</a>
		<!--end::Menu link-->
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item">
		<!--begin::Menu link-->
		<a class="menu-link nav-link py-3 px-4 px-xxl-6 {{ Request::segment(1) == 'contactus' ? 'active': '' }}" href="{{route('contact')}}">Contact us</a>
		<!--end::Menu link-->
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item">
		<!--begin::Menu link-->
		<a class="menu-link nav-link py-3 px-4 px-xxl-6 {{ Request::segment(1) == 'gallery' ? 'active': '' }}" href="{{route('gallery')}}">Gallery</a>
		<!--end::Menu link-->
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item">
		<!--begin::Menu link-->
		<a class="menu-link nav-link py-3 px-4 px-xxl-6 {{ Request::segment(1) == 'register' ? 'active': '' }}" href="{{ route('register') }}">Registration</a>
		<!--end::Menu link-->
	</div>
	<!--end::Menu item-->
	<!--begin::Menu item-->
	<div class="menu-item">
		<!--begin::Menu link-->
		<a class="menu-link nav-link py-3 px-4 px-xxl-6 {{ Request::segment(1) == 'login' ? 'active': '' }}" href="{{route('login')}}">Login</a>
		<!--end::Menu link-->
	</div>
	<!--end::Menu item-->
</div>
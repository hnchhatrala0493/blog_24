<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
	@include('layouts.head')
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="mb-0" id="home">
				<!--begin::Wrapper-->
				<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/media/svg/illustrations/landing.svg)">
					<!--begin::Header-->
					@include('layouts.header')
					<!--end::Header-->
					<!--begin::Landing hero-->
					<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-45px px-9">
						<!--begin::Heading-->
						<div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
							<h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">Contact Us</h1>
						</div>
						<!--end::Heading-->
					</div>
					<!--end::Landing hero-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color mb-10 mb-lg-20">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="flex-column flex-row-fluid" id="kt_app_wrapper">
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					<div class="d-flex flex-column flex-column-fluid">
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-xxl">
								<div class="row mb-3">
									<!--begin::Col-->
									<div class="col-md-6 pe-lg-10">
										<!--begin::Form-->
										<form action="" class="form mb-15" method="post" id="kt_contact_form">
											<h1 class="fw-bold text-dark mb-9">Send Us Email</h1>
											<!--begin::Input group-->
											<div class="row mb-5">
												<!--begin::Col-->
												<div class="col-md-6 fv-row">
													<!--begin::Label-->
													<label class="fs-5 fw-semibold mb-2">Name</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" placeholder="" name="name" />
													<!--end::Input-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 fv-row">
													<!--end::Label-->
													<label class="fs-5 fw-semibold mb-2">Email</label>
													<!--end::Label-->
													<!--end::Input-->
													<input type="text" class="form-control form-control-solid" placeholder="" name="email" />
													<!--end::Input-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="d-flex flex-column mb-5 fv-row">
												<!--begin::Label-->
												<label class="fs-5 fw-semibold mb-2">Subject</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input class="form-control form-control-solid" placeholder="" name="subject" />
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="d-flex flex-column mb-10 fv-row">
												<label class="fs-6 fw-semibold mb-2">Message</label>
												<textarea class="form-control form-control-solid" rows="6" name="message" placeholder=""></textarea>
											</div>
											<!--end::Input group-->
											<!--begin::Submit-->
											<button type="submit" class="btn btn-primary" id="kt_contact_submit_button">
												<!--begin::Indicator label-->
												<span class="indicator-label">Send Feedback</span>
												<!--end::Indicator label-->
												<!--begin::Indicator progress-->
												<span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												<!--end::Indicator progress-->
											</button>
											<!--end::Submit-->
										</form>
										<!--end::Form-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-5 mb-5 mb-lg-15">
									<!--begin::Col-->
									<div class="col-sm-6 pe-lg-10">
										<!--begin::Phone-->
										<div class="bg-light card-rounded d-flex flex-column flex-center flex-center p-10 h-100">
											<!--begin::Icon-->
											<i class="ki-duotone ki-briefcase fs-3tx text-primary">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
											<!--end::Icon-->
											<!--begin::Subtitle-->
											<h1 class="text-dark fw-bold my-5">Let’s Speak</h1>
											<!--end::Subtitle-->
											<!--begin::Number-->
											<div class="text-gray-700 fw-semibold fs-2">1 (833) 597-7538</div>
											<!--end::Number-->
										</div>
										<!--end::Phone-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-sm-6 ps-lg-10">
										<!--begin::Address-->
										<div class="text-center bg-light card-rounded d-flex flex-column flex-center p-10 h-100">
											<!--begin::Icon-->
											<i class="ki-duotone ki-geolocation fs-3tx text-primary">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
											<!--end::Icon-->
											<!--begin::Subtitle-->
											<h1 class="text-dark fw-bold my-5">Our Head Office</h1>
											<!--end::Subtitle-->
											<!--begin::Description-->
											<div class="text-gray-700 fs-3 fw-semibold">Churchill-laan 16 II, 1052 CD, Amsterdam</div>
											<!--end::Description-->
										</div>
										<!--end::Address-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Card-->
								<div class="card mb-4 bg-light text-center">
									<!--begin::Body-->
									<div class="card-body py-12">
										<!--begin::Icon-->
										<a href="#" class="mx-4">
											<img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-30px my-2" alt="" />
										</a>
										<!--end::Icon-->
										<!--begin::Icon-->
										<a href="#" class="mx-4">
											<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-30px my-2" alt="" />
										</a>
										<!--end::Icon-->
										<!--begin::Icon-->
										<a href="#" class="mx-4">
											<img src="assets/media/svg/brand-logos/github.svg" class="h-30px my-2" alt="" />
										</a>
										<!--end::Icon-->
										<!--begin::Icon-->
										<a href="#" class="mx-4">
											<img src="assets/media/svg/brand-logos/behance.svg" class="h-30px my-2" alt="" />
										</a>
										<!--end::Icon-->
										<!--begin::Icon-->
										<a href="#" class="mx-4">
											<img src="assets/media/svg/brand-logos/pinterest-p.svg" class="h-30px my-2" alt="" />
										</a>
										<!--end::Icon-->
										<!--begin::Icon-->
										<a href="#" class="mx-4">
											<img src="assets/media/svg/brand-logos/twitter.svg" class="h-30px my-2" alt="" />
										</a>
										<!--end::Icon-->
										<!--begin::Icon-->
										<a href="#" class="mx-4">
											<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-30px my-2" alt="" />
										</a>
										<!--end::Icon-->
									</div>
									<!--end::Body-->
								</div>
							</div>
						</div>
						</div>
						<div id="kt_app_footer" class="app-footer">
							<!--begin::Footer container-->
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2023&copy;</span>
									<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
	</body>
	<!--end::Body-->
</html>

<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<meta charset="utf-8" />
		<title>OryFikry | BoilerPlates</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		{{-- <link href="{{asset('metch')}}/css/pages/login/classic/login-3f552.css?v=7.1.8" rel="stylesheet" type="text/css" /> --}}
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('metch')}}/plugins/global/plugins.bundlef552.css?v=7.1.8" rel="stylesheet" type="text/css" />
		<link href="{{asset('metch')}}/plugins/custom/prismjs/prismjs.bundlef552.css?v=7.1.8" rel="stylesheet" type="text/css" />
		<link href="{{asset('metch')}}/css/style.bundlef552.css?v=7.1.8" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{asset('metch')}}/css/themes/layout/header/base/lightf552.css?v=7.1.8" rel="stylesheet" type="text/css" />
		<link href="{{asset('metch')}}/css/themes/layout/header/menu/lightf552.css?v=7.1.8" rel="stylesheet" type="text/css" />
		<link href="{{asset('metch')}}/css/themes/layout/brand/darkf552.css?v=7.1.8" rel="stylesheet" type="text/css" />
		<link href="{{asset('metch')}}/css/themes/layout/aside/darkf552.css?v=7.1.8" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/logos/favicon.ico" />
		<!-- Hotjar Tracking Code for keenthemes.com -->
        <style>
            .login.login-3 .login-forgot,.login.login-3 .login-signin,.login.login-3 .login-signup{display:none}.login.login-3.login-signin-on .login-signup{display:none}.login.login-3.login-signin-on .login-signin{display:block}.login.login-3.login-signin-on .login-forgot{display:none}.login.login-3.login-signup-on .login-signup{display:block}.login.login-3.login-signup-on .login-signin{display:none}.login.login-3.login-signup-on .login-forgot{display:none}.login.login-3.login-forgot-on .login-signup{display:none}.login.login-3.login-forgot-on .login-signin{display:none}.login.login-3.login-forgot-on .login-forgot{display:block}.login.login-3 .login-form{width:100%;max-width:450px}@media (max-width:575.98px){.login.login-3 .login-form{width:100%;max-width:100%}}
        </style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!-- Google Tag Manager (noscript) -->
		
		<!-- End Google Tag Manager (noscript) -->
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
				<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url({{asset('metch')}}/media/bg/bg-1.jpg);">
					<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
						<!--begin::Login Header-->
						<div class="d-flex flex-center mb-15">
							<a href="#">
								<img src="{{asset('metch')}}/media/logos/logo-letter-9.png" class="max-h-100px" alt="" />
							</a>
						</div>
						<!--end::Login Header-->
						<!--begin::Login Sign in form-->
						<div class="login-signin">
							<div class="mb-20">
								<h3>Sign In To Admin</h3>
								<p class="opacity-60 font-weight-bold">Enter your details to login to your account:</p>
							</div>
                            
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="email" placeholder="Email" name="email" id="email"/>
                                  
								</div>
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="password" placeholder="Password" name="password" id="password"/>
                                
								</div>
								<div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8">
									{{-- <div class="checkbox-inline">
										<label class="checkbox checkbox-outline checkbox-white text-white m-0">
										<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
										<span></span>Remember me</label>
									</div> --}}
									<a href="javascript:;" id="kt_login_forgot" class="text-white font-weight-bold">Forget Password ?</a>
								</div>
								<div class="form-group text-center mt-10">
									<button type="submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">Sign In</button>
								</div>
							</form>

							<div class="mt-10">
								<span class="opacity-70 mr-4">Don't have an account yet?</span>
								<a href="javascript:;" id="kt_login_signup" class="text-white font-weight-bold">Sign Up</a>
							</div>
						</div>
						<!--end::Login Sign in form-->
						<!--begin::Login Sign up form-->
						<div class="login-signup">
							<div class="mb-20">
								<h3>Sign Up</h3>
								<p class="opacity-60">Enter your details to create your account</p>
							</div>
							<form class="form text-center" id="kt_login_signup_form">
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="text" placeholder="Fullname" name="fullname" />
								</div>
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
								</div>
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="password" placeholder="Password" name="password" />
								</div>
								<div class="form-group">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="password" placeholder="Confirm Password" name="cpassword" />
								</div>
								<div class="form-group text-left px-8">
									<div class="checkbox-inline">
										<label class="checkbox checkbox-outline checkbox-white text-white m-0">
										<input type="checkbox" name="agree" />
										<span></span>I Agree the 
										<a href="#" class="text-white font-weight-bold ml-1">terms and conditions</a>.</label>
									</div>
									<div class="form-text text-muted text-center"></div>
								</div>
								<div class="form-group">
									<button id="kt_login_signup_submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">Sign Up</button>
									<button id="kt_login_signup_cancel" class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2">Cancel</button>
								</div>
							</form>
						</div>
						<!--end::Login Sign up form-->
						<!--begin::Login forgot password form-->
						<div class="login-forgot">
							<div class="mb-20">
								<h3>Forgotten Password ?</h3>
								<p class="opacity-60">Enter your email to reset your password</p>
							</div>
							<form class="form" id="kt_login_forgot_form">
								<div class="form-group mb-10">
									<input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
								</div>
								<div class="form-group">
									<button id="kt_login_forgot_submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">Request</button>
									<button id="kt_login_forgot_cancel" class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2">Cancel</button>
								</div>
							</form>
						</div>
						<!--end::Login forgot password form-->
					</div>
				</div>
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->

		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{asset('metch')}}/plugins/global/plugins.bundlef552.js?v=7.1.8"></script>
		<script src="{{asset('metch')}}/plugins/custom/prismjs/prismjs.bundlef552.js?v=7.1.8"></script>
		<script src="{{asset('metch')}}/js/scripts.bundlef552.js?v=7.1.8"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('metch')}}/js/pages/custom/login/login-generalf552.js?v=7.1.8"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>

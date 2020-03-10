<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/vanno/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 09:21:59 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="VANNO - Premium directory consumer reviews and listings template by Ansonika">
	<meta name="author" content="Ansonika">
	<title>ReviewStore | Consumer Reviews and Listings Template.</title>
	
	<!-- Favicons-->
	<link rel="shortcut icon" href="{{ asset('asset/front/img/favicon.ico')}}" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('asset/front/img/apple-touch-icon-57x57-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('asset/front/img/apple-touch-icon-72x72-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('asset/front/img/apple-touch-icon-114x114-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('asset/front/img/apple-touch-icon-144x144-precomposed.png')}}">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="{{ asset('asset/front/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('asset/front/css/style.css')}}" rel="stylesheet">
	<link href="{{ asset('asset/front/css/vendors.css')}}" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="{{ asset('asset/front/css/custom.css')}}" rel="stylesheet">
	
</head>

<body id="register_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="login">
		<aside>
			<figure>
				<a href="{{ url('/') }}" style="padding-left: 20">
					<img src="{{ asset('asset/front/img/Logo Sticky-01.svg')}}" width="140" height="35" alt="" class="logo_normal">
					<img src="{{ asset ('asset/front/img/Logo-01.svg') }}" width="140" height="35" alt="" class="logo_sticky">
				</a>
			</figure>
			{{-- <div class="access_social">
				<a href="#0" class="social_bt facebook">Register with Facebook</a>
				<a href="#0" class="social_bt google">Register with Google</a>
			</div>
			<div class="divider"><span>Or</span></div> --}}
			<h4>Reviewer Register</h4>
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/reviewer/register') }}">
				{{ csrf_field() }}

				<div class="form-group {{ $errors->has('fullname') ? ' has-error' : '' }}">
					<input class="form-control" type="text" name="fullname" value="{{ old('fullname') }}" placeholder="Full Name">

					@if ($errors->has('fullname'))
					<span class="help-block">
						<strong>{{ $errors->first('fullname') }}</strong>
					</span>
					@endif
					<i class="ti-user"></i>
				</div>



				<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
					<input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email">

					@if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
					<input class="form-control" type="password" name="password" value="{{ old('password') }}" id="password1" placeholder="Password">

					@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
					@endif
					<i class="icon_lock_alt"></i>
				</div>


				<div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
					<input class="form-control" type="password"  id="password2" value="{{ old('first_name') }}" name="password_confirmation" placeholder="Confirm Password">

					@if ($errors->has('password_confirmation'))
					<span class="help-block">
						<strong>{{ $errors->first('password_confirmation') }}</strong>
					</span>
					@endif
					<i class="icon_lock_alt"></i>
				</div>



				<div id="pass-info" class="clearfix"></div>
				<button type="submit" class="btn_1 rounded full-width">Register Now!</button> 

				{{--  <div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary">
							Register
						</button>
					</div>
				</div> --}}
				<div class="text-center add_top_10">Already have an acccount? <strong>
					<a href="{{ url('/reviewer/login') }}">Sign In</a>
				</strong></div>
			</form>
			<div class="copy">© {{ date('Y') }} Review Store</div>
		</aside>
	</div>
	<!-- /login -->
	
	<!-- COMMON SCRIPTS -->
	<script src="{{ asset('asset/front/js/common_scripts.js')}}"></script>
	<script src="{{ asset('asset/front/js/functions.js')}}"></script>
	<script src="{{ asset('asset/front/assets/validate.js')}}"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="{{ asset('asset/front/js/pw_strenght.js')}}"></script>	

</body>

<!-- Mirrored from www.ansonika.com/vanno/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 09:21:59 GMT -->
</html>
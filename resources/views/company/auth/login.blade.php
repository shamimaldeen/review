<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/vanno/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 09:21:59 GMT -->
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
    <link href="css/custom.css" rel="stylesheet">

</head>

<body id="login_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href="{{ url('/') }}" style="padding-left: 20">
					<img src="{{ asset('asset/front/img/Logo Sticky-01.svg')}}" width="140" height="35" alt="" class="logo_normal" >
					<img src="{{ asset('asset/front/img/Logo-01.svg')}}" width="140" height="35" alt="" class="logo_sticky">
				</a>
			</figure>
			  <form method="POST" action="{{ url('/company/login') }}">
			  	 {{ csrf_field() }}
				{{-- <div class="access_social">
					<a href="#0" class="social_bt facebook">Login with Facebook</a>
					<a href="#0" class="social_bt google">Login with Google</a>
				</div>
				<div class="divider"><span>Or</span></div> --}}

				<h4>Reviewer Login</h4>

				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<input type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>

					 @if ($errors->has('email'))
                        <span class="help-block" style="color: red;">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

					<i class="icon_mail_alt"></i>
				</div>

				<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					<input type="password" class="form-control" name="password" id="password" value="" placeholder="Password">
					  @if ($errors->has('password'))
                        <span class="help-block" style="color: red;">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_30">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="{{ url('/company/password/reset') }}">Forgot Password?</a></div>
				</div>
				<button  type="submit"  class="btn_1 rounded full-width">Login to ReviewStore</button>
				{{-- <a href="{{ url('/company/home') }}" class="btn_1 rounded full-width">Login to ReviewStore</a> --}}
				<div class="text-center add_top_10">New to ReviewStore? <strong><a href="{{ url('/company/register') }}">Sign up!</a></strong></div>
			</form>
			<div class="copy">© 2018 ReviewStore</div>
		</aside>
	</div>
	<!-- /login -->
		
	<!-- COMMON SCRIPTS -->
    <script src="{{ asset('asset/front/js/common_scripts.js')}}"></script>
	<script src="{{ asset('asset/front/js/functions.js')}}"></script>
	<script src="{{ asset('asset/front/assets/validate.js')}}"></script>
  
</body>

<!-- Mirrored from www.ansonika.com/vanno/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 09:21:59 GMT -->
</html>
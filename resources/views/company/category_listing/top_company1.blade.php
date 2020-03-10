<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.ansonika.com/vanno/category-companies-listings-filterstop.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 09:21:46 GMT -->
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

<body>
	
	<div id="page">
		
	<header class="header_in">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-12">
					<div id="logo">
						<a href="index.html" style="padding-top: 20;>
							<img src="{{ asset('asset/front/img/Logo Sticky-01.svg')}}" width="140" height="35" alt="" class="logo_normal" >
							<img src="{{ asset('asset/front/img/Logo-01.svg')}}" width="140" height="35" alt="" class="logo_sticky">
						</a>
					</div>
				</div>
				<div class="col-lg-9 col-12">
					<ul id="top_menu">
						<li><a href="{{ url('reviewer/write-review') }}" class="btn_top">Write a Review</a></li>
						<li><a href="{{ url('company/companies-landing') }}" class="btn_top company">For Companies</a></li>
						<li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
					</ul>
					<!-- /top_menu -->
					<a href="#menu" class="btn_mobile">
						<div class="hamburger hamburger--spin" id="hamburger">
							<div class="hamburger-box">
								<div class="hamburger-inner"></div>
							</div>
						</div>
					</a>
					<nav id="menu" class="main-menu">
						<ul>
							<li><span><a href="{{ url('/') }}">Home</a></span></li>
				<li><span><a href="{{ url('reviewer/row-listing') }}">Reviews</a></span></li>
				<li><span><a href="#0">Profile</a></span>
                    <ul>
                        <li><a href="{{ url('/user-dashboard') }}">User Dashboard</a>
                        </li>
                        <li><a href="user-settings.html">User Settings</a></li>
                    </ul>
                
                </li>
				<li><span><a href="{{ url('company/category-companies-listing') }}">Top Companies</a></span></li>
					<ul>
						<!--<li><a href="companies-landing.html">Compannies Landing Page</a></li>
						<li><a href="all-categories.html">Companies Categories Page</a></li>
						<li><a href="category-companies-listings-filterstop.html">Companies Listing Page</a></li>-->
						<li><a href="{{ url('about') }}">About Us</a></li>
						<li><a href="{{ url('/help') }}">Help Section</a></li>
						<li><a href="{{ url('/contact') }}">Contacts</a></li>						
						<!--<li><a href="404.html">404 page</a></li>-->
					</ul>
				</li> 
                <li><span><a href="{{ url('/blog') }}">Blog</a></span></li>
				<li class="d-block d-sm-none"><span><a href="{{ url('reviewer/write-review') }}" class="btn_top">Write a review</a></span></li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->		
	</header>
	<!-- /header -->
	
	<main>
		@include('layout.web.temp')
		
		<div class="filters_listing sticky_horizontal">
			<div class="container">
				<ul class="clearfix">
					<li>
						<div class="switch-field">
							<input type="radio" id="all" name="listing_filter" value="all" checked data-filter="*" class="selected">
							<label for="all">All</label>
							<input type="radio" id="high" name="listing_filter" value="high" data-filter=".high">
							<label for="high">High rated</label>
							<input type="radio" id="low" name="listing_filter" value="low" data-filter=".low">
							<label for="low">Low rated</label>
						</div>
					</li>
					<li><a class="btn_filt" data-toggle="collapse" href="#filters" aria-expanded="false" aria-controls="filters" data-text-swap="Less filters" data-text-original="More filters">More filters</a></li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->
		
		<div class="collapse" id="filters">
			<div class="container margin_30_5">
				<div class="row">
					<div class="col-md-4">
						<h6>Rating</h6>
						<ul>
							<li>
								<label class="container_check">Superb 9+ <small>67</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Very Good 8+ <small>89</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Good 7+ <small>45</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Pleasant 6+ <small>78</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<h6>Tags</h6>
						<ul>
							<li>
								<label class="container_check">Soluta mei <small>12</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Enim suscipit  <small>11</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Duis veri <small>23</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
							<li>
								<label class="container_check">Dicunt nam <small>56</small>
								  <input type="checkbox">
								  <span class="checkmark"></span>
								</label>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<div class="add_bottom_30">
						<h6>Distance</h6>
							<div class="distance"> Radius around selected destination <span></span> km</div>
							<input type="range" min="10" max="100" step="10" value="30" data-orientation="horizontal">
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
		</div>
		<!-- /Filters -->

		<div class="container margin_60_35">
			
			<div class="isotope-wrapper">
				

				@foreach($companies as $company)
				<div class="company_listing isotope-item high">
					<div class="row">
						<div class="col-md-9">
							<div class="company_info">
								<figure><a href="reviews-page.html"><img src="{{ asset('storage/uploads/company/'.$company->image)}}" alt=""></a></figure>
								<h3>{{ $company->company_name }}</h3>
								<p> {{ $company->description }}</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="text-center float-lg-right">
							<span class="rating"><strong>Based on 265 reviews</strong><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i></span>
							<a href="{{ url('reviewer/reviews') }}" class="btn_1 small">Read more</a>
							</div>
						</div>
					</div>
				</div>

				@endforeach
				<!-- /company_listing -->
				
				
				
			
			</div>
			<!-- /isotope-wrapper -->
			
			<p class="text-center"><a href="#0" class="btn_1 rounded add_top_15">Load more</a></p>
			
		</div>
		<!-- /container -->
		
	</main>
	<!--/main-->
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<a data-toggle="collapse" data-target="#collapse_ft_1" aria-expanded="false" aria-controls="collapse_ft_1" class="collapse_bt_mobile">
						<h3>Quick Links</h3>
						<div class="circle-plus closed">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
					</a>
					<div class="collapse show" id="collapse_ft_1">
						<ul class="links">
							<li><a href="about.html">About us</a></li>
							<!--<li><a href="#0">Faq</a></li>-->
							<li><a href="help.html">Help</a></li>
							<li><a href="user-dashboard.html">My account</a></li>
							<li><a href="register.html">Create account</a></li>
							<li><a href="contacts.html">Contacts</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<a data-toggle="collapse" data-target="#collapse_ft_2" aria-expanded="false" aria-controls="collapse_ft_2" class="collapse_bt_mobile">
						<h3>Categories</h3>
						<div class="circle-plus closed">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
					</a>
					<div class="collapse show" id="collapse_ft_2">
						<ul class="links">
							<li><a href="#0">Men's Fashion</a></li>
							<li><a href="#0">Women's Fashion</a></li>
							<li><a href="#0">Phone & Accessories</a></li>
							<li><a href="#0">Sports & Outdoor</a></li>
							<li><a href="#0">Electronics</a></li>
							<li><a href="#0">View all</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<a data-toggle="collapse" data-target="#collapse_ft_3" aria-expanded="false" aria-controls="collapse_ft_3" class="collapse_bt_mobile">
						<h3>Contacts</h3>
						<div class="circle-plus closed">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
					</a>
					<div class="collapse show" id="collapse_ft_3">
						<ul class="contacts">
							<li><i class="ti-home"></i>Dattapara, Ashulia, Savar<br>Dhaka, Bangladesh</li>
							<li><i class="ti-headphone-alt"></i>+8801705521596</li>
							<li><i class="ti-email"></i><a href="#0">info@domain.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<a data-toggle="collapse" data-target="#collapse_ft_4" aria-expanded="false" aria-controls="collapse_ft_4" class="collapse_bt_mobile">
						<div class="circle-plus closed">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
						<h3>Keep in touch</h3>
					</a>
					<div class="collapse show" id="collapse_ft_4">
						<div id="newsletter">
							<div id="message-newsletter"></div>
							<form method="post" action="http://www.ansonika.com/vanno/assets/newsletter.php" name="newsletter_form" id="newsletter_form">
								<div class="form-group">
									<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
									<input type="submit" value="Submit" id="submit-newsletter">
								</div>
							</form>
						</div>
						<div class="follow_us">
							<h5>Follow Us</h5>
							<ul>
								<li><a href="#0"><i class="ti-facebook"></i></a></li>
								<li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
								<li><a href="#0"><i class="ti-google"></i></a></li>
								<li><a href="#0"><i class="ti-pinterest"></i></a></li>
								<li><a href="#0"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
			<div class="row">
				<div class="col-lg-6">
					<ul id="footer-selector">
						<li>
							<div class="styled-select" id="lang-selector">
								<select>
									<option value="English" selected>English</option>
									<option value="French">French</option>
									<option value="Spanish">Spanish</option>
									<option value="Russian">Russian</option>
								</select>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
						<li><span>© 2018 ReviewStore</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center">
					Don’t have an account? <a href="register.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="{{ asset('asset/front/js/common_scripts.js')}}"></script>
	<script src="{{ asset('asset/front/js/functions.js')}}"></script>
	<script src="{{ asset('asset/front/assets/validate.js')}}"></script>

	<!-- Masonry Filtering -->
	<script src="{{ asset('asset/front/js/isotope.min.js')}}"></script>
	<script>
	$(window).on('load',function(){
	  var $container = $('.isotope-wrapper');
	  $container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });
	});

	$('.filters_listing').on( 'click', 'input', 'change', function(){
	  var selector = $(this).attr('data-filter');
	  $('.isotope-wrapper').isotope({ filter: selector });
	});
	</script>
  
</body>

<!-- Mirrored from www.ansonika.com/vanno/category-companies-listings-filterstop.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 09:21:48 GMT -->
</html>
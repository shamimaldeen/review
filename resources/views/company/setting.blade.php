@extends('layout.web.web')
@section('title','Setting')

@section('content')
<main class="margin_main_container">
	<div class="user_summary">
		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<figure>
							<img src="{{url('storage/uploads/company/'.$company->image)}}" alt="">
						</figure>
						<h1>{{ $company->fullname }}</h1>
						
					</div>
					<div class="col-md-6">
						<ul>
							<li>
								<strong>3</strong>
								<a href="#0" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="Reviews written by you"><i class="icon_star"></i> Reviews</a>
							</li>
							<li>
								<strong>12</strong>
								<a href="#0" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="Number of people who have read your reviews"><i class="icon-user-1"></i> Reads</a>
							</li>
							<li>
								<strong>36</strong>
								<a href="#0" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="Number of people who found your review useful"><i class="icon_like_alt"></i> Useful</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /container -->
		</div>
	</div>
	<!-- /user_summary -->
	<div class="container margin_60_35">
		@if(Session::has('success')) 
		<p class="alert alert-success message">{{ Session::get('success') }}</p>
		@endif

		@if(Session::has('error')) 
		<p class="alert alert-warning message">{{ Session::get('error') }}</p>
		@endif
		<div class="row">
			<div class="col-lg-12">
				<div class="settings_panel">
					<form action="{{ url('company/update_profile') }}" method="post" enctype="multipart/form-data">
						@METHOD('PUT')
						@csrf
						<h3>Update Company</h3>
						<hr>
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" style="height: 180px;" name="description" placeholder="Your profile">{{ $company->description }}</textarea>
						</div>
						<div class="form-group">
							<label>Edit Logo</label>
							<div class="fileupload"><input type="file" name="image" accept="image/*"></div>
						</div>
						<div class="form-group">
							<label>Edit Email</label>
							<input class="form-control" name="email" type="email" value="{{ $company->email }}" placeholder="mark@domani.com" readonly="">
						</div>
						<div class="form-group">
							<label>First Name</label>
							<input class="form-control" type="text" name="first_name" value="{{ $company->first_name }}" placeholder="Mark Steinberg">
						</div>

						<div class="form-group">
							<label>Last Name</label>
							<input class="form-control" type="text" name="last_name" value="{{ $company->last_name }}" placeholder="Mark Steinberg">
						</div>

						
						<div class="form-group">
							<label>Website</label>
							<input class="form-control" type="text" name="website"  value="{{ $company->website }}" placeholder="Malaga">
						</div>

						<div class="form-group">
							<label>Phone</label>
							<input class="form-control" type="text" name="phone"  value="{{ $company->phone }}" placeholder="Malaga">
						</div>

						<div class="form-group">
							<label>Address</label>
							<input class="form-control" type="text" name="address"  value="{{ $company->address }}" placeholder="Malaga">
						</div>

						<p class="text-right"><button type="submit" class="btn_1 small add_top_15" href="#0">Update Company</button></p>
					</form>
				</div>
				<!-- /settings_panel -->
				<div class="settings_panel">
					<form action="{{ url('company/update_password') }}" method="post" >
						{{-- @METHOD('POST') --}}
						@csrf
						<h3>Change password</h3>
						<hr>

						<div class="form-group">
							<label>New Password</label>
							<input class="form-control" type="password" name="password" id="password1">
							@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
							@endif
						</div>
						<div class="form-group">
							<label>Confirm Password</label>
							<input class="form-control" type="password" name="password_confirmation" id="password2">

							@if ($errors->has('password_confirmation'))
							<span class="help-block">
								<strong>{{ $errors->first('password_confirmation') }}</strong>
							</span>
							@endif
						</div>
						<div id="pass-info" class="clearfix"></div>
						<p class="text-right"><button type="submit" class="btn_1 small" href="#0">Save password</button></p>

					</form>
				</div>
				<!-- /settings_panel -->
			</div>
			<!-- /col -->
			
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</main>
<!--/main-->

@endsection
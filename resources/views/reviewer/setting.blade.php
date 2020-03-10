@extends('layout.web.new_header')
@section('title','Setting')

@section('content')
<main class="margin_main_container">
	<div class="user_summary">
		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<figure>
							<img src="{{url('storage/uploads/reviewer/'.$reviewer->image)}}" alt="">
						</figure>
						<h1>{{ $reviewer->fullname }}</h1>
						<span>{{ $reviewer->country->name }}</span>
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
			<div class="col-lg-8">
				<div class="settings_panel">
					<form action="{{ url('reviewer/setting') }}" method="post" enctype="multipart/form-data">
						@METHOD('PUT')
						@csrf
						<h3>Personal settings</h3>
						<hr>
						<div class="form-group">
							<label>Edit Profile text</label>
							<textarea class="form-control" style="height: 180px;" name="title" placeholder="Your profile">{{ $reviewer->title }}</textarea>
						</div>
						<div class="form-group">
							<label>Edit Photo</label>
							<div class="fileupload"><input type="file" name="image" accept="image/*"></div>
						</div>
						<div class="form-group">
							<label>Edit Email</label>
							<input class="form-control" name="email" type="email" value="{{ $reviewer->email }}" placeholder="mark@domani.com">
						</div>
						<div class="form-group">
							<label>Edit Full name</label>
							<input class="form-control" type="text" name="fullname" value="{{ $reviewer->fullname }}" placeholder="Mark Steinberg">
						</div>
						<div class="form-group">
							<label>Edit City</label>
							<input class="form-control" type="text" name="city"  value="{{ $reviewer->city }}" placeholder="Malaga">
						</div>
						<div class="form-group">
							<label>Edit Country</label>
							<select name="country_id" id="country_id" class="form-control">
								<option value="" disabled="" selected="">---</option>
								@foreach($countries as $country)
								<option value="{{ $country->id }}" @if($country->id  == $reviewer->country_id) selected="" @endif>{{ $country->name }}</option>

								@endforeach
							</select>
						</div>
						<p class="text-right"><button class="btn_1 small add_top_15" href="#0">Update personal info</button></p>

					</form>
				</div>
				<!-- /settings_panel -->
				<div class="settings_panel">
					<h3>Change password</h3>
					<hr>
					<div class="form-group">
						<label>Current Password</label>
						<input class="form-control" type="password" id="password">
					</div>
					<div class="form-group">
						<label>New Password</label>
						<input class="form-control" type="password" id="password1">
					</div>
					<div class="form-group">
						<label>Confirm Password</label>
						<input class="form-control" type="password" id="password2">
					</div>
					<div id="pass-info" class="clearfix"></div>
					<p class="text-right"><a class="btn_1 small" href="#0">Save password</a></p>
				</div>
				<!-- /settings_panel -->
			</div>
			<!-- /col -->
			<div class="col-lg-4" id="sidebar">
				<div class="box_general">
					<h5>Delete account</h5>
					<p>At nec senserit aliquando intellegat, et graece facilisis pro. Per in ridens sensibus interesset, eos ei nonumes incorrupte, iriure diceret an eos.</p>
					<a href="#" class="btn_1 small">Delete account</a>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</main>
<!--/main-->

@endsection
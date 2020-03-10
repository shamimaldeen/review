@extends('layout.web.new_header')
@section('title','Write Review')

@section('content')

<main class="margin_main_container">
	<div class="container margin_60_35">
		<div class="row">
			<div class="col-lg-8">
				<form action="{{ url('reviewer/review_now/'.$company->id) }}" method="post" enctype="multipart/form-data">
					@method('post') @csrf
					<div class="box_general write_review">
						<h1>Write a review of {{ $company->company_name }}</h1>
						<div class="rating_submit">
							<div class="form-group">
								<label class="d-block">Overall rating</label>
								<span class="rating">
									<input type="radio" class="rating-input" id="5_star" name="rating" value="5 Stars"><label for="5_star" class="rating-star"></label>
									<input type="radio" class="rating-input" id="4_star" name="rating" value="4 Stars"><label for="4_star" class="rating-star"></label>
									<input type="radio" class="rating-input" id="3_star" name="rating" value="3 Stars"><label for="3_star" class="rating-star"></label>
									<input type="radio" class="rating-input" id="2_star" name="rating" value="2 Stars"><label for="2_star" class="rating-star"></label>
									<input type="radio" class="rating-input" id="1_star" name="rating" value="1 Star"><label for="1_star" class="rating-star"></label>
								</span>
							</div>
						</div>
						<!-- /rating_submit -->
						<div class="form-group">
							<label>Title of your review</label>
							<input class="form-control" type="text" name="title" placeholder="If you could say it in one sentence, what would you say?">
						</div>
						<div class="form-group">
							<label>Your review</label>
							<textarea class="form-control"  name="review_text" style="height: 180px;" placeholder="Write your review to help others learn about this online business"></textarea>
						</div>
						<div class="form-group">
							<label>Add you invoice photo (required)</label>
							<div class="fileupload"><input type="file" name="review_image[]" accept="image/*" multiple=""></div>
						</div>
						<div class="form-group">
							<div class="checkboxes float-left add_bottom_15 add_top_15">
								<label class="container_check">Your review will be justified and then published to website . Please stay with usYour review will be justified and then published to website . Please stay with us Your review will be justified and then published to website . Please stay with us  <br>
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</div>
						</div>
						<button type="submit" class="btn_1">Submit review</button>
					</div>

				</form>
			</div>
			<!-- /col -->
			<div class="col-lg-4">

				<div class="latest_review">
					<h4>Recent reviews<br>for Good Electronics</h4>
					<div class="review_listing">
						<div class="clearfix add_bottom_10">
							<figure><img src="img/avatar3.jpg" alt=""></figure>
							<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
							<small>Shops</small>
						</div>
						<h3><strong>Jhon Doe</strong></h3>
						<h4>"Avesome Experience"</h4>
						<p>Et nec tantas accusamus salutatus, sit commodo veritus te</p>
						<ul class="clearfix">
							<li><small>26.08.2018</small></li>
							<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
						</ul>
					</div>
					<!-- /review_listing -->
					<div class="review_listing">
						<div class="clearfix add_bottom_10">
							<figure><img src="img/avatar4.jpg" alt=""></figure>
							<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
							<small>Shops</small>
						</div>
						<h3><strong>Jhon Doe</strong></h3>
						<h4>"Avesome Experience"</h4>
						<p>Et nec tantas accusamus salutatus, sit commodo veritus te</p>
						<ul class="clearfix">
							<li><small>26.08.2018</small></li>
							<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
						</ul>
					</div>
					<!-- /review_listing -->
				</div>
				<!-- /latest_review -->
				
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</main>
<!--/main-->
@endsection
@extends('layout.web.new_header')
@section('title','Reviews')

@section('content')
	
	<main>
		@include('layout.web.temp')
	   <!-- /results -->
		
		<div class="container margin_60_35">
			<div class="row">
				<aside class="col-lg-3" id="sidebar">
					<div id="filters_col">
						<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
						<div class="collapse show" id="collapseFilters">
							<div class="filter_type date_filter">
								<h6>Date</h6>
								<ul>
									<li>
										<label class="container_radio">All
											<input type="radio" id="all_2" name="filters_listing" value="all" checked data-filter="*" class="selected">
											<span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_radio">Latest
								<input type="radio" id="latest" name="filters_listing" value="latest" data-filter=".latest">
								<span class="checkmark"></span>
							</label>
									</li>
									<li>
										<label class="container_radio">Oldest
								<input type="radio" id="oldest" name="filters_listing" value="oldest" data-filter=".oldest">
								<span class="checkmark"></span>
							</label>
									</li>
									
								</ul>
							</div>
							<div class="filter_type">
								<h6>Category</h6>

						 @foreach($categories as $category)

								<ul>
									<li>
										<label class="container_check">{{ $category->category_name }} 
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
								</ul>

						  @endforeach


							</div>
							
						</div>
						<!--/collapse -->
					</div>
					<!--/filters col-->
				</aside>
				<!-- /aside -->

				<div class="col-lg-9">
					
					<div class="isotope-wrapper">
						<div class="row">

                     @foreach ($reviews_data as $review_data)

							<div class="col-12 isotope-item latest">
								<div class="review_listing">
									<div class="clearfix add_bottom_15">
										<figure><img src="{{url('storage/uploads/reviewer/'.$review_data->reviewer->image)}}" alt=""></figure>
										<span class="rating">


										@for($i=1; $i<=$review_data->rating; $i++)
								<i class="icon_star"></i>
								@endfor

								@if(is_numeric($review_data->rating))

									@for($j=1; $j<=5 - $review_data->rating; $j++)
									<i class="icon_star empty"></i>
									@endfor
								@else	
								@for($j=1; $j<=5 - 0; $j++)
									<i class="icon_star empty"></i>
									@endfor
								@endif

												
										
												
											</i><em>{{ $review_data->rating }}.00/5.00</em></span>
										<small>Shops</small>
									</div>
									<h3><strong>{{ $review_data->reviewer->fullname }}</strong> reviewed <a href="reviews-page.html">{{ $review_data->company->company_name }}</a></h3>
									<h4>"{{ $review_data->title }}"</h4>
									<p>{{ $review_data->review_text }}</p>
									<ul class="clearfix">
										<li><small>Published:  {{ date('d.m.Y',strtotime($review_data->created_at)) }}</small></li>
										<li><a href="{{ url('company/profile/'.$review_data->company->id.'/'.strtolower(str_replace(' ','-',$review_data->company->company_name))) }}#position{{$review_data->id}}" class="btn_1 small">Read review</a></li>
									</ul>
								</div>
							</div>
							<!-- /review_listing grid -->


                       @endforeach

						</div>
						<!-- /row -->
						</div>
						<!-- /isotope-wrapper -->

						<p class="text-center"><a href="#0" class="btn_1 rounded add_top_15">Load more</a></p>

				</div>
				<!-- /col -->
			</div>		
		</div>
		<!-- /container -->
		
	</main>
	<!--/main-->

	@php 

		function time_elapsed_string($datetime, $full = false) {
			$now = new DateTime;
			$ago = new DateTime($datetime);
			$diff = $now->diff($ago);

			$diff->w = floor($diff->d / 7);
			$diff->d -= $diff->w * 7;

			$string = array(
				'y' => 'year',
				'm' => 'month',
				'w' => 'week',
				'd' => 'day',
				'h' => 'hour',
				'i' => 'minute',
				's' => 'second',
			);
			foreach ($string as $k => &$v) {
				if ($diff->$k) {
					$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
				} else {
					unset($string[$k]);
				}
			}

			if (!$full) $string = array_slice($string, 0, 1);
			return $string ? implode(', ', $string) . ' ago' : 'just now';
		}

		@endphp
	
	@endsection
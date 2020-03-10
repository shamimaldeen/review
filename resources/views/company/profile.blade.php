@extends('layout.web.web') @section('title',' Reviews') @section('content')

<main>
    <div class="reviews_summary">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <figure>
                            <img src="{{url('storage/uploads/company/'.$company->image)}}" alt="">
                        </figure>
                        <small>{{ $company->category->category_name }}</small>
                        <h1>{{ $company->company_name }}</h1>
                        <span class="rating">

                            @php $total_rating = 1 @endphp
                            @if($reviews_data->count() >1)

                            @php $total_rating = $company_rating/$reviews_data->count() @endphp

                            @else

                            @php


                            $total_rating = $company_rating/1 @endphp


                            @endif


                            @for($i=1; $i<= round($total_rating) ; $i++) <i class="icon_star">32432</i>
                                @endfor

                                @for($j=1; $j<=5 - round($total_rating); $j++) <i class="icon_star empty"></i>
                                    @endfor


                                    <em>{{ number_format((float)$total_rating, 2, '.', '') }}/5.00 - based on
                                        {{ $reviews_data->count() }} reviews</em></span>
                    </div>
                    <div class="col-lg-4 review_detail">
                        <div class="row">
                            <div class="col-lg-9 col-9">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-3 text-right"><strong>5 stars</strong></div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-lg-9 col-9">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-3 text-right"><strong>4 stars</strong></div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-lg-9 col-9">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-3 text-right"><strong>3 stars</strong></div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-lg-9 col-9">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-3 text-right"><strong>2 stars</strong></div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-lg-9 col-9">
                                <div class="progress last">
                                    <div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-3 text-right"><strong>1 stars</strong></div>
                        </div>
                        <!-- /row -->
                    </div>
                </div>
            </div>
            <!-- /container -->
        </div>
    </div>
    <!-- /reviews_summary -->

    <div class="container margin_60_35">
        @if(Session::has('success'))
        <p class="alert alert-success message">{{ Session::get('success') }}</p>
        @endif @if(Session::has('error'))
        <p class="alert alert-warning message">{{ Session::get('error') }}</p>
        @endif
        <div class="row">
            <div class="col-lg-8">
                @foreach($reviews_data as $review_data)
                <div class="review_card" id="position{{$review_data->id}}">
                    <div class="row">
                        <div class="col-md-2 user_info">
                            <figure><img src="{{url('storage/uploads/reviewer/'.$review_data->reviewer->image)}}" alt=""></figure>
                            <h5>{{ $review_data->reviewer->fullname }}</h5>
                        </div>
                        <div class="col-md-10 review_content">
                            <div class="clearfix add_bottom_15">
                                <span class="rating">

                                    @for($i=1; $i<=$review_data->rating; $i++)
                                        <i class="icon_star"></i>
                                        @endfor

                                        @for($j=1; $j<=5 - $review_data->rating; $j++)
                                            <i class="icon_star empty"></i>
                                            @endfor

                                            {{-- <i class="icon_star empty"></i> --}}

                                            <em>{{ $review_data->rating }}.00/5.00</em></span>
                                <em>Published {{ time_elapsed_string($review_data->created_at)  }}</em>
                            </div>
                            <h4>"{{ $review_data->title }}"</h4>
                            <p>{{ $review_data->review_text }}</p>
                            <ul>
                                {{--
                                <li><a href="#0"><i class="icon_like_alt"></i><span>Useful</span></a></li> --}} {{--
                                <li><a href="#0"><i class="icon_dislike_alt"></i><span>Not useful</span></a></li> --}}
                                <li><span>Share</span> <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank"><i class="ti-facebook"></i></a> <a href="http://twitter.com/share?text={{ $company->company_name }}&url={{ url()->current() }}&hashtags=review,website,share"
                                        target="_blank"><i class="ti-twitter-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row -->

                    @foreach($review_data->reply as $replyvalue)
                    <div class="row reply">
                        <div class="col-md-2 user_info">
                            <figure><img src="{{url('storage/uploads/company/'.$company->image)}}" alt=""></figure>
                        </div>
                        <div class="col-md-10">
                            <div class="review_content">
                                <strong>Reply from {{ $company->company_name }}</strong>
                                <em>Published {{ time_elapsed_string($replyvalue->created_at)  }}</em>
                                <p><br>Hi,
                                    <strong>{{ $review_data->reviewer->fullname }}</strong><br>{{ $replyvalue->reply_text }}<br><br>thanks
                                </p>
                            </div>
                        </div>
                    </div>

                    @endforeach


                    <!-- /reply -->
                </div>

                @endforeach

                <!-- /review_card -->
                <div class="pagination__wrapper add_bottom_15">
                    {{--
                    <ul class="pagination">
                        <li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
                        <li><a href="#0" class="active">1</a></li>
                        <li><a href="#0">2</a></li>
                        <li><a href="#0">3</a></li>
                        <li><a href="#0">4</a></li>
                        <li><a href="#0" class="next" title="next page">&#10095;</a></li>
                    </ul> --}} {{-- {{ $reviews_data->links() }} --}}
                </div>
                <!-- /pagination -->
            </div>
            <!-- /col -->
            <div class="col-lg-4">
                <div class="box_general company_info">
                    <h3>{{ $company->company_name }}</h3>
                    <p>{{ $company->description }}</p>
                    <p><strong>Address</strong><br>{{ $company->address }}</p>
                    <p><strong>Website</strong><br><a href="http://{{ $company->website }}">{{ $company->website }}</a>
                    </p>
                    <p><strong>Email</strong><br><a href="#0">{{ $company->email }}</a></p>
                    <p><strong>Telephone</strong><br>{{ $company->phone }}</p>
                    @if(Auth::guard('company')->check())

                    <p><strong>Update</strong><br><a class="btn btn-sm btn-primary" href="{{ url('company/update_profile') }}">Update Profile</a></p>

                    @endif @if(Auth::guard('reviewer')->check())

                    <p><strong>Express your feeling</strong><br><a class="btn btn-sm btn-primary" href="{{ url('reviewer/review_now/'.$company->id) }}">Review Now</a></p>

                    @endif




                    <p class="follow_company"><strong>Follow us</strong><br><a href="#0"><i
                                class="social_facebook_circle"></i></a><a href="#0"><i
                                class="social_twitter_circle"></i></a><a href="#0"><i
                                class="social_googleplus_circle"></i></a><a href="#0"><i
                                class="social_instagram_circle"></i></a></p>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

</main>

@php function time_elapsed_string($datetime, $full = false) { $now = new DateTime; $ago = new DateTime($datetime); $diff = $now->diff($ago); $diff->w = floor($diff->d / 7); $diff->d -= $diff->w * 7; $string = array( 'y' => 'year', 'm' => 'month', 'w'
=> 'week', 'd' => 'day', 'h' => 'hour', 'i' => 'minute', 's' => 'second', ); foreach ($string as $k => &$v) { if ($diff->$k) { $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : ''); } else { unset($string[$k]); } } if (!$full) $string = array_slice($string,
0, 1); return $string ? implode(', ', $string) . ' ago' : 'just now'; } @endphp
<!--/main-->

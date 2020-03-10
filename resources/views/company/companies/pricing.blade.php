@extends('layout.web.web')
@section('title','Pricing')
@section('content')
	
    <main class="bg_color_1">
        <section class="hero_single general">
            <div class="wrapper">
                <div class="container">
                    <h1>ReviewStore Pricing Plans</h1>
                    <p>ReviewStore helps grow your business using customer reviews</p>
                </div>
            </div>
        </section>
        <!-- /hero_single -->

        <div class="container margin_tabs">
            <div id="tabs" class="tabs">
                <nav>
                    <ul>
                        <li><a href="#section-1"><i class="pe-7s-paper-plane"></i>Standard</a></li>
                        <li><a href="#section-2"><i class="pe-7s-plane"></i>Extended</a></li>
                        <li><a href="#section-3"><i class="pe-7s-rocket"></i>Premium</a></li>
                    </ul>
                </nav>
                <div class="content">
                    <section id="section-1">
                        <div class="row">


                            @foreach($standards as $standard)
                            <div class="col-lg-4">
                                <div class="box_pricing">
                                    <h4>{{ $standard->duration }} Month</h4>
                                    <p>{{ $standard->description }}</p>
                                    <ul>
                                        <li><strong>Lorem</strong> consulatu qui ne</li>
                                        <li><strong>Erat legere</strong> fabulas has ut</li>
                                        <li><strong>Constituto</strong> deterruisset</li>
                                        <li><strong>Omnis</strong> justo gloriatur</li>
                                    </ul>
                                    <hr>
                                    <div class="price">
                                        <sup>$</sup> {{ $standard->price }}<em>/{{ $standard->duration_unit }}mo</em>
                                    </div>
                                    <a href="{{ url('company/register/package/'.$standard->id) }}">Create Account</a>
                                </div>
                            </div>

                            @endforeach
                          
                          
                        </div>
                        <!-- /row -->
                    </section>


                    <section id="section-2">
                        <div class="row">

                       @foreach($extendeds as $extended)
                            <div class="col-lg-4">
                                <div class="box_pricing">
                                    <h4>{{ $extended->duration }} Month</h4>
                                    <p>{{ $extended->description }}</p>
                                    <ul>
                                        <li><strong>Lorem</strong> consulatu qui ne</li>
                                        <li><strong>Erat legere</strong> fabulas has ut</li>
                                        <li><strong>Constituto</strong> deterruisset</li>
                                        <li><strong>Omnis</strong> justo gloriatur</li>
                                    </ul>
                                    <hr>
                                    <div class="price">
                                        <sup>$</sup>{{ $extended->price }}<em>/{{ $extended->duration_unit }}mo</em>
                                    </div>
                                    <a href="{{ url('company/register/package/'.$extended->id) }}">Create Account</a>
                                </div>
                            </div>
                             @endforeach

                        </div>
                        <!-- /row -->
                    </section>
                    <section id="section-3">
                        <div class="row">

                         @foreach($premiums as $premium)
                            <div class="col-lg-4">
                                <div class="box_pricing">
									<div class="ribbon">
                                        <span class="top_selling">Top selling</span>
                                    </div>
                                    <h4>{{ $premium->duration }} Month</h4>
                                    <p>{{ $premium->description }}</p>
                                    <ul>
                                        <li><strong>Lorem</strong> consulatu qui ne</li>
                                        <li><strong>Erat legere</strong> fabulas has ut</li>
                                        <li><strong>Constituto</strong> deterruisset</li>
                                        <li><strong>Omnis</strong> justo gloriatur</li>
                                    </ul>
                                    <hr>
                                    <div class="price">
                                        <sup>$</sup>{{ $premium->price }}<em>/{{ $premium->duration_unit }}mo</em>
                                    </div>
                                    <a href="{{ url('company/register/package/'.$premium->id) }}">Create Account</a>
                                </div>
                            </div>
                             @endforeach
                           
                           
                        </div>
                        <!-- /row -->
                    </section>
                </div>
                <!-- /content -->
            </div>
            <!-- /tabs -->
        </div>
        <!-- /container -->
    </main>
    <!-- /main -->

@push('extra-js')
     <script src="{{ asset('asset/front/js/tabs.js') }}"></script>
    <script>new CBPFWTabs( document.getElementById( 'tabs' ) );</script>
@endpush
@endsection
	
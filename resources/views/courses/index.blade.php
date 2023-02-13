@extends('layouts.app')
@section('content')
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7"
            data-bg-img="{{ asset('images/details_course.jpeg') }}">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">Nos formations</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="/">Acceuil</a></li>

                                <li class="active">cours</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="courses" class="bg-silver-light">
            <div class="container">
                <div class="section-content">
                    <div class="row ">
                        @foreach ($courses as $course)
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="course-single-item bg-white border-1px clearfix mb-md-40">
                              <div class="course-thumb">
                                <img class="img-fullwidth" alt="" src="http://placehold.it/360x250">
                                <div class="course-top-meta">
                                  <ul class="list-inline">
                                    <li><i class="ficon-heart font-14"></i>224 Likes</li>
                                    <li><i class="lnr lnr-bullhorn font-14"></i>84 Share</li>
                                  </ul>
                                </div>
                              </div>
                              <div class="course-details clearfix p-20 pt-15">
                                <div class="course-top-part">
                                  <a href="page-course-details.html"><h4 class="mt-5 mb-5">Nural Networking Course</h4></a>
                                  <h5 class="text-gray font-12 mt-0">26th JUNE</h5>
                                </div>
                                <p class="course-description mt-15 mb-0">Lorem ipsum dolor sit amet, consec sectet urad cing elit. Nobis commodi esse aliquam eligend reprehenderit, numquam a odio</p>
                                <div class="author-thumb">
                                  <img src="http://placehold.it/54x54" alt="" class="img-circle">
                                </div>
                              </div>
                              <div class="course-meta">
                                <ul class="list-inline">
                                  <li><i class="lnr lnr-users font-20"></i>24 Seats</li>
                                  <li><i class="ficon-clock font-18"></i>3 Hours</li>
                                </ul>
                                <div class="course-tag">
                                  <h5>Free</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                        @endforeach
                        

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

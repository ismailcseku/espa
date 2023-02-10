@extends('layouts.app')
@section('content')
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark-4"
            data-bg-img="{{ asset('images/details_course.jpeg') }}">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">{{ $blogs->title }}</h2>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Blog -->
        <section>

            <div class="container mt-30 mb-30 pt-30 pb-30">
                <div class="row">
                    <div class="col-md-9">
                        <div class="blog-posts single-post">
                            <article class="post clearfix mb-0">
                                <div class="entry-header">
                                    <div class="post-thumb">
                                        <img src="{{ url('storage') }}/{{ $blogs->photo }}" class="img-fullwidth"
                                            alt="">
                                        <div class="post-date"><span>26 </span><br> Oct</div>
                                        <div class="post-description border-1px p-20">
                                            <span>
                                                <h3 class="post-title font-weight-600 mt-0 mb-5">{{ $blogs->title }}</h3>
                                            </span>
                                        </div>
                                        <div class="post-meta">
                                            <ul class="list-inline pull-left flip">
                                                <li><i class="lnr lnr-users text-theme-colored2 font-20"></i>publié
                                                    {{ $blogs->created_at }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <div class="mt-20 mb-15">
                                        {!! $blogs->content !!}

                                    </div>

                                    <div class="mt-30 mb-0">
                                        <h5 class="pull-left mt-10 mr-20 text-theme-colored2">Partager:</h5>
                                        <ul class="styled-icons icon-circled m-0">
                                            <li><a href="#" data-bg-color="#3A5795"><i
                                                        class="fa fa-facebook text-white"></i></a></li>
                                            <li><a href="#" data-bg-color="#55ACEE"><i
                                                        class="fa fa-twitter text-white"></i></a></li>
                                            <li><a href="#" data-bg-color="#A11312"><i
                                                        class="fa fa-google-plus text-white"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>

                            <div class="">
                                <div class="">
                                    <h5 class="post-title mt-0 mb-0">
                                        <p class="font-18">Description</p>
                                    </h5>
                                    <p>{{ $blogs->description }}</p>

                                </div>

                            </div>
                      
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar sidebar-right mt-sm-30">

                            <div class="widget">
                                <h5 class="widget-title">Catégories</h5>
                                <div class="categories">
                                    <ul class="list list-border angle-double-right">
                                        @foreach ($categories as $category)
                                            <li><a
                                                    href="{{ route('categoryblog.show', $category->id) }}">{{ $category->name }}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <h5 class="widget-title">Derniers postes</h5>
                                <div class="latest-posts">

                                    @foreach ($latests as $latest)
                                        <article class="post media-post clearfix pb-0 mb-10">
                                            <a class="post-thumb" href="{{ route('blog.show', $latest->id) }}"><img
                                                    src="{{ url('storage') }}/{{ $latest->photo }}"
                                                    style="width:75px; height:75px; object-fit:cover;" alt=""></a>
                                            <div class="post-right">
                                                <h5 class="post-title mt-0"><a
                                                        href="{{ route('blog.show', $latest->id) }}">{{ $latest->title }}</a>
                                                </h5>
                                                <p>{{ $latest->description }}...</p>
                                            </div>
                                        </article>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

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
                            <h2 class="text-theme-colored2 font-36">Blog </h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="{{ route('home') }}">Acceuil</a></li>
                                <li class="active">Blog</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
    
            <div class="container pt-100 pb-100">
                <div class="row">
                    <div class="col-md-12">
                        <div class="vertical-masonry-timeline-wrapper">
                            <ul class="vertical-masonry-timeline">
                                @foreach ($blogs as $blog)
                                    <li class="each-masonry-item wow fadeInUp" data-wow-duration="1.5s"
                                        data-wow-offset="10">
                                        <div class="timeline-block">
                                            <span class="timeline-post-format"><i class="fa fa-user"></i></span>
                                            <article class="post clearfix">
                                                <div class="entry-header">
                                                    <div class="post-thumb"> <img alt=""
                                                            src="{{ url('storage') }}/{{ $blog->photo }}"
                                                            class="img-fullwidth img-responsive"> </div>
                                                    <h5 class="entry-title"><a href="{{route('blog.show',$blog->id)}}">{{ $blog->title }}</a></h5>
                                                    <ul class="list-inline font-12 mb-20 mt-10">
                                                        <li class="text-theme-colored2"> Publié  </li>
                                                        <li><span class="text-theme-colored">{{ $blog->created_at }}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="entry-content">
                                                    <p class="mb-30">
                                                        @php
                                                            $description = substr($blog->description,0,100);
                                                            echo $description;
                                                        @endphp
                                                       <a href="#">[...]</a>
                                                    </p>
                                                    <ul class="list-inline like-comment pull-left font-12">
                                                        <li><i class="pe-7s-comment"></i>36</li>
                                                        <li><i class="pe-7s-like2"></i>125</li>
                                                    </ul>
                                                    <a class="pull-right text-gray font-13" href="{{route('blog.show',$blog->id)}}"><i
                                                            class="fa fa-angle-double-right text-theme-colored"></i> Lire
                                                        plus</a>
                                                </div>
                                            </article>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

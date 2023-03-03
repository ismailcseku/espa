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
                            <h2 class="text-theme-colored2 font-36">Galerie </h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="/">Acceuil</a></li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Grid 3 -->
        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Portfolio Filter -->
                            <div class="portfolio-filter">
                                <a href="#" class="active" data-filter="*">Tous</a>
                                @foreach ($categories as $category)
                                    <a href="#a{{ $category->id }}" class=""
                                        data-filter=".a{{ $category->id }}">{{ $category->name }}</a>
                                @endforeach
                            </div>
                            <!-- End Portfolio Filter -->
                        
                            <div class="gallery-isotope default-animation-effect grid-3 gutter-small clearfix"
                                data-lightbox="gallery">
                                <!-- Portfolio Item Start -->
                                @foreach ($medias as $media)
                                    <div class="gallery-item  a{{$media->category_media_id}}">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="{{url('storage')}}/{{$media->photo}}" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="text-holder">
                                                <div class="title text-center">{{$media->title}}</div>
                                              </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div
                                                        class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="{{url('storage')}}/{{$media->photo}}"
                                                            data-lightbox-gallery="gallery" title="{{$media->title}}"><i
                                                                class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                            <!-- End Portfolio Gallery Grid -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection

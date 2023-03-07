@extends('layouts.app')
@section('content')
    <style>
        section>.container,
        section>.container-fluid {
            padding-top: 0px;
            padding-bottom: 0px;


        }
    </style>
    <div style="background-color:white;border-top:solid 2px rgb(45, 69, 88) ; padding-bottom:14px;"></div>

    <div class="main-content">

        <section class="container">

            <div class="inner-header divider ">
                <div class=" pt-10 pb-10 ">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-6">
                                <ol class="breadcrumb text-left mt-10" style="color:rgb(45, 69, 88);font-weight:bold;">
                                    <li><a href="/">Acceuil</a></li>
                                    <li>Vidéos</li>
                                </ol>
                            </div>
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



                            <div class="gallery-isotope default-animation-effect grid-3 gutter-small clearfix"
                                data-lightbox="gallery">
                                <!-- Portfolio Item Start -->
                                @foreach ($videos as $video)
                                    <div class="gallery-item ">
                                        <div class="thumb">
                                            <video class="img-fullwidth" style="postion:relative;"
                                                src="{{ url('storage') }}/{{ $video->video }}"></video>
                                            <span style="position:absolute;top:45%;left:45%;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                style="color:#F88147;"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm-2 13.5v-7a.5.5 0 0 1 .8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5a.5.5 0 0 1-.8-.4z" />
                                                </svg></span>
                                            <div class="overlay-shade">
                                            </div>
                                            <div class="text-holder">
                                                <div class="title text-center">{{ $video->title }}</div>
                                            </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div
                                                        class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="{{ url('storage') }}/{{ $video->video }}"
                                                            data-lightbox-gallery="gallery" title="{{ $video->title }}"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                            style="color:white;"
                                                                viewBox="0 0 24 24">
                                                                <path fill="currentColor"
                                                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm-2 13.5v-7a.5.5 0 0 1 .8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5a.5.5 0 0 1-.8-.4z" />
                                                            </svg></a>
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

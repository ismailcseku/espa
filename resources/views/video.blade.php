@extends('layouts.app')
@section('content')
    <div class="main-content">

        <section class="inner-header divider layer-overlay overlay-theme-colored-7" style="background-color:#1f3344;">
            <div class="container pt-40 pb-20">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">Vidéos</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="/">Acceuil</a></li>
                                <li  class="active">Vidéos</li>
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
                  
                    
                        
                            <div class="gallery-isotope default-animation-effect grid-3 gutter-small clearfix"
                                data-lightbox="gallery">
                                <!-- Portfolio Item Start -->
                                @foreach ($videos as $video)
                                    <div class="gallery-item ">
                                        <div class="thumb">
                                            <video class="img-fullwidth"  src="{{url('storage')}}/{{$video->video}}"></video>
                                            <div class="overlay-shade"></div>
                                            <div class="title text-center">{{$video->title}}</div>
                                          
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div
                                                        class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="{{url('storage')}}/{{$video->video}}"
                                                            data-lightbox-gallery="gallery" title="{{$video->title}}"><i
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

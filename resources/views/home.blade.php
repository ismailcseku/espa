@extends('layouts.app')
@section('content')
    <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="divider">
            <!-- START REVOLUTION SLIDER 5.0.7 -->
            <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34"
                style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                    <ul>
                        <!-- SLIDE 1 -->
                        @foreach ($slides as $slide)
                            <li>
                                <!-- MAIN IMAGE -->
                                <img src="{{ url('storage')}}/{{ $slide->photo }}" alt=""
                                    data-bgposition="center 20%" data-bgfit="cover" data-bgrepeat="no-repeat"
                                    data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-1"
                                    data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                    data-y="['top','top','top','top']" data-voffset="['215','130','110','120']"
                                    data-fontsize="['20','18','16','13']" data-lineheight="['30','30','28','25']"
                                    data-fontweight="['700','700','700','700']" data-width="['700','650','600','420']"
                                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                    data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                                    data-splitout="none" data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap;">{{ $slide->subject }}
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme text-white text-uppercase font-montserrat rs-parallaxlevel-0"
                                    id="slide-1-layer-2" data-x="['left','left','left','left']"
                                    data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']"
                                    data-voffset="['250','160','140','150']" data-fontsize="['52','46','40','28']"
                                    data-lineheight="['68','60','54','42']" data-fontweight="['800','800','800','800']"
                                    data-width="['700','650','600','420']" data-height="none" data-whitespace="normal"
                                    data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                    data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                                    data-splitout="none" data-responsive_offset="on"
                                    style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">
                                    {{ $slide->title }}
                                </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-3"
                                    data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']"
                                    data-y="['top','top','top','top']" data-voffset="['325','220','195','195']"
                                    data-fontsize="['16','16','14','13']" data-lineheight="['30','26','24','20']"
                                    data-fontweight="['400','400','400','400']" data-width="['700','650','600','420']"
                                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                    data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                                    data-splitout="none" data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap;">
                                   
                                        {{ $slide->description}} 
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-4"
                                    data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']"
                                    data-y="['top','top','top','top']" data-voffset="['410','290','260','250']"
                                    data-fontsize="['18','18','16','16']" data-lineheight="['30','30','30','30']"
                                    data-fontweight="['600','600','600','600']" data-width="['700','650','600','420']"
                                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                    data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                    data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                                    data-splitout="none" data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap;"><a href="{{route('course.index')}}"
                                        class="btn btn-dark btn-circled btn-theme-colored2 btn-xl mr-10 pr-30 pl-30">Découvrir</a>
                                    <a href="{{route('contact.create')}}"
                                        class="btn btn-transparent btn-border btn-circled btn-xl pr-30 pl-30">Contact</a>
                                </div>
                            </li>
                        @endforeach
                       

                    </ul>
                    <div class="tp-bannertimer tp-bottom"
                        style="height: 5px; background-color: rgba(255, 255, 255, 0.4);"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
            <script>
                var tpj = jQuery;
                var revapi34;
                tpj(document).ready(function() {
                    if (tpj("#rev_slider_home").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_home");
                    } else {
                        revapi34 = tpj("#rev_slider_home").show().revolution({
                            sliderType: "standard",
                            jsFileLocation: "js/revolution-slider/js/",
                            sliderLayout: "fullwidth",
                            dottedOverlay: "none",
                            delay: 9000,
                            navigation: {
                                keyboardNavigation: "on",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "on",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    enable: true,
                                    style: 'gyges',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0
                                    }
                                },
                                bullets: {
                                    enable: true,
                                    style: 'hebe',
                                    tmp: '<span class="tp-bullet-image"></span>',
                                    hide_onmobile: true,
                                    hide_under: 600,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 30,
                                    space: 5
                                }
                            },
                            viewPort: {
                                enable: true,
                                outof: "pause",
                                visible_area: "80%"
                            },
                            responsiveLevels: [1240, 1024, 778, 480],
                            gridwidth: [1240, 1024, 778, 480],
                            gridheight: [660, 550, 500, 450],
                            lazyType: "none",
                            parallax: {
                                type: "scroll",
                                origo: "enterpoint",
                                speed: 400,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                            },
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "off",
                            stopAfterLoops: -1,
                            stopAtSlide: 1,
                            shuffle: "off",
                            autoHeight: "off",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    }
                }); /*ready*/
            </script>
            <!-- END REVOLUTION SLIDER -->
    </div>
    </section>

    <!-- Section Features -->
    <section id="features" class="bg-silver-deep">
        <div class="container pb-50">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 mb-sm-10">
                    <div class="feature-box text-center bg-silver-light p-30 pb-20">
                        <div class="feature-icon flex justify-center">
                            <img src="{{ asset('/images/Formation.svg') }}" alt="">
                        </div>
                        <div class="feature-title">
                            <h3>Formation</h3>
                            <p>Des structures d’apprentissage
                                pratique et des solutions
                                technologiques de pointe</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-sm-30">
                    <div class="feature-box text-center bg-silver-light p-30 pb-20 ">
                        <div class="feature-icon flex justify-center">
                            <img src="{{ asset('/images/Partenariat.svg') }}" alt="">
                        </div>
                        <div class="feature-title">
                            <h3>Partenariat</h3>
                            <p>Les leaders de l’agro-technologie et
                                les acteurs clés de l’innovation en
                                agriculture</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box text-center bg-silver-light p-30 pb-20">
                        <div class="feature-icon flex justify-center">
                            <img src="{{ asset('/images/Performance.svg') }}" alt="">
                        </div>
                        <div class="feature-title">
                            <h3>Performance</h3>
                            <p>Créer une agriculture durable,
                                efficiente et résiliente : Solutions
                                innovantes </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Choose Course -->



    <!-- Section: Courses -->
    <section id="courses" class="bg-silver-light" >
        <div class="container">
            <section id="gallery">
                <div class="container ">
                    <div class="section-title " >
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-uppercase title">Nos <span class="text-theme-colored2">Formations</span>
                                </h2>
                                <p class="text-uppercase mb-0">Choisir un cycle</p>
                                <div class="double-line-bottom-theme-colored-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Works Filter -->
                                <div class="portfolio-filter font-alt align-center">

                                    @foreach ($degrees as $degree)
                                        @if ($loop->first)
                                            <a class="active " id="first_element" href="#select{{ $degree->id }}"
                                                data-filter=".select{{ $degree->id }}">{{ $degree->name }}</a>
                                        @else
                                            <a href="#select{{ $degree->id }}"
                                                data-filter=".select{{ $degree->id }}">{{ $degree->name }}</a>
                                        @endif
                                    @endforeach


                                </div>
                                <!-- End Works Filter -->

                                <!-- Portfolio Gallery Grid -->
                                <div id="grid"
                                    class="gallery-isotope default-animation-effect grid-4 gutter clearfix">


                                    @foreach ($degrees as $degree)
                                        <div class="gallery-item select{{ $degree->id }} section-content"
                                            style="width:100%;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="owl-carousel-3col owl-nav-top" data-nav="tru">

                                                        @foreach ($courses as $course)
                                                            @if ($course->degrees_id == $degree->id)
                                                                <a href="{{ route('course.details', $course->id) }}"
                                                                    class="item">
                                                                    <div
                                                                        class="course-single-item bg-white border-1px clearfix">
                                                                        <div class="course-thumb ">
                                                                            <img class="img-fullwidth" alt=""
                                                                                src="{{ url('storage') }}/{{ $course->photo }}">

                                                                        </div>
                                                                        <div class="course-details clearfix p-20 pt-15">
                                                                            <div class="course-top-part">

                                                                                <a
                                                                                    href="{{ route('course.details', $course->id) }}">
                                                                                    <h4 class="mt-5 mb-5">
                                                                                        {{ $course->name }}</h4>
                                                                                </a>

                                                                                <a
                                                                                    href="{{ route('course.details', $course->id) }}">
                                                                                    <h4 class="mt-5 mb-5"
                                                                                        style="opacity: 0.5">
                                                                                        {{ $course->degrees_name }}</h4></a>
                                                                            </div>
                                                                            <a href="{{ route('course.details', $course->id) }}"class="course-description mt-15 mb-0">
                                                                                {!! $course->description !!} ...</a>
                                                                                <div class="author-thumb">
                                                                                    <img src="{{ url('storage') }}/{{ $course->responsables_photo }}" alt="" class="img-circle">
                                                                                  </div>
                                                                        </div>
                                                                        <a href="{{ route('course.details', $course->id) }}"
                                                                            style="display: block" class="course-meta">
                                                                            <ul class="list-inline">
                                                                                <li><i class="ficon-clock font-18"></i>
                                                                                    {{$course->duration}} Mois
                                                                                    
                                                                                </li>
                                                                                <li><i
                                                                                        class="lnr lnr-users font-20"></i>{{ $course->languages_name }}
                                                                                </li>
                                                                            </ul>
                                                                            <div class="course-tag">

                                                                                <h5>Découvrir</h5>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </a>
                                                            @endif
                                                        @endforeach

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
    </section>


    <!-- Section About -->
  



    <!-- Section: blog -->
    <section id="blog">
        <div class="container pb-sm-40">
            <div class="section-title mb-40">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title text-uppercase mb-5">Notre <span class="text-theme-colored2">Blog</span></h2>
                        <h5 class="font-16 text-gray-darkgray mt-5">Récenement</h5>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <article class="post mb-sm-30">
                            <div class="post-thumb">
                                <img src="http://placehold.it/370x245" class="img-fullwidth" alt="">
                                <div class="post-date"><span>26 </span><br> Oct</div>
                                <div class="post-top-meta">
                                    <ul class="list-inline">
                                        <li><i class="ficon-heart text-theme-colored2 font-14"></i>224 Likes</li>
                                        <li><i class="lnr lnr-bullhorn text-theme-colored2 font-14"></i>84 Share</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-description border-1px p-20">
                                <a href="#">
                                    <h3 class="post-title font-weight-600 mt-0 mb-15">Programing Festival 2017</h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo provident neque
                                    deleniti eos dicta possimus dolores</p>
                            </div>
                            <div class="post-meta">
                                <ul class="list-inline pull-left flip">
                                    <li><i class="lnr lnr-users text-theme-colored2 font-20"></i>By Admin</li>
                                </ul>
                                <a href="#"
                                    class="text-theme-colored2 font-14 text-gray-darkgray pull-right flip">Read
                                    More</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <article class="post mb-sm-30">
                            <div class="post-thumb">
                                <img src="http://placehold.it/370x245" class="img-fullwidth" alt="">
                                <div class="post-date"><span>26 </span><br> Oct</div>
                                <div class="post-top-meta">
                                    <ul class="list-inline">
                                        <li><i class="ficon-heart text-theme-colored2 font-14"></i>224 Likes</li>
                                        <li><i class="lnr lnr-bullhorn text-theme-colored2 font-14"></i>84 Share</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-description border-1px p-20">
                                <a href="#">
                                    <h3 class="post-title font-weight-600 mt-0 mb-15">Annual Campus Seminar</h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo provident neque
                                    deleniti eos dicta possimus dolores</p>
                            </div>
                            <div class="post-meta">
                                <ul class="list-inline pull-left flip">
                                    <li><i class="lnr lnr-users text-theme-colored2 font-20"></i>By Admin</li>
                                </ul>
                                <a href="#"
                                    class="text-theme-colored2 font-14 text-gray-darkgray pull-right flip">Read
                                    More</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <article class="post mb-sm-30">
                            <div class="post-thumb">
                                <img src="http://placehold.it/370x245" class="img-fullwidth" alt="">
                                <div class="post-date"><span>26 </span><br> Oct</div>
                                <div class="post-top-meta">
                                    <ul class="list-inline">
                                        <li><i class="ficon-heart text-theme-colored2 font-14"></i>224 Likes</li>
                                        <li><i class="lnr lnr-bullhorn text-theme-colored2 font-14"></i>84 Share</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-description border-1px p-20">
                                <a href="#">
                                    <h3 class="post-title font-weight-600 mt-0 mb-15">Programming Contest</h3>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo provident neque
                                    deleniti eos dicta possimus dolores</p>
                            </div>
                            <div class="post-meta">
                                <ul class="list-inline pull-left flip">
                                    <li><i class="lnr lnr-users text-theme-colored2 font-20"></i>By Admin</li>
                                </ul>
                                <a href="#"
                                    class="text-theme-colored2 font-14 text-gray-darkgray pull-right flip">Read
                                    More</a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Clients -->
    <section class="clients bg-silver-light">
        <div class="container pt-40 pb-40">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section: Clients -->
                    <div class="owl-carousel-6col clients-logo transparent text-center">
                        <div class="item"> <a href="#"><img src="http://placehold.it/170x50" alt=""></a>
                        </div>
                        <div class="item"> <a href="#"><img src="http://placehold.it/170x50" alt=""></a>
                        </div>
                        <div class="item"> <a href="#"><img src="http://placehold.it/170x50" alt=""></a>
                        </div>
                        <div class="item"> <a href="#"><img src="http://placehold.it/170x50" alt=""></a>
                        </div>
                        <div class="item"> <a href="#"><img src="http://placehold.it/169x50" alt=""></a>
                        </div>
                        <div class="item"> <a href="#"><img src="http://placehold.it/170x50" alt=""></a>
                        </div>
                        <div class="item"> <a href="#"><img src="http://placehold.it/170x50" alt=""></a>
                        </div>
                        <div class="item"> <a href="#"><img src="http://placehold.it/170x50" alt=""></a>
                        </div>
                        <div class="item"> <a href="#"><img src="http://placehold.it/169x50" alt=""></a>
                        </div>
                        <div class="item"> <a href="#"><img src="http://placehold.it/170x50" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection

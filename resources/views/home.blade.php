@extends('layouts.app')
@section('content')
    <div class="main-content">
        <!-- Section: home -->
 
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
    <section id="about">
        <div class="container pt-50 pb-40">
            <div class="section-title">
                <div class="row">
                    <div class="col-lg-4">
                        <h3 class="font-28 mt-0"><span class="text-theme-colored2">À propos </span>De nous</h3>
                        <div class="line-bottom-theme-colored2"></div>
                        <img src="https://kodesolution.com/html/2018/imfundo-html/demo/images/about/2.jpg   " class="img-fullwidth" alt="">
                        <p class="mt-15">Lorem ipsum dolor sit amet, conse ctetur adipis elit. Totam perferendis,
                            assumenda vitae cum beatae Pariatur, ratione adipis elit. Totam perfereding.</p>
                        <a href="{{route('about.index')}}" class="btn btn-colored btn-sm btn-theme-colored2">Lire plus</a>
                    </div>
                    <div class="col-lg-4">
                        <h3 class="font-28 mt-md-30 mt-0"><span class="text-theme-colored2">Évènements</span> à venir
                        </h3>
                        <div class="line-bottom-theme-colored2"></div>
                        <article>
                            <div class="event-small media sm-maxwidth400 bg-silver-light border-1px mt-0 mb-20 p-15">
                                <div class="event-date text-center">
                                    <ul class="text-white">
                                        <li class="font-18 font-weight-700 border-bottom">28</li>
                                        <li class="font-14 text-center text-uppercase mt-5">Feb</li>
                                    </ul>
                                </div>
                                <div class="event-content pt-5">
                                    <h5 class="media-heading font-16 mb-5"><a class="font-weight-600"
                                            href="#">Admission Fair Spring 2017</a></h5>
                                    <span class="mr-10"><i class="fa fa-clock-o text-theme-colored2"></i> 5.00 pm -
                                        7.30 pm</span>
                                    <span> <i class="fa fa-map-marker text-theme-colored2"></i> Melbourne</span>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div class="event-small media sm-maxwidth400 bg-silver-light border-1px mt-0 mb-20 p-15">
                                <div class="event-date text-center">
                                    <ul class="text-white">
                                        <li class="font-18 font-weight-700 border-bottom">28</li>
                                        <li class="font-14 text-center text-uppercase mt-5">Feb</li>
                                    </ul>
                                </div>
                                <div class="event-content pt-5">
                                    <h5 class="media-heading font-16 mb-5"><a class="font-weight-600"
                                            href="#">Learning Spoken English</a></h5>
                                    <span class="mr-10"><i class="fa fa-clock-o text-theme-colored2"></i> 5.00 pm -
                                        7.30 pm</span>
                                    <span> <i class="fa fa-map-marker text-theme-colored2"></i> New York</span>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div class="event-small media sm-maxwidth400 bg-silver-light border-1px mt-0 mb-20 p-15">
                                <div class="event-date text-center">
                                    <ul class="text-white">
                                        <li class="font-18 font-weight-700 border-bottom">28</li>
                                        <li class="font-14 text-center text-uppercase mt-5">Feb</li>
                                    </ul>
                                </div>
                                <div class="event-content pt-5">
                                    <h5 class="media-heading font-16 mb-5"><a class="font-weight-600"
                                            href="#">Workshop Online Marketing</a></h5>
                                    <span class="mr-10"><i class="fa fa-clock-o text-theme-colored2"></i> 5.00 pm -
                                        7.30 pm</span>
                                    <span> <i class="fa fa-map-marker text-theme-colored2"></i> USA</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <h3 class="font-28 mt-md-30 mt-0"><span class="text-theme-colored2">Pourquoi </span>Nous?
                        </h3>
                        <div class="line-bottom-theme-colored2"></div>
                        <div class="panel-group accordion-stylished-left-border accordion-icon-filled accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2 custom-style"
                            id="accordion6" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headin1">
                                    <h6 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion6"
                                            href="#collaps1" aria-expanded="true" aria-controls="collaps1">
                                            Why Imfundo University is Best?
                                        </a>
                                    </h6>
                                </div>
                                <div id="collaps1" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="headin1">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading2">
                                    <h6 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion6" href="#collapse2" aria-expanded="false"
                                            aria-controls="collapse2">
                                            Why Imfundo University is Best?
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="heading2">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading3">
                                    <h6 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion6" href="#collapse3" aria-expanded="false"
                                            aria-controls="collapse3">
                                            Why Imfundo University is Best?
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="heading3">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading4">
                                    <h6 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion6" href="#collapse4" aria-expanded="false"
                                            aria-controls="collapse4">
                                            Why Imfundo University is Best?
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="heading4">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="layer-overlay overlay-dark-7 parallax" data-bg-img="{{asset('images/details_course.png')}}">
        <div class="container pt-80 pb-90 pt-md-70 pb-md-50 pb-sm-50">
            <div class="row mt-30 text-center">
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact">
                        <i class="pe-7s-smile mb-20 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="1000"
                            class="animate-number text-theme-colored2 font-42 font-weight-600 mt-0 mb-15">0</h2>
                        <h5 class="text-white text-uppercase">ÉTUDIANTS</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact">
                        <i class="pe-7s-notebook mb-20 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="42"
                            class="animate-number text-theme-colored2 font-42 font-weight-600 mt-0 mb-15">0</h2>
                        <h5 class="text-white text-uppercase">ANNÉES</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact">
                        <i class="pe-7s-users mb-20 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="100"
                            class="animate-number text-theme-colored2 font-42 font-weight-600 mt-0 mb-15">0</h2>
                        <h5 class="text-white text-uppercase">STARTUPS</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact">
                        <i class="pe-7s-study mb-20 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="50"
                            class="animate-number text-theme-colored2 font-42 font-weight-600 mt-0 mb-15">0</h2>
                        <h5 class="text-white text-uppercase">PHD (2033)</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: team -->
    <section id="team">
        <div class="container">
            <div class="section-title mb-40">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title text-uppercase mb-5">Nos <span class="text-theme-colored2">responsables</span>
                        </h2>
                        <h5 class="font-16 text-gray-darkgray mt-5">Discuter avec un responsable</h5>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    @foreach ($responsables as $responsable)
                        
                  
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="team-members mb-40">
                            <div class="team-thumb pull-left team-pull-none flip mr-sm-0 t-mr-0">
                                <img src="{{url('storage')}}/{{$responsable->photo}}" alt="" class="img-fullwidth">
                            </div>
                            <div class="team-bottom-part border-1px p-15">
                                <h4 class="text-uppercase m-0 pb-5">{{$responsable->name}} {{$responsable->surname}}</h4>
                                <h6 class="font-13 text-gray mt-0">{{$responsable->poste}}</h6>
                                <ul class="list-inline mt-15">
                                    <li class="m-0 pr-10"> <i class="fa fa-phone text-theme-colored2 mr-5"></i> <span
                                            class="text-gray" href="#">{{$responsable->phone}}</span> </li>
                                    <li class="m-0 pr-10"> <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i>
                                        <a class="text-gray" href="mailto:{{$responsable->email}}">{{$responsable->email}}</a>
                                    </li>
                                    
                                </ul>
                       
                            </div>
                        </div>
                    </div>
                    @endforeach
  
                </div>

            </div>
        </div>
    </section>

    <!-- Divider: Divider -->
    <section class="parallax divider layer-overlay overlay-dark-7" data-bg-img="{{asset('images/details_course.png')}}"
        data-parallax-ratio="0.4">
        <div class="container pt-80 pb-90">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <a href="https://www.youtube.com/watch?v=kt-4lJs_8fE" data-lightbox-gallery="youtube-video"><img
                            src="images/play-button/s11.png" alt=""></a>
                    <h3 class="text-white font-38 font-weight-700 mt-10 mb-0">Notre<span
                            class="text-theme-colored2">Newsletters</span> </h3>
                    <!-- Mailchimp Subscription Form-->
                    <form id="mailchimp-subscription-form2" class="newsletter-form max-width-535 mt-10">
                        <label for="mce-EMAIL"></label>
                        <div class="input-group">
                            <input type="email" id="mce-EMAIL" data-height="45px" class="form-control input-lg"
                                placeholder="Votre email" name="EMAIL" value="">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-colored btn-theme-colored2 btn-lg m-0"
                                    data-height="45px">Soumettre</button>
                            </span>
                        </div>
                    </form>
                    <!-- Mailchimp Subscription Form Validation-->
                    <script>
                        $('#mailchimp-subscription-form2').ajaxChimp({
                            callback: mailChimpCallBack,
                            url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                        });



                        function mailChimpCallBack(resp) {
                            // Hide any previous response text
                            var $mailchimpform = $('#mailchimp-subscription-form2'),
                                $response = '';
                            $mailchimpform.children(".alert").remove();
                            if (resp.result === 'success') {
                                $response =
                                    '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                    resp.msg + '</div>';
                            } else if (resp.result === 'error') {
                                $response =
                                    '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                    resp.msg + '</div>';
                            }
                            $mailchimpform.prepend($response);
                        }
                        $(document).ready(function(){
                            setTimeout(() => {
                                $('#first_element').click()
                            }, 500);
                        })
                     
                    </script>
                </div>
            </div>
        </div>
    </section>



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

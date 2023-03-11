@extends('layouts.app')
@section('content')
    <section aria-label="Newest Photos">
        <div class="carousel" data-carousel>
            <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
            <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
            <ul data-slides>
                @foreach ($slides as $slide)

                @if ($loop->first)
                    
                <li class="slide" data-active>
                    <img src="{{ url('storage') }}/{{ $slide->photo }}" alt="Nature Image #1">
                </li>
                @else
                <li class="slide">
                    <img src="{{ url('storage') }}/{{ $slide->photo }}" alt="Nature Image #2">
                </li>
                @endif
                @endforeach
            
            </ul>
        </div>
    </section>
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

     
        .carousel {
            width: 100vw;
            height: 60vh;
            position: relative;
        }

        .carousel>ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: 200ms opacity ease-in-out;
            transition-delay: 200ms;
        }

        .slide>img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .slide[data-active] {
            opacity: 1;
            z-index: 1;
            transition-delay: 0ms;
        }

        .carousel-button {
            position: absolute;
            z-index: 2;
            background: none;
            border: none;
            font-size: 4rem;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, .5);
            cursor: pointer;
            border-radius: .25rem;
            padding: 0 .5rem;
            background-color: rgba(0, 0, 0, .1);
        }

        .carousel-button:hover,
        .carousel-button:focus {
            color: white;
            background-color: rgba(0, 0, 0, .2);
        }

        .carousel-button:focus {
            outline: 1px solid black;
        }

        .carousel-button.prev {
            left: 1rem;
        }

        .carousel-button.next {
            right: 1rem;
        }
    </style>
    <script>
        const buttons = document.querySelectorAll("[data-carousel-button]")

        buttons.forEach(button => {
            button.addEventListener("click", () => {
                const offset = button.dataset.carouselButton === "next" ? 1 : -1
                const slides = button
                    .closest("[data-carousel]")
                    .querySelector("[data-slides]")

                const activeSlide = slides.querySelector("[data-active]")
                let newIndex = [...slides.children].indexOf(activeSlide) + offset
                if (newIndex < 0) newIndex = slides.children.length - 1
                if (newIndex >= slides.children.length) newIndex = 0

                slides.children[newIndex].dataset.active = true
                delete activeSlide.dataset.active
            })
        })
    </script>


    <style>
        .hidden_load {
            display: none;
        }

        .show_load {
            display: block;
        }
    </style>


    <!-- Section: Courses -->
    <section id="courses" class="hidden_load">
        <div class="container">
            <div class="section-title mb-40">
                <div class="row">
                    <div class="col-md-12">

                        <a href="{{ route('course.index') }}" class="text-uppercase title">
                            <h2> Nos <span class="text-theme-colored2">Formations</span></h2>
                        </a>
                        <div class="double-line-bottom-theme-colored-2"></div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel-3col owl-nav-top" data-nav="tru">
                            @foreach ($courses as $course)
                                <div class="item">
                                    <div class="course-single-item bg-white border-1px clearfix">
                                        <a href="{{ route('course.details', $course->name) }}" class="course-thumb">
                                            <img class="img-fullwidth" alt=""
                                                src="{{ url('storage') }}/{{ $course->photo }}">

                                        </a>
                                        <div class="course-details clearfix p-20 pt-15">
                                            <div class="course-top-part">
                                                <a href="{{ route('course.details', $course->name) }}">
                                                    <h4 class="mt-5 mb-5">
                                                        {{ $course->name }}</h4>
                                                </a>
                                                <a href="{{ route('course.details', $course->name) }}">
                                                    <h4 class="mt-5 mb-5">
                                                        {{ $course->degrees_name }}
                                                    </h4>
                                                </a>
                                            </div>
                                            <a href="{{ route('course.details', $course->name) }}" class="mt-15 mb-0">
                                                <p style="font-weight:normal;">
                                                    {{ $course->accroche }}</p>
                                            </a>
                                            <!--
                                                                            <div class="author-thumb">
                                                                                <img src="{{ url('storage') }}/{{ $course->responsables_photo }}"
                                                                                    alt="" class="img-circle">
                                                                            </div>
                                                                        -->
                                        </div>
                                        <a href="{{ route('course.details', $course->name) }}" style="display: block"
                                            class="course-meta">
                                            <ul class="list-inline">
                                                <li><i class="ficon-clock font-18"></i>
                                                    {{ $course->duration }} Mois

                                                </li>
                                                <li>
                                                    <i class="pe-7s-notebook font-18"></i>
                                                    {{ $course->languages_name }}
                                                </li>
                                            </ul>
                                            <div class="course-tag">

                                                <h5>Détail</h5>
                                            </div>
                                        </a>

                                    </div>

                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About -->

    <section id="about">
        <div class="container pt-50 pb-40">
            <div class="section-title">
                <div class="row">
                    <div class="col-lg-4">
                        <h3 class="font-28 mt-0"><span class="text-theme-colored2">À propos </span>de nous</h3>
                        <div class="line-bottom-theme-colored2"></div>
                        @foreach ($about as $item)
                            <img src="{{ url('storage') }}/{{ $item->photo }}" class="img-fullwidth" alt="">
                            <p class="mt-15">{{ $item->description }}</p>
                            <a href="{{ route('about.index') }}" class="mt-15 btn btn-colored btn-sm btn-theme-colored2">
                                Lire
                                plus</a>
                        @endforeach
                    </div>
                    @if (count($evenements) > 0)
                        <div class="col-lg-4">
                            <h3 class="font-28 mt-md-30 mt-0"><span class="text-theme-colored2">Évènements</span> à
                                venir
                            </h3>
                            <div class="line-bottom-theme-colored2"></div>


                            @foreach ($evenements as $evenement)
                                <article>
                                    <div
                                        class="event-small media sm-maxwidth400 bg-silver-light border-1px mt-0 mb-20 p-15">
                                        <div class="event-date text-center">
                                            <ul class="text-white">
                                                <li class="font-18 font-weight-700 border-bottom">
                                                    @php
                                                        $getDays = date('d', strtotime($evenement->start_at));
                                                        echo $getDays;
                                                    @endphp
                                                </li>
                                                <li class="font-14 text-center text-uppercase mt-5">
                                                    @php
                                                        
                                                        $getDays = date('F', strtotime($evenement->start_at));
                                                        echo substr($getDays, 0, 3);
                                                    @endphp
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="event-content pt-5">
                                            <h5 class="media-heading font-16 mb-5"><a class="font-weight-600"
                                                    href="{{ route('evenement.show', $evenement->title) }}">{{ $evenement->title }}</a>
                                            </h5>
                                            <span class="mr-10"><i class="fa fa-clock-o text-theme-colored2"></i>
                                                @php
                                                    
                                                    $start_at = date('H:i', strtotime($evenement->start_at));
                                                    echo $start_at;
                                                @endphp
                                                -
                                                @php
                                                    
                                                    $end_at = date('H:i', strtotime($evenement->end_at));
                                                    echo $end_at;
                                                @endphp
                                            </span>
                                            <span> <i class="fa fa-map-marker text-theme-colored2"></i>
                                                {{ $evenement->location }}</span>
                                        </div>
                                    </div>
                                </article>
                            @endforeach

                        </div>
                    @endif
                    <div class="col-lg-4">
                        <h3 class="font-28 mt-md-30 mt-0"><span class="text-theme-colored2">Pourquoi </span>nous?
                        </h3>
                        <div class="line-bottom-theme-colored2"></div>
                        <div class="panel-group accordion-stylished-left-border accordion-icon-filled accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2 custom-style"
                            id="accordion6" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                @foreach ($whyus as $item)
                                    @if ($loop->first)
                                        <div class="panel-heading" role="tab" id="headin1">
                                            <h6 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion6"
                                                    href="#collaps1" aria-expanded="true" aria-controls="collaps1">
                                                    {{ $item->title }}
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collaps1" class="panel-collapse collapse in" role="tabpanel"
                                            aria-labelledby="headin1">
                                            <div class="panel-body">
                                                {{ $item->description }}
                                            </div>
                                        </div>
                                    @else
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading{{ $item->id }}">
                                                <h6 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion6" href="#collapse{{ $item->id }}"
                                                        aria-expanded="false" aria-controls="collapse2">
                                                        {{ $item->title }}

                                                    </a>
                                                </h6>
                                            </div>
                                            <div id="collapse{{ $item->id }}" class="panel-collapse collapse"
                                                role="tabpanel" aria-labelledby="heading{{ $item->id }}">
                                                <div class="panel-body">
                                                    {{ $item->description }}

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="layer-overlay overlay-dark-7 parallax" data-bg-img="{{ asset('images/details_course.jpeg') }}">
        <div class="container pt-80 pb-90 pt-md-70 pb-md-50 pb-sm-50">
            <div class="row mt-30 text-center">
                @foreach ($barres as $barre)
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact">
                            <i class="mb-20 text-white">{!! $barre->icon !!}</i>
                            <h2 data-animation-duration="2000" data-value="{{ $barre->valeur }}"
                                class="animate-number text-theme-colored2 font-42 font-weight-600 mt-0 mb-15">0</h2>
                            <h5 class="text-white text-uppercase">
                                {{ $barre->title }}

                            </h5>
                        </div>
                    </div>
                @endforeach

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
                        <h5 class="font-16 text-gray-darkgray mt-5">Récemment</h5>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">

                    @foreach ($blogs as $blog)
                        <div class="col-sm-6 col-md-4">
                            <article class="post mb-sm-30">
                                <div class="post-thumb">
                                    <img src="{{ url('storage') }}/{{ $blog->photo }}" class="img-fullwidth"
                                        alt="">
                                    @php
                                        $getMonth = date('F', strtotime($blog->created_at));
                                        $getDays = date('d', strtotime($blog->created_at));
                                    @endphp
                                    <div class="post-date"><span>{{ $getDays }} </span><br> {{ $getMonth }}
                                    </div>

                                </div>
                                <div class="post-description border-1px p-20">
                                    <a href="{{ route('blog-actualités.show', $blog->id) }}">
                                        <h3 class="post-title font-weight-600 mt-0 mb-15" style="word-break: break-word;">
                                            {{ $blog->title }}</h3>
                                    </a>
                                    <p> {{ $blog->accroche }} [...]</p>
                                </div>
                                <div class="post-meta">
                                    <ul class="list-inline pull-left flip">
                                        <ul class="list-inline pull-left flip">
                                            <li><i class="lnr lnr-users text-theme-colored2 font-20"></i>Par
                                                {{ $blog->description }}</li>
                                        </ul>

                                    </ul>

                                    <a href="{{ route('blog-actualités.show', $blog->id) }}"
                                        class="text-theme-colored2 font-14 text-gray-darkgray pull-right flip">Lire
                                        plus
                                    </a>
                                </div>
                            </article>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <section class="parallax divider layer-overlay overlay-dark-7"
        data-bg-img="{{ asset('images/details_course.jpeg') }}" data-parallax-ratio="0.4">
        <div class="container pt-80 pb-90">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <a href="https://www.youtube.com/watch?v=kt-4lJs_8fE" data-lightbox-gallery="youtube-video"><img
                            src="images/play-button/s11.png" alt=""></a>
                    <h3 class="text-white font-38 font-weight-700 mt-10 mb-0">Inscrivez-vous <span
                            class="text-theme-colored2"> à notre newsletter</span> </h3>
                    Rejoignez-nous
                    @if (session()->has('success'))
                        <h6 class='alert alert-success' role="alert">
                            Felicitation !! Vous avez êtes désormais abonnée.
                        </h6>
                    @endif
                    <form id="mailchimp-subscription-form2" class="newsletter-form max-width-535 mt-10"
                        action="{{ route('newsletter.store') }}" method="post">
                        @csrf
                        <label for="mce-EMAIL"></label>
                        <div class="input-group">
                            <input type="email" id="mce-EMAIL" data-height="45px" class="form-control input-lg"
                                placeholder="Votre email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-colored btn-theme-colored2 btn-lg m-0"
                                    data-height="45px">Soumettre</button>
                            </span>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>


    <section class="clients ">

        <div class="container pt-40 pb-40 ">
            <h3 class=" font-38 font-weight-700 mt-10 mb-0" style="color:#1f3344;"><span>Partenaires</span>
            </h3>
            <div class="row">
                <div class="col-md-12">
                    <!-- Section: Clients -->

                    <div class="owl-carousel-6col clients-logo transparent text-center">
                        @if (count($partners) > 0)
                            @foreach ($partners as $partner)
                                <div class="item"> <a href="#"><img
                                            src="{{ url('storage') }}/{{ $partner->photo }}" alt=""></a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script lang="js">
        let btn = document.getElementById("first_element");


        const tabs = document.querySelectorAll("[data-target]"),
            tabContents = document.querySelectorAll("[data-content]");

        tabs.forEach((tab) => {
            tab.addEventListener("click", () => {
                const target = document.querySelector(tab.dataset.target);

                tabContents.forEach((tc) => {
                    tc.classList.remove("is-active");
                });
                target.classList.add("is-active");

                tabs.forEach((t) => {
                    t.classList.remove("is-active");
                });
                tab.classList.add("is-active");
            });
        });
        setTimeout(() => {

            document.getElementById("courses").className = 'bg-silver-light show_load'
        }, 1000);
    </script>
@endsection

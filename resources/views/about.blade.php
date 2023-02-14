@extends('layouts.app')
@section('content')
    <section class="inner-header divider layer-overlay overlay-theme-colored-7"
        data-bg-img="{{ asset('images/details_course.jpeg') }}">
        <div class="container pt-120 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-theme-colored2 font-36">À propos de nous</h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="{{ route('home') }}">Acceuil</a></li>
                            <li class="active">À propos de nous</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About -->
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-uppercasetext-theme-colored mt-0 mb-0 mt-sm-30">Qui <span
                                class="text-theme-colored2">Sommes nous</span></h2>
                        <h4 class="mt-5 mb-15">provide world class educational service since 1984</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique
                            non distinctio voluptates perspiciatis omnisrepell endus ipsa aperiam, laudantium voluptatum
                            nulla.</p>
                        <p class="hidden-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta assumenda
                            voluptatum ibero eligendi molestias iure error animi totam laudantium aspern similique id eos at
                            consectetur illo culpa, quisquam Quas voluptatem maiores eaque similique</p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fullwidth" src="{{asset('images/about.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- Section mission -->
     <section>
        <div class="container pt-20">
          <div class="section-content">
            <div class="row">
              <div class="col-md-6">
                <img class="img-fullwidth hidden-md" src="{{asset('images/about.jpg')}}" alt="">
                <img class="img-fullwidth hidden-xs hidden-sm hidden-lg" src="{{asset('images/about.jpg')}}" alt="">
              </div>
              <div class="col-md-6">
                <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30">Mot  <span class="text-theme-colored2">du directeur</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis, repellendus ipsa aperiam, laudantium voluptatum nulla?.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ipsum voluptate numquam, iure odio commodi rerum quasi distinctio qui eligendi similique eius consequatur modi! Voluptas quam consequatur, debitis recusandae facilis, autem in! Enim laudantium rem, placeat odit esse numquam facere ut. Quae, minus dolorum corrupti!</p>
               
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <section class="layer-overlay overlay-dark-7 parallax" data-bg-img="{{ asset('images/details_course.jpeg') }}">
        <div class="container pt-80 pb-90 pt-md-70 pb-md-50 pb-sm-50">
            <div class="row mt-30 text-center">
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact">
                        <i class="pe-7s-smile mb-20 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="1000"
                            class="animate-number text-theme-colored2 font-42 font-weight-600 mt-0 mb-15">0</h2>
                        <h5 class="text-white text-uppercase">
                            ÉTUDIANTS (2023-2030)

                        </h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact">
                        <i class="pe-7s-notebook mb-20 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="42"
                            class="animate-number text-theme-colored2 font-42 font-weight-600 mt-0 mb-15">0</h2>
                        <h5 class="text-white text-uppercase">
                            ANNÉES D’EXPERIENCE
                        </h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact">
                        <i class="pe-7s-users mb-20 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="100"
                            class="animate-number text-theme-colored2 font-42 font-weight-600 mt-0 mb-15">0</h2>
                        <h5 class="text-white text-uppercase">
                            STARTUPS (2028)

                        </h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact">
                        <i class="pe-7s-study mb-20 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="50"
                            class="animate-number text-theme-colored2 font-42 font-weight-600 mt-0 mb-15">0</h2>
                        <h5 class="text-white text-uppercase">
                            PHD (2033)

                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

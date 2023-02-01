@extends('layouts.app')
@section('content')

<section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{   asset('images/details_course.png') }}">
    <div class="container pt-120 pb-60">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row"> 
          <div class="col-md-6">
            <h2 class="text-theme-colored2 font-36">À propos de nous</h2>
            <ol class="breadcrumb text-left mt-10 white">
              <li><a href="{{route('home')}}">Acceuil</a></li>
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
            <h2 class="text-uppercasetext-theme-colored mt-0 mb-0 mt-sm-30">Qui <span class="text-theme-colored2">Sommes nous</span></h2>
            <h4 class="mt-5 mb-15">provide world class educational service since 1984</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnisrepell endus ipsa aperiam, laudantium voluptatum nulla.</p>
            <p class="hidden-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta assumenda voluptatum ibero eligendi molestias iure error animi totam laudantium aspern similique id eos at consectetur illo culpa, quisquam Quas voluptatem maiores eaque similique</p>
          </div>
          <div class="col-md-6">
            <img class="img-fullwidth" src="http://placehold.it/560x345" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

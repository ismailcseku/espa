@extends('layouts.app')
@section('content')
    <div class="main-content">

        <div class="main-content">
            <!-- Section: inner-header -->
            <section class="inner-header divider layer-overlay overlay-dark-4"
                data-bg-img="{{ asset('images/details_course.jpeg') }}">
                <div class="container pt-120 pb-60">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="text-theme-colored2 font-36">Corps professoral</h2>
                                <ol class="breadcrumb text-left mt-10 white">
                                    <li><a href="{{ route('home') }}">Acceuil</a></li>
                                    <li class="active">Corps professoral</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @if (count($responsables) > 0)
  
                @foreach ($responsables as $responsable)
                    <!-- Section: team -->
                    <section id="team">
                        <div class="container">
                            <div class="section-content">
                                <div class="row mtli-row-clearfix">
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="team-members mb-40">
                                            <div class="team-thumb mr-0">
                                                <img src="{{asset('storage')}}/{{$responsable->photo}}" alt="" class="img-fullwidth">
                                            </div>
                                            <div class="team-bottom-part border-1px p-15">
                                                <h4 class="text-uppercase font-weight-600 m-0 pb-5">{{$responsable->name}} {{$responsable->surname}}</h4>
                                                <h6 class="font-13 text-gray mt-0">{{$responsable->poste}}</h6>
                                                <ul class="list-inline mt-15">
                                                    <li class="m-0 pr-10"> <i
                                                            class="fa fa-phone text-theme-colored2 mr-5"></i> <a
                                                            class="text-gray" href="#">{{$responsable->phone}}</a> </li>
                                                    <li class="m-0 pr-10"> <i
                                                            class="fa fa-envelope-o text-theme-colored2 mr-5"></i>
                                                        <a class="text-gray" href="mailto:{{$responsable->email}}">{{$responsable->email}}</a>
                                                    </li>
                                                   
                                                </ul>
                                       
                                            </div>
                                        </div>
                                    </div>
                                </div>
                       
                            </div>
                        </div>
                    </section>
                @endforeach
            @else
                <h2 class="text-theme-colored2 font-36">Il n'y a pas de responsable </h2>
            @endif


        </div>
    @endsection

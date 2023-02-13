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
                            <h2 class="text-theme-colored2 font-36">Evenement</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="/">Acceuil</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <ul>
                            <li>
                                @if ($evenements->title)
                                    <h5>Sujet:</h5>
                                    <p>{{ $evenements->title }}</p>
                                @endif
                            </li>
                            <li>
                                @if ($evenements->location)
                                    <h5>Lieu:</h5>
                                    <p>{{ $evenements->location }}</p>
                                @endif

                            </li>
                            <li>
                                @if ($evenements->start_at)
                                    <h5>Date début:</h5>
                                    <p>{{ $evenements->start_at }}</p>
                                @endif

                            </li>
                            <li>
                                @if ($evenements->end_at)
                                    <h5>Date fin:</h5>
                                    <p>{{ $evenements->end_at }}</p>
                                @endif

                            </li>


                            <li>
                                <h5>Partager:</h5>
                                <div class="styled-icons icon-sm icon-gray icon-circled">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="owl-carousel-1col" data-nav="true">
                            <div class="item"><img src="{{ url('storage') }}/{{ $evenements->photo }}" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row mt-60">
                    <div class="col-md-6">
                        <h4 class="mt-0"> Description</h4>
                        <p>{{ $evenements->description }}</p>
                    </div>

                </div>

            </div>
        </section>

        <!-- Section: Registration Form -->
        <section class="divider parallax layer-overlay overlay-white-8"
            data-bg-img="{{ asset('images/details_course.jpeg') }}">
            <div class="container-fluid">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h3 class="title text-theme-colored">Inscription</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        @if (session()->has('success'))
                            <h6 class='alert alert-success' role="alert">
                                Felicitation !! Vous avez postulé à cette formation avec
                                reiussite , nous vous contacterons très bientôt .
                            </h6>
                        @endif
                        <form id="booking-form" name="booking-form" method="post"
                            action="{{ route('evenement.signin', $evenements->id) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Votre nom et prénom" name="name" required=""
                                        value="{{old('name')}}"
                                            class="form-control">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Votre E-mail" name="email" class="form-control"
                                            required="" value="{{old('email')}}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Téléphone " name="phone" class="form-control"
                                            required value="{{old('phone')}}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Organisme " name="organism" class="form-control"
                                            required value="{{old('organism')}}">
                                        @if ($errors->has('organism'))
                                            <span class="text-danger">{{ $errors->first('organism') }}</span>
                                        @endif
                                    </div>
                                </div>   
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Poste " name="poste" class="form-control"
                                            required value="{{old('poste')}}">
                                        @if ($errors->has('poste'))
                                            <span class="text-danger">{{ $errors->first('poste') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group text-center">

                                        <button class="btn btn-dark btn-theme-colored btn-sm btn-block mt-20 pt-10 pb-10"
                                            type="submit">Envoyer</button>
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="mb-20">Médiathèques</h4>
                        <div class="owl-carousel-5col" data-nav="true">
                            @foreach ($medias as $media)
                                
                            <div class="item"><img src="{{url('storage')}}/{{$media->photo}}" width="285" height="215" style="object-fit:cover;" alt="{{$media->title}}"></div>
                            @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

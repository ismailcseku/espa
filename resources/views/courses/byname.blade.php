@extends('layouts.app')
@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7"
            data-bg-img="{{ asset('images/details_course.jpeg') }}">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">Détails de formations</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="/">Acceuil</a></li>
                                <li><a href="{{ route('course.index') }}">formations</a></li>
                                <li class="active">details de formations</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Section: Services Details -->
        @if (count($courses) > 0)
            @foreach ($courses as $course)
                <section>
                    <div class=" mt-30 mb-30 pt-30 pb-30 ml-30 mr-30">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-7">
                                <div class="single-service">
                                    <h3 class="text-uppercase mt-0 mb-30">{{ $course->name }}</h3>
                                    <img src="{{ url('storage') }}/{{ $course->photo }}" style="width:70%;" alt="">
                                    <ul class="list-inline mt-20 mb-15">
                                        <li>
                                            <i class="pe-7s-user text-theme-colored2 font-48"></i>
                                            <div class="pull-right ml-5">
                                                <span>Responsable</span>
                                                <h5 class="mt-0">{{ $course->responsables_name }}</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <i class="pe-7s-ribbon text-theme-colored2 font-48"></i>
                                            <div class="pull-right ml-5">
                                                <span>Diplôme</span>
                                                <h5 class="mt-0">{!! $course->grade !!}</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <i class="pe-7s-refresh-2 text-theme-colored2 font-48"></i>
                                            <div class="pull-right ml-10">
                                                <span>Rythme</span>
                                                <h5 class="mt-0">{{ $course->modalitiy_name }}</h5>
                                            </div>
                                        </li>
                                    </ul>
                                    <p>

                                        {!! $course->description !!}
                                    </p>
                                    <ul id="myTab" class="nav nav-tabs mt-30">
                                        <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
                                        <li><a href="#tab2" data-toggle="tab">Admissions</a></li>
                                        <li><a href="#tab5" data-toggle="tab">Programmes</a></li>
                                        <li><a href="#tab6" data-toggle="tab">Carrières</a></li>
                                        <li><a href="#tab3" data-toggle="tab">Télécharger</a></li>
                                        <li><a href="#tab4" data-toggle="tab">Témoignages</a></li>

                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1">
                                            <h4 class="line-bottom-theme-colored2 mb-15">Description de la formation</h4>

                                            <p> {!! $course->description !!}</p>
                                            <ul>
                                                <li> <i
                                                        class="pe-7s-timer font-26 vertical-align-middle text-theme-colored2 mr-10 "></i>
                                                    Durée : {{ $course->duration }} Mois</li>
                                                <li><i
                                                        class="pe-7s-global font-26 vertical-align-middle text-theme-colored2  mr-10"></i>
                                                    Lieu : {{ $course->locations_name}}</li>
                                                <li> <i
                                                        class="pe-7s-prev font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Rythme
                                                    : {{ $course->modalitiy_name }}</li>
                                                <li><i
                                                        class="pe-7s-global  font-26 vertical-align-middle text-theme-colored2 mr-10 "></i>Langue
                                                    : {{ $course->languages_name }}</li>
                                            </ul>

                                        </div>
                                        <div class="tab-pane fade" id="tab2">
                                            <h4 class="line-bottom-theme-colored2 mb-15">Information cours</h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="blog-posts single-post">
                                                        <div class="comments-area">
                                                            <ul class="comment-list">

                                                                <li>
                                                                    <div class="media comment-author"> <a
                                                                            class="media-left pull-left flip"
                                                                            href="#"><img class="img-thumbnail"
                                                                                src="images/blog/comment1.jpg"
                                                                                alt=""></a>
                                                                        <div class="media-body">
                                                                            <h5 class="media-heading comment-heading">
                                                                                Préréquis et admission :</h5>
                                                                            <div class="comment-date">
                                                                                {!! $course->admission !!}</div>
                                                                        </div>
                                                                    </div>
                                                                </li>



                                                            </ul>
                                                        </div>
                                                        <div class="comments-area">
                                                            <ul class="comment-list">

                                                                <li>
                                                                    <div class="media comment-author"> <a
                                                                            class="media-left pull-left flip"
                                                                            href="#"><img class="img-thumbnail"
                                                                                src="images/blog/comment1.jpg"
                                                                                alt=""></a>
                                                                        <div class="media-body">
                                                                            <h5 class="media-heading comment-heading">
                                                                                Dossier :</h5>
                                                                            <div class="comment-date">
                                                                                {!! $course->dossier !!}</div>


                                                                        </div>
                                                                    </div>
                                                                </li>



                                                            </ul>
                                                        </div>
                                                        <div class="comments-area">
                                                            <ul class="comment-list">

                                                                <li>
                                                                    <div class="media comment-author"> <a
                                                                            class="media-left pull-left flip"
                                                                            href="#"><img class="img-thumbnail"
                                                                                src="images/blog/comment1.jpg"
                                                                                alt=""></a>
                                                                        <div class="media-body">
                                                                            <h5 class="media-heading comment-heading">
                                                                                Candidature :</h5>
                                                                            <div class="comment-date">
                                                                                {!! $course->candidature !!}</div>
                                                                        </div>
                                                                    </div>
                                                                </li>



                                                            </ul>
                                                        </div>
                                                        <div class="comments-area">
                                                            <ul class="comment-list">

                                                                <li>
                                                                    <div class="media comment-author"> <a
                                                                            class="media-left pull-left flip"
                                                                            href="#"><img class="img-thumbnail"
                                                                                src="images/blog/comment1.jpg"
                                                                                alt=""></a>
                                                                        <div class="media-body">
                                                                            <h5 class="media-heading comment-heading">
                                                                                Modalité de selection :</h5>
                                                                            <div class="comment-date">
                                                                                {{ $course->modalitiy_name }}</div>
                                                                        </div>
                                                                    </div>
                                                                </li>



                                                            </ul>
                                                        </div>
                                                        <div class="comments-area">
                                                            <ul class="comment-list">

                                                                <li>
                                                                    <div class="media comment-author"> <a
                                                                            class="media-left pull-left flip"
                                                                            href="#"><img class="img-thumbnail"
                                                                                src="images/blog/comment1.jpg"
                                                                                alt=""></a>
                                                                        <div class="media-body">
                                                                            <h5 class="media-heading comment-heading">
                                                                                Prochaine rentrée :</h5>
                                                                            <div class="comment-date">
                                                                                @php
                                                                                    $getYears=date('m-Y', strtotime($course->daterentre)) ;
                                                                        
                                                                                    echo $getYears;
                                                                                    
                                                                                @endphp
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>



                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="tab4">
                                            <h4 class="line-bottom-theme-colored2 mb-20">Témoignages</h4>
                                            {!! $courses[0]->review !!}
                                        </div>
                                        <div class="tab-pane fade" id="tab5">
                                            <h4 class="line-bottom-theme-colored2 mb-0">programmes</h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="blog-posts single-post">

                                                        <div class="comments-area">
                                                            <ul class="comment-list">
                                                                @foreach ($programs as $program)
                                                                    <li>
                                                                        <div class="media comment-author"> <a
                                                                                class="media-left pull-left flip"
                                                                                href="#"><img class="img-thumbnail"
                                                                                    src="images/blog/comment1.jpg"
                                                                                    alt=""></a>
                                                                            <div class="media-body">
                                                                                <h5 class="media-heading comment-heading">
                                                                                    {{ $program->title }}:</h5>
                                                                                <div class="comment-date">
                                                                                    {{ $program->hours }} heures</div>
                                                                                <p>{!! $program->description !!}</p>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                @endforeach


                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3">
                                            <h4 class="line-bottom-theme-colored2 mb-20">Télécharger</h4>
                                            <div class="row">
                                                @foreach ($downloads as $download)
                                                    <div class="col-md-3">

                                                        <h5 class="mb-0">{{ $download->name }}</h5>
                                                        <a href="{{ url('storage') }}/{{ $download->file }}">Cliquer
                                                            ici</a>
                                                    </div>
                                                @endforeach


                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab6">
                                            <h4 class="line-bottom-theme-colored2 mb-20">Carrière</h4>
                                            <div class="row">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="blog-posts single-post">
                                                            <div class="comments-area">
                                                                <ul class="comment-list">

                                                                    <li>
                                                                        <div class="media comment-author"> <a
                                                                                class="media-left pull-left flip"
                                                                                href="#"><img class="img-thumbnail"
                                                                                    src="images/blog/comment1.jpg"
                                                                                    alt=""></a>
                                                                            <div class="media-body">
                                                                                <h5 class="media-heading comment-heading">
                                                                                    Diplome :</h5>
                                                                                <div class="comment-date">
                                                                                    {!! $course->grade !!}</div>
                                                                            </div>
                                                                        </div>
                                                                    </li>



                                                                </ul>
                                                            </div>
                                                            <div class="comments-area">
                                                                <ul class="comment-list">

                                                                    <li>
                                                                        <div class="media comment-author"> <a
                                                                                class="media-left pull-left flip"
                                                                                href="#"><img class="img-thumbnail"
                                                                                    src="images/blog/comment1.jpg"
                                                                                    alt=""></a>
                                                                            <div class="media-body">
                                                                                <h5 class="media-heading comment-heading">
                                                                                    Profil / Compétences à acquérir :</h5>
                                                                                <div class="comment-date">
                                                                                    {!! $course->profile !!}</div>
                                                                            </div>
                                                                        </div>
                                                                    </li>



                                                                </ul>
                                                            </div>
                                                            <div class="comments-area">
                                                                <ul class="comment-list">
                                                                    <li>
                                                                        <div class="media comment-author"> <a
                                                                                class="media-left pull-left flip"
                                                                                href="#"><img class="img-thumbnail"
                                                                                    src="images/blog/comment1.jpg"
                                                                                    alt=""></a>
                                                                            <div class="media-body">
                                                                                <h5 class="media-heading comment-heading">
                                                                                    Débouchés :</h5>
                                                                                <div class="comment-date">
                                                                                    {!! $course->opportunity !!}</div>
                                                                            </div>
                                                                        </div>
                                                                    </li>



                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-5">
                                <div class="sidebar sidebar-left mt-sm-30 ml-30 ml-sm-0">
                                    <div class="main-content">
                                        <section>
                                            <div style="width:100%;">
                                                <div class="row">
                                                    <div class="col-md-12 ">
                                                        <div class="border-1px p-10">
                                                            <h4 class="text-theme-colored text-uppercase m-0">Je suis
                                                                interessé
                                                            </h4>
                                                            @if (session()->has('success'))
                                                                <h6 class='alert alert-success' role="alert">
                                                                    Felicitation !! Vous avez postulé à cette formation avec
                                                                    reiussite , nous vous contacterons très bientôt .
                                                                </h6>
                                                            @endif
                                                            <div class="line-bottom mb-30"></div>
                                                            <p>Remplir le formulaire.</p>
                                                            <form class="mt-30" method="post"
                                                                action="{{ route('interested', $course->id) }}">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-sm-12 ">
                                                                        <div class="row ">
                                                                            <label for="gender"
                                                                                class="col-xs-2 col-sm-1">Mlle</label>
                                                                            <div
                                                                                class="col-xs-2 col-col-sm-3 form-group mb-10">

                                                                                <input name="gender" value='Mlle'
                                                                                    class="" type="radio" checked>
                                                                            </div>
                                                                            <label for=""
                                                                                class="col-xs-2 col-sm-1">Mme</label>

                                                                            <div
                                                                                class="col-xs-2 col-sm-3 form-group mb-10">
                                                                                <input name="gender" value='Mme'
                                                                                    class="" type="radio">
                                                                            </div>
                                                                            <label for=""
                                                                                class="col-xs-2 col-sm-1">Mr</label>

                                                                            <div
                                                                                class="col-xs-2 col-sm-3 form-group mb-10">
                                                                                <input name="gender" value='Mr'
                                                                                    type="radio" aria-="true">
                                                                            </div>
                                                                        </div>

                                                                        @if ($errors->has('gender'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('gender') }}</span>
                                                                        @endif


                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="name" class="col-sm-2"
                                                                            style=" width:100%"> Nom</label>

                                                                        <div class="form-group mb-10">
                                                                            <input name="name" class="form-control"
                                                                                required type="text"
                                                                                value="{{ old('name') }}">
                                                                        </div>
                                                                        @if ($errors->has('name'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('name') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="surname" class="col-sm-2">
                                                                            Prénom</label>

                                                                        <div class="form-group mb-10">
                                                                            <input name="surname" class="form-control"
                                                                                required type="text"
                                                                                value="{{ old('surname') }}">
                                                                        </div>
                                                                        @if ($errors->has('surname'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('surname') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="E-mail" class="col-sm-2"
                                                                            style=" width:100%"> Email</label>
                                                                        <div class="form-group mb-10">
                                                                            <input name="email" required
                                                                                class="form-control  email" type="email"
                                                                                value="{{ old('email') }}">
                                                                        </div>
                                                                        @if ($errors->has('email'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('email') }}</span>
                                                                        @endif
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <label for="birth" class="col-sm-2"
                                                                            style=" width:100%"> naissance</label>
                                                                        <div class="form-group mb-10 ">
                                                                            <input name="birth" required
                                                                                class="  form-control" type="date"
                                                                                placeholder="Date de naissance"
                                                                                value="{{ old('birth') }}">
                                                                        </div>
                                                                        @if ($errors->has('birth'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('birth') }}</span>
                                                                        @endif
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <label for="country" class="col-sm-2">
                                                                            Pays</label>
                                                                        <div class="form-group mb-10">
                                                                            <select name="country" required
                                                                                value="{{ old('country') }}"
                                                                                class="form-control  ">
                                                                                @foreach ($countries as $country)
                                                                                    <option value="{{ $country }}">
                                                                                        {{ $country }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        @if ($errors->has('country'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('country') }}</span>
                                                                        @endif
                                                                    </div>

                                                                    <div class="col-sm-6 ">
                                                                        <label for="province" class="col-sm-2"
                                                                            style=" width:100%"> Provinces </label>

                                                                        <div class="form-group mb-10">
                                                                            <select name="province" required
                                                                                class="form-control  "
                                                                                value="{{ old('^rovince') }}">
                                                                                @foreach ($provinces as $province)
                                                                                    <option value="{{ $province }}">
                                                                                        {{ $province }}</option>
                                                                                @endforeach
                                                                            </select>

                                                                        </div>
                                                                        @if ($errors->has('province'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('province') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-sm-8 ">
                                                                        <label for="phone" class="col-sm-12"
                                                                            style=" width:100%">Numéro de téléphone</label>

                                                                        <div class="form-group mb-10">
                                                                            <input name="phone" class="form-control"
                                                                                type="text"
                                                                                value="{{ old('phone') }}" required>
                                                                        </div>
                                                                        @if ($errors->has('phone'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('phone') }}</span>
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-sm-4 ">
                                                                        <label for="indicatif" class="col-sm-12"
                                                                            style=" width:100%"> Indicatif </label>

                                                                        <div class="form-group mb-10">
                                                                            <input name="indicatif"
                                                                                value="{{ old('indicatif') }}"
                                                                                class="form-control" required
                                                                                type="text">
                                                                        </div>
                                                                        @if ($errors->has('indicatif'))
                                                                            <span
                                                                                class="text-danger">{{ $errors->first('indicatif') }}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 ">
                                                                    <label for="level" class="col-sm-12"
                                                                        style=" width:100%"> Niveau d'études </label>

                                                                    <div class="form-group mb-10">
                                                                        <select name="level"
                                                                            value="{{ old('level') }}"
                                                                            class="form-control  " required>
                                                                            @foreach ($levels as $level)
                                                                                <option value="{{ $level }}">
                                                                                    {{ $level }}</option>
                                                                            @endforeach
                                                                        </select>

                                                                    </div>
                                                                    @if ($errors->has('level'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('level') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label for="grade" class="col-sm-2"
                                                                        style=" width:100%"> Diplôme et spécialité</label>

                                                                    <div class="form-group mb-10">
                                                                        <input name="grade" value="{{ old('grade') }}"
                                                                            class="form-control" type="text" required>
                                                                    </div>
                                                                    @if ($errors->has('grade'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('grade') }}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="col-xs-2 col-sm-1">

                                                                    <div class=" mb-10">
                                                                        <input name="accepted" value='accepted'
                                                                            type="checkbox" checked required>
                                                                    </div>
                                                                    @if ($errors->has('accepted'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('accepted') }}</span>
                                                                    @endif
                                                                </div>
                                                                <p class="col-xs-10 col-span-10">
                                                                    Conformément à la loi 09-08, vous disposez d&#39;un
                                                                    droit
                                                                    d&#39;accès, de rectification et d&#39;opposition au
                                                                    traitement de
                                                                    vos données personnelles.*
                                                                </p>



                                                                <div class="form-group mb-0 mt-20">
                                                                    <input name="form_botcheck" class="form-control"
                                                                        type="hidden" value="">
                                                                    <button type="submit" class="btn btn-theme-colored2"
                                                                        data-loading-text="Patientez...">Valider</button>
                                                                </div>
                                                            </form>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>

                                    <div class="widget border-1px bg-silver-deep p-15">
                                        <h4 class="widget-title line-bottom-theme-colored2 mb-10">Cycles</h4>
                                        <div class="categories">
                                            <ul class="list-border">
                                                @foreach ($degrees as $degree)
                                                    <li><a href="#">{{ $degree->name }}</a></li>
                                                @endforeach

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
            <h2 class="text-theme-colored2 font-36">Il n'y a pas de formations disponibles</h2>
        @endif
    </div>
@endsection

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
                            <h2 class="text-theme-colored2 font-36">Détail de la formation</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="/">accueil</a></li>
                                <li><a href="{{ route('course.index') }}">formations</a></li>
                                <li class="active">Détail de la formation</li>
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
                            <h3 class="text-uppercase mt-0 mb-30">{{ $course->name }}</h3>
                            <div class="col-sm-12 col-md-6 col-lg-7">
                                <div class="single-service">
                                    <img src="{{ url('storage') }}/{{ $course->photo }}" style="width:100%;" alt="">
                                    <ul class="list-inline mt-20 mb-15">
                                        @if ($course->responsables_name)
                                            <li>
                                                <i class="pe-7s-user text-theme-colored2 font-48"></i>
                                                <div class="pull-right ml-5">
                                                    <span>Responsable</span>
                                                    <h5 class="mt-0">
                                                        {{ $course->responsables_name . ' ' . $course->responsables_surname }}
                                                    </h5>
                                                </div>
                                            </li>
                                        @endif
                                        @if ($course->grade)
                                            <li>
                                                <i class="pe-7s-ribbon text-theme-colored2 font-48"></i>
                                                <div class="pull-right ml-5">
                                                    <span>Diplôme</span>
                                                    <h5 class="mt-0">{!! $course->grade !!}</h5>
                                                </div>
                                            </li>
                                        @endif
                                        @if ($course->modalitiy_name)
                                            <li>
                                                <i class="pe-7s-refresh-2 text-theme-colored2 font-48"></i>
                                                <div class="pull-right ml-10">
                                                    <span>Rythme</span>
                                                    <h5 class="mt-0">{{ $course->modalitiy_name }}</h5>
                                                </div>
                                            </li>
                                        @endif

                                    </ul>


                                    <ul id="myTab" class="nav nav-tabs mt-30">
                                        <li class="active"><a href="#tab1" data-toggle="tab"
                                                style="font-size:16px;">Description</a></li>
                                        <li><a href="#tab2" data-toggle="tab" style="font-size:16px;">Admission</a></li>
                                        <li><a href="#tab5" data-toggle="tab" style="font-size:16px;">Programme</a></li>
                                        <li><a href="#tab6" data-toggle="tab" style="font-size:16px;">Carrière</a></li>
                                        <li><a href="#tab3" data-toggle="tab" style="font-size:16px;">Documents</a></li>
                                        <li><a href="#tab4" data-toggle="tab" style="font-size:16px;">Témoignages</a></li>

                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1">
                                            <h4 class="line-bottom-theme-colored2 mb-15">Description de la formation</h4>

                                            <p> {!! $course->description !!}</p>
                                            <ul>
                                                @if ($course->duration)
                                                    <li> <i
                                                            class="pe-7s-timer font-26 vertical-align-middle text-theme-colored2 mr-10 "></i>
                                                        <span class="font-16">Durée</span> : <span> {{ $course->duration }}
                                                            Mois</span>
                                                    </li>
                                                @endif
                                                @if ($course->locations_name)
                                                    <li><i
                                                            class="pe-7s-global font-26 vertical-align-middle text-theme-colored2  mr-10"></i>
                                                        <span class="font-16">Lieu </span>: {{ $course->locations_name }}
                                                    </li>
                                                @endif
                                                @if ($course->modalitiy_name)
                                                    <li> <i
                                                            class="pe-7s-prev font-26 vertical-align-middle text-theme-colored2 mr-10"></i>
                                                        <span class="font-16">Rythme
                                                            :</span> {{ $course->modalitiy_name }}
                                                    </li>
                                                @endif
                                                @if ($course->languages_name)
                                                    <li><i
                                                            class="pe-7s-notebook  font-26 vertical-align-middle text-theme-colored2 mr-10 "></i>
                                                        <span class="font-16">Langue
                                                            : </span>{{ $course->languages_name }}
                                                    </li>
                                                @endif

                                            </ul>

                                        </div>
                                        <div class="tab-pane fade" id="tab2">
                                            <h4 class="line-bottom-theme-colored2 mb-15">Admission</h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="blog-posts single-post">
                                                        @if (isset($course->admission))
                                                            <div class="comments-area">
                                                                <ul class="comment-list">

                                                                    <li>
                                                                        <div class="media comment-author"> <a
                                                                                class="media-left pull-left flip"
                                                                                href="#"><img class="img-thumbnail"
                                                                                    src="images/blog/comment1.jpg"
                                                                                    alt=""></a>
                                                                            <div class="media-body">
                                                                                <h5 class=" @if (!isset($design->size)) media-heading comment-heading  font-16 @else media-heading comment-heading @endif "
                                                                                    style=" @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                                                    Prérequis et admission </h5>
                                                                                <div class="comment-date">
                                                                                    {!! $course->admission !!}</div>
                                                                            </div>
                                                                        </div>
                                                                    </li>



                                                                </ul>
                                                            </div>
                                                        @endif
                                                        @if (isset($course->dossier))
                                                            <div class="comments-area">
                                                                <ul class="comment-list">

                                                                    <li>
                                                                        <div class="media comment-author"> <a
                                                                                class="media-left pull-left flip"
                                                                                href="#"><img class="img-thumbnail"
                                                                                    src="images/blog/comment1.jpg"
                                                                                    alt=""></a>
                                                                            <div class="media-body">
                                                                                <h5 class=" @if (!isset($design->size)) media-heading comment-heading  font-16 @else media-heading comment-heading @endif "
                                                                                    style=" @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                                                    Dossier </h5>
                                                                                <div class="comment-date">
                                                                                    {!! $course->dossier !!}</div>


                                                                            </div>
                                                                        </div>
                                                                    </li>



                                                                </ul>
                                                            </div>
                                                        @endif
                                                        @if (isset($course->canditature))
                                                            <div class="comments-area">
                                                                <ul class="comment-list">

                                                                    <li>
                                                                        <div class="media comment-author"> <a
                                                                                class="media-left pull-left flip"
                                                                                href="#"><img class="img-thumbnail"
                                                                                    src="images/blog/comment1.jpg"
                                                                                    alt=""></a>
                                                                            <div class="media-body">
                                                                                <h5 class=" @if (!isset($design->size)) media-heading comment-heading  font-16 @else media-heading comment-heading @endif "
                                                                                    style=" @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                                                    Candidature </h5>
                                                                                <div class="comment-date">
                                                                                    {!! $course->candidature !!}</div>
                                                                            </div>
                                                                        </div>
                                                                    </li>



                                                                </ul>

                                                            </div>
                                                        @endif
                                                        @if (isset($course->datelimite))
                                                            <div class="comments-area">
                                                                <ul class="comment-list">

                                                                    <li>
                                                                        <div class="media comment-author"> <a
                                                                                class="media-left pull-left flip"
                                                                                href="#"><img class="img-thumbnail"
                                                                                    src="images/blog/comment1.jpg"
                                                                                    alt=""></a>
                                                                            <div class="media-body">
                                                                                <h5 class=" @if (!isset($design->size)) media-heading comment-heading  font-16 @else media-heading comment-heading @endif "
                                                                                    style=" @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                                                    Date limite </h5>
                                                                                <div class="comment-date">
                                                                                    {{ $course->datelimite }}</div>
                                                                            </div>
                                                                        </div>
                                                                    </li>



                                                                </ul>
                                                            </div>
                                                        @endif
                                                        @if (isset($course->selection))
                                                            <div class="comments-area">
                                                                <ul class="comment-list">

                                                                    <li>
                                                                        <div class="media comment-author"> <a
                                                                                class="media-left pull-left flip"
                                                                                href="#"><img class="img-thumbnail"
                                                                                    src="images/blog/comment1.jpg"
                                                                                    alt=""></a>
                                                                            <div class="media-body">
                                                                                <h5 class=" @if (!isset($design->size)) media-heading comment-heading  font-16 @else media-heading comment-heading @endif "
                                                                                    style=" @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                                                    Modalité de selection </h5>
                                                                                <div class="comment-date">
                                                                                    {!! $course->selection !!}</div>
                                                                            </div>
                                                                        </div>
                                                                    </li>



                                                                </ul>
                                                            </div>
                                                        @endif
                                                        @if (isset($course->daterentre))
                                                            <div class="comments-area">
                                                                <ul class="comment-list">

                                                                    <li>
                                                                        <div class="media comment-author"> <a
                                                                                class="media-left pull-left flip"
                                                                                href="#"><img class="img-thumbnail"
                                                                                    src="images/blog/comment1.jpg"
                                                                                    alt=""></a>
                                                                            <div class="media-body">
                                                                                <h5 class=" @if (!isset($design->size)) media-heading comment-heading  font-16 @else media-heading comment-heading @endif "
                                                                                    style=" @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                                                    Prochaine rentrée </h5>
                                                                                <div class="comment-date">
                                                                                    @php
                                                                                        $getYears = date('m-Y', strtotime($course->daterentre));
                                                                                        
                                                                                        echo $getYears;
                                                                                        
                                                                                    @endphp
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>



                                                                </ul>
                                                            </div>
                                                        @endif


                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade" id="tab4">
                                            <h4 class="line-bottom-theme-colored2 mb-20">Témoignages</h4>
                                            {!! $courses[0]->review !!}
                                        </div>
                                        <div class="tab-pane fade" id="tab5">
                                            <h4 class="line-bottom-theme-colored2 mb-0">Programme</h4>
                                            <div class="container-block">
                                                <div class="accordion">
                                                    @foreach ($programs as $program)
                                                        @if ($loop->first)
                                                            <div class="accordion-item active">

                                                                <div class="accordion-header "
                                                                    style="display:flex; justify-content:space-between;">
                                                                    @if ($program->title)
                                                                        <p class="text-theme-colored2">
                                                                            {{ $program->title }} </p>
                                                                    @endif
                                                                    @if ($program->hours)
                                                                        <p style="margin-right:7%;">
                                                                            {{ $program->hours }} heures </p>
                                                                    @endif
                                                                </div>
                                                                <div class="accordion-body">
                                                                    <div class="accordion-body-content">
                                                                        {!! $program->description !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="accordion-item ">

                                                                <div class="accordion-header"
                                                                    style="display:flex; justify-content:space-between;">
                                                                    @if ($program->title)
                                                                        <p class="text-theme-colored2">
                                                                            {{ $program->title }} </p>
                                                                    @endif
                                                                    @if ($program->hours)
                                                                        <p style="margin-right:7%;">
                                                                            {{ $program->hours }} heures</p>
                                                                    @endif
                                                                </div>
                                                                <div class="accordion-body">
                                                                    <div class="accordion-body-content">
                                                                        {!! $program->description !!}

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach


                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="tab3">
                                            <h4 class="line-bottom-theme-colored2 mb-20">Télécharger</h4>
                                            <div class="row">
                                                @foreach ($downloads as $download)
                                                    <div class="col-md-3">

                                                        <h5 class="mb-0 font-16">{{ $download->name }}</h5>
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

                                                                @if ($course->grade)
                                                                    <ul class="comment-list">

                                                                        <li>
                                                                            <div class="media comment-author"> <a
                                                                                    class="media-left pull-left flip"
                                                                                    href="#"><img
                                                                                        class="img-thumbnail"
                                                                                        src="images/blog/comment1.jpg"
                                                                                        alt=""></a>
                                                                                <div class="media-body">
                                                                                    <h5 class=" @if (!isset($design->size)) media-heading comment-heading  font-16 @else media-heading comment-heading @endif "
                                                                                        style=" @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                                                        Diplôme </h5>
                                                                                    <div class="comment-date">
                                                                                        {!! $course->grade !!}</div>
                                                                                </div>
                                                                            </div>
                                                                        </li>



                                                                    </ul>
                                                                @endif

                                                            </div>
                                                            <div class="comments-area">
                                                                @if ($course->profile)
                                                                    <ul class="comment-list">


                                                                        <li>
                                                                            <div class="media comment-author"> <a
                                                                                    class="media-left pull-left flip"
                                                                                    href="#"><img
                                                                                        class="img-thumbnail"
                                                                                        src="images/blog/comment1.jpg"
                                                                                        alt=""></a>
                                                                                <div class="media-body">
                                                                                    <h5 class=" @if (!isset($design->size)) media-heading comment-heading  font-16 @else media-heading comment-heading @endif "
                                                                                        style=" @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                                                        Profil / Compétences à acquérir
                                                                                    </h5>
                                                                                    <div class="comment-date">
                                                                                        {!! $course->profile !!}</div>
                                                                                </div>
                                                                            </div>
                                                                        </li>



                                                                    </ul>
                                                                @endif
                                                            </div>
                                                            <div class="comments-area">
                                                                @if ($course->opportunity)
                                                                    <ul class="comment-list">
                                                                        <li>
                                                                            <div class="media comment-author"> <a
                                                                                    class="media-left pull-left flip"
                                                                                    href="#"><img
                                                                                        class="img-thumbnail"
                                                                                        src="images/blog/comment1.jpg"
                                                                                        alt=""></a>
                                                                                <div class="media-body">
                                                                                    <h5 class=" @if (!isset($design->size)) media-heading comment-heading  font-16 @else media-heading comment-heading @endif "
                                                                                        style=" @if (isset($design->color)) color:{{ $design->color }}; @endif  @if (isset($design->size)) font-size:{{ $design->size }}; @endif">
                                                                                        Débouchés </h5>
                                                                                    <div class="comment-date">
                                                                                        {!! $course->opportunity !!}</div>
                                                                                </div>
                                                                            </div>
                                                                        </li>



                                                                    </ul>
                                                                @endif

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
                                                                interessé(e)
                                                            </h4>
                                                            @if (session()->has('success'))
                                                                <h6 class='alert alert-success' role="alert">
                                                                    Votre réponse a été bien enregistrée . Nous vous
                                                                    remercions pour votre intérêt et n'hésitez pas à nous
                                                                    contacter .

                                                                </h6>
                                                            @endif
                                                            <div class="line-bottom-theme-colored2 mb-30"></div>
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
                                                                            style=" width:100%"> E-mail</label>
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
                                                                            style=" width:100%">date de naissance</label>
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
                                                                            <select name="country" id="countries" required
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

                                                                    <div class="col-sm-6 " id="provinces">
                                                                        <label for="province" class="col-sm-2"
                                                                            style=" width:100%"> Province </label>

                                                                        <div class="form-group mb-10">
                                                                            <select name="province" id="province"
                                                                                required class="form-control  "
                                                                                value="{{ old('province') }}">
                                                                                <option value="_" selected>_</option>

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
                                                                                id="phone" type="tel"
                                                                                value="+212" required>
                                                                            <input name="indice" class="form-control"
                                                                                id="indice" type="hidden"
                                                                                value="212">
                                                                        </div>
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
                                                                            class="form-control" type="text">
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
                                                                <p class="col-xs-10 col-span-10 font-10">
                                                                    Conformément à la loi 09-08, vous disposez d&#39;un
                                                                    droit
                                                                    d&#39;accès, de rectification et d&#39;opposition au
                                                                    traitement de
                                                                    vos données personnelles.<span
                                                                        style="color:red;">*</span>
                                                                </p>



                                                                <div class="form-group mb-0 mt-20">
                                                                    <input name="form_botcheck" class="form-control"
                                                                        type="hidden" value="">
                                                                    <button type="submit" class="btn btn-theme-colored2"
                                                                        data-loading-text="Patientez...">Envoyer</button>
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
                                                    <li><a
                                                            href="{{ route('degree.show', $degree->name) }}">{{ $degree->name }}</a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="width:100%;">
                                        <h3 class="font-28 mt-md-30 mt-0"><span class="text-theme-colored2">Pourquoi
                                            </span>Nous?
                                        </h3>
                                        <div class="line-bottom-theme-colored2"></div>
                                        <div class="panel-group accordion-stylished-left-border accordion-icon-filled accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2 custom-style"
                                            id="accordion6" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headin1">
                                                    <h6 class="panel-title">
                                                        <a role="button" data-toggle="collapse"
                                                            data-parent="#accordion6" href="#collaps1"
                                                            aria-expanded="true" aria-controls="collaps1">
                                                            Une vie estudiantine exceptionnelle
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collaps1" class="panel-collapse collapse in" role="tabpanel"
                                                    aria-labelledby="headin1">
                                                    <div class="panel-body">
                                                        Rejoignez-nous et bâtissez votre carrière dans une école qui offre
                                                        de nombreux
                                                        services et activités vous feront découvrir un environnement unique
                                                        de multiples
                                                        cultures.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading2">
                                                    <h6 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                            data-parent="#accordion6" href="#collapse2"
                                                            aria-expanded="false" aria-controls="collapse2">
                                                            Plus de 1000 étudiants à l’horizon 2030
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapse2" class="panel-collapse collapse" role="tabpanel"
                                                    aria-labelledby="heading2">
                                                    <div class="panel-body">
                                                        Nouveau département de l'agro-alimentaire en partenariat avec l'ESCA
                                                        et des
                                                        nouvelles filières de formation dans les domaines de l’intelligence
                                                        artificielle,
                                                        aquaculture, sciences acridiennes, etc.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading3">
                                                    <h6 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                            data-parent="#accordion6" href="#collapse3"
                                                            aria-expanded="false" aria-controls="collapse3">
                                                            Projets structuraux de niveau mondial
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapse3" class="panel-collapse collapse" role="tabpanel"
                                                    aria-labelledby="heading3">
                                                    <div class="panel-body">
                                                        Centre d’excellence horticole, ferme expérimentale, consortium pour
                                                        la recherche, le
                                                        développement et l’innovation agricole, impact cluster,
                                                        agri-business incubateur,
                                                        centre de formation continue, centre de diagnostic et d’analyse,
                                                        programme doctoral
                                                        et masters internationaux…
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading4">
                                                    <h6 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                            data-parent="#accordion6" href="#collapse4"
                                                            aria-expanded="false" aria-controls="collapse4">
                                                            Programme de recherche scientifique
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapse4" class="panel-collapse collapse" role="tabpanel"
                                                    aria-labelledby="heading4">
                                                    <div class="panel-body">
                                                        Des équipes de recherche et d’experts nationaux et internationaux
                                                        dans différents
                                                        domaines : Gestion rationnelle des ressources en eau, technologies
                                                        de récolte et
                                                        post-récolte, protection des cultures et gestion intégrée des
                                                        ravageurs, contrôle
                                                        climatique basé sur le pilotage des données, biotechnologie et
                                                        sélection végétales…
                                                    </div>
                                                </div>
                                            </div>
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

    <style>
        @charset "UTF-8";
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap");

        body {
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
        }

        .container-block {
            max-width: 1320px;
            margin: 0 auto;
        }

        .accordion {
            margin-top: 1.875rem;
        }

        .accordion .accordion-item {
            background-color: white;
            color: #1b1d21;
            border-radius: 0.5rem;
            border: 1px solid #f7f7f7;
            margin-bottom: 1rem;
        }

        .accordion .accordion-item.active {
            box-shadow: 0 0.0625rem 0.9375rem 0 rgba(27, 29, 33, 0.15);
        }

        .accordion .accordion-item.active .accordion-body {
            max-height: max-content;
        }

        .accordion .accordion-item.active .accordion-header::after {
            transform: rotate(90deg);
        }

        .accordion .accordion-item:last-child {
            margin-bottom: 0;
        }

        .accordion .accordion-item .accordion-header {
            padding-left: 1.5625rem;
            font-size: 1.125rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            position: relative;
            cursor: pointer;
        }

        .accordion .accordion-item .accordion-header::after {
            content: "";
            font-size: 1.5rem;
            font-family: "FontAwesome";
            position: absolute;
            right: 1.5rem;
            transition: all 0.2s ease-in-out;
            transform: rotate(0deg);
        }

        .accordion .accordion-item .accordion-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
        }

        .accordion .accordion-item .accordion-body .accordion-body-content {
            padding: 0 1.5rem;
            font-size: 0.875rem;
            line-height: 1rem;
        }
    </style>
    <script>
        const accSingleTriggers = document.querySelectorAll(".accordion-header");

        accSingleTriggers.forEach((trigger) =>
            trigger.addEventListener("click", toggleAccordion)
        );

        function toggleAccordion() {
            const items = document.querySelectorAll(".accordion-item");
            const thisItem = this.parentNode;

            items.forEach((item) => {
                if (thisItem == item) {
                    thisItem.classList.toggle("active");
                    return;
                }
                item.classList.remove("active");
            });
        }

        let getCountries = document.getElementById('countries');
        let getProvinces = document.getElementById('provinces');
        let getProvince = document.getElementById('province');
        getCountries.addEventListener('change', () => {
            if (getCountries.value !== 'Maroc') {
                getProvinces.style.display = 'none'
                getProvince.value = '_'
            } else {
                getProvinces.style.display = 'block'
            }
        })
        const phoneInputField = document.querySelector("#phone");
        let indice = document.querySelector("#indice");

        const phoneInput = window.intlTelInput(phoneInputField, {});

        var country = phoneInput.getSelectedCountryData();


        phoneInputField.addEventListener("countrychange", function() {
            country = phoneInput.getSelectedCountryData();
            indice.value = country.dialCode

        });
    </script>

@endsection

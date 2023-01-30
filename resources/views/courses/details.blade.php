@extends('layouts.app')
@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7"
            data-bg-img="{{ url('storage/details_course.png') }}">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">Détails de formations</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="/">Acceuil</a></li>
                                <li><a href="#">Cours</a></li>
                                <li class="active">details de cours</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Section: Services Details -->
        @foreach ($courses as $course)
            <section>
                <div class="container mt-30 mb-30 pt-30 pb-30">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="single-service">
                                <h3 class="text-uppercase mt-0 mb-30">{{ $course->name }}</h3>
                                <img src="{{ url('storage') }}/{{ $course->photo }}" alt="">
                                <ul class="list-inline mt-20 mb-15">
                                    <li>
                                        <i class="pe-7s-user text-theme-colored2 font-48"></i>
                                        <div class="pull-right ml-5">
                                            <span>Langue</span>
                                            <h5 class="mt-0">{{ $course->languages_name }}</h5>
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
                                        <i class="pe-7s-cash text-theme-colored2 font-48"></i>
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
                                    <li><a href="#tab5" data-toggle="tab">Carrières</a></li>
                                    <li><a href="#tab3" data-toggle="tab">Télécharger</a></li>
                                    <li><a href="#tab4" data-toggle="tab">Témoignages</a></li>
                                    
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1">
                                        <h4 class="line-bottom-theme-colored2 mb-15">Details du cours</h4>

                                        <p> {!! $course->description !!}</p>
                                    </div>
                                    <div class="tab-pane fade" id="tab2">
                                        <h4 class="line-bottom-theme-colored2 mb-15">Information cours</h4>
                                        <ul class="course-info-list font-14 mt-20">
                                            <li>
                                                <span class="course-info-title">
                                                    <i
                                                        class="pe-7s-date font-26 vertical-align-middle text-theme-colored2 mr-10"></i>
                                                    Date limite :</span>
                                                <span class="course-info-details">{{ $course->datelimite }}</span>
                                            </li>
                                            <li>
                                                <span class="course-info-title">
                                                    <i
                                                        class="pe-7s-timer font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Durée:</span>
                                                <span class="course-info-details">{{ $course->duration }} Mois</span>
                                            </li>
                                            <li>
                                                <span class="course-info-title">
                                                    <i
                                                        class="pe-7s-umbrella font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Lieu:</span>
                                                <span class="course-info-details">{{ $course->location->name }}</span>
                                            </li>

                                            <li>
                                                <span class="course-info-title">
                                                    <i
                                                        class="pe-7s-diamond font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Rythme:</span>
                                                <span class="course-info-details">{{ $course->modes_name }}</span>
                                            </li>

                                            <li>
                                                <span class="course-info-title">
                                                    <i
                                                        class="pe-7s-diamond font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Modalité:</span>
                                                <span class="course-info-details">{{ $course->modalitiy_name }}</span>
                                            </li>

                                            <li>
                                                <span class="course-info-title">
                                                    <i
                                                        class="pe-7s-diamond font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Langue:</span>
                                                <span class="course-info-details">{{ $course->languages_name }}</span>
                                            </li>

                                            <li>
                                                <span class="course-info-title">
                                                    <i
                                                        class="pe-7s-diamond font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Prérequis
                                                    :</span>
                                                <br>
                                                <span class="course-info-details">{!! $course->admission !!}</span>
                                            </li>
                                            <li>
                                                <span class="course-info-title">
                                                    <i
                                                        class="pe-7s-diamond font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Dossiers
                                                    :</span>
                                                <br>
                                                <span class="course-info-details">{!! $course->dossier !!}</span>
                                            </li>
                                            <li>
                                                <span class="course-info-title">
                                                    <i
                                                        class="pe-7s-diamond font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Candidature
                                                    :</span>
                                                <br>
                                                <span class="course-info-details">{!! $course->candidature !!}</span>
                                            </li>
                                            <li>
                                                <span class="course-info-title">
                                                    <i
                                                        class="pe-7s-diamond font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Modalité
                                                    de selection:</span>
                                                <br>
                                                <span class="course-info-details">{!! $course->selection !!}</span>
                                            </li>

                                            <li>
                                                <span class="course-info-title">
                                                    <i
                                                        class="pe-7s-diamond font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Date
                                                    rentrée:</span>
                                                <br>
                                                <span class="course-info-details">{!! $course->daterentre !!}</span>
                                            </li>
                                            <li>
                                                <span class="course-info-title">
                                                    <i
                                                        class="pe-7s-diamond font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Diplôme:</span>
                                                <br>
                                                <span class="course-info-details">{!! $course->diplome !!}</span>
                                            </li>
                                            <li>
                                                <span class="course-info-title">
                                                    <i
                                                        class="pe-7s-diamond font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Compétences:</span>
                                                <br>
                                                <span class="course-info-details">{!! $course->profile !!}</span>
                                            </li>
                                            <li>
                                                <span class="course-info-title">
                                                    <i
                                                        class="pe-7s-diamond font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Débouchés:</span>
                                                <br>
                                                <span class="course-info-details">{!! $course->opportunity !!}</span>
                                            </li>
                                        </ul>
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
                                                    <a href="{{ url('storage') }}/{{ $download->file }}">Cliquer ici</a>
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                                <div><a class="btn btn-xl btn-theme-colored2 mt-30 pr-40 pl-40"
                                        href="shop-product-details.html">Je suis intéressé</a></div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="sidebar sidebar-left mt-sm-30 ml-30 ml-sm-0">
                                <div class="widget border-1px bg-silver-deep p-15">
                                    <h4 class="widget-title line-bottom-theme-colored2">Trouver une formation</h4>
                                    <div class="search-form">
                                        <form>
                                            <div class="input-group">
                                                <input type="text" placeholder="Entrer "
                                                    class="form-control search-input">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn search-button"><i
                                                            class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
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
                                <div class="widget border-1px bg-silver-deep p-15">
                                    <h4 class="widget-title line-bottom-theme-colored2">Dernières formations</h4>
                                    <div class="product-list">
                                        <div class="media">
                                         @foreach ($last_courses as $last_course )
                                             
                                         @endforeach
                                            <div class="media-body">
                                                <h5 class="media-heading product-title mb-0"><a href="#">{{$last_course->name}}</a></h5>
                                                
                                                <span class="price">{{$last_course->modalitiy_name}}</span>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="widget border-1px bg-silver-deep p-15">
                                    <h4 class="widget-title line-bottom-theme-colored2">Nous joindre</h4>
                                    <form id="quick_contact_form_sidebar" name="footer_quick_contact_form"
                                        class="quick-contact-form" action="includes/quickcontact.php" method="post">
                                        <div class="form-group">
                                            <input name="form_email" class="form-control" type="text" required=""
                                                placeholder="Votre email">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="form_message" class="form-control" required="" placeholder="Entrez un message" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input name="form_botcheck" class="form-control" type="hidden"
                                                value="" />
                                            <button type="submit"
                                                class="btn btn-default btn-flat btn-xs btn-quick-contact text-gray pt-5 pb-5"
                                                data-loading-text="Please wait...">Envoyer</button>
                                        </div>
                                    </form>

                                    <!-- Quick Contact Form Validation-->
                                    <script type="text/javascript">
                                        $("#quick_contact_form_sidebar").validate({
                                            submitHandler: function(form) {
                                                var form_btn = $(form).find('button[type="submit"]');
                                                var form_result_div = '#form-result';
                                                $(form_result_div).remove();
                                                form_btn.before(
                                                    '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
                                                );
                                                var form_btn_old_msg = form_btn.html();
                                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                                $(form).ajaxSubmit({
                                                    dataType: 'json',
                                                    success: function(data) {
                                                        if (data.status == 'true') {
                                                            $(form).find('.form-control').val('');
                                                        }
                                                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                        $(form_result_div).html(data.message).fadeIn('slow');
                                                        setTimeout(function() {
                                                            $(form_result_div).fadeOut('slow')
                                                        }, 6000);
                                                    }
                                                });
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </div>
@endsection

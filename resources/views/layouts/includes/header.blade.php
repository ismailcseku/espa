<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Imfundo - Education University School Kindergarten Learning HTML Template" />
    <meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
    <meta name="author" content="ThemeMascot" />
    <!-- Page Title -->
    <title>Cha Agadir</title>

    <!-- Favicon and Touch Icons -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{ asset('app-assets/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('app-assets/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('app-assets/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('app-assets/css/css-plugin-collections.css') }}" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link href="{{ asset('app-assets/css/menuzord-megamenu.css') }}" rel="stylesheet" />
    <link id="menuzord-menu-skins"
        href="{{ asset('app-assets/css/menuzord-skins/menuzord-boxed.css') }} rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="{{ asset('app-assets/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset('app-assets/css/preloader.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('app-assets/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('app-assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="{{ asset('app-assets/js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('app-assets/js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('app-assets/js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css" />

    <!-- CSS | Theme Color -->
    <link href="{{ asset('app-assets/css/colors/theme-skin-color-set1.css') }}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="{{ asset('app-assets/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/bootstrap.min.js') }}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{ asset('app-assets/js/jquery-plugin-collection.js') }}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{ asset('app-assets/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}></script>
<![endif]-->
</head>

<body class="has-side-panel side-panel-right fullwidth-page">
    <div id="wrapper" class="clearfix">
        <!-- preloader -->
        <div id="preloader">
            <div id="spinner">
                <img alt="" src="images/preloaders/5.gif">
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
        </div>

        <!-- Header -->
        <header id="header" class="header">
            <div class="header-top bg-theme-colored border-top-theme-colored2-2px sm-text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget">
                                <ul class="styled-icons icon-sm icon-white">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
         
                            <div class="widget">
                                <ul class="list-inline text-right flip sm-text-center">
                                    <li>
                                        <a class="text-white" href="#">FAQ</a>
                                    </li>
                                    <li class="text-white">|</li>
                                    <li>
                                        <a class="text-white" href="#">Nous joindre</a>
                                    </li>
                                    <li class="text-white">|</li>
                                    <li>
                                        <a class="text-white" href="#">0600670388</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav">
                <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                    <div class="container">
                        <nav id="menuzord-right" class="menuzord default theme-colored"><a
                                class="menuzord-brand pull-left flip mt-20 mt-sm-10 mb-sm-20 pt-5"
                                href="index-mp-layout1.html"><img src="images/logo-wide.png" alt=""></a>
                            <ul class="menuzord-menu">
                                <li class="active"><a href="{{route('course.index')}}">Formations</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Ingénieur d’État en Agronomie</a>
                                            <ul class="dropdown">
                                                <li><a href="index-mp-layout1.html">Horticulture</a></li>
                                                <li><a href="index-mp-layout3.html">Protection des Plantes</a></li>
                                                <li><a href="index-mp-layout4.html"> Architecture du Paysage</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="#">International Master</a>
                                            <ul class="dropdown">
                                                <li><a href="index-sp-layout1.html">Water & Sustainaible Horticulture
                                                        (ang)</a></li>
                                                <li><a href="index-sp-layout2.html"> Architecture du Paysage (fr)</a>
                                                </li>
                                                <li><a href="index-sp-layout3.html"> Locust Science (ang)</a></li>
                                                <li><a href="index-sp-layout4.html"> Locust Science (fr)</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="#">Licence professionnelle</a>
                                            <ul class="dropdown">
                                                <li><a href="index-dark-mp-layout1.html">Horticulture Ornementale et
                                                        Espaces verts</a></li>
                                                <li><a href="index-dark-mp-layout1.html">Aménagement du Paysage</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Technicien Spécialisé</a>
                                            <ul class="dropdown">
                                                <li><a href="index-home-variation-owl-carousel.html">Technico-Commercial
                                                        en Productions Horticoles</a></li>
                                                <li><a href="index-home-variation-owl-image-slider.html">Conditionnement
                                                        et Valorisation des Produits Agricoles</a></li>
                                                <li><a href="index-home-variation-typed-text.html">Cultures
                                                        Ornementales et Aménagement des Espaces Verts</a></li>
                                                <li><a
                                                        href="index-home-variation-video-background.html">Aquaculture</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Programme doctoral</a>
    
                                        </li>
                                        <li><a href="#">Formation Exécutive <span
                                                    class="label label-danger">New</span></a>
                                            <ul class="dropdown">
                                                <li><a href="index-home-variation-owl-carousel.html">Farm Manager</a>
                                                </li>
                                            </ul>
                                        </li>


                                    </ul>
                                </li>


                                <li><a href="#home">Ecole</a>
                                    <ul class="dropdown">
                                        <li><a href="page-course-gird.html">Mot du directeur</a></li>
                                        <li><a href="page-course-list.html">Qui sommes-nous ?</a></li>
                                        <li><a href="page-course-details.html">Corps Professoral</a></li>
                                        <li><a href="page-course-details.html">Vie Estudiantine</a></li>
                                        <li><a href="page-course-details.html">Évènements</a></li>
                                        <li><a href="page-course-details.html">Actualités</a></li>
                                        <li><a href="page-course-details.html">Médiathèque</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Recherche</a>
                                <li><a href="#">Centre d’Excellence</a>
                                <li><a href="#">Ferme Expérimentale</a>
                                <li><a href="#">Impact Cluster</a>
                                <li><a href="#">Agri-Business </a>

                                </li>


                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

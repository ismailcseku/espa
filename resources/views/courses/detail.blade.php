<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="[noindex,nofollow]">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- page title-->
    <title>Skilify - Courses Detail v2</title>
    <!-- Fav icon-->
    <link rel="icon" href="{{asset('images/img/browser-logo.png')}}" type="image/x-icon">
    <!-- Font css-->
    <link rel="stylesheet" href="{{asset('fonts/stylesheet.css')}}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/bootstrap.min.css')}}">
    <!-- slick css-->
    <link rel="stylesheet" href="{{asset('vendor/slick/slick.css')}}">
    <!-- slick theme css-->
    <link rel="stylesheet" href="{{asset('vendor/slick/slick-theme.css')}}">
    <!--  Courses Detail css-->
    <link rel="stylesheet" href="{{asset('css/course-detail.css')}}">
</head>
<body>
<!-- ======= TMB Loader Start =======-->
<div id="tmbLoader"></div>
<!-- ======= TMB Loader End =======-->
<!-- ======= Header Start =======-->
<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg"><a class="navbar-brand" href="index.html">
                <!-- header logo -->
                <svg class="header-logo" xmlns="http://www.w3.org/2000/svg" width="128" height="39"
                     viewBox="0 0 128 39">
                    <g transform="translate(0 8)">
                        <circle cx="14" cy="14" r="14" fill="#f56962"></circle>
                        <path
                            d="M8.124,0a8.124,8.124,0,0,1,8.124,8.124c0,2.167,4.182,7.153,4.182,7.153s-9.986.971-12.306.971A8.124,8.124,0,0,1,8.124,0Z"
                            transform="translate(5.57 6)" fill="#fff"></path>
                        <text transform="translate(34 21)" font-size="28" font-family="Poppins-Medium, Poppins"
                              font-weight="500" letter-spacing="0.03em">
                            <tspan x="0" y="0">Skilify</tspan>
                            {{--                            <img src="{{asset("images/logo-iav.png")}}" alt="Image Description">--}}
                        </text>
                    </g>
                </svg>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- nav bar-->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 rounded">
                    <!-- nav-item-->
                    <li class="nav-item dropdown mega-nav-item">
                        <button class="nav-link p-0 py-lg-0 py-2 dropdown-toggle d-flex align-items-center"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Home<span class="dropdown-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24">
                      <path class="header-svg-fill"
                            d="M12,15.5a1,1,0,0,1-.71-.29l-4-4A1,1,0,0,1,8.71,9.79L12,13.1l3.3-3.18a1,1,0,1,1,1.38,1.44l-4,3.86A1,1,0,0,1,12,15.5Z"></path>
                    </svg></span></button>
                        <ul class="dropdown-menu d-lg-flex start-0 justify-content-center border-0 p-lg-5">
                            <li class="px-lg-3"><a class="dropdown-item d-block overflow-hidden p-lg-0 rounded"
                                                   href="index.html">
                                    <picture class="d-none d-lg-block home-img">
                                        <source srcset="images/webp/home1.webp" type="image/webp">
                                        <img src="images/img/home1.jpg" alt="Image Description">
                                    </picture>
                                    <span class="d-lg-none">Home Version 1</span></a></li>
                            <li class="px-lg-3"><a class="dropdown-item d-block overflow-hidden p-lg-0 rounded"
                                                   href="home-version-2.html">
                                    <picture class="d-none d-lg-block home-img">
                                        <source srcset="images/webp/home2.webp" type="image/webp">
                                        <img src="images/img/home2.jpg" alt="Image Description">
                                    </picture>
                                    <span class="d-lg-none">Home Version 2</span></a></li>
                            <li class="px-lg-3"><a class="dropdown-item d-block overflow-hidden p-lg-0 rounded"
                                                   href="home-version-3.html">
                                    <picture class="d-none d-lg-block home-img">
                                        <source srcset="images/webp/home3.webp" type="image/webp">
                                        <img src="images/img/home3.jpg" alt="Image Description">
                                    </picture>
                                    <span class="d-lg-none">Home Version 3</span></a></li>
                        </ul>
                    </li>
                    <!-- nav-item-->
                    <li class="nav-item dropdown mx-lg-4 mt-lg-0 mt-2">
                        <button class="nav-link p-0 py-lg-0 py-2 dropdown-toggle d-flex align-items-center"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pages<span class="dropdown-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24">
                      <path class="header-svg-fill"
                            d="M12,15.5a1,1,0,0,1-.71-.29l-4-4A1,1,0,0,1,8.71,9.79L12,13.1l3.3-3.18a1,1,0,1,1,1.38,1.44l-4,3.86A1,1,0,0,1,12,15.5Z"></path>
                    </svg></span></button>
                        <ul class="dropdown-menu border-0">
                            <li><a class="dropdown-item" href="contactus.html">contact us</a></li>
                            <li><a class="dropdown-item" href="courses.html">Courses</a></li>
                            <li><a class="dropdown-item" href="course-detail-version1.html"> Course Detail v1</a></li>
                            <li><a class="dropdown-item" href="course-detail-version2.html"> Course Detail v2</a></li>
                            <li><a class="dropdown-item" href="teacher-profile.html">Teacher Profile</a></li>
                            <li><a class="dropdown-item" href="teacher-profile.html">Become a Teacher</a></li>
                            <li><a class="dropdown-item" href="blog.html">Blog </a></li>
                            <li><a class="dropdown-item" href="blog-detail.html"> Blog Detail</a></li>
                            <li><a class="dropdown-item" href="404.html">404 page</a></li>
                        </ul>
                    </li>
                    <!-- nav-item-->
                    <li class="nav-item dropdown mt-lg-0 mt-2">
                        <button class="nav-link p-0 py-lg-0 py-2 dropdown-toggle d-flex align-items-center"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Courses<span class="dropdown-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24">
                      <path class="header-svg-fill"
                            d="M12,15.5a1,1,0,0,1-.71-.29l-4-4A1,1,0,0,1,8.71,9.79L12,13.1l3.3-3.18a1,1,0,1,1,1.38,1.44l-4,3.86A1,1,0,0,1,12,15.5Z"></path>
                    </svg></span></button>
                        <ul class="dropdown-menu border-0">
                            <li><a class="dropdown-item" href="courses.html">All Courses</a></li>
                            <li><a class="dropdown-item" href="courses.html">Design</a></li>
                            <li><a class="dropdown-item" href="courses.html">Development</a></li>
                            <li><a class="dropdown-item" href="courses.html">Marketing</a></li>
                            <li><a class="dropdown-item" href="courses.html">Photography</a></li>
                        </ul>
                    </li>
                    <!-- nav-item-->
                    <li class="nav-item dropdown mx-lg-4 mt-lg-0 mt-2">
                        <button class="nav-link p-0 py-lg-0 py-2 dropdown-toggle d-flex align-items-center"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Features<span class="dropdown-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24">
                      <path class="header-svg-fill"
                            d="M12,15.5a1,1,0,0,1-.71-.29l-4-4A1,1,0,0,1,8.71,9.79L12,13.1l3.3-3.18a1,1,0,1,1,1.38,1.44l-4,3.86A1,1,0,0,1,12,15.5Z"></path>
                    </svg></span></button>
                        <ul class="dropdown-menu border-0">
                            <li><a class="dropdown-item" href="course-detail-version1.html">Course Detail V1</a></li>
                            <li><a class="dropdown-item" href="course-detail-version2.html">Course Detail V2</a></li>
                        </ul>
                    </li>
                    <!-- nav-item-->
                    <li class="nav-item dropdown mt-lg-0 mt-2">
                        <button class="nav-link p-0 py-lg-0 py-2 dropdown-toggle d-flex align-items-center"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Blog<span class="dropdown-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24">
                      <path class="header-svg-fill"
                            d="M12,15.5a1,1,0,0,1-.71-.29l-4-4A1,1,0,0,1,8.71,9.79L12,13.1l3.3-3.18a1,1,0,1,1,1.38,1.44l-4,3.86A1,1,0,0,1,12,15.5Z"></path>
                    </svg></span></button>
                        <ul class="dropdown-menu border-0">
                            <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                            <li><a class="dropdown-item" href="blog-detail.html">Blog details</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- header register button        --><a class="d-block d-sm-none mt-4 mx-2 btn btn-primary"
                                                         href="register.html">Register</a>
            </div>
            <div class="d-flex align-items-center">
                <!-- header search--><a class="header-search-btn btn me-2" href="courses.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path class="header-svg-fill"
                              d="M20.71,19.29l-3.4-3.39A7.92,7.92,0,0,0,19,11a8,8,0,1,0-8,8,7.92,7.92,0,0,0,4.9-1.69l3.39,3.4a1,1,0,1,0,1.42-1.42ZM5,11a6,6,0,1,1,6,6,6,6,0,0,1-6-6Z"></path>
                    </svg>
                </a>
                <!-- header cart--><a class="header-cart-btn mx-2" href="cart.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path class="header-svg-fill"
                              d="M21.08,7a2,2,0,0,0-1.7-1H6.58L6,3.74A1,1,0,0,0,5,3H3A1,1,0,0,0,3,5H4.24L7,15.26A1,1,0,0,0,8,16h9a1,1,0,0,0,.89-.55l3.28-6.56A2,2,0,0,0,21.08,7Zm-4.7,7H8.76L7.13,8H19.38Z"></path>
                        <circle class="header-svg-fill" cx="1.5" cy="1.5" r="1.5" transform="translate(6 18)"></circle>
                        <circle class="header-svg-fill" cx="1.5" cy="1.5" r="1.5" transform="translate(16 18)"></circle>
                    </svg>
                </a>
                <!-- header toggle button-->
                <button class="navbar-toggler ms-2 collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"></button>
                <!-- header register button--><a class="btn btn-primary d-none d-sm-block ms-4" href="register.html">Register</a>
            </div>
        </nav>
    </div>
</header>
<!-- ******* Header End *******-->
<!-- ======= Main page Content Start =======-->
<main class="main-page-content main-top-gap">
    <!-- Course detail slider sec Start-->
    <section class="course-detail-v2-main-sec position-relative pb-8">
        <!-- course detail banner-->
        <div class="course-detail-item course-detail-banner pt-8 bg-primary">
            <div class="container">
                <h2 class="sec-heading">{{$course->name}}</h2>
                <div class="d-flex justify-content-between flex-wrap flex-lg-nowrap">
                    <p class="sec-brief mt-4 mb-4 me-lg-5">{!!$course->degree->name!!}</p>
                    <div class="course-related-info-list d-flex flex-wrap align-items-center">
                        <!-- rating -->
                        <div class="corse-info-item d-flex align-items-center me-3 my-2"><img class="me-1"
                                                                                              src="{{asset('images/svg/gold-star.svg')}}"
                                                                                              alt="{{asset('images/svg/gold-star.svg')}}Image Description"><span
                                class="corse-info-txt">4.5 (1,348 ratings)</span></div>
                        <!-- views-->
                        <div class="corse-info-item d-flex align-items-center me-3 my-2"><img class="me-1"
                                                                                              src="storage/{{$course->photo}}"
                                                                                              alt="Image Description"><span
                                class="corse-info-txt">Enrolled 45 students</span></div>
                        <!-- Time-->
                        <div class="corse-info-item d-flex align-items-center me-3 my-2"><img class="me-1"
                                                                                              src="{{asset('images/svg/time-icon.svg')}}"
                                                                                              alt="Image Description"><span
                                class="corse-info-txt">Duration 10 week</span></div>
                        <!-- lesson -->
                        <div class="corse-info-item d-flex align-items-center"><img class="me-1"
                                                                                    src="{{asset('images/svg/crd-play.svg')}}"
                                                                                    alt="{{asset('images/svg/gold-star.svg')}}Image Description"><span
                                class="corse-info-txt">36 Lession</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="course-detail-grid position-relative">
                <!-- big Image-->
                <div class="course-detail-big-img">

                    <picture>
                        <source srcset="{{asset("storage/$course->photo")}}" type="image/webp">
                        <img class="cover w-100" src="{{asset("storage/$course->photo")}}" alt="crd-image">
                    </picture>
                </div>
                <!-- course detail card -->
                <div class="course-detail-item course-detail-crd p-3">
                    <div class="course-detail-crd-content mt-3">

                        <!-- course include  -->
                        <div class="course-include">
                            <h3 class="card-title mb-3">This course includes</h3>
                            <ul class="course-include-list d-sm-flex flex-wrap d-lg-block">
                                <li class="course-include-item mb-3 me-3 d-flex align-items-center"><img class="me-3"
                                                                                                         src="{{asset('images/svg/language.svg')}}"
                                                                                                         alt="Image Description"><span
                                        class="card-text">Language : {{$course->language->name}} </span></li>
                                <li class="course-include-item mb-3 me-3 d-flex align-items-center"><img class="me-3"
                                                                                                         src="{{asset('images/svg/monitor-icon.svg')}}"
                                                                                                         alt="Image Description"><span
                                        class="card-text">Use on desktop, tablet & mobile</span></li>
                                <li class="course-include-item mb-3 me-3 d-flex align-items-center"><img class="me-3"
                                                                                                         src="{{asset('images/svg/timer.svg')}}"
                                                                                                         alt="Image Description"><span
                                        class="card-text">Full lifetime access</span></li>
                                <li class="course-include-item d-flex align-items-center"><img class="me-3"
                                                                                               src="{{asset('images/svg/timer.svg')}}"
                                                                                               alt="Image Description"><span
                                        class="card-text">Certificate of Completion </span></li>
                            </ul>
                        </div>
                        <!-- tranining people -->
                        <div class="tranining-people border-top border-bottom py-3 my-3">
                            <h4 class="card-subtitle mb-3">Training 5 or more people?</h4>
                            <p class="card-text">Get your team access to 3,500+ top courses anytime,<span
                                    class="text-focus">Contact our sale</span></p>
                        </div>
                        <!-- social icons -->
                        <div class="share-social">
                            <h4 class="card-subtitle mb-3">Share this course</h4>
                            <ul class="social-icon-list mt-3 d-flex align-items-center justify-content-between">
                                <li class="social-icon-item">
                                    <!-- instagram--><a class="d-block" href="https://www.instagram.com/">
                                        <svg class="insta-icon" xmlns="http://www.w3.org/2000/svg" width="32"
                                             height="32" viewbox="0 0 32 32">
                                            <lineargradient id="myGradient" gradienttransform="rotate(90)">
                                                <stop offset="5%" stop-color="#DD2A7B"></stop>
                                                <stop offset="95%" stop-color="#8134AF"></stop>
                                            </lineargradient>
                                            <path
                                                d="M150.715,137.679a3.154,3.154,0,0,0-1.807-1.807,5.269,5.269,0,0,0-1.768-.328c-1-.046-1.306-.056-3.848-.056s-2.844.01-3.848.055a5.273,5.273,0,0,0-1.768.328,3.155,3.155,0,0,0-1.808,1.807,5.271,5.271,0,0,0-.328,1.768c-.046,1-.056,1.305-.056,3.848s.01,2.844.056,3.848a5.27,5.27,0,0,0,.328,1.768,3.154,3.154,0,0,0,1.807,1.807,5.262,5.262,0,0,0,1.768.328c1,.046,1.305.055,3.848.055s2.844-.01,3.848-.055a5.262,5.262,0,0,0,1.768-.328,3.154,3.154,0,0,0,1.807-1.807,5.274,5.274,0,0,0,.328-1.768c.046-1,.055-1.306.055-3.848s-.01-2.844-.055-3.848A5.262,5.262,0,0,0,150.715,137.679Zm-7.424,10.506a4.89,4.89,0,1,1,4.89-4.89A4.89,4.89,0,0,1,143.292,148.185Zm5.083-8.831a1.143,1.143,0,1,1,1.143-1.143A1.143,1.143,0,0,1,148.375,139.355Zm0,0"
                                                transform="translate(-127.292 -127.295)"></path>
                                            <path
                                                d="M213.349,210.174A3.174,3.174,0,1,1,210.174,207,3.174,3.174,0,0,1,213.349,210.174Zm0,0"
                                                transform="translate(-194.174 -194.174)"></path>
                                            <path
                                                d="M29.692,0H2.308A2.308,2.308,0,0,0,0,2.308V29.692A2.308,2.308,0,0,0,2.308,32H29.692A2.308,2.308,0,0,0,32,29.692V2.308A2.308,2.308,0,0,0,29.692,0Zm-4.56,19.788a6.741,6.741,0,0,1-.427,2.23,4.7,4.7,0,0,1-2.687,2.687,6.745,6.745,0,0,1-2.23.427c-.98.045-1.293.055-3.788.055s-2.808-.011-3.788-.055a6.745,6.745,0,0,1-2.23-.427A4.7,4.7,0,0,1,7.3,22.018a6.739,6.739,0,0,1-.427-2.23c-.045-.98-.056-1.293-.056-3.788s.01-2.808.055-3.788a6.741,6.741,0,0,1,.427-2.23A4.7,4.7,0,0,1,9.982,7.295a6.747,6.747,0,0,1,2.23-.427c.98-.045,1.293-.055,3.788-.055s2.808.011,3.788.056a6.748,6.748,0,0,1,2.23.427,4.7,4.7,0,0,1,2.687,2.687,6.74,6.74,0,0,1,.427,2.23c.045.98.055,1.293.055,3.788S25.177,18.808,25.132,19.788Zm0,0"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social-icon-item">
                                    <!-- facebook--><a class="d-block" href="https://www.facebook.com/">
                                        <svg class="fb-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                             viewbox="0 0 32 32">
                                            <path
                                                d="M29.692,0H2.308A2.308,2.308,0,0,0,0,2.308V29.692A2.308,2.308,0,0,0,2.308,32H17.094V19.625H12.938V14.781h4.156V11.217c0-4.134,2.524-6.384,6.211-6.384a34.181,34.181,0,0,1,3.726.19V9.344H24.489c-2.006,0-2.395.953-2.395,2.353v3.085h4.8l-.625,4.844H22.094V32h7.6A2.308,2.308,0,0,0,32,29.692V2.308A2.308,2.308,0,0,0,29.692,0Zm0,0"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social-icon-item">
                                    <!-- whatsapp--><a class="d-block" href="https://www.whatsapp.com/">
                                        <svg class="whatsapp" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                             viewbox="0 0 32 32">
                                            <path
                                                d="M142.077,124.469a7.97,7.97,0,0,0-8.006,7.912,7.83,7.83,0,0,0,1.224,4.211l.19.3-.809,2.92,3.029-.786.292.171a8.058,8.058,0,0,0,4.073,1.1h0a7.97,7.97,0,0,0,8-7.913,7.821,7.821,0,0,0-2.342-5.6A8,8,0,0,0,142.077,124.469Zm4.707,11.314a2.479,2.479,0,0,1-1.624,1.131,3.337,3.337,0,0,1-1.515-.094,13.988,13.988,0,0,1-1.372-.5,10.678,10.678,0,0,1-4.11-3.592,4.6,4.6,0,0,1-.982-2.461,2.655,2.655,0,0,1,.842-1.984.889.889,0,0,1,.642-.3c.16,0,.321,0,.461.008s.346-.056.541.408.682,1.647.742,1.766a.435.435,0,0,1,.02.417,8.607,8.607,0,0,1-.6.814c-.106.131-.246.247-.106.486a7.186,7.186,0,0,0,1.338,1.648A6.593,6.593,0,0,0,143,134.711c.24.119.381.1.521-.059s.6-.695.762-.933.321-.2.541-.119,1.4.655,1.644.774.4.179.461.278A1.964,1.964,0,0,1,146.784,135.783Zm0,0"
                                                transform="translate(-125.736 -116.647)"></path>
                                            <path
                                                d="M29.692,0H2.308A2.308,2.308,0,0,0,0,2.308V29.692A2.308,2.308,0,0,0,2.308,32H29.692A2.308,2.308,0,0,0,32,29.692V2.308A2.308,2.308,0,0,0,29.692,0ZM16.339,25.316h0a9.572,9.572,0,0,1-4.576-1.165L6.682,25.482l1.359-4.961a9.577,9.577,0,1,1,8.3,4.795Zm0,0"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social-icon-item">
                                    <!-- twitter--><a class="d-block" href="https://twitter.com/">
                                        <svg class="twitter" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                             viewbox="0 0 32 32">
                                            <path
                                                d="M29.692,0H2.308A2.308,2.308,0,0,0,0,2.308V29.692A2.308,2.308,0,0,0,2.308,32H29.692A2.308,2.308,0,0,0,32,29.692V2.308A2.308,2.308,0,0,0,29.692,0ZM23.305,12.475q.011.236.01.475A10.378,10.378,0,0,1,12.867,23.4h0a10.4,10.4,0,0,1-5.629-1.65,7.47,7.47,0,0,0,.876.051,7.369,7.369,0,0,0,4.561-1.572,3.677,3.677,0,0,1-3.431-2.551,3.66,3.66,0,0,0,1.659-.063,3.673,3.673,0,0,1-2.946-3.6c0-.017,0-.031,0-.047a3.647,3.647,0,0,0,1.663.459,3.676,3.676,0,0,1-1.137-4.9,10.427,10.427,0,0,0,7.57,3.837,3.674,3.674,0,0,1,6.258-3.349,7.366,7.366,0,0,0,2.332-.891,3.687,3.687,0,0,1-1.615,2.031,7.324,7.324,0,0,0,2.109-.578A7.463,7.463,0,0,1,23.305,12.475Zm0,0"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social-icon-item">
                                    <!-- indeed--><a class="d-block" href="https://in.indeed.com/">
                                        <svg class="indeed" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                             viewbox="0 0 32 32">
                                            <path
                                                d="M29.692,0H2.308A2.308,2.308,0,0,0,0,2.308V29.692A2.308,2.308,0,0,0,2.308,32H29.692A2.308,2.308,0,0,0,32,29.692V2.308A2.308,2.308,0,0,0,29.692,0ZM11.351,24.188h-3.9V12.464h3.9ZM9.4,10.863H9.377a2.031,2.031,0,1,1,.051-4.051A2.032,2.032,0,1,1,9.4,10.863Zm16,13.324h-3.9V17.916c0-1.576-.564-2.651-1.974-2.651a2.133,2.133,0,0,0-2,1.425,2.668,2.668,0,0,0-.128.951v6.547h-3.9s.051-10.624,0-11.723h3.9v1.66a3.869,3.869,0,0,1,3.512-1.935c2.564,0,4.486,1.676,4.486,5.276Zm0,0"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social-icon-item">
                                    <!-- youtube--><a class="d-block" href="https://www.youtube.com/">
                                        <svg class="youtube" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                             viewbox="0 0 32 32">
                                            <path d="M224.113,214.078l5.243-3.02-5.243-3.02Zm0,0"
                                                  transform="translate(-210.126 -195.059)"></path>
                                            <path
                                                d="M29.692,0H2.308A2.308,2.308,0,0,0,0,2.308V29.692A2.308,2.308,0,0,0,2.308,32H29.692A2.308,2.308,0,0,0,32,29.692V2.308A2.308,2.308,0,0,0,29.692,0ZM26,16.016a26.408,26.408,0,0,1-.412,4.81,2.505,2.505,0,0,1-1.762,1.762C22.259,23,16,23,16,23s-6.242,0-7.823-.428a2.506,2.506,0,0,1-1.762-1.762A26.292,26.292,0,0,1,6,16a26.39,26.39,0,0,1,.412-4.809A2.556,2.556,0,0,1,8.177,9.412C9.741,9,16,9,16,9s6.259,0,7.823.428a2.506,2.506,0,0,1,1.762,1.762A25.06,25.06,0,0,1,26,16.016Zm0,0"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social-icon-item">
                                    <!-- reddit--><a class="d-block" href="https://www.reddit.com/">
                                        <svg class="reddit" xmlns="http://www.w3.org/2000/svg" width="31.997"
                                             height="31.997" viewbox="0 0 31.997 31.997">
                                            <path
                                                d="M173.982,257.667a1.667,1.667,0,1,0-1.667,1.667A1.67,1.67,0,0,0,173.982,257.667Zm0,0"
                                                transform="translate(-159.984 -240.001)"></path>
                                            <path
                                                d="M198.114,341.439a6.244,6.244,0,0,1-6.693,0,.432.432,0,0,0-.611.611c1.136,1.136,3.318,1.225,3.957,1.225s2.819-.09,3.958-1.225a.437.437,0,0,0,0-.611A.431.431,0,0,0,198.114,341.439Zm0,0"
                                                transform="translate(-178.765 -319.981)"></path>
                                            <path
                                                d="M289.667,256a1.667,1.667,0,1,0,1.667,1.667A1.67,1.67,0,0,0,289.667,256Zm0,0"
                                                transform="translate(-270.001 -240.001)"></path>
                                            <path
                                                d="M29.69,0H2.308A2.308,2.308,0,0,0,0,2.308V29.69A2.308,2.308,0,0,0,2.308,32H29.69A2.308,2.308,0,0,0,32,29.69V2.308A2.308,2.308,0,0,0,29.69,0ZM25.281,18.133a4.642,4.642,0,0,1,.054.7c0,3.59-4.179,6.5-9.334,6.5s-9.334-2.909-9.334-6.5a4.694,4.694,0,0,1,.054-.707,2.332,2.332,0,1,1,2.566-3.811,11.44,11.44,0,0,1,6.352-1.978c0-.032,1.165-5.58,1.165-5.58a.411.411,0,0,1,.179-.262.416.416,0,0,1,.314-.058l3.878.825a1.667,1.667,0,1,1-.17.816L17.534,7.34l-1.062,5a11.414,11.414,0,0,1,6.239,1.981A2.331,2.331,0,0,1,26.663,16,2.343,2.343,0,0,1,25.281,18.133Zm0,0"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- course detail tabs-->
                <div class="course-detail-item course-detail-accodians mt-8 mt-lg-5">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <!-- first tab-->
                        <li class="me-4 my-2" role="presentation">
                            <button class="btn btn-secondary active" id="pills-overview-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-overview" type="button" role="tab"
                                    aria-controls="pills-overview" aria-selected="true">PRESENTATION
                            </button>
                        </li>
                        <!-- second tab-->
                        <li class="me-4 my-2" role="presentation">
                            <button class="btn btn-secondary" id="pills-curriculum-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-curriculum" type="button" role="tab"
                                    aria-controls="pills-curriculum" aria-selected="false">PROGRAMME
                            </button>
                        </li>


                        <!-- Third tab-->
                        <li class="me-4 my-2" role="presentation">
                            <button class="btn btn-secondary" id="pills-instructor-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-instructor" type="button" role="tab"
                                    aria-controls="pills-instructor" aria-selected="false">ADMISSION
                            </button>
                        </li>
                        <!-- fourth tab -->
                        <li class="me-4 my-2" role="presentation">
                            <button class="btn btn-secondary" id="pills-review-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-review" type="button" role="tab" aria-controls="pills-review"
                                    aria-selected="false">CARRIERE
                            </button>
                        </li>
                        <!-- second tab bis TELECHARGEMENT-->
                        <li class="my-2" role="presentation">
                            <button class="btn btn-secondary" id="pills-curriculum1-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-curriculum1" type="button" role="tab"
                                    aria-controls="pills-curriculum1" aria-selected="false">TELECHARGEMENT
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content mt-5" id="pills-tabContent">
                        <!-- first pill-->
                        <div class="tab-pane fade show active" id="pills-overview" role="tabpanel"
                             aria-labelledby="pills-overview-tab">
                            <ul class="overview-list">
                                <li class="overview-item">
                                    <h3 class="card-title">Description</h3>
                                    <p class="card-text">{!! $course->description !!}</p>
                                </li>
                                @if($course->duration)
                                    <li class="overview-item mt-4">
                                        <h3 class="card-title">Durée</h3>
                                        <p class="card-text">{{$course->duration}} mois</p>
                                    </li>
                                @endif
                                <li class="overview-item mt-4">
                                    <h3 class="card-title">Lieu</h3>
                                    <p class="card-text">{{$course->location->name}}</p>
                                </li>
                                <li class="overview-item mt-4">
                                    <h3 class="card-title">Rythme</h3>
                                    <p class="card-text">{{$course->mode->name}}</p>
                                </li>
                                <li class="overview-item mt-4">
                                    <h3 class="card-title">Langue</h3>
                                    <p class="card-text">{{$course->language->name}}</p>
                                </li>
                            </ul>
                        </div>
                        <!-- Second pill-->
                        <div class="tab-pane fade" id="pills-curriculum" role="tabpanel"
                             aria-labelledby="pills-curriculum-tab">
                            @foreach($course->programs as $courseprogram)
                                <div class="accordion course-detail-accordion" id="accordionExample">

                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingThree-{{$courseprogram->id}}">
                                            <button class="accordion-button collapsed justify-content-between"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree-{{$courseprogram->id}}"
                                                    aria-expanded="false"
                                                    aria-controls="collapseThree"><span
                                                    class="card-subtitle">{!! $courseprogram->title !!}</span><span
                                                    @if($courseprogram->hours)
                                                        class="d-none d-sm-block card-text">{{$courseprogram->hours}} Heures</span>
                                                @endif
                                            </button>
                                        </div>
                                        <div class="accordion-collapse collapse"
                                             id="collapseThree-{{$courseprogram->id}}"
                                             aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                {!! $courseprogram->description !!}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>

                        <!-- Third pill-->
                        <div class="tab-pane fade bg-primary p-3" id="pills-instructor" role="tabpanel"
                             aria-labelledby="pills-instructor-tab">
                            <ul class="overview-list">
                                <li class="overview-item">
                                    @if($course->admission)
                                        <h3 class="card-title">Prérequis et admission</h3>
                                        <p class="card-text">{!! $course->admission !!}</p>
                                </li>
                                @endif

                                @if($course->dossier)
                                    <li class="overview-item mt-4">
                                        <h3 class="card-title">Dossier</h3>
                                        <p class="card-text">{!!$course->dossier!!} mois</p>
                                    </li>
                                @endif

                                @if($course->candidature)
                                    <li class="overview-item mt-4">
                                        <h3 class="card-title">Candidature</h3>
                                        <p class="card-text">{!!$course->candidature!!}</p>
                                    </li>
                                @endif

                                @if($course->selection)
                                    <li class="overview-item mt-4">
                                        <h3 class="card-title">Modalités de sélection</h3>
                                        <p class="card-text">{!!$course->selection!!}</p>
                                    </li>
                                @endif

                                @if($course->daterentre)
                                    <li class="overview-item mt-4">
                                        <h3 class="card-title">Prochaine rentrée</h3>
                                        <p class="card-text">{{$course->daterentre}}</p>
                                    </li>
                                @endif

                                @if($course->datelimite)
                                    <li class="overview-item mt-4">
                                        <h3 class="card-title">Date limite</h3>
                                        <p class="card-text">{{$course->datelimite->diffForHumans()}}</p>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <!-- Fourth pill-->
                        <div class="tab-pane fade bg-primary p-3" id="pills-review" role="tabpanel"
                             aria-labelledby="pills-review-tab">
                            <ul class="overview-list">

                                @if($course->grade)
                                    <li class="overview-item">
                                        <h3 class="card-title">Diplôme</h3>
                                        <p class="card-text">{!! $course->grade !!}</p>
                                    </li>
                                @endif

                                @if($course->profile)
                                    <li class="overview-item mt-4">
                                        <h3 class="card-title">Profil / Compétences à acquérir</h3>
                                        <p class="card-text">{!!$course->profile!!} mois</p>
                                    </li>
                                @endif

                                @if($course->opportunity)
                                    <li class="overview-item mt-4">
                                        <h3 class="card-title">Débouchés</h3>
                                        <p class="card-text">{!!$course->opportunity!!}</p>
                                    </li>
                                @endif


                            </ul>
                        </div>

                        <!-- Second pill bis TELECHARGEMENT-->
                        
                        <div class="tab-pane fade" id="pills-curriculum1" role="tabpanel"
                             aria-labelledby="pills-curriculum1-tab">
                            @foreach($course->downloads as $coursedownload)
                                <div class="accordion course-detail-accordion" id="accordionExample">

                                    <div class="accordion-item">
                                        <div class="accordion-header" id="headingThree-{{$coursedownload->id}}">
                                            <button class="accordion-button collapsed justify-content-between"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree-{{$coursedownload->id}}"
                                                    aria-expanded="false"
                                                    aria-controls="collapseThree"><span
                                                    class="card-subtitle">{{ $coursedownload->name }}</span><span
                                                    
                                            </button>
                                        </div>
                                        <div class="accordion-collapse collapse"
                                             id="collapseThree-{{$coursedownload->id}}"
                                             aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <a href="https://cha-agadir.ma/storage/{{ $coursedownload->file }}" download>
                                                    <h2>{{ $coursedownload->file }}</h2> 
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Course card slider sec End-->
    <!-- Course card slider sec Start-->
    <section class="crd-slider-sec py-8 custom-slider-btn custom-slider-dots bg-secondary">
        <div class="container">
            <div class="sec-header mb-5 d-md-flex align-items-center justify-content-between text-center text-md-start">
                <h2 class="m-0 sec-heading">Get choice of your course</h2>
                <div class="sec-header-btn mt-4 m-md-0"><a class="btn btn-primary" href="courses.html">View all</a>
                </div>
            </div>
            <div class="sec-content">
                <div class="crd-slider-list">
                    <div class="crd-item">
                        <div class="course-card">
                            <div class="crd-img-wrap position-relative">
                                <button class="wish-heart" type="button">
                                    <svg class="heart__svg" height="20px" viewbox="0 -20 480 480" width="25px"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path class="heart__path"
                                              d="m348 8c-44.773438.003906-86.066406 24.164062-108 63.199219-21.933594-39.035157-63.226562-63.195313-108-63.199219-68.480469 0-124 63.519531-124 132 0 172 232 292 232 292s232-120 232-292c0-68.480469-55.519531-132-124-132zm0 0"></path>
                                        <path class="heart__stroke"
                                              d="m348 0c-43 .0664062-83.28125 21.039062-108 56.222656-24.71875-35.183594-65-56.1562498-108-56.222656-70.320312 0-132 65.425781-132 140 0 72.679688 41.039062 147.535156 118.6875 216.480469 35.976562 31.882812 75.441406 59.597656 117.640625 82.625 2.304687 1.1875 5.039063 1.1875 7.34375 0 42.183594-23.027344 81.636719-50.746094 117.601563-82.625 77.6875-68.945313 118.726562-143.800781 118.726562-216.480469 0-74.574219-61.679688-140-132-140zm-108 422.902344c-29.382812-16.214844-224-129.496094-224-282.902344 0-66.054688 54.199219-124 116-124 41.867188.074219 80.460938 22.660156 101.03125 59.128906 1.539062 2.351563 4.160156 3.765625 6.96875 3.765625s5.429688-1.414062 6.96875-3.765625c20.570312-36.46875 59.164062-59.054687 101.03125-59.128906 61.800781 0 116 57.945312 116 124 0 153.40625-194.617188 266.6875-224 282.902344zm0 0"></path>
                                    </svg>
                                </button>
                                <a href="course-detail-version1.html">
                                    <picture>
                                        <source srcset="images/webp/crd-img.webp" type="image/webp">
                                        <img class="crd-img" src="images/img/crd-img.jpg" alt="Image Description">
                                    </picture>
                                </a>
                            </div>
                            <div class="crd-content">
                                <div class="crd-info py-2 d-flex align-items-center justify-content-between">
                                    <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                              src="images/svg/star.svg"
                                                                                              alt="Image Description"><span
                                            class="crd-info-txt">4.5</span></div>
                                    <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                              src="images/svg/crd-view.svg"
                                                                                              alt="Image Description"><span
                                            class="crd-info-txt">49,00</span></div>
                                    <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                              src="images/svg/crd-play.svg"
                                                                                              alt="Image Description"><span
                                            class="crd-info-txt">9</span></div>
                                </div>
                                <a href="course-detail-version1.html">
                                    <h3 class="card-title my-3">Learn Python Programming Beginner</h3></a>
                                <div class="crd-bottom d-flex align-items-center justify-content-between"><a
                                        class="crd-profile d-flex align-items-center" href="teacher-profile.html">
                                        <picture>
                                            <source srcset="images/webp/profile-img1.webp" type="image/webp">
                                            <img src="images/img/profile-img1.jpg" alt="Image Description">
                                        </picture>
                                        <span class="profile-name ms-2">Petey Cruiser</span></a>
                                    <div class="crd-price d-flex align-items-baseline">
                                        <del class="me-2">$200.00</del>
                                        <span>$150.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="crd-item">
                        <div class="course-card">
                            <div class="crd-img-wrap position-relative">
                                <button class="wish-heart" type="button">
                                    <svg class="heart__svg" height="20px" viewbox="0 -20 480 480" width="25px"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path class="heart__path"
                                              d="m348 8c-44.773438.003906-86.066406 24.164062-108 63.199219-21.933594-39.035157-63.226562-63.195313-108-63.199219-68.480469 0-124 63.519531-124 132 0 172 232 292 232 292s232-120 232-292c0-68.480469-55.519531-132-124-132zm0 0"></path>
                                        <path class="heart__stroke"
                                              d="m348 0c-43 .0664062-83.28125 21.039062-108 56.222656-24.71875-35.183594-65-56.1562498-108-56.222656-70.320312 0-132 65.425781-132 140 0 72.679688 41.039062 147.535156 118.6875 216.480469 35.976562 31.882812 75.441406 59.597656 117.640625 82.625 2.304687 1.1875 5.039063 1.1875 7.34375 0 42.183594-23.027344 81.636719-50.746094 117.601563-82.625 77.6875-68.945313 118.726562-143.800781 118.726562-216.480469 0-74.574219-61.679688-140-132-140zm-108 422.902344c-29.382812-16.214844-224-129.496094-224-282.902344 0-66.054688 54.199219-124 116-124 41.867188.074219 80.460938 22.660156 101.03125 59.128906 1.539062 2.351563 4.160156 3.765625 6.96875 3.765625s5.429688-1.414062 6.96875-3.765625c20.570312-36.46875 59.164062-59.054687 101.03125-59.128906 61.800781 0 116 57.945312 116 124 0 153.40625-194.617188 266.6875-224 282.902344zm0 0"></path>
                                    </svg>
                                </button>
                                <a href="course-detail-version1.html">
                                    <picture>
                                        <source srcset="images/webp/crd-img2.webp" type="image/webp">
                                        <img class="crd-img" src="images/img/crd-img2.jpg" alt="Image Description">
                                    </picture>
                                </a>
                            </div>
                            <div class="crd-content">
                                <div class="crd-info py-2 d-flex align-items-center justify-content-between">
                                    <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                              src="images/svg/star.svg"
                                                                                              alt="Image Description"><span
                                            class="crd-info-txt">4.3</span></div>
                                    <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                              src="images/svg/crd-view.svg"
                                                                                              alt="Image Description"><span
                                            class="crd-info-txt">23,00</span></div>
                                    <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                              src="images/svg/crd-play.svg"
                                                                                              alt="Image Description"><span
                                            class="crd-info-txt">7</span></div>
                                </div>
                                <a href="course-detail-version1.html">
                                    <h3 class="card-title my-3">Statistics Data Science and Business Analysis</h3></a>
                                <div class="crd-bottom d-flex align-items-center justify-content-between"><a
                                        class="crd-profile d-flex align-items-center" href="teacher-profile.html">
                                        <picture>
                                            <source srcset="images/webp/profile-img.webp" type="image/webp">
                                            <img src="images/img/profile-img.jpg" alt="Image Description">
                                        </picture>
                                        <span class="profile-name ms-2">Nicole Brown</span></a>
                                    <div class="crd-price d-flex align-items-baseline">
                                        <del class="me-2">$150</del>
                                        <span>$99.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="crd-item">
                        <div class="course-card">
                            <div class="crd-img-wrap position-relative">
                                <button class="wish-heart" type="button">
                                    <svg class="heart__svg" height="20px" viewbox="0 -20 480 480" width="25px"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path class="heart__path"
                                              d="m348 8c-44.773438.003906-86.066406 24.164062-108 63.199219-21.933594-39.035157-63.226562-63.195313-108-63.199219-68.480469 0-124 63.519531-124 132 0 172 232 292 232 292s232-120 232-292c0-68.480469-55.519531-132-124-132zm0 0"></path>
                                        <path class="heart__stroke"
                                              d="m348 0c-43 .0664062-83.28125 21.039062-108 56.222656-24.71875-35.183594-65-56.1562498-108-56.222656-70.320312 0-132 65.425781-132 140 0 72.679688 41.039062 147.535156 118.6875 216.480469 35.976562 31.882812 75.441406 59.597656 117.640625 82.625 2.304687 1.1875 5.039063 1.1875 7.34375 0 42.183594-23.027344 81.636719-50.746094 117.601563-82.625 77.6875-68.945313 118.726562-143.800781 118.726562-216.480469 0-74.574219-61.679688-140-132-140zm-108 422.902344c-29.382812-16.214844-224-129.496094-224-282.902344 0-66.054688 54.199219-124 116-124 41.867188.074219 80.460938 22.660156 101.03125 59.128906 1.539062 2.351563 4.160156 3.765625 6.96875 3.765625s5.429688-1.414062 6.96875-3.765625c20.570312-36.46875 59.164062-59.054687 101.03125-59.128906 61.800781 0 116 57.945312 116 124 0 153.40625-194.617188 266.6875-224 282.902344zm0 0"></path>
                                    </svg>
                                </button>
                                <a href="course-detail-version1.html">
                                    <picture>
                                        <source srcset="images/webp/crd-img3.webp" type="image/webp">
                                        <img class="crd-img" src="images/img/crd-img3.jpg" alt="Image Description">
                                    </picture>
                                </a>
                            </div>
                            <div class="crd-content">
                                <div class="crd-info py-2 d-flex align-items-center justify-content-between">
                                    <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                              src="images/svg/star.svg"
                                                                                              alt="Image Description"><span
                                            class="crd-info-txt">4.7</span></div>
                                    <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                              src="images/svg/crd-view.svg"
                                                                                              alt="Image Description"><span
                                            class="crd-info-txt">70,00</span></div>
                                    <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                              src="images/svg/crd-play.svg"
                                                                                              alt="Image Description"><span
                                            class="crd-info-txt">15</span></div>
                                </div>
                                <a href="course-detail-version1.html">
                                    <h3 class="card-title my-3">Learn HTML5 Programming Beginning</h3></a>
                                <div class="crd-bottom d-flex align-items-center justify-content-between"><a
                                        class="crd-profile d-flex align-items-center" href="teacher-profile.html">
                                        <picture>
                                            <source srcset="images/webp/profile-img2.webp" type="image/webp">
                                            <img src="images/img/profile-img2.jpg" alt="Image Description">
                                        </picture>
                                        <span class="profile-name ms-2">Anna Sthesia</span></a>
                                    <div class="crd-price d-flex align-items-baseline">
                                        <del class="me-2">$100.00</del>
                                        <span>$70.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="crd-item">
                        <div class="course-card">
                            <div class="crd-img-wrap position-relative">
                                <button class="wish-heart" type="button">
                                    <svg class="heart__svg" height="20px" viewbox="0 -20 480 480" width="25px"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path class="heart__path"
                                              d="m348 8c-44.773438.003906-86.066406 24.164062-108 63.199219-21.933594-39.035157-63.226562-63.195313-108-63.199219-68.480469 0-124 63.519531-124 132 0 172 232 292 232 292s232-120 232-292c0-68.480469-55.519531-132-124-132zm0 0"></path>
                                        <path class="heart__stroke"
                                              d="m348 0c-43 .0664062-83.28125 21.039062-108 56.222656-24.71875-35.183594-65-56.1562498-108-56.222656-70.320312 0-132 65.425781-132 140 0 72.679688 41.039062 147.535156 118.6875 216.480469 35.976562 31.882812 75.441406 59.597656 117.640625 82.625 2.304687 1.1875 5.039063 1.1875 7.34375 0 42.183594-23.027344 81.636719-50.746094 117.601563-82.625 77.6875-68.945313 118.726562-143.800781 118.726562-216.480469 0-74.574219-61.679688-140-132-140zm-108 422.902344c-29.382812-16.214844-224-129.496094-224-282.902344 0-66.054688 54.199219-124 116-124 41.867188.074219 80.460938 22.660156 101.03125 59.128906 1.539062 2.351563 4.160156 3.765625 6.96875 3.765625s5.429688-1.414062 6.96875-3.765625c20.570312-36.46875 59.164062-59.054687 101.03125-59.128906 61.800781 0 116 57.945312 116 124 0 153.40625-194.617188 266.6875-224 282.902344zm0 0"></path>
                                    </svg>
                                </button>
                                <a href="course-detail-version1.html">
                                    <picture>
                                        <source srcset="images/webp/crd-img3.webp" type="image/webp">
                                        <img class="crd-img" src="images/img/crd-img3.jpg" alt="Image Description">
                                    </picture>
                                </a>
                            </div>
                            <div class="crd-content">
                                <div class="crd-info py-2 d-flex align-items-center justify-content-between">
                                    <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                              src="images/svg/star.svg"
                                                                                              alt="Image Description"><span
                                            class="crd-info-txt">4.2</span></div>
                                    <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                              src="images/svg/crd-view.svg"
                                                                                              alt="Image Description"><span
                                            class="crd-info-txt">35,00</span></div>
                                    <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                              src="images/svg/crd-play.svg"
                                                                                              alt="Image Description"><span
                                            class="crd-info-txt">12</span></div>
                                </div>
                                <a href="course-detail-version1.html">
                                    <h3 class="card-title my-3">Software Development From A to Z Beginner </h3></a>
                                <div class="crd-bottom d-flex align-items-center justify-content-between"><a
                                        class="crd-profile d-flex align-items-center" href="teacher-profile.html">
                                        <picture>
                                            <source srcset="images/webp/profile-img3.webp" type="image/webp">
                                            <img src="images/img/profile-img3.jpg" alt="Image Description">
                                        </picture>
                                        <span class="profile-name ms-2">Anna Sthesia</span></a>
                                    <div class="crd-price d-flex align-items-baseline">
                                        <del class="me-2">$250.00</del>
                                        <span>$220.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="crd-item">
                        <div class="course-card">
                            <div class="crd-img-wrap position-relative">
                                <button class="wish-heart" type="button">
                                    <svg class="heart__svg" height="20px" viewbox="0 -20 480 480" width="25px"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path class="heart__path"
                                              d="m348 8c-44.773438.003906-86.066406 24.164062-108 63.199219-21.933594-39.035157-63.226562-63.195313-108-63.199219-68.480469 0-124 63.519531-124 132 0 172 232 292 232 292s232-120 232-292c0-68.480469-55.519531-132-124-132zm0 0"></path>
                                        <path class="heart__stroke"
                                              d="m348 0c-43 .0664062-83.28125 21.039062-108 56.222656-24.71875-35.183594-65-56.1562498-108-56.222656-70.320312 0-132 65.425781-132 140 0 72.679688 41.039062 147.535156 118.6875 216.480469 35.976562 31.882812 75.441406 59.597656 117.640625 82.625 2.304687 1.1875 5.039063 1.1875 7.34375 0 42.183594-23.027344 81.636719-50.746094 117.601563-82.625 77.6875-68.945313 118.726562-143.800781 118.726562-216.480469 0-74.574219-61.679688-140-132-140zm-108 422.902344c-29.382812-16.214844-224-129.496094-224-282.902344 0-66.054688 54.199219-124 116-124 41.867188.074219 80.460938 22.660156 101.03125 59.128906 1.539062 2.351563 4.160156 3.765625 6.96875 3.765625s5.429688-1.414062 6.96875-3.765625c20.570312-36.46875 59.164062-59.054687 101.03125-59.128906 61.800781 0 116 57.945312 116 124 0 153.40625-194.617188 266.6875-224 282.902344zm0 0"></path>
                                    </svg>
                                </button>
                                <a href="course-detail-version1.html">
                                    <picture>
                                        <source srcset="images/webp/crd-img4.webp" type="image/webp">
                                        <img class="crd-img" src="images/img/crd-img4.jpg" alt="Image Description">
                                    </picture>
                                </a>
                            </div>
                            <div class="crd-content">
                                <div class="crd-info py-2 d-flex align-items-center justify-content-between">
                                    <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                              src="images/svg/star.svg"
                                                                                              alt="Image Description"><span
                                            class="crd-info-txt">4.5</span></div>
                                    <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                              src="images/svg/crd-view.svg"
                                                                                              alt="Image Description"><span
                                            class="crd-info-txt">49,00</span></div>
                                    <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                              src="images/svg/crd-play.svg"
                                                                                              alt="Image Description"><span
                                            class="crd-info-txt">9</span></div>
                                </div>
                                <a href="course-detail-version1.html">
                                    <h3 class="card-title my-3">Graphic Design Masterclass for Beginning</h3></a>
                                <div class="crd-bottom d-flex align-items-center justify-content-between"><a
                                        class="crd-profile d-flex align-items-center" href="teacher-profile.html">
                                        <picture>
                                            <source srcset="images/webp/profile-img4.webp" type="image/webp">
                                            <img src="images/img/profile-img4.jpg" alt="Image Description">
                                        </picture>
                                        <span class="profile-name ms-2">Paul Molive</span></a>
                                    <div class="crd-price d-flex align-items-baseline">
                                        <del class="me-2">$100.00</del>
                                        <span>$50.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="crd-item">
                        <div class="course-card">
                            <div class="crd-img-wrap position-relative">
                                <button class="wish-heart" type="button">
                                    <svg class="heart__svg" height="20px" viewbox="0 -20 480 480" width="25px"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path class="heart__path"
                                              d="m348 8c-44.773438.003906-86.066406 24.164062-108 63.199219-21.933594-39.035157-63.226562-63.195313-108-63.199219-68.480469 0-124 63.519531-124 132 0 172 232 292 232 292s232-120 232-292c0-68.480469-55.519531-132-124-132zm0 0"></path>
                                        <path class="heart__stroke"
                                              d="m348 0c-43 .0664062-83.28125 21.039062-108 56.222656-24.71875-35.183594-65-56.1562498-108-56.222656-70.320312 0-132 65.425781-132 140 0 72.679688 41.039062 147.535156 118.6875 216.480469 35.976562 31.882812 75.441406 59.597656 117.640625 82.625 2.304687 1.1875 5.039063 1.1875 7.34375 0 42.183594-23.027344 81.636719-50.746094 117.601563-82.625 77.6875-68.945313 118.726562-143.800781 118.726562-216.480469 0-74.574219-61.679688-140-132-140zm-108 422.902344c-29.382812-16.214844-224-129.496094-224-282.902344 0-66.054688 54.199219-124 116-124 41.867188.074219 80.460938 22.660156 101.03125 59.128906 1.539062 2.351563 4.160156 3.765625 6.96875 3.765625s5.429688-1.414062 6.96875-3.765625c20.570312-36.46875 59.164062-59.054687 101.03125-59.128906 61.800781 0 116 57.945312 116 124 0 153.40625-194.617188 266.6875-224 282.902344zm0 0"></path>
                                    </svg>
                                </button>
                                <a href="course-detail-version1.html">
                                    <picture>
                                        <source srcset="images/webp/crd-img5.webp" type="image/webp">
                                        <img class="crd-img" src="images/img/crd-img5.jpg" alt="Image Description">
                                    </picture>
                                </a>
                            </div>
                            <div class="crd-content">
                                <div class="crd-info py-2 d-flex align-items-center justify-content-between">
                                    <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                              src="images/svg/star.svg"
                                                                                              alt="Image Description"><span
                                            class="crd-info-txt">4.8</span></div>
                                    <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                              src="images/svg/crd-view.svg"
                                                                                              alt="Image Description"><span
                                            class="crd-info-txt">85,00</span></div>
                                    <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                              src="images/svg/crd-play.svg"
                                                                                              alt="Image Description"><span
                                            class="crd-info-txt">17</span></div>
                                </div>
                                <a href="course-detail-version1.html">
                                    <h3 class="card-title my-3">The Complete JavaScript Course Beginner</h3></a>
                                <div class="crd-bottom d-flex align-items-center justify-content-between"><a
                                        class="crd-profile d-flex align-items-center" href="teacher-profile.html">
                                        <picture>
                                            <source srcset="images/webp/profile-img5.webp" type="image/webp">
                                            <img src="images/img/profile-img5.jpg" alt="Image Description">
                                        </picture>
                                        <span class="profile-name ms-2">Pankaj Kumar</span></a>
                                    <div class="crd-price d-flex align-items-baseline">
                                        <del class="me-2">320.00</del>
                                        <span>$270.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slder arrows and dots-->
                <div class="crd-slider-btns d-flex justify-content-between">
                    <button class="btn slide-btn slide-prev" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24">
                            <path class="b"
                                  d="M5,11H16.86L13.23,6.64a1,1,0,0,1,1.54-1.28l5,6a1.19,1.19,0,0,1,.09.15.127.127,0,0,0,.07.13.961.961,0,0,1,0,.72.127.127,0,0,1-.07.13,1.19,1.19,0,0,1-.09.15l-5,6a1,1,0,1,1-1.54-1.28L16.86,13H5a1,1,0,0,1,0-2Z"
                                  transform="translate(0)"></path>
                        </svg>
                    </button>
                    <button class="btn slide-btn slide-next" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24">
                            <path class="b"
                                  d="M5,11H16.86L13.23,6.64a1,1,0,0,1,1.54-1.28l5,6a1.19,1.19,0,0,1,.09.15.127.127,0,0,0,.07.13.961.961,0,0,1,0,.72.127.127,0,0,1-.07.13,1.19,1.19,0,0,1-.09.15l-5,6a1,1,0,1,1-1.54-1.28L16.86,13H5a1,1,0,0,1,0-2Z"
                                  transform="translate(0)"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Course card slider sec End-->
    <!-- Know about platform sec Start-->
    <section class="testimonial-v4 py-8">
        <div class="container">
            <div class="section-content bg-primary p-md-5 p-4">
                <div class="testimonial-item row align-items-center justify-content-between">
                    <div class="col-md-6 testimonial-txt mt-4 order-2 order-md-0">
                        <h3 class="card-title mb-4 lh-lg d-inline-block">I love to learn new things and skilify has help
                            me a lot to learn more new things and new courses. </h3>
                        <p class="card-text m-0">Riaz Surti | Hearthy Foods</p>
                    </div>
                    <div class="col-md-6 testimonial-profile-img text-center">
                        <picture>
                            <source srcset="images/webp/testimonialv4-img.webp" type="image/webp">
                            <img class="m-auto m-md-0" src="images/img/testimonialv4-img.png" alt="Image Description">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Know about platform sec End-->
    <!-- Discount card sec Start-->
    <section class="disvount-crd-sec py-8 custom-slider-btn custom-slider-dots bg-secondary">
        <div class="container">
            <div class="discount-sec-content position-relative">
                <div
                    class="sec-header mb-5 d-md-flex align-items-center justify-content-between text-center text-md-start">
                    <h2 class="m-0 sec-heading">Top Education offers and deals are listed here</h2>
                    <div class="sec-header-btn mt-4 m-md-0"><a class="btn btn-primary" href="courses.html">View all</a>
                    </div>
                </div>
                <div class="discount-crd-list">
                    <div class="discount-crd-item"><a class="discount-crd bg-white p-4 blue-wave position-relative"
                                                      href="courses.html">
                            <div class="discount-crd-txt w-75">
                                <p class="card-text mb-2">Productivity Course</p>
                                <h3 class="card-title m-0">Get 12-Month Subscription</h3>
                            </div>
                            <div class="discount-crd-img position-absolute">
                                <picture>
                                    <source srcset="images/webp/discount-m-img2.webp" type="image/webp">
                                    <img src="images/img/discount-m-img2.png" alt="Image Description">
                                </picture>
                            </div>
                            <div class="discount-persent-crd position-absolute px-3 py-2">
                                <p class="card-text mb-2 text-white">Up To 50% Off</p>
                                <h4 class="card-title discount-present-txt text-white m-0">50%</h4>
                            </div>
                        </a></div>
                    <div class="discount-crd-item"><a class="discount-crd bg-white p-4 brown-wave position-relative"
                                                      href="courses.html">
                            <div class="discount-crd-txt w-75">
                                <p class="card-text mb-2">Productivity Course</p>
                                <h3 class="card-title m-0">The Complete Personal</h3>
                            </div>
                            <div class="discount-crd-img position-absolute">
                                <picture>
                                    <source srcset="images/webp/discount-m-img.webp" type="image/webp">
                                    <img src="images/img/discount-m-img2.png" alt="Image Description">
                                </picture>
                            </div>
                            <div class="discount-persent-crd position-absolute px-3 py-2">
                                <p class="card-text mb-2 text-white">Up To 60% Off</p>
                                <h4 class="card-title discount-present-txt text-white m-0">60%</h4>
                            </div>
                        </a></div>
                    <div class="discount-crd-item"><a class="discount-crd bg-white p-4 cherry-wave position-relative"
                                                      href="courses.html">
                            <div class="discount-crd-txt w-75">
                                <p class="card-text mb-2">Productivity Course</p>
                                <h3 class="card-title m-0">Get 6-Month Subscription</h3>
                            </div>
                            <div class="discount-crd-img position-absolute">
                                <picture>
                                    <source srcset="images/webp/discount-g-img.webp" type="image/webp">
                                    <img src="images/img/discount-g-img.png" alt="Image Description">
                                </picture>
                            </div>
                            <div class="discount-persent-crd position-absolute px-3 py-2">
                                <p class="card-text mb-2 text-white">Up To 30% Off</p>
                                <h4 class="card-title discount-present-txt text-white m-0">30%</h4>
                            </div>
                        </a></div>
                    <div class="discount-crd-item"><a class="discount-crd bg-white p-4 cherry-wave position-relative"
                                                      href="courses.html">
                            <div class="discount-crd-txt w-75">
                                <p class="card-text mb-2">Productivity Course</p>
                                <h3 class="card-title m-0">The Complete Personal</h3>
                            </div>
                            <div class="discount-crd-img position-absolute">
                                <picture>
                                    <source srcset="images/webp/discount-m-img.webp" type="image/webp">
                                    <img src="images/img/discount-m-img2.png" alt="Image Description">
                                </picture>
                            </div>
                            <div class="discount-persent-crd position-absolute px-3 py-2">
                                <p class="card-text mb-2 text-white">Up To 58% Off</p>
                                <h4 class="card-title discount-present-txt text-white m-0">58%</h4>
                            </div>
                        </a></div>
                </div>
                <!-- slder arrows and dots-->
                <div class="crd-slider-btns d-flex justify-content-between">
                    <button class="btn slide-btn slide-prev" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24">
                            <path class="b"
                                  d="M5,11H16.86L13.23,6.64a1,1,0,0,1,1.54-1.28l5,6a1.19,1.19,0,0,1,.09.15.127.127,0,0,0,.07.13.961.961,0,0,1,0,.72.127.127,0,0,1-.07.13,1.19,1.19,0,0,1-.09.15l-5,6a1,1,0,1,1-1.54-1.28L16.86,13H5a1,1,0,0,1,0-2Z"
                                  transform="translate(0)"></path>
                        </svg>
                    </button>
                    <button class="btn slide-btn slide-next" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24">
                            <path class="b"
                                  d="M5,11H16.86L13.23,6.64a1,1,0,0,1,1.54-1.28l5,6a1.19,1.19,0,0,1,.09.15.127.127,0,0,0,.07.13.961.961,0,0,1,0,.72.127.127,0,0,1-.07.13,1.19,1.19,0,0,1-.09.15l-5,6a1,1,0,1,1-1.54-1.28L16.86,13H5a1,1,0,0,1,0-2Z"
                                  transform="translate(0)"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Discount card sec End-->
</main>
<!-- ======= Main page Content End =======-->
<!-- ======= Footer Start =======-->
<footer class="footer pt-5 bg-dark">
    <div class="container">
        <div class="row">
            <!-- row 1-->
            <div class="col-sm-6 col-md-3 my-3">
                <h3 class="footer-heading card-title text-white py-2 pb-md-4 active">
                    Home Pages</h3>
                <ul class="footer-links" style="height: 86px;">
                    <li><a class="footer-link" href="index.html">Home v1</a></li>
                    <li class="mt-md-3 mt-1"><a class="footer-link" href="home-version-2.html">Home v2</a></li>
                    <li class="mt-md-3 mt-1"><a class="footer-link" href="home-version-3.html">Home v3</a></li>
                </ul>
            </div>
            <!-- row 2-->
            <div class="col-sm-6 col-md-3 my-3">
                <h3 class="footer-heading card-title text-white py-2 pb-md-4">
                    Courses </h3>
                <ul class="footer-links">
                    <li><a class="footer-link" href="courses.html">All Courses</a></li>
                    <li class="mt-md-3 mt-1"><a class="footer-link" href="courses.html"> Design</a></li>
                    <li class="mt-md-3 mt-1"><a class="footer-link" href="courses.html"> Development</a></li>
                    <li class="mt-md-3 mt-1"><a class="footer-link" href="courses.html"> Marketing</a></li>
                    <li class="mt-md-3 mt-1"><a class="footer-link" href="courses.html"> Photography</a></li>
                </ul>
            </div>
            <!-- row 3-->
            <div class="col-sm-6 col-md-3 my-3">
                <h3 class="footer-heading card-title text-white py-2 pb-md-4">
                    Pages</h3>
                <ul class="footer-links">
                    <li><a class="footer-link" href="courses.html">Blog</a></li>
                    <li class="mt-md-3 mt-1"><a class="footer-link" href="blog.html">Blog Detail</a></li>
                    <li class="mt-md-3 mt-1"><a class="footer-link" href="blog-detail.html">Courses</a></li>
                    <li class="mt-md-3 mt-1"><a class="footer-link" href="contactus.html">contact us </a></li>
                    <li class="mt-md-3 mt-1"><a class="footer-link" href="teacher-profile.html"> Teacher Profile</a>
                    </li>
                    <li class="mt-md-3 mt-1"><a class="footer-link" href="404.html"> 404 page</a></li>
                </ul>
            </div>
            <!-- row 4-->
            <div class="col-sm-6 col-md-3 my-3">
                <h3 class="footer-heading card-title text-white py-2 pb-md-4">
                    Features</h3>
                <ul class="footer-links">
                    <li><a class="footer-link" href="course-detail-version1.html">Course Detail V1</a></li>
                    <li class="mt-md-3 mt-1"><a class="footer-link" href="course-detail-version2.html">Course Detail
                            V2</a></li>
                </ul>
            </div>
        </div>
        <!-- copy rigth text-->
        <div class="copy-right">
            <div class="row py-3 mt-3 text-center text-md-start align-items-center">
                <div class="col-md-8 order-2 order-md-1 mt-2 mt-md-0"><span class="copy-right-txt">© 2021 Skilify Education Private Limited. All rights reserved</span>
                </div>
                <div class="col-md-4 order-1 order-md-2 footer-socila-link">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                        <!-- facebook logo--><a href="https://www.facebook.com/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewbox="0 0 28 28">
                                <g transform="translate(-0.183 -0.183)">
                                    <path
                                        d="M19,3.592A.591.591,0,0,0,18.41,3H15.455A5.638,5.638,0,0,0,9.546,8.32v3.191H6.591A.591.591,0,0,0,6,12.1v3.073a.591.591,0,0,0,.591.591H9.546v7.919a.591.591,0,0,0,.591.591h3.546a.591.591,0,0,0,.591-.591V15.765h3.1a.591.591,0,0,0,.579-.437l.851-3.073a.591.591,0,0,0-.567-.745H14.273V8.32a1.182,1.182,0,0,1,1.182-1.064H18.41A.591.591,0,0,0,19,6.665Z"
                                        transform="translate(1.091 0.545)"></path>
                                </g>
                            </svg>
                        </a>
                        <!-- twitter logo--><a href="https://twitter.com/">
                            <svg class="mx-3" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                 viewbox="0 0 28 28">
                                <path
                                    d="M8.926,22.666A12.915,12.915,0,0,0,22.273,9.833,9.438,9.438,0,0,0,24,6.519a.513.513,0,0,0-.723-.595,2.193,2.193,0,0,1-2.52-.443,4.538,4.538,0,0,0-6.51-.2A4.818,4.818,0,0,0,12.9,9.833C9,10.066,6.313,8.211,4.166,5.668a.5.5,0,0,0-.875.28A11.293,11.293,0,0,0,8.658,17.673a7.852,7.852,0,0,1-5.215,2.66.525.525,0,0,0-.163.98,12.833,12.833,0,0,0,5.647,1.353"
                                    transform="translate(0.501 0.667)"></path>
                            </svg>
                        </a>
                        <!-- gmial logo--><a href="https://mail.google.com/mail/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewbox="0 0 28 28">
                                <path
                                    d="M20.084,16a6.428,6.428,0,0,1-5.25,4.585,7.175,7.175,0,0,1-8.167-6.358,7,7,0,0,1,7-7.56,7.14,7.14,0,0,1,2.648.513.583.583,0,0,0,.747-.245l1.68-3.092a.607.607,0,0,0-.268-.817A11.667,11.667,0,0,0,2,14.007,11.807,11.807,0,0,0,13.166,25.335a11.667,11.667,0,0,0,12.168-11.06V11.942a.6.6,0,0,0-.583-.583h-10.5a.583.583,0,0,0-.583.583v3.5a.583.583,0,0,0,.583.583h5.833"
                                    transform="translate(0.333 0.332)"></path>
                            </svg>
                        </a>
                        <!-- linkedin logo--><a href="https://www.linkedin.com/">
                            <svg class="ms-3" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                 viewbox="0 0 28 28">
                                <path
                                    d="M16.125,8.4A6.8,6.8,0,0,0,9.3,15.19v6.86a1.05,1.05,0,0,0,1.05,1.05H12.8a1.05,1.05,0,0,0,1.05-1.05V15.19a2.263,2.263,0,0,1,2.508-2.252A2.333,2.333,0,0,1,18.4,15.272V22.05a1.05,1.05,0,0,0,1.05,1.05H21.9a1.05,1.05,0,0,0,1.05-1.05V15.19A6.8,6.8,0,0,0,16.125,8.4Z"
                                    transform="translate(1.55 1.4)"></path>
                                <rect width="5.25" height="13.65" rx="0.9" transform="translate(3.5 10.85)"></rect>
                                <circle cx="2.625" cy="2.625" r="2.625" transform="translate(3.5 3.5)"></circle>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ******* Footer End *******-->
<!-- header-footer script-->
<script src="{{asset('js/header-footer.js')}}" defer></script>
<!-- bootstrap script-->
<script src="{{asset('vendor/bootstrap/bootstrap.bundle.min.js')}}" defer></script>
<!-- jquery -->
<script src="{{asset('vendor/jquery-3.6.0.js')}}" defer></script>
<!-- slick js-->
<script src="{{asset('vendor/slick/slick.js')}}" defer></script>
<!-- course card heart js-->
<script src="{{asset('js/course-card.js')}}" defer></script>
<!-- crd slider sec js-->
<script src="{{asset('js/crd-slider-sec.js')}}" defer></script>
<!-- testimonial sec js-->
<script src="{{asset('js/discount-cards-slider.js')}}" defer></script>
<!-- custom slick btns sec js-->
<script src="{{asset('js/custom-slick-btn.js')}}" defer></script>
</body>
</html>

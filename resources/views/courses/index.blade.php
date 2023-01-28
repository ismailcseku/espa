<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="[noindex,nofollow]">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- page title-->
    <title>Skilify - Courses</title>
    <!-- Fav icon-->
    <link rel="icon" href="{{asset('images/img/browser-logo.png')}}" type="image/x-icon">
    <!-- Font css-->
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <!-- slick css-->
    <link rel="stylesheet" href="vendor/slick/slick.css">
    <!-- slick theme css-->
    <link rel="stylesheet" href="vendor/slick/slick-theme.css">
    <!--  Courses css-->
    <link rel="stylesheet" href="css/courses.css">
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
                <img src="{{asset('/images/logo3.png')}}">
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
<section class="py-8 courses-search">
    <div class="container">

        <div class="sec-content tab-content" id="pills-tabContent">
            <!-- courses All-->
            <div class="tab-pane fade show active" id="courses-all-crd" role="tabpanel">
                <div class="row multi-course-crd-list">
                    @foreach($courses as $course)
                        <div class="col-md-6 col-lg-4">
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
                                            <source srcset="https://cha-agadir.ma/storage/{{$course->photo}}" type="image/webp">
                                            <img class="crd-img" src="https://cha-agadir.ma/storage/{{$course->photo}}" alt="Image Description">
                                        </picture>
                                    </a>
                                </div>
                                <div class="crd-content">
                                    <div class="crd-info py-2 d-flex align-items-center justify-content-between">
                                        <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                                  src="images/svg/orange-time.svg"
                                                                                                  alt="Image Description"><span
                                                class="crd-info-txt">{{$course->duration}} mois</span></div>
                                        <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                                  src="images/svg/language.svg"
                                                                                                  alt="Image Description"><span
                                                class="crd-info-txt">{{$course->language->name}}</span></div>
                                        <div class="crd-info-item d-flex align-items-center"><img class="me-1"
                                                                                                  src="images/svg/crd-play.svg"
                                                                                                  alt="Image Description"><span
                                                class="crd-info-txt">{{$course->modality->name}}</span></div>
                                    </div>
                                    <a href="courses/{{$course->id}}">
                                        <h3 class="card-title my-3">{{$course->name}} </h3></a>
                                    <div class="crd-bottom d-flex align-items-center justify-content-between"><a
                                            class="crd-profile d-flex align-items-center" href="teacher-profile.html">
                                            <picture>
                                                <source srcset="images/svg/star.svg" type="image/webp">
                                                <img src="images/svg/star.svg" alt="Image Description">
                                            </picture>
                                            <span class="profile-name ms-2">{{$course->degree->name}}</span></a>
{{--                                        <div class="crd-price d-flex align-items-baseline">--}}
{{--                                            <del class="me-2">$250.00</del>--}}
{{--                                            <span>$220.00</span>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
            <div class="tab-pane fade" id="courses-design-crd" role="tabpanel">
                <div class="row multi-course-crd-list">
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
            </div>
            <div class="tab-pane fade" id="courses-development-crd" role="tabpanel">
                <div class="row multi-course-crd-list">
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
            </div>
            <div class="tab-pane fade" id="courses-marketing-crd" role="tabpanel">
                <div class="row multi-course-crd-list">
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
                </div>
            </div>
            <div class="tab-pane fade" id="courses-photography-crd" role="tabpanel">
                <div class="row multi-course-crd-list">
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
                    <div class="col-md-6 col-lg-4">
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
                </div>
            </div>
        </div>
    </div>
</section>

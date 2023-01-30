@extends('layouts.app')
@section('content')
<div class="main-content">
  <!-- Section: inner-header -->
  <section class="inner-header divider layer-overlay overlay-theme-colored-7"
      data-bg-img="{{ url('storage/details_course.png') }}">
      <div class="container pt-120 pb-60">
          <!-- Section Content -->
          <div class="section-content">
              <div class="row">
                  <div class="col-md-6">
                      <h2 class="text-theme-colored2 font-36">Nos formations</h2>
                      <ol class="breadcrumb text-left mt-10 white">
                          <li><a href="/">Acceuil</a></li>
                          
                          <li class="active">cours</li>
                      </ol>
                  </div>
              </div>
          </div>
      </div>
  </section>
    <section id="courses" class="bg-silver-light">
        <div class="container">
            <div class="section-content">
                <div class="row ">
                    @foreach ($courses as $course)
                        <div  class="col-xs-12 col-sm-6 col-md-6 col-lg-4 item" style="margin-top: 2px ; ">
                            <div class="course-single-item bg-white border-1px clearfix mb-md-40">
                                <a href="{{ route('course.details', $course->id) }}" class="course-thumb">
                                    <img class="img-fullwidth" alt="" src="{{ url('storage') }}/{{ $course->photo }}">
                                   
                                </a>
                                <div class="course-details clearfix p-20 pt-15">
                                    <div class="course-top-part">
                                        <a href="{{ route('course.details', $course->id) }}">
                                            <h4 class="mt-5 mb-5">{{ $course->name }}</h4>
                                        </a>
                                        <a href="{{ route('course.details', $course->id) }}">
                                        <h4 class="text-gray font-12 mt-0">{{ $course->degrees_name }}</h4>
                                      </a>

                                    </div>
                                    <a href="{{ route('course.details', $course->id) }}" class="course-description mt-15 mb-0"> {!! $course->description !!}...</a>
                                
                                </div>
                                <a href="{{ route('course.details', $course->id) }}" class="course-meta" style="display:block;">
                                  <ul class="list-inline">
                                    <li><i class="ficon-clock font-18"></i>
                                        {{ $course->datelimite->day }}
                                        @php
                                            $list = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
                                            $month_return = $list[$course->datelimite->month];
                                            echo $month_return;
                                        @endphp

                                        @php
                                            $year = $course->datelimite->year;
                                            $year_return = substr($year, 2, 4);
                                            echo $year_return;
                                        @endphp
                                    </li>
                                    <li><i
                                            class="lnr lnr-users font-20"></i>{{ $course->languages_name }}
                                    </li>
                                </ul>
                                    <div class="course-tag">
                                        <h5>Découvrir</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    </div>
@endsection

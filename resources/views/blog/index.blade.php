@extends('layouts.app')
@section('content')
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-dark-4"
            data-bg-img="{{ asset('images/details_course.jpeg') }}">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">Blog </h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="{{ route('home') }}">Acceuil</a></li>
                                <li class="active">Blog</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container pt-70 pb-40">
                <div class="section-content">
                    <div class="row multi-row-clearfix">
                        @foreach ($blogs as $blog)
                            <div class="col-sm-6 col-md-4">
                                <article class="post mb-30">
                                    <div class="post-thumb">
                                        <img src="{{ url('storage') }}/{{ $blog->photo }}" class="img-fullwidth"
                                            alt="">
                                        <div class="post-date"><span>26 </span><br> Oct</div>

                                    </div>
                                    <div class="post-description border-1px p-20">
                                        <a href="{{ route('blog.show', $blog->id) }}">
                                            <h3 class="post-title font-weight-600 mt-0 mb-15" style="word-break: break-word;">{{ $blog->title }}</h3>
                                        </a>
                                        <p>
                                            @php
                                                $description = substr($blog->description, 0, 100);
                                                echo $description;
                                            @endphp
                                            <a href="{{ route('blog.show', $blog->id) }}">[...]</a>
                                        </p>
                                    </div>
                                    <div class="post-meta">
                                        <ul class="list-inline pull-left flip">
                                            <li> {{ $blog->created_at }}</li>
                                        </ul>
                                        <a href="{{ route('blog.show', $blog->id) }}"
                                            class="text-theme-colored2 font-14 text-gray-darkgray pull-right flip">Lire
                                            plus</a>
                                    </div>
                                </article>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </section>

       
    </div>
@endsection

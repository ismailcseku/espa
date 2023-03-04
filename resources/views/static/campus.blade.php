@extends('layouts.app')
@section('content')
<section class="inner-header divider " style="background-color:rgb(45, 69, 88);">
    <div class=" pt-10 pb-10 ">
        <!-- Section Content -->
        <div class="section-content ml-90 ">
            <div class="row">
                <div class="col-md-6">
                    <ol class="breadcrumb text-left mt-10 white">
                        <li><a href="/">Acceuil</a></li>
                        <li class="text-white">Vie estudiantine</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    @foreach ($datas as $data)
                        <div class="col-md-12">
                            <img class="img-fullwidth" src="{{ url('storage') }}/{{ $data->photo }}" alt="">
                        </div>
                        <div class="col-md-12">
                            <h2 class="text-uppercasetext-theme-colored mt-0 mb-0 mt-sm-30"><span
                                    class="text-theme-colored2">Vie estudiantine</span></h2>
                            <h4 class="mt-5 mb-15"></h4>
                            <p>{!! $data->content !!}</p>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ url('media.index') }}" class="mb-20 font-20" style="font-weight: bold;color:#1f3344;">Galerie</a>

                    <div class="owl-carousel-5col" data-nav="true">
                        @foreach ($medias as $media)
                            <div class="item"><img src="{{ url('storage') }}/{{ $media->photo }}" width="285"
                                    height="215" style="object-fit:cover;" alt="{{ $media->title }}"></div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

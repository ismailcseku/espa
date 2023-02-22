@extends('layouts.app')
@section('content')
    <section class="inner-header divider layer-overlay overlay-theme-colored-7"
        data-bg-img="{{ asset('images/details_course.jpeg') }}">
        <div class="container pt-120 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-theme-colored2 font-36">Agri-business</h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="{{ route('home') }}">Acceuil</a></li>

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
                                    class="text-theme-colored2">Agri-business</span></h2>
                            <div class="mt-30 mb-0">
                                <h5 class="pull-left mt-10 mr-20 text-theme-colored2">Partager:</h5>
                                <ul class="styled-icons icon-circled m-0">
                                    <li><a href=" {{ $shareLinkedin['facebook']}}" style="color:blue; background-color:whitesmoke;" ><i
                                        class="fa fa-facebook "></i></a></li>
                            <li><a href="  {{ $shareLinkedin['whatsapp']}}" style="color:green;background-color:whitesmoke;" ><i
                                        class="fa fa-whatsapp "></i></a></li>
                                        
                            <li><a href="  {{ $shareLinkedin['linkedin']}}" style="color:rgb(86, 86, 202);background-color:whitesmoke;" ><i
                                        class="fa fa-linkedin "></i></a></li>
                                </ul>
                            </div>
                            <h4 class="mt-5 mb-15"></h4>
                            <p>{!! $data->content !!}</p>
                        </div>
                    @endforeach
                    <button class="accordion">Télécharger</button>
                    <div class="panel">
                        @foreach ($downloads as $key => $download)
                            <div><a href="{{ url('storage') }}/{{ $download->file }}" download="download">{{ $download->file }}</a></div>
                        @endforeach
                    </div>

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
                            <div class="item"><img src="{{ url('storage') }}/{{ $media->photo }}" width="285"
                                    height="215" style="object-fit:cover;" alt="{{ $media->title }}"></div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }



        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
    </style>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
@endsection

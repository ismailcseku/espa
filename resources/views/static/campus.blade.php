@extends('layouts.app')
@section('content')
    <style>
        section>.container,
        section>.container-fluid {
            padding-top: 0px;
            padding-bottom: 0px;


        }
    </style>
    <div style="background-color:white;border-top:solid 2px rgb(45, 69, 88) ; padding-bottom:14px;"></div>
    <section class="container">

        <div class="inner-header divider ">
            <div class=" pt-10 pb-10 ">
                <!-- Section Content -->
                <div class="section-content  ">
                    <div class="row">
                        <div class="col-md-6">
                            <ol class="breadcrumb text-left mt-10 " style="color:rgb(45, 69, 88);font-weight:bold;">
                                <li><a href="/">Acceuil</a></li>
                                <li>Vie estudiantine</li>
                            </ol>
                        </div>
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
                    <button class="accordion">Télécharger</button>
                    <div class="panel">
                        @foreach ($downloads as $key => $download)
                            <div><a href="{{ url('storage') }}/{{ $download->file }}"
                                    target='_blank'>{{ $download->filename }}</a></div>
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

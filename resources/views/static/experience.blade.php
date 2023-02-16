@extends('layouts.app')
@section('content')
<section class="inner-header divider layer-overlay overlay-theme-colored-7"
data-bg-img="{{ asset('images/details_course.jpeg') }}">
<div class="container pt-120 pb-60">
    <!-- Section Content -->
    <div class="section-content">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-theme-colored2 font-36">Ferme exprérimentale</h2>
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
                @foreach ($datas as $data )
                 
                
                <div class="col-md-10">
                    <img class="img-fullwidth" src="{{url('storage')}}/{{$data->photo}}" alt="">
                </div>
                <div class="col-md-12">
                    <h2 class="text-uppercasetext-theme-colored mt-0 mb-0 mt-sm-30"><span
                            class="text-theme-colored2">Ferme exprérimentale</span></h2>
                    <h4 class="mt-5 mb-15"></h4>
                    <p>{!!$data->content!!}</p>
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
                <h4 class="mb-20">Médiathèques</h4>
                <div class="owl-carousel-5col" data-nav="true">
                    @foreach ($medias as $media)
                        
                    <div class="item"><img src="{{url('storage')}}/{{$media->photo}}" width="285" height="215" style="object-fit:cover;" alt="{{$media->title}}"></div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
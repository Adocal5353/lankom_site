@extends('layout.layout')

@section('title','Nos services')

@section('content')
<div class="col-xxl" id="services_container">
    <div>
        <center>
            <img src="{{asset('storage/Images/logo.png')}}" id="logo_service">
            <h3 class="py-2 px-5 mx-3">Nos secteurs d'activité</h3>
        </center>
    </div>
    <div class="row  mt-5">
        @if ($services->count()>0)
            @foreach ($services as $service)
                <div class="col-md activity shadow-lg mx-5">
                    <center>
                        <h4 class="title">{{$service->name}}</h4>
                        <lottie-player class="lottie" id="special_lottie" src="{{asset($service->lottie_path)}}" loop autoplay width="300"></lottie-player>
                        <div class="see_more py-1">
                            <center>
                                <a href="{{route($service->page->link)}}" class="btn shadow py-1 px-5">Voir nos offres</a>
                            </center>
                        </div>
                    </center>
                </div>
            @endforeach
        @endif

    </div>
</div>
</div>
@endsection

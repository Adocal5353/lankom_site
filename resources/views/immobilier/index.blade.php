@extends('layout.simple')

@section('title','Service dans l\'immobilier')

@section('content')
    <div class="container-fluid gx-0" id="immo">
        <div class="row px-5 mb-4 mx-0 justify-content-start immo-heading">
            <div class="col-sm pe-4 mt-4">
                <a href="{{url()->previous()}}" class="text-light pt-4"><i class="fa-solid fa-arrow-left fa-2xl back"></i></a>
                <lottie-player class="lottie p-xl-5" id="special_lottie" src="{{asset('storage/Animations/89968-house.json')}}" loop autoplay
                    width="300"></lottie-player>
            </div>
            <div class="col-sm m-xl-3 mt-5 pe-3" id="immo-heading-col">
                <p class="m-0"><img src="{{asset('storage/Images/logo.png')}}" alt="" id="logo_service"></p>
                <!-- <p class="display-2 text-light mb-4 mx-5" id="name">LANKOM</p> -->
                <p class="display-3 text-light ml2" id="immo-description">Votre solution
                    "IMMOBILIER"
                    se trouve chez nous...
                </p>
            </div>
        </div>
        <div class="container text-light reveal" id="immo-content">
            <div class="row gx-0 immo-details">
                <center class="px-3 my-5">
                    <h3 class="py-2 px-5 bg-primary text-light" id="ie-text">Services dans l'immobilier</h3>
                </center>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <center>
                        <p class="display-7">{!!$block->where('order','=','1')->first()->content!!}</p>
                    </center>
                </div>
            </div>

            <div class="row justify-content-between mt-5">
                <div class="col-sm-5">
                    <h3 class="bg-light text-primary p-3">{!!$block->where('order','=','2')->first()->title!!}</h3>
                    {!!$block->where('order','=','2')->first()->content!!}
                </div>
                <div class="col-sm-5">
                    <h3 class="bg-light text-primary p-3">{!!$block->where('order','=','3')->first()->title!!}</h3>
                    {!!$block->where('order','=','3')->first()->content!!}
                </div>
            </div>

            <div class="row mt-5 justify-content-center">
                <div class="col-sm-6">
                    <center class="">
                        <p>Vous cherchez un logement et voulez profiter de nos services dans le domaine de l'immobilier? Alors contactez-nous sans hésiter!</p>
                    </center>
                </div>
            </div>
            <div class="row gx-0 contact-us">
                <center class="px-3 my-5">
                    <a href="{{route('contact')}}">
                        <h3 class="btn py-2 px-5 bg-primary text-light" id="ie-text">CLIQUEZ ICI</h3>
                    </a>
                </center>
            </div>
        </div>

    </div>

@endsection

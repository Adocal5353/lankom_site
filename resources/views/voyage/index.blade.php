@extends('layout.simple')

@section('title','Assistance voyage')

@section('content')
<div class="container-fluid gx-0" id="voyage">
    <div class="row px-5 mb-4 mx-0 justify-content-end voyage-heading">
        <div class="col mt-4 m-xl-5 pe-4" id="voyage-heading-col">
            <a href="{{url()->previous()}}" class="text-light"><i class="fa-solid fa-arrow-left fa-2xl back"></i></a>
            <p class="m-0"><img src="{{asset('storage/Images/logo.png')}}" alt="" id="logo_service"></p>
            <!-- <p class="display-2 text-light mb-4 mx-5" id="name">LANKOM</p> -->
            <p class="display-3 text-light ml2" id="voyage-description">LANKOM vous accompagne
                quelque soit
                votre destination...
            </p>
            <p class="text-light">Nous vous aidons à voyager en toute sécurité.
            </p>
        </div>
    </div>
    <div class="container text-light reveal" id="voyage-content">
        <div class="row gx-0 voyage-details">
            <center class="px-3 my-5">
                <h3 class="py-2 px-5 bg-primary text-light" id="ie-text">Assistance de voyage</h3>
            </center>
        </div>
        <div class="row justify-content-around mt-5">
            <div class="col-sm-7">
                    <h3 class="bg-light text-primary p-3" >{!!$block->where('order','=','1')->first()->title!!}</h3>
                    {!!$block->where('order','=','1')->first()->content!!}
            </div>
            <div class="col-sm-3">
                <div class="voyage-lottie">
                <lottie-player class="lottie p-3" id="special_lottie" src="{{asset('storage/Animations/101466-graduate-red-white-blue-jumping.json')}}" loop autoplay ></lottie-player>
                </div>
            </div>
        </div>
        <div class="row justify-content-around mt-5">
            <div class="col-sm-7">
                    <h3 class="bg-light text-primary p-3" >{!!$block->where('order','=','2')->first()->title!!}</h3>
                    {!!$block->where('order','=','2')->first()->content!!}
            </div>
            <div class="col-sm-3">
                <div class="voyage-lottie">
                    <lottie-player class="lottie p-3" id="special_lottie" src="{{asset('storage/Animations/37442-passport-travel.json')}}" loop autoplay  width="300"></lottie-player>
                </div>
            </div>
        </div>
        <div class="row justify-content-around mt-5">
            <div class="col-sm-7">
                    <h3 class="bg-light text-primary p-3" >{!!$block->where('order','=','3')->first()->title!!}</h3>
                    {!!$block->where('order','=','3')->first()->content!!}
            </div>
            <div class="col-sm-3">
                <div class="voyage-lottie">
                    <lottie-player class="lottie p-3" id="special_lottie" src="{{asset('storage/Animations/65726-traveler.json')}}" loop autoplay width="300"></lottie-player>
                </div>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-sm-6">
                <center class="">
                    <p>Vous désirer effectuer un voyage et vous avez envie de profiter de nos services dans ce secteur?</p>

                </center>
            </div>
        </div>
        <div class="row gx-0 contact-us">
            <center class="px-3 my-5">
                <a href="{{route('contact')}}"><h3 class="btn py-2 px-5 bg-primary text-light" id="ie-text">CLIQUEZ ICI</h3></a>
            </center>
        </div>
    </div>
</div>
@endsection

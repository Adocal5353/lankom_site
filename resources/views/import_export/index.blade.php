@extends('layout.simple')

@section('title','Service d\'import-export')

@section('content')
<div class="container-fluid gx-0" id="ie">
    <div class="row px-5 mb-4 mx-0 justify-content-end ie-heading">
        <div class="col mt-4 m-xl-5 pe-4" id="ie-heading-col">
            <a href="{{url()->previous()}}" class="text-light"><i class="fa-solid fa-arrow-left fa-2xl back"></i></a>
            <p class=" m-0"><img src="{{asset('storage/Images/logo.png')}}" alt="" id="logo_service"></p>
            <!-- <p class="display-2 text-light mb-4 mx-5" id="name">LANKOM</p> -->
            <p class="display-3 text-light ml2" id="ie-description">Opérations logistiques
                et commerciales à
                l'international
            </p>
        </div>
    </div>
    <div class="container text-light reveal">
        <div class="row g-0 ie-details">
            <center class="px-3 my-5">
                <h3 class="py-2 px-5 bg-primary text-light" id="ie-text">Secteur d'import-export</h3>
            </center>
            <center class="m-4">
                {!!$block->where('order','=','1')->first()->content!!}
            </center>
        </div>
        <div class="row justify-content-around">
            <div class="col-sm-4">
                <div class="mb-4">
                    <img src="{{asset('storage/Images/paul-teysen-bukjsECgmeU-unsplash.jpg')}}" alt="Quai de chargement"
                        class="rounded img-fluid" id="ie-img2">
                </div>
                <div class="row">
                    <div class="col p-3 rounded bg-light m-2">
                        <lottie-player class="lottie" src="{{asset('storage/Animations/50158-delivery-cart-box.json')}}" loop autoplay>
                    </div>
                    <div class="col p-3 rounded bg-light m-2">
                        <lottie-player class="lottie" src="{{asset('storage/Animations/63919-delivery-on-skateboard.json')}}" loop
                            autoplay>
                    </div>
                    <div class="col p-3 rounded bg-light m-2">
                        <lottie-player class="lottie" src="{{asset('storage/Animations/66752-delivery.json')}}" loop autoplay>
                    </div>
                </div>
            </div>
            <div class="col-sm pt-4">
                {!! $block->where('order','=','2')->first()->content !!}
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-sm-6">
                <center class="">
                    <p>Si vous êtes intéressés par nos services dans l'import-export, alors contactez-nous immediatement!</p>
                </center>
            </div>
        </div>
        <div class="row gx-0 contact-us">
            <center class="px-3 my-5">
                <a href="{{route('contact')}}"><h3 class="btn py-2 px-5 bg-primary text-light" id="ie-text"> CLIQUEZ ICI</h3></a>
            </center>
        </div>
    </div>

</div>
@endsection

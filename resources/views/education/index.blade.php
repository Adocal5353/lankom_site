@extends('layout.simple')

@section('title','Assistance en éducation')
@section('content')
    <div class="container-fluid gx-0" id="edu">
        <div class="row px-5 mb-4 mx-0 justify-content-start edu-heading">
            <div class="col-sm mt-4">
                    <a href="{{url()->previous()}}" class="text-light pt-4"><i class="fa-solid fa-arrow-left fa-2xl back"></i></a>
                    <lottie-player class="img-fluid" src="{{asset('storage/Animations/70315-school-books.json')}}" autoplay loop></lottie-player>
            </div>
            <div class="col-sm m-xl-4 p-4" id="edu-heading-col">
                <p class="m-0"><img src="{{asset('storage/Images/logo.png')}}" alt="" id="logo_service"></p>
                <!-- <p class="display-2 text-light mb-4 mx-5" id="name">LANKOM</p> -->
                <p class="display-3 text-light ml2" id="edu-description">Avec notre aide,
                    réussissez brillement
                    votre cursus scolaire
                </p>
            </div>
        </div>
        <div class="container text-light reveal" id="edu-content">
            <div class="row gx-0 edu-details">
                <center class="px-3 my-5">
                    <h3 class="py-2 px-5 bg-primary text-light" id="ie-text">Services dans l'éducation</h3>
                </center>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <center>
                        <p class="display-7"> {!!$block->where('order','=','1')->first()->content!!}</p>
                    </center>
                </div>
            </div>

            <div class="row justify-content-between mt-5">
                <div class="col-sm">
                    {!! $block->where('order','=','2')->first()->content !!}
                </div>
                <div class="col-sm">
                    <div class="lottie_edu">
                        <lottie-player class="lottie" style="height: fit-content; width: fit-content;" id="special_lottie" src="{{asset('storage/Animations/30305-back-to-school.json')}}" loop autoplay></lottie-player>
                    </div>
                </div>
            </div>

            <div class="row mt-5 justify-content-center">
                <div class="col-sm-6">
                    <center class="">
                        <p>Vous êtes intéressés par nos services dans le secteur de l'éducation? Alors contactez-nous sans hésiter!</p>
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

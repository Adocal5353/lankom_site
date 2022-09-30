@extends('layout.layout')

@section('title','Accueil')

@section('content')
<div class="col-xxl">
    <div id="indexCarousel" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#indexCarousel" data-bs-slide-to="0"
                class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#indexCarousel" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#indexCarousel" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#indexCarousel" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="7000">
                    <img src="{{asset('storage/Images/full-shot-travel-concept-with-landmarks_bg.jpg')}}" class="d-block w-100"
                    alt="Voyage">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="fs-4">RÉALISEZ VOS RÊVES</h5>
                        <p class="fs-6">Visitez les paysages dont vous avez toujours rêvé, découvrez le monde autrement</p>
                    </div>
            </div>
            <div class="carousel-item" data-bs-interval="7000">
                <img src="{{asset('storage/Images/immo_carousel.jpg')}}" class="d-block w-100" alt="Tour eiffel">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="fs-4">LE LOGEMENT, PLUS SIMPLEMENT</h5>
                    <p class="fs-6">Avec LANKOM, obtenez le meilleur logement, au meilleur prix</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="7000">
                <img src="{{asset('storage/Images/ie_carousel.jpg')}}" class="d-block w-100" alt="Plage">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="fs-4">RECEVEZ TOUT, PARTOUT</h5>
                    <p class="fs-6">Rien de plus facile que de recevoir un colis partout dans le monde grâce à nous.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="7000">
                <img src="{{asset('storage/Images/edu_carousel.jpg')}}" class="d-block w-100" alt="Plage">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="fs-4">CONTACTEZ-NOUS</h5>
                    <p class="fs-6">Alors, ne perdez plus de temps <a href="{{route('contact')}}" style="color: white;">contactez nous maintenant! </a></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#indexCarousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#indexCarousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="main-text hidden-xs ms-xxl-5">
        <div class="col-md-12 align-item-center">
            <p class="display-1">LAN<span style="color: #9efd38;">KOM</span></p>
            <p class="fs-6">Bienvenue chez nous, La fusée vers vos rêves...</p>
                <a href="{{route('services')}}" class="" ><i class= "fa-solid fa-angles-down fa-2xl fa-10x fa-bounce" style="border-radius: 60%; font-weight: bold; color:#9efd38;"></i></a>
                <i class="fa-solid fa-chevrons-down"></i>
        </div>
    </div>
</div>
</div>
@endsection

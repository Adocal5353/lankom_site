<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Fonts -->
     <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

     {{-- vite ressources --}}
     @vite(['resources/js/app.js','resources/css/app.css'])

    <title>LANKOM - @yield('title')</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('storage/Images/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('storage/Images/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('storage/Images/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('storage/Images/site.webmanifest')}}">
</head>

<body>
    <div id="loading">
        <img id="loading-image" src="{{asset('storage/gif/Skype loader.gif')}}" alt="Loading..." />
    </div>
    <main>
         <!-- The burger menu-->
         <div class="menu-burger d-xxl-none">
            <i id="burger"
                class="fa-solid fa-bars bg-light p-3 mx-3 my-4 rounded d-xxl-none d-xxl-block position-fixed top-0 end-0"></i>
            <div class=" position-fixed" id="menu-container">
            </div>
                <div class="position-fixed bg-light" id="burger-menu">
                    <div class="container" id="nav_container">
                        <a href="#" id="logo">
                            <img src="{{asset('storage/Images/logo.png')}}">
                        </a>
                        <ul class="list-unstyled">
                            <a href="{{route('accueil')}}" class="px-3 ">
                                <li>
                                    <i class="fa-solid fa-home"></i>
                                    Acceuil
                                </li>
                            </a>
                            <a href="{{route('services')}}" class="px-3">
                                <li>
                                    <i class="fa-solid fa-briefcase"></i>
                                    Services
                                </li>
                            </a>
                            <a href="{{route('contact')}}" class="px-3">
                                <li>
                                    <i class="fa-solid fa-circle-user"></i>
                                    Contacts
                                </li>
                            </a>
                            <a href="https://shop.lankom.net" target="_blank" class="px-3">
                                <li>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    Boutique <span class="badge rounded-pill text-bg-danger">Nouveau</span>
                                </li>
                            </a>
                        </ul>

                    </div>
                    <div class="row mt-5">
                        <div class="col-md text-center" id="menu_social">
                            <div class="social-links">
                                <a href="mailto:{{$social_networks->where('name','=','email')->first()->link}}"><i class="{{$social_networks->where('name','=','email')->first()->font_awesome}}"></i></a>
                        @if ($social_networks->count()>0)
                            @foreach ($social_networks as $social_network)
                                @if ($social_network->name!='email')
                                    <a href="{{$social_network->link}}"><i class="{{$social_network->font_awesome}}"></i></a>
                                @endif
                            @endforeach
                        @endif
                                {{-- <a href="https://www.facebook.com/DirectoireGroup/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/directoire_groupe/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>

        </div>
        <!-- Fin du menu burger -->


        <div class="row" id="carouselRow">
            <div class="col-1">
                <div class="container  d-none d-xxl-block" id="nav_container">
                    <a href="#"  id="logo">
                        <img src="{{asset('storage/Images/logo.png')}}">
                    </a>
                    <ul class="list-unstyled">
                        <a href="{{route('accueil')}}" class="px-3 ">
                            <li>
                                <i class="fa-solid fa-home"></i>
                                Acceuil
                            </li>
                        </a>
                        <a href="{{route('services')}}" class="px-3">
                            <li>
                                <i class="fa-solid fa-briefcase"></i>
                                Services
                            </li>
                        </a>
                        <a href="{{route('contact')}}" class="px-3">
                            <li>
                                <i class="fa-solid fa-circle-user"></i>
                                Contacts
                            </li>
                        </a>
                        <a href="https://shop.lankom.net" target="_blank" class="px-3">
                            <li>
                                <i class="fa-solid fa-cart-shopping"></i>
                                Boutique <span class="badge rounded-pill text-bg-danger">Nouveau</span>
                            </li>
                        </a>
                    </ul>
                    <div class="row mt-5">
                        <div class="col-md text-center" id="menu_social">
                            <div class="social-links">
                                <a href="mailto:{{$social_networks->where('name','=','email')->first()->link}}"><i class="{{$social_networks->where('name','=','email')->first()->font_awesome}}"></i></a>
                        @if ($social_networks->count()>0)
                            @foreach ($social_networks as $social_network)
                                @if ($social_network->name!='email')
                                    <a href="{{$social_network->link}}"><i class="{{$social_network->font_awesome}}"></i></a>
                                @endif
                            @endforeach
                        @endif

                                {{-- <a href="https://www.instagram.com/directoire_groupe/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a> --}}
                            </div>
                        </div>
                    </div>

                </div>

            </div>
@yield('content')
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h4>Accès rapide</h4>
                    <ul>
                        <li><a href="{{route('accueil')}}">Acceuil</a></li>
                        <li><a href="{{route('services')}}">Nos services</a></li>
                        <li><a href="{{route('service.voyage')}}">Voyage & Tourime</a></li>
                        <li><a href="{{route('service.immobilier')}}">Immobiler</a></li>
                        <li><a href="{{route('service.import_export')}}">Import & Export</a></li>
                    </ul>
                </div>
                <div class="col-md">
                    <h4>Aides</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Retours</a></li>
                    </ul>
                </div>
                <div class="col-md">
                    <h4>Structures</h4>
                    <ul>
                        <li><a href="{{route('accueil')}}">Acceuil</a></li>
                        <li><a href="{{route('services')}}">Prestations</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="#">Store</a></li>
                    </ul>
                </div>
                <div class="col-md">
                    <h4>Suivez nous</h4>
                    <div class="social-links">
                        <a href="mailto:{{$social_networks->where('name','=','email')->first()->link}}"><i class="{{$social_networks->where('name','=','email')->first()->font_awesome}}"></i></a>
                        @if ($social_networks->count()>0)
                            @foreach ($social_networks as $social_network)
                                @if ($social_network->name!='email')
                                    <a href="{{$social_network->link}}"><i class="{{$social_network->font_awesome}}"></i></a>
                                @endif
                            @endforeach
                        @endif
                        {{-- <a href="https://www.facebook.com/DirectoireGroup/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/directoire_groupe/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
</footer>
<footer>
    <span><a href="#" style="text-decoration: none; color: lightblue;">LANKOM</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
</footer>
</body>

</html>

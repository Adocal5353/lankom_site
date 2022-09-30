    {{-- This file is for pages which does not need the menu bar --}}

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

         <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
         <title>LANKOM - @yield('title')</title>
         <link rel="icon" href="{{asset('storage/Images/logo.png')}}">
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
                    </div>
            </div>
            <!-- Fin du menu burger -->
            <div class="g-0 row justify-content-center align-items-center error_section">
                <div class="col-sm-5">
                    <center>
                        <lottie-player src="{{asset('storage/Animations/68834-load-to-error.json')}}" autoplay loop></lottie-player>
                        <h1>500</h1>
                        <p class="text-center">Désolé... Il semblerait que quelque chose ait mal tourné de notre côté</p>
                        <a href="{{url()->previous()}}" class="text-center"><i class="fa-solid fa-left-long"></i> Revenir en arrière</a>
                    </center>
                </div>

            </div>

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
                            <li><a href="{{route('services')}}">Services</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <h4>Suivez nous</h4>

                    </div>
                </div>
            </div>
    </footer>
    <footer>
        <span><a href="#" style="text-decoration: none; color: lightblue;">ALL_BY_CODES</a> | <span class="far fa-copyright"></span> 2022 Tous droits réservés.</span>
    </footer>
    </body>

    </html>



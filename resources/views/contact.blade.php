@extends('layout.simple')

@section('title','Nous contacter')

@section('content')
<div class="container-fluid p-4" id="contact">
    <div class="row p-2">
        <div class="col-sm">
            <a href="{{url()->previous()}}" class="text-light"><i class="fa-solid fa-arrow-left fa-2xl back"></i></a>
            <lottie-player src="{{asset('storage/Animations/70229-contact-us.json')}}" loop autoplay></lottie-player>
        </div>
        <div class="col-sm contact">
            <center>
                @if (session()->has('success'))
                <p class="display-3 m-5">Merci!</p>
                <p class="fs-5">Nous vous remercions d'avoir pris contact avec nous. Restez à l'écoute. Nous ne tarderons pas à vous répondre.</p>
                @else
                    <p class="display-3 m-5">Contactez-nous</p>
                    <p class="display-7">Vous pouvez dès à présent nous contacter...</p>
                @endif
                <form class=" row p-4 mt-4 bg-light rounded needs-validation was-validated reveal" action="{{route('mailTo')}}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-sm mt-2">
                            <input type="text" class="form-control" placeholder="Entrez vos noms"
                                aria-label="name" required name="name">
                            <div class="valid-feedback">
                                Bien joué!
                            </div>
                        </div>
                        <div class="col-sm mt-2">
                            <input type="email" class="form-control" placeholder="Entrez votre adresse mail"
                                aria-label="email" name="email" required>
                            <div class="valid-feedback">
                                Merci!!
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm mt-2">
                            <select class="form-select" aria-label=".form-select-sm example" required name="service">
                                <option selected disabled value="">Sélectionnez un service</option>
                                <option value="Voyage">Voyage</option>
                                <option value="Immobilier">Immobilier</option>
                                <option value="Import-export">import-export</option>
                                <option value="Assistance scolaire">Assistance scolaire</option>
                                <option value="Autre">Autre(Préciser)</option>
                            </select>
                            <div class="valid-feedback">
                                Ok!
                            </div>
                        </div>

                        <div class="col-sm mt-2">
                            <textarea class="form-control" name="message" id="" cols="30" rows="1"
                                placeholder="Veuillez taper votre message" required></textarea>
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-xxl">
                            <button type="submit" class="btn btn-primary">Soumettre</button>
                        </div>
                    </div>
                </form>
            </center>
        </div>
    </div>
    <div class="row mt-5 reveal" id="div_agences">
        <div class="col-sm">
            <center>
                <p class="display-5">Découvrer nos agences à travers le monde</p>
            </center>
            <div class="rounded table-responsive">
                <table class="table table-light" id="table-agences">
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Ville</th>
                            <th>Téléphone</th>
                            <th>Email</th>
                            <th>Localisation</th>
                        </tr>
                    </thead>
                    <tbody class="text-dark">
                        @if ($agences->count()>0)
                        @foreach ($agences as $agence)
                        <tr>
                            <td>{{$agence->town}}</td>
                            <td>{{$agence->city}}</td>
                            <td>{{$agence->phone}}</td>
                            <td><a href="mailto:{{$agence->email}}">Mail</a></td>
                            <td><a href="https://www.google.com/maps/{{'@'.$agence->lng.','.$agence->lat.'z'}}" target="_blank">Suivre</a></td>
                        </tr>

                    @endforeach
                        @else
                            <p>Il n'y a pas d'agence inscrit</p>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm">
            <lottie-player class="lottie-map" src="{{asset('storage/Animations/92088-world-map.json')}}" loop autoplay>
            </lottie-player>
        </div>

@endsection

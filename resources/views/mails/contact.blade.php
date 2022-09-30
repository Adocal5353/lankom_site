<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js','resources/css/app.css'])
  </head>
  <body>
    <h2>Prise de contact avec LANKOM</h2>
    <p>Vous avez reçu un message de contact de la part de {{$contact['name']}} dont voici les détails:</p>
    <ul>
      <li><strong>Email de l'expéditeur</strong> : {{ $contact['email'] }}</li>

      <li><strong>Service souhaité</strong> : {{ $contact['service'] }}</li>

      <li><strong>Message</strong> : {{ $contact['message'] }}</li>

    </ul>
  </body>
</html>

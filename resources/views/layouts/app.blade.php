<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="application/x-httpd-php" charset="utf-8; X-Content-Type-Options=nosniff"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta type="description" content="Our mission is to inspire people to explore excotic places and be the first choice for ET"/>
    <meta name="keywords" content="travel, agency, excotic, best, buy, offer, deal, destination, reservation, Aleksandar, Atlagic"/>
    <meta name="author" content="Aleksandar Atlagic">
    <meta name="web_author" content="Aleksandar Atlagic">
    <meta name="robots" content="index, follow">

    <link rel="shortcut icon" href="{{ asset('storage/smallPictures/favicon-globe.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('storage/smallPictures/favicon-globe.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Vollkorn" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4 exotic">EXCOTIC TRAVEL</h1><br/>
          <h3 class="mission">Our mission is to inspire people to explore excotic places and be the first choice for ET</h3>
        </div>
      </div>

    @include('inc.navbar')

    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div><br/>

    @include('inc.footer')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/gallery.js') }}"></script>

</body>
</html>

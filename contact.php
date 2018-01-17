<!DOCTYPE html>
<html lang="en">
<head>
  <title>Travel Agency</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</head>
<body>
  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
      <h1 class="display-4">Excotic Travel</h1>
      <h3>Our mission is to inspire people to explore excotic places and be the first choice for ET</h3>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">ET</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deals.php">Deals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav mr-right">
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      </ul>
    </div>
  </nav>
<div class="container">
  <div class="row">
    <div class="col-md-4 text-center text-center">
      <span style="color:#01449d;"><b>Working time</b></span><br/><br/>
      <span>Working days from 09 to 20 hours</span><br/>
      <span>Saturdays from 10 to 16 o'clock</span>
      <span>We do not work on Sunday</span>
    </div>
    <div class="col-md-4 text-center">
      <span style="color:#01449d;"><b>E-mail addresses</b></span><br/><br/>
      <span>General information and travel directions:</span><br/>
      <p><a href="#">office@excoticravel.rs</a></p><br/><br/>
      <span>Closed group requests:</span><br/>
      <p><a href="#">alex@exotictravel.rs</a></p><br/>
      <span>Airline tickets and individuals:</span>
      <p><a href="#">max@exotictravel.rs</a></p>
    </div>
    <div class="col-md-4 text-center">
      <span style="color:#01449d;"><b>Contact for agents:</b></span><br/><br/>
      <p>+381 (11) 00 01 101</p><br/><br/>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div id="map" style="width:100%;height:400px;">
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Copyright &copy; Aleksandar Atlagic 2018</p>
  <form>
    <div class="form-row deal">
      <div class="col-auto">
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text">@</div>
          </div>
          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email address">
        </div>
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-2">Get deals</button>
      </div>
    </div>
</form>
</footer>

<script type="text/javascript">
function myMap() {
  var mapOptions = {
      center: new google.maps.LatLng(44.8145022, 20.4838217),
      zoom: 17,
      mapTypeId: google.maps.MapTypeId.MAP
  }
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_jF1BdEHduecKuPNsdnDl-TB992sFVnw&callback=myMap"></script>
</body>
</html>

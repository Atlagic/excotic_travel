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
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
    </div>
  </nav>
<div class="container">
  <div class="row text-center">
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
      <div class="card-header bg-dark">BLACK FRIDAY DEAL</div>
      <div class="card-body">
        <h5 class="card-title">Longsheng Rice, China</h5>
        <img src="longsheng_rice.jpg" class="img-responsive" style="width:100%" alt="Image">
      </div>
    </div>
    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
      <div class="card-header">CAMPERS LOVE THIS PLACE!</div>
      <div class="card-body">
        <h5 class="card-title">Namje, Nepal</h5>
        <img src="namje.jpg" class="img-responsive" style="width:100%" alt="Image">
      </div>
    </div>
    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
      <div class="card-header">BEST BUY OFFER</div>
      <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <img src="amer_forto.jpg" class="img-responsive" style="width:100%" alt="Image">
      </div>
    </div>
  </div>
  <div class="row text-center">
    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
      <div class="card-header">SOLD OUT!</div>
      <div class="card-body">
        <h5 class="card-title">Gozo, Malta</h5>
        <img src="gozo.jpg" class="img-responsive" style="width:100%" alt="Image">
      </div>
    </div>
    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
      <div class="card-header">HEAVEN FOR RELAXING</div>
      <div class="card-body">
        <h5 class="card-title">Taha’a, French Polynesia</h5>
        <img src="taha'a.jpg" class="img-responsive" style="width:100%" alt="Image">
      </div>
    </div>
    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
      <div class="card-header">EXCLUSIVE OFFER</div>
      <div class="card-body">
        <h5 class="card-title">Cappadocia, Turkey</h5>
        <img src="cappadocia.jpg" class="img-responsive" style="width:100%" alt="Image">
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

</body>
</html>

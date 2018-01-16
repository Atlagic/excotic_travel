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
  <form class="form-inline">
    <div class="form-group mx-sm-3 mb-2">
      <input type="text" class="form-control" id="inputPassword2" placeholder="Search state or city">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Search</button>
    <div class="form-group mx-sm-3 mb-2 mr-right">
      <select id="inputState" class="form-control">
        <option selected>Price ...</option>
        <option>Growing</option>
        <option>Falling</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Filter</button>
  </form>
    <div class="card text-center offer">
      <div class="card-header bg-dark text-white">
        <p>BLACK FRIDAY DEAL</p>
      </div>
      <div class="card-body">
        <h5 class="card-title">Longsheng Rice Terrace, China - PLANE <span class="glyphicon glyphicon-plane" aria-hidden="true"></span></h5>
        <p class="card-text">( 7 DAYS WITH LODGING )</p>
        <a href="#" class="btn btn-primary">479€</a>
      </div>
      <div class="card-footer text-muted">
        2 days ago
      </div>
    </div>
    <div class="card text-center offer">
      <div class="card-header card-header-blue">
        <p>FIRST MINUTE OFFER</p>
      </div>
      <div class="card-body">
        <h5 class="card-title">Namje, Nepal - PLANE <span class="glyphicon glyphicon-plane" aria-hidden="true"></span></h5>
        <p class="card-text">( 9 DAYS WITHOUT LODGING )</p>
        <a href="#" class="btn btn-primary">342€</a>
      </div>
      <div class="card-footer text-muted">
        5 days ago
      </div>
    </div>
    <div class="card text-center offer">
      <div class="card-header bg-success">
        <p>BEST BUY OFFER</p>
      </div>
      <div class="card-body">
        <h5 class="card-title">Amer fort, India - PLANE <span class="glyphicon glyphicon-plane" aria-hidden="true"></span></h5>
        <p class="card-text">( 10 DAYS WITHOUT LODGING )</p>
        <a href="#" class="btn btn-primary">370€</a>
      </div>
      <div class="card-footer text-muted">
        8 days ago
      </div>
    </div>
    <div class="card text-center offer">
      <div class="card-header bg-warning">
        <p>EXCLUSIVE OFFER FOR HEDONISTS</p>
      </div>
      <div class="card-body">
        <h5 class="card-title">Cappadocia, Turkey - BUS <span class="glyphicon glyphicon-bed" aria-hidden="true"></span></h5>
        <p class="card-text">( 14 DAYS WITH LODGING )</p>
        <a href="#" class="btn btn-primary">320€</a>
      </div>
      <div class="card-footer text-muted">
        11 days ago
      </div>
    </div>
    <div class="card text-center offer">
      <div class="card-header bg-primary">
        <p>HEAVEN FOR RELAXING</p>
      </div>
      <div class="card-body">
        <h5 class="card-title">Taha’a, French Polynesia - PLANE & BUS <span class="glyphicon glyphicon-plane" aria-hidden="true">-<span class="glyphicon glyphicon-bed" aria-hidden="true"></span></h5>
        <p class="card-text">( 8 DAYS WITH LODGING )</p>
        <a href="#" class="btn btn-primary">429€</a>
      </div>
      <div class="card-footer text-muted">
        2 weeks ago
      </div>
    </div>
    <div class="card text-center offer">
      <div class="card-header bg-danger">
        <p>LAST MINUTE OFFER</p>
      </div>
      <div class="card-body">
        <h5 class="card-title">Gozo, Malta - PLANE <span class="glyphicon glyphicon-plane" aria-hidden="true"></span></h5>
        <p class="card-text">( 12 DAYS WITHOUT LODGING )</p>
        <a href="#" class="btn btn-primary">359€</a>
      </div>
      <div class="card-footer text-muted">
        3 weeks ago
      </div>
    </div>
    <div class="row">
      <div class="paginationContainer">
        <nav class="pagination-center" aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>><br/>

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

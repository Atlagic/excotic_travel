@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-md-4 picCont">
      <img class="media-object" src="gallery_small/amer.jpg" alt="amer">
    </div>
    <div class="col-md-7">
      <div id="accordion" role="tablist">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
                About place
              </a>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                The Amer Fort, situated in Amber, 11 kilometers from Jaipur, is one of the most famous forts of Rajasthan.
                Amer, originally, was the capital of the state before Jaipur. It is an old fort, built in 1592 by Raja Man Singh.
                This fort is also very popularly known as the Amer Palace. The Amer Fort was built in red sandstone and marble and
                the Maotha Lake adds a certain charm to the entire Fort.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                Interesting facts
              </a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              The Amer Fort/Palace is a beautiful structure that was built by Raja Man Sing in the 16th century. Don't forget
                to check out the 'Sheesh Mahal', 'Diwan-i-Aam' and 'Sukh Mahal' also. The fort is a ten minute walk uphill and your
                little trek will be worth the wonders that it offers. Don't miss the royal elephant ride while you are at it!
            </div>
          </div>
        </div>
      </div>
    </div></div>
    <div class="row">
      <div class="col-md-12 text-center">
        <h3 class="reserveTitle">If you want to reserve this tour fill the form bellow</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
      <form class="navbar-form" action="index.html" method="post">
          <div class="form-row">
            <div class="col-md-4 formContainer">
              <input class="form-control" type="text" placeholder="Aleksandar" readonly>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 formContainer">
              <input class="form-control" type="text" placeholder="Atlagic" readonly>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 formContainer">
              <input class="form-control" type="text" placeholder="Amer Fort, India" readonly>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 formContainer">
              <input type="date" class="form-control" id="validationCustom02" value placeholder="Polazak" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 formContainer">
              <input type="date" class="form-control" id="validationCustom02" value="FROM" required>
            </div>
          </div>

        <div class="form-row">
            <div class="col-md-4 formContainer">
                <select id="inputState" class="form-control">
                  <option selected>Kids...</option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                <select id="inputState" class="form-control">
                  <option selected>Accommodation...</option>
                  <option>Hotel</option>
                  <option>Motel</option>
                  <option>Hostel</option>
                  <option>Camping</option>
                </select>
            </div>
        </div>
        <div class="form-row">
          <div class="col-md-2 formContainer">
            <button type="submit" class="btn btn-primary">Reserve</button>
          </div>
        </div>

      </form>
    </div>
  </div>
@endsection

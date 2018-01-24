@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-4 picCont">
      <img class="media-object" src="{{ asset($item[$ajdi]->picture) }}" alt="item_picture">
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
                {{ $item[$ajdi]->title }}
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
                {{ $item[$ajdi]->title2 }}
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

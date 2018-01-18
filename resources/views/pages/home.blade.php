@extends('layouts.template')

@section('content')
<div class="row text-center">
    <div class="card text-white mb-3" style="max-width: 18rem;">
      <div class="card-header blue">BLACK FRIDAY DEAL</div>
      <div class="card-body">
        <h5 class="card-title text-dark">Longsheng Rice, China</h5>
        <img src="{{ asset('pictures/longsheng_rice.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
      </div>
    </div>
    <div class="card text-white mb-3" style="max-width: 18rem;">
      <div class="card-header blue">CAMPERS LOVE THIS PLACE!</div>
      <div class="card-body">
        <h5 class="card-title text-dark">Namje, Nepal</h5>
        <img src="{{ asset('pictures/namje.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
      </div>
    </div>
    <div class="card text-white mb-3" style="max-width: 18rem;">
      <div class="card-header blue">BEST BUY OFFER</div>
      <div class="card-body">
        <h5 class="card-title text-dark">Primary card title</h5>
        <img src="{{ asset('pictures/amer_forto.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
      </div>
    </div>
  </div>
  <div class="row text-center">
    <div class="card text-white mb-3" style="max-width: 18rem;">
      <div class="card-header blue">SOLD OUT!</div>
      <div class="card-body">
        <h5 class="card-title text-dark">Gozo, Malta</h5>
        <img src="{{ asset('pictures/gozo.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
      </div>
    </div>
    <div class="card text-white mb-3" style="max-width: 18rem;">
      <div class="card-header blue">HEAVEN FOR RELAXING</div>
      <div class="card-body">
        <h5 class="card-title text-dark">Taha'a, French Polynesia</h5>
        <img src="{{ asset('pictures/taha\'a.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
      </div>
    </div>
    <div class="card text-white mb-3" style="max-width: 18rem;">
      <div class="card-header blue">EXCLUSIVE OFFER</div>
      <div class="card-body">
        <h5 class="card-title text-dark">Cappadocia, Turkey</h5>
        <img src="{{ asset('pictures/cappadocia.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
      </div>
    </div>
  </div>
@endsection 



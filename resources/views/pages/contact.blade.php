@extends('layouts.app')

@section('content')
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
@endsection
@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-md-12 text-center">
      <h3 class="reserveTitle">For easy reserving travels and more benefits please login</h3>
    </div>
  </div>
  <div class="row">
    <form class="register" action="index.html" method="post">
      <div class="form-row">
      </div>
      <div class="form-group col-md-12">
      <input type="text" class="form-control" id="tbUsername" placeholder="Username" required>
      </div>
      <div class="form-group col-md-12">
        <input type="password" class="form-control" id="tbPassword" placeholder="Password" required>
      </div>
      <div class="form-group col-md-12 text-center">
        <button type="submit" class="btn btn-primary col-md-4">Login</button>
      </div>
    </form>
  </div>
@endsection

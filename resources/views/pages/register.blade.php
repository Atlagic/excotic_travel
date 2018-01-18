@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-md-12 text-center">
      <h3 class="reserveTitle">Please fill out the form bellow to register</h3>
    </div>
  </div>
  <div class="row">
    <form class="register" action="index.html" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" id="tbName" placeholder="First name" required>
        </div>
        <div class="form-group col-md-6">
          <input type="text" class="form-control" id="tbLastName" placeholder="Last name" required>
        </div>
      </div>
      <div class="form-group col-md-12">
      <input type="text" class="form-control" id="tbUsername" placeholder="Username" required>
      </div>
      <div class="form-group col-md-12">
      <input type="email" class="form-control" id="tbEmail" placeholder="Email" required>
      </div>
      <div class="form-group col-md-12">
        <input type="password" class="form-control" id="tbPassword" placeholder="Password" required>
      </div>
      <div class="form-group col-md-12 text-center">
        <button type="submit" class="btn btn-primary col-md-4">Register</button>
      </div>
    </form>
  </div>
@endsection

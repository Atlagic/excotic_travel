@extends('layouts.admintemplate')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Admin Dashboard</li>
    </ol>
    <!-- Icon Cards-->
    <div class="row">
        <div class="alert alert-success" role="alert">
            Welcome to Admin Panel <strong>{{ Auth::user()->name }}</strong>.
        </div>
    </div>
    <div class="row">
    </div>
@endsection
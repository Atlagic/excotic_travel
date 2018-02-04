@extends('layouts.admintemplate')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Deals</a>
        </li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="col-md-12 ">
        {!! Form::open(['action' => 'AdminController@storeUsers', 'method' => 'post', 'class' => 'navbar-form', 'role' => 'createusers']) !!}
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('name', Request::get('createusers'), ['class' => 'form-control', 'placeholder' => 'Name']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('lastname', Request::get('createusers'), ['class' => 'form-control', 'placeholder' => 'Last name']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('email', Request::get('createusers'), ['class' => 'form-control', 'placeholder' => 'E-mail']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('password', Request::get('createusers'), ['class' => 'form-control', 'placeholder' => 'Password']) !!}
            </div>
        </div><br/>
        <div class="form-row">
            <div class="col-md-2 formContainer">
                <button type="submit" class="btn btn-primary">Create +</button>
            </div>
        </div><br/>
        {!! Form::close() !!}
    </div>
@endsection
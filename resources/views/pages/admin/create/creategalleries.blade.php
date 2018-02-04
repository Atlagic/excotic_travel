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
        {!! Form::open(['action' => 'AdminController@storeGalleries', 'method' => 'post', 'class' => 'navbar-form', 'role' => 'creategalleries']) !!}
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::label('Small picture upload') !!}
                {!! Form::file('small', Request::get('creategalleries'), ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::label('Big picture upload') !!}
                {!! Form::file('big', Request::get('creategalleries'), ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('alt', Request::get('creategalleries'), ['class' => 'form-control', 'placeholder' => 'Picture alt']) !!}
            </div>
        </div><br/>
        <div class="form-row">
            <div class="col-md-2 formContainer">
                <button type="submit" class="btn btn-primary">Create +</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
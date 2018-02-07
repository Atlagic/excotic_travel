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
        {!! Form::open(['action' => 'AdminController@storeDeal', 'method' => 'post', 'enctype' => 'miltipart/form-data', 'files' => true, 'class' => 'navbar-form', 'role' => 'createdeal']) !!}
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('header', Request::get('createdeal'), ['class' => 'form-control', 'placeholder' => 'Header']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('place', Request::get('createdeal'), ['class' => 'form-control', 'placeholder' => 'Place']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 formContainer">
                {!! Form::textarea('title', Request::get('createdeal'), ['class' => 'form-control', 'placeholder' => 'Title', 'style' => 'max-width:600px; max-height:100px;']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 formContainer">
                {!! Form::textarea('title2', Request::get('createdeal'), ['class' => 'form-control', 'placeholder' => 'Title2', 'style' => 'max-width:600px;max-height:100px;']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('time', Request::get('createdeal'), ['class' => 'form-control', 'placeholder' => 'Time']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-2 formContainer">
                {!! Form::text('price', Request::get('createdeal'), ['class' => 'form-control', 'placeholder' => 'Price']) !!}
            </div>
        </div>
        {{-- U insert into stavi datum postavljanja --}}
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::label('Picture upload') !!}
                {!! Form::file('picture', Request::get('createdeal'), ['class' => 'form-control']) !!}
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
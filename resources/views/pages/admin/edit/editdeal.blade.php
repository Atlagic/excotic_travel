@extends('layouts.admintemplate')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Deals</a>
        </li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="col-md-12 ">
        {!! Form::open(['action' => ['AdminController@updateDeal', $deal->idDeal], Request::get('editdeal'), 'method' => 'post', 'class' => 'navbar-form', 'role' => 'editdeal']) !!}
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('header', $deal->header, ['class' => 'form-control', 'placeholder' => 'Header']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('place', $deal->place, ['class' => 'form-control', 'placeholder' => 'Place']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 formContainer">
                {!! Form::textarea('title', $deal->title, ['class' => 'form-control', 'placeholder' => 'Title', 'style' => 'max-width:600px; max-height:100px;']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 formContainer">
                {!! Form::textarea('title2', $deal->title2, ['class' => 'form-control', 'placeholder' => 'Title2', 'style' => 'max-width:600px;max-height:100px;']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('time', $deal->time, ['class' => 'form-control', 'placeholder' => 'Time']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-2 formContainer">
                {!! Form::text('price', $deal->price, ['class' => 'form-control', 'placeholder' => 'Price']) !!}
            </div>
        </div>
        {{-- U insert into stavi datum postavljanja --}}
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::label('Picture upload') !!}
                {!! Form::file('picture', Request::get('editdeal'), ['class' => 'form-control']) !!}
            </div>
        </div><br/>
        <div class="form-row">
            <div class="col-md-2 formContainer">
                {{Form::hidden('_method', 'PUT')}}
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div><br/>
        {!! Form::close() !!}
    </div>
@endsection
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
        {!! Form::open(['action' => 'AdminController@storePages', 'method' => 'post', 'class' => 'navbar-form', 'role' => 'createpages']) !!}
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('name', Request::get('createpage'), ['class' => 'form-control', 'placeholder' => 'Name']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('title', Request::get('createpage'), ['class' => 'form-control', 'placeholder' => 'Title']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('url', Request::get('createpage'), ['class' => 'form-control', 'placeholder' => 'Url']) !!}
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
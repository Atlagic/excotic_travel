@extends('layouts.admintemplate')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Comments</a>
        </li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="col-md-12 ">
        {!! Form::open(['action' => 'AdminController@storeComments', 'method' => 'post', 'class' => 'navbar-form', 'role' => 'createcomments']) !!}
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('content', Request::get('createcomments'), ['class' => 'form-control', 'placeholder' => 'Content']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('deal', Request::get('createcomments'), ['class' => 'form-control', 'placeholder' => 'Id deal']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('user', Request::get('createcomments'), ['class' => 'form-control', 'placeholder' => 'Id user']) !!}
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
@extends('layouts.admintemplate')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Galleries</a>
        </li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="col-md-12 ">
        {!! Form::open(['action' => ['AdminController@updateGalleries', $picture->idPicture], 'method' => 'post', 'class' => 'navbar-form', 'role' => 'editgalleries']) !!}
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::label('Small picture upload', $picture->smallPicture) !!}
                {!! Form::file('small', Request::get('editgalleries'), ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::label('Big picture upload', $picture->bigPicture) !!}
                {!! Form::file('big', Request::get('editgalleries'), ['class' => 'form-control']) !!}
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('alt',  $picture->alt, ['class' => 'form-control', 'placeholder' => 'Picture alt']) !!}
            </div>
        </div><br/>
        <div class="form-row">
            <div class="col-md-2 formContainer">
                {{Form::hidden('_method', 'PUT')}}
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
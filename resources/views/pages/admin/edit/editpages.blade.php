@extends('layouts.admintemplate')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Pages</a>
        </li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="col-md-12 ">
        {!! Form::open(['action' => ['AdminController@updatePages', $page->idPage], 'method' => 'post', 'class' => 'navbar-form', 'role' => 'editpages']) !!}
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('name', $page->name, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('title', $page->title, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('url', $page->url, ['class' => 'form-control', 'placeholder' => 'Url']) !!}
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
@extends('layouts.admintemplate')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Admins</a>
        </li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="col-md-12 ">
        {!! Form::open(['action' => ['AdminController@updateAdmins', $admin->id], 'method' => 'post', 'class' => 'navbar-form', 'role' => 'editadmins']) !!}
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('name', $admin->name, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('lastname', $admin->lastname, ['class' => 'form-control', 'placeholder' => 'Last name']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('email', $admin->email, ['class' => 'form-control', 'placeholder' => 'E-mail']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('password', $admin->password, ['class' => 'form-control', 'placeholder' => 'Password']) !!}
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
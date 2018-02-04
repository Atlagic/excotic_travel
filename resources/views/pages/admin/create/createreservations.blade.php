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
        {!! Form::open(['action' => 'AdminController@storeReservations', 'method' => 'post', 'class' => 'navbar-form', 'role' => 'createreservations']) !!}
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('name', Request::get('createreservations'), ['class' => 'form-control', 'placeholder' => 'Name']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('lastname', Request::get('createreservations'), ['class' => 'form-control', 'placeholder' => 'Last name']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('place', Request::get('createreservations'), ['class' => 'form-control', 'placeholder' => 'Place']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::date('departure', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Departure', 'required']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::date('return', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Return', 'required']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {{ Form::select('kids', [
                   'kids' => 'Kids ...',
                   '0' => '0',
                   '1' => '1',
                   '2' => '2',
                   '3' => '3',
                   '4' => '4'],
                   'kids',
                   ['class' => 'form-control',
                   'required']
                ) }}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {{ Form::select('accommodation', [
                   'accommodation' => 'Accommodation...',
                   'Hotel' => 'Hotel',
                   'Motel' => 'Motel',
                   'Hostel' => 'Hostel',
                   'Camping' => 'Camping'],
                   'accommodation',
                   ['class' => 'form-control',
                   'required']
                ) }}
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
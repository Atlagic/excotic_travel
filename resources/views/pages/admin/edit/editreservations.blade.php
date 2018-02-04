@extends('layouts.admintemplate')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Reservations</a>
        </li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="col-md-12 ">
        {!! Form::open(['action' => ['AdminController@updateReservations', $reservation->idReservation], 'method' => 'post', 'class' => 'navbar-form', 'role' => 'editreservations']) !!}
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('name', $reservation->firstName, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('lastname', $reservation->lastName, ['class' => 'form-control', 'placeholder' => 'Last name']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::text('place', $reservation->place, ['class' => 'form-control', 'placeholder' => 'Place']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::date('departure', $reservation->startDate, ['class' => 'form-control', 'placeholder' => 'Departure', 'required']) !!}
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 formContainer">
                {!! Form::date('return', $reservation->endDate, ['class' => 'form-control', 'placeholder' => 'Return', 'required']) !!}
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
                   $reservation->kids,
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
                   $reservation->accommodation,
                   ['class' => 'form-control',
                   'required']
                ) }}
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
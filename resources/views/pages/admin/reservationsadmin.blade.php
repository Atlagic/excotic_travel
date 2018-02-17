@extends('layouts.admintemplate')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Reservations</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Reservations table</div>
        <a href="{{ url('/admin/create/createreservations') }}" class="insert"><button class="btn btn-primary insert" type="button">Insert reservation</button></a>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>LASTNAME</th>
                        <th>PLACE</th>
                        <th>DEPARTURE</th>
                        <th>RETURN</th>
                        <th>KIDS</th>
                        <th>ACCOMMODATION</th>
                        <th>CREATED AT</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($reservations) > 0)
                        @foreach($reservations as $reservation)
                            <tr>
                                <td>{{ $reservation->idReservation }}</td>
                                <td>{{ $reservation->firstName }}</td>
                                <td>{{ $reservation->lastName }}</td>
                                <td>{{ $reservation->place }}</td>
                                <td>{{ $reservation->startDate }}</td>
                                <td>{{ $reservation->endDate }}</td>
                                <td>{{ $reservation->kids }}</td>
                                <td>{{ $reservation->accommodation }}</td>
                                <td>{{ $reservation->time }}</td>
                                <td><a href="edit/reservationsadmin/{{ $reservation->idReservation }}/editreservations" class="btn btn-default">Update</a></td>
                                <td>
                                    {!! Form::open(['action' => ['AdminController@destroyReservations', $reservation->idReservation], 'method' => 'POST', 'id' => 'deleteform', 'class' => 'navbar-form']) !!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {{--<a href="javascript:{}" onclick="document.getElementById('deleteform').submit(); return false;"><span class="oi oi-trash"></span></a>--}}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
@endsection
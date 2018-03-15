@extends('layouts.admintemplate')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Admin Dashboard</li>
    </ol>
    <!-- Icon Cards-->
    <div class="row">
        <div class="alert alert-success" role="alert">
            Welcome to Admin Panel <strong>{{ Auth::user()->name }}</strong>.
        </div>
    </div>
    <div class="row">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> User Activity</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>IP ADDRESS / NAME</th>
                            <th>BROWSER</th>
                            <th>TIME</th>
                            <th>PAGE</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($logs) > 0)
                            @foreach($logs as $log)
                                <tr>
                                    <td>{{ $log->idLog }}</td>
                                    <td>{{ $log->ipAddress }}</td>
                                    <td>{{ $log->browser }}</td>
                                    <td>{{ $log->time}}</td>
                                    <td>{{ $log->page}}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
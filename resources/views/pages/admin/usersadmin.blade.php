@extends('layouts.admintemplate')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Users</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Users table</div>
        <a href="{{ url('/admin/create/createusers') }}" class="insert"><button class="btn btn-primary insert" type="button">Insert user</button></a>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>LASTNAME</th>
                        <th>E-MAIL</th>
                        <th>PASSWORD</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($users) > 0)
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->lastname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->password }}</td>
                                <td><a href="edit/usersadmin/{{ $user->id }}/editusers" class="btn btn-default">Update</a></td>
                                <td>
                                    {!! Form::open(['action' => ['AdminController@destroyUsers', $user->id], 'method' => 'POST', 'id' => 'deleteform', 'class' => 'navbar-form']) !!}
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
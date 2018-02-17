@extends('layouts.admintemplate')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Comments</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Comments table</div>
        <a href="{{ url('/admin/create/createcomments') }}" class="insert"><button class="btn btn-primary insert" type="button">Insert comment</button></a>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>CONTENT</th>
                        <th>DEAL</th>
                        <th>USER</th>
                        <th>TIME</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($comments) > 0)
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{ $comment->idComment }}</td>
                                <td>{{ $comment->content }}</td>
                                <td>{{ $comment->idDeal }}</td>
                                <td>{{ $comment->idUser}}</td>
                                <td>{{ $comment->ctime}}</td>
                                <td><a href="edit/commentsadmin/{{ $comment->idComment }}/editcomments" class="btn btn-default">Update</a></td>
                                <td>
                                    {!! Form::open(['action' => ['AdminController@destroyComment', $comment->idComment], 'method' => 'POST', 'id' => 'deleteform', 'class' => 'navbar-form']) !!}
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
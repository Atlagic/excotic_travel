@extends('layouts.admintemplate')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Pages</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Pages table</div>
        <a href="{{ url('/admin/create/createpages') }}" class="insert"><button class="btn btn-primary insert" type="button">Insert page</button></a>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>TITLE</th>
                        <th>URL</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($pages) > 0)
                        @foreach($pages as $page)
                            <tr>
                                <td>{{ $page->idPage }}</td>
                                <td>{{ $page->name }}</td>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->url }}</td>
                                <td><a Href="edit/pagesadmin/{{ $page->idPage }}/editpages" class="btn btn-default">Update</a></td>
                                <td>
                                    {!! Form::open(['action' => ['AdminController@destroyPages', $page->idPage], 'method' => 'POST', 'id' => 'deleteform', 'class' => 'navbar-form']) !!}
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
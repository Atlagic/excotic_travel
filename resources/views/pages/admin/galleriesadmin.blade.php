@extends('layouts.admintemplate')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Galleries</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Galleries table</div>
        <a href="{{ url('/admin/create/creategalleries') }}" class="insert"><button class="btn btn-primary insert" type="button">Insert picture</button></a>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>SMALL PICTURE</th>
                        <th>BIG PICTURE</th>
                        <th>ALT</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($pictures) > 0)
                        @foreach($pictures as $picture)
                            <tr>
                                <td>{{ $picture->idPicture }}</td>
                                <td><img src="{{ asset($picture->smallPicture) }}" height="250" width="400"/></td>
                                <td><img src="{{ asset($picture->bigPicture) }}" height="250" width="400"/></td>
                                <td>{{ $picture->alt }}</td>
                                <td><a href="edit/galleriesadmin/{{ $picture->idPicture }}/editgalleries" class="btn btn-default">Update</a></td>
                                <td>
                                    {!! Form::open(['action' => ['AdminController@destroyGalleries', $picture->idPicture], 'method' => 'POST', 'id' => 'deleteform', 'class' => 'navbar-form']) !!}
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
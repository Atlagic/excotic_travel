@extends('layouts.admintemplate')

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Deals</li>
</ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Deals table</div>
    <a href="{{ url('/admin/create/createdeal') }}" class="insert"><button class="btn btn-primary insert" type="button">Insert deal</button></a>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>HEADER</th>
                    <th>PLACE</th>
                    <th>TITLE 1</th>
                    <th>TITLE 2</th>
                    <th>TIME</th>
                    <th>PRICE</th>
                    <th>DATE</th>
                    <th>PICTURE</th>
                </tr>
                </thead>
                <tbody>
                @if(count($deals) > 0)
                    @foreach($deals as $deal)
                        <tr>
                            <td>{{ $deal->idDeal }}</td>
                            <td>{{ $deal->header }}</td>
                            <td>{{ $deal->place }}</td>
                            <td>{{ substr($deal->title, 0, 80).' ...' }}</td>
                            <td>{{ substr($deal->title2, 0, 80).' ...'}}</td>
                            <td>{{ $deal->time }}</td>
                            <td>{{ $deal->price }}</td>
                            <td>{{ date("d/m/y H:i:s", $deal->date) }}</td>
                            <td><img src="{{ asset($deal->picture)}}" height="100" width="200"/></td>
                            <td><a href="edit/dealsadmin/{{ $deal->idDeal }}/editdeal" class="btn btn-default">Update</a></td>
                            <td>
                                {!! Form::open(['action' => ['AdminController@destroyDeal', $deal->idDeal], 'method' => 'POST', 'id' => 'deleteform', 'class' => 'navbar-form']) !!}
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
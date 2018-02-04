@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-4 picCont">
      <img class="media-object" src="{{ asset($item->picture) }}" width="300" height="200" alt="item_picture">
    </div>
    <div class="col-md-7">
      <div id="accordion" role="tablist">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
                About place
              </a>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                {{ $item->title }}
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                Interesting facts
              </a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                {{ $item->title2 }}
            </div>
          </div>
        </div>
      </div>
    </div></div>
    <div class="row">
      <div class="col-md-12 text-center">
        <h3 class="reserveTitle">If you want to reserve this tour fill the form bellow</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
      {!! Form::open(['url' => 'item', 'method' => 'post', 'class' => 'navbar-form', 'role' => 'reserve']) !!}
          <div class="form-row">
            <div class="col-md-4 formContainer">
              {!! Form::text('name', Request::get('reserve'), ['class' => 'form-control', 'placeholder' => 'Aleksandar', 'readonly']) !!}
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 formContainer">
              {!! Form::text('lastname', Request::get('reserve'), ['class' => 'form-control', 'placeholder' => 'Atlagic', 'readonly']) !!}
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 formContainer">
              {!! Form::text('place', Request::get('reserve'), ['class' => 'form-control', 'placeholder' => 'Amer Fort, India', 'readonly']) !!}
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
                   '0' => 'Hotel',
                   '1' => 'Motel',
                   '2' => 'Hostel',
                   '3' => 'Camping'],
                   'accommodation',
                   ['class' => 'form-control',
                   'required']
                ) }}
            </div>
        </div>
        <div class="form-row">
          <div class="col-md-2 formContainer">
            <button type="submit" class="btn btn-primary">Reserve</button>
          </div>
        </div>
        {!! Form::close() !!}
    </div>
  </div>
@endsection

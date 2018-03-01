@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-4 picCont">
      <img class="media-object" src="{{ asset('storage/pictures/'.$item->picture) }}" width="300" height="200" alt="item_picture">
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
          @if (Auth::check())
          <h3 class="reserveTitle">If you want to reserve this tour fill the form bellow</h3>
              @else
              <h3 class="reserveTitle">If you want to reserve this tour please login to fill the form</h3>
          @endif
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
          @if (Auth::check())
              {!! Form::open(['action' => 'OfferController@store', 'method' => 'post', 'class' => 'navbar-form', 'role' => 'reserve']) !!}
              {{ csrf_field() }}
                  <div class="form-row">
                    <div class="col-md-4 formContainer">
                      {{ Form::hidden('deal', $item->idDeal) }}
                      {!! Form::text('name', Auth::user()->name, ['class' => 'form-control', 'readonly']) !!}
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-4 formContainer">
                      {!! Form::text('lastname', Auth::user()->lastname, ['class' => 'form-control', 'readonly']) !!}
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-4 formContainer">
                      {!! Form::text('place', $item->place, ['class' => 'form-control', 'readonly']) !!}
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
                </div><br>
                <div class="form-row">
                  <div class="col-md-2 formContainer">
                      {!! Form::submit('Reserve', array('name' => 'reserve', 'class' => 'btn btn-primary')) !!}
                  </div>
                </div>
                {!! Form::close() !!}
          @endif
    </div>
  </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
          <h3 class="reserveTitle">Please fill out the form bellow to register</h3>
        </div>
      </div>
    <div class="row">
        <form class="form-horizontal register" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-6{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control text-center" name="name" value="{{ old('name') }}" placeholder="Enter your name"required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="form-group col-md-6{{ $errors->has('lastname') ? ' has-error' : '' }}">
                    <input id="lastname" type="text" class="form-control text-center" name="lastname" value="{{ old('lastname') }}" placeholder="Enter your lastname" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                </div>
            </div>
            <div class="form-group col-md-12{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" class="form-control text-center" name="email" value="{{ old('email') }}" placeholder="Enter your E-mail" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            </div>
            <div class="form-group col-md-12{{ $errors->has('password') ? ' has-error' : '' }}">
              <input id="password" type="password" class="form-control text-center" name="password" placeholder="Enter your password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            </div>
            <div class="form-group col-md-12">
                <input id="password-confirm" type="password" class="form-control text-center" name="password_confirmation" placeholder="Confirm your password" required>
            </div>
            <div class="form-group col-md-12 text-center">
              <button type="submit" class="btn btn-primary">
                    Register
              </button>
            </div>
        </form>
    </div>
@endsection

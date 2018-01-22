@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
          <h3 class="reserveTitle">For easy reserving travels and more benefits please login</h3>
        </div>
    </div>
    <div class="row">
        <form class="form-horizontal register" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-row">
            </div>
            <div class="form-group col-md-12{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your E-mail" required autofocus>
            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            </div>
            <div class="form-group col-md-12 {{ $errors->has('password') ? ' has-error' : '' }}">
              <input id="password" type="password" class="form-control" name="password" placeholder="Enter your password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            </div>
            <div class="form-group col-md-12 text-center">
              <button type="submit" class="btn btn-primary">
                    Login
              </button>
            </div>
          </form>
        </div>
@endsection

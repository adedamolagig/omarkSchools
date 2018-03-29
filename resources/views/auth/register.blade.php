@extends('layouts.navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Last Name / Family Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dateOfBirth') ? ' has-error' : '' }}">
                            <label for="dateOfBirth" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dateOfBirth" type="date" class="form-control" name="dateOfBirth" value="{{ old('dateOfBirth') }}" required autofocus>

                                @if ($errors->has('dateOfBirth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dateOfBirth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- <div class="form-group{{ $errors->has('state_of_Origin') ? ' has-error' : '' }}">
                            <label for="state_of_Origin" class="col-md-4 control-label">Local Government of Origin</label>

                            <div class="col-md-6">
                                <input id="state_of_Origin" type="state_of_Origin" class="form-control" name="state_of_Origin" value="{{ old('state_of_Origin') }}" required>

                                @if ($errors->has('state_of_Origin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state_of_Origin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Local_Government_of_Origin') ? ' has-error' : '' }}">
                            <label for="Local_Government_of_Origin" class="col-md-4 control-label">Local Government of Origin</label>

                            <div class="col-md-6">
                                <input id="Local_Government_of_Origin" type="Local_Government_of_Origin" class="form-control" name="Local_Government_of_Origin" value="{{ old('Local_Government_of_Origin') }}" required>

                                @if ($errors->has('Local_Government_of_Origin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Local_Government_of_Origin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('marital_status') ? ' has-error' : '' }}">
                            <label for="marital_status" class="col-md-4 control-label">Marital Status</label>
                            
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                              <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                              <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                              <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>
                            
                        </div>

                        <div class="form-group{{ $errors->has('NOK') ? ' has-error' : '' }}">
                            <label for="NOK" class="col-md-4 control-label">Next of Kin</label>

                            <div class="col-md-6">
                                <input id="NOK" type="NOK" class="form-control" name="NOK" value="{{ old('NOK') }}" required>

                                @if ($errors->has('NOK'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('NOK') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone_NOK') ? ' has-error' : '' }}">
                            <label for="phone_NOK" class="col-md-4 control-label">Next of Kin's Phone number</label>

                            <div class="col-md-6">
                                <input id="phone_NOK" type="phone_NOK" class="form-control" name="phone_NOK" value="{{ old('phone_NOK') }}" required>

                                @if ($errors->has('phone_NOK'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_NOK') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>     
                            </div>
                        </div>
                    </form>

                     <div>
                        <a href=" {{ route('login') }} ">
                            <button class="col-md-2 col-md-offset-4 btn btn-primary">
                            Login
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

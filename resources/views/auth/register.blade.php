@extends('layouts.app')

@section('content')
<body class="signup-page">
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="first_name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- //////////////////////////// -->
                        <!-- <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="last_name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
                          <!-- //////////////////////////// -->
                        <!-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
                          <!-- //////////////////////////// -->

                        <!-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
                          <!-- //////////////////////////// -->

                        <!-- <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div> -->
                          <!-- //////////////////////////// -->

                        <!-- <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div> -->
                          <!-- //////////////////////////// -->
                    <!-- </form>
                </div>
            </div>
        </div>
    </div>
</div> --> -->
<!-- ///////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////// -->
 <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">HUN<b>REH</b></a>
         </div>
        <div class="card">
            <div class="body">
                <!-- <form id="sign_up" method="POST"> -->
                  <form  id="sign_up" method="POST" action="{{ route('register') }}">
                      {{ csrf_field() }}
                    <div class="msg">Register a new membership</div>
                      <!-- //////////////////////////// -->
                    <div class="input-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}"    autofocus>
                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                      <!-- //////////////////////////// -->
                    <div class="input-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name"value="{{ old('last_name') }}"   autofocus>
                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                      <!-- //////////////////////////// -->
                    <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address"value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                      <!-- //////////////////////////// -->
                    <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="8" placeholder="Password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                      <!-- //////////////////////////// -->
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password_confirmation" minlength="8" placeholder="Confirm Password" required>

                         </div>
                    </div>
                      <!-- //////////////////////////// -->
                    <div class="form-group{{ $errors->has('terms') ? ' has-error' : '' }}">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">

                          <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                          @if ($errors->has('terms'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('terms') }}</strong>
                              </span>
                          @endif
                    </div>
                      <!-- //////////////////////////// -->

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="{{ route('login') }}">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>

@endsection

@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

<div class="container">
    <div>
    <div style="margin-top: 100px;margin-left: 100px; float: left;width: 300px;">
        <div class="panel panel-default" style="background-color: #26a69a;">
            
                <div class="panel-body">
                    <img src="{{ asset('/images/home_white.png') }}" style="display: block; margin: auto; margin-top: 100px;">
                <div style="margin-left: 24px;margin-bottom: 86px;"><h4 style="color: #ffffff">MINDS.COM.GT</h4></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        
        <div style="margin-top: 100px; width: 350px; float: left">
            <div class="panel panel-default">
                <div style="margin-left: 30px;"><h4>Login</h4></div>

                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} input-field col s12">
                            <i class="material-icons prefix" style="margin-left: 8px;">account_circle</i>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                <label for="email" class="col-md-4">E-Mail Address</label>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} input-field col s12" style="margin-bottom: 0px;">
                            <i class="material-icons prefix" style="margin-left: 8px;">lock</i>
                                <input id="password" type="password" class="form-control" name="password" required>
                                <label for="password" class="col-md-4">Password</label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <a class="waves-effect waves-red btn-flat" href="{{ route('password.request') }}" style="text-decoration: none; font-family: arial; padding-left: 3px; font-size: 10px; float: right;">
                                    ¿Olvidó su contraseña?
                                </a>  
                        </div>
                            
                        <div class="form-group" style="margin-bottom: 0px;">
                            <div class="">
                                <div class="checkbox" style="align-content: left; float: left; padding-top: 0px; margin-left: 8px;">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} /><span>Remember Me</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="waves-effect waves-teal btn-flat" style="float: right; margin-right: 35px;">
                                    INGRESAR
                                </button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
        <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
@endsection


@extends('layouts.auth')
@section('card-subtitle')
Enter Username And Password To Login
@endsection

@section('content')

@if (session('loginError'))
    <x-alerts.danger :error="session('loginError')" />
@endif

<form class="form-horizontal" method="post" action="{{route('login')}}" validate>
    @csrf
    <fieldset class="form-group position-relative has-icon-left">
        <input name="username" value="{{old('username')}}" type="text" class="form-control" id="user-name" placeholder="Your Username" >
        <div class="form-control-position">
            <i class="la la-user"></i>
        </div>
    </fieldset>
    <fieldset class="form-group position-relative has-icon-left">
        <input type="password" value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>" name="password" class="form-control" id="user-password" placeholder="Enter Password" >
        <div class="form-control-position">
            <i class="la la-key"></i>
        </div>
    </fieldset>
    <div class="form-group row">
        <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
            <fieldset>
                <input name="remember" type="checkbox" <?php if(isset($_COOKIE['user'])){echo 'checked';} ?>  id="remember-me" class="chk-remember">
                <label for="remember-me"> Remember Me</label>
            </fieldset>
        </div>
        <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a href="{{route('reset-password')}}" class="card-link">Forgot Password?</a></div>
    </div>
    <button name="login" type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Login</button>
</form>
@endsection


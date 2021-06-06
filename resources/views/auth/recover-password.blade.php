@extends('layouts.auth')
@section('card-subtitle')
We will send you a link to reset password.
@endsection

@section('content')
<form class="form-horizontal" action="" validate>
	<fieldset class="form-group position-relative has-icon-left">
		<input type="email" class="form-control" id="user-email" placeholder="Your Email Address" name="email">
		<div class="form-control-position">
			<i class="la la-envelope"></i>
		</div>
	</fieldset>
	<button type="submit" class="btn btn-outline-primary btn-lg btn-block">
		<i class="ft-unlock"></i>
		Recover Password
	</button>
</form>
<div class="card-footer border-0">
<p class="float-sm-left text-center">
<p class="float-sm-right text-center">Remembered your password ? <a href="{{route('login')}}" class="card-link">Login</a></p>
</div>
@endsection


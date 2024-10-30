@extends('layouts.guest')
@section('title', 'Login Page')
@section('heading', 'Login Page')
@section('text')
Don't have an account? <a href="{{ route('showRegistrationForm') }}" class="text-warning" id="registerBtn">Register</a>
@endsection
@section('content')
<div class="rounded text-light" style="width: 70%; height: 70%">
	<form action="{{ route('login') }}" method="post" class="d-flex flex-column">
		@csrf
		<h2>Login</h2>
		<div class="form-floating mt-5">
			<input type="email" class="form-control" id="email" name="email" placeholder="Email Address"
				aria-label="Email Address" value="{{ old('email') }}">
			<label for="email" class="text-secondary">Email address <span class="text-danger">*</span></label>
			@error('email')
			<small class="text-danger">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-floating input-group mt-5">
			<input type="password" name="password" id="password" class="form-control" placeholder="Password"
				aria-label="Password">
			<span class="input-group-text"><i class="bi bi-eye-slash-fill" id="password-eye"></i></span>
			<label for="password" class="text-secondary">Password <span class="text-danger">*</span></label>
		</div>
		@error('password')
		<small class="text-danger">{{ $message }}</small>
		@enderror
		{{-- <div class="col mt-4">
			<a href="{{ route('password.request') }}" class="text-success">Forgot password?</a>
		</div> --}}
		<div class="d-grid mt-5">
			<button class="btn btn-success btn-lg" type="submit">Log In</button>
		</div>
	</form>
</div>
@endsection

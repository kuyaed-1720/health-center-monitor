@extends('layouts.guest')
@section('title', 'Registration Page')
@section('heading', 'Registration Page')
@section('text')
Already have an account? <a href="{{ route('showLoginForm') }}" class="text-warning" id="loginBtn">Log in</a>
@endsection
@section('content')
<div class="rounded text-light" style="width: 70%; height: 70%">
    <form action="{{ route('register') }}" method="post" class="d-flex flex-column">
        @csrf
        <h2>Create an account</h2>
        <div class="row g-5 mt-2">
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name"
                        aria-label="First Name" value="{{ old('first_name')}}">
                    <label for="first_name" class="text-secondary">First Name <span class="text-danger">*</span></label>
                    @error('first_name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name"
                        aria-label="Last Name" value="{{ old('last_name')}}">
                    <label for="last_name" class="text-secondary">Last
                        Name <span class="text-danger">*</span></label>
                    @error('last_name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-floating mt-5">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address"
                aria-label="Email Address" value="{{ old('email')}}">
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
        <div class="form-floating input-group mt-5">
            <input type="password" name="password_confirmation" id="confirm_password" class="form-control"
                placeholder="Confirm Password" aria-label="Confirm Password">
            <span class="input-group-text"><i class="bi bi-eye-slash-fill" id="confirm-password-eye"></i></span>
            <label for="confirm_password" class="text-secondary">Confirm Password <span
                    class="text-danger">*</span></label>
        </div>
        <div class="form-check col mt-4 mx-1">
            <input class="form-check-input" type="checkbox" value="agree" id="agree" checked>
            <label class="form-check-label" for="agree">
                I agree to the <a href="#">Terms & Conditions</a> of Homapon Health Center
            </label>
        </div>
        <div class="d-grid mt-4">
            <button class="btn btn-success btn-lg" type="submit">Register</button>
        </div>
    </form>
</div>
@endsection
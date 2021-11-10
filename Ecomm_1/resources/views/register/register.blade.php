@extends('layout.master')

@section('content')
<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="row justify-content-md-center">
        <div class="register col-lg-4">
            <h3>Registration</h3>
            <form action="/register" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="name" name="name" class="form-control rounded-0 rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" autofocus required value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="username" name="username" class="form-control rounded-0 @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating ">
                    <input type="email" name="email" class="form-control rounded-0 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-0 rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password" class="form-label">Password</label>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-grid my-3 mb-3">
                    <button type="submit" class="btn btn-outline-primary">Register</button>
                </div>
                <small class="d-block text-center">Already registered? <a href="/login">Login</a></small>
            </form>
        </div>
    </div>
</div>
@endsection
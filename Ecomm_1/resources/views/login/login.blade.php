@extends('layout.master')

@section('content')
<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="row justify-content-md-center">
        <div class="login col-lg-4">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('failed') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <h3>Please Login</h3>
            <form action="/login" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password" class="form-label">Password</label>
                </div>
                <div class="d-grid my-3 mb-3">
                    <button type="submit" class="btn btn-outline-primary">Login</button>
                </div>
                <small class="d-block text-center">Not registered? <a href="/register">Register Now!</a></small>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layout.master')

@section('content')
<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="row justify-content-md-center">
        <div class="login col-sm-4">
            <h3>Please Login</h3>
            {{-- <form action="" method="POST">
                @csrf --}}
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" autofocus required>
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password" class="form-label">Password</label>
                </div>
                <div class="d-grid my-3 mb-3">
                    <button type="button" class="btn btn-outline-primary">Login</button>
                </div>
                <small class="d-block text-center">Not registered? <a href="/register">Register Now!</a></small>
            {{-- </form> --}}
        </div>
    </div>
</div>
@endsection
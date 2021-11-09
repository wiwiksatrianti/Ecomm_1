@extends('layout.master')

@section('content')
<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="row justify-content-md-center">
        <div class="register col-lg-4">
            <h3>Registration</h3>
            {{-- <form action="" method="POST">
                @csrf --}}
                <div class="form-floating">
                    <input type="name" name="name" class="form-control rounded-0 rounded-top" id="name" placeholder="Name" autofocus required>
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="username" name="username" class="form-control rounded-0 my-0" id="username" placeholder="Username" autofocus required>
                    <label for="username">Username</label>
                </div>
                <div class="form-floating ">
                    <input type="email" name="email" class="form-control rounded-0" id="email" placeholder="name@example.com" autofocus required>
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-0 rounded-bottom" id="password" placeholder="Password" required>
                    <label for="password" class="form-label">Password</label>
                </div>
                <div class="d-grid my-3 mb-3">
                    <button type="button" class="btn btn-outline-primary">Register</button>
                </div>
                <small class="d-block text-center">Already registered? <a href="/login">Login</a></small>
            {{-- </form> --}}
        </div>
    </div>
</div>
@endsection
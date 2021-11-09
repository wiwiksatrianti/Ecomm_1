@extends('master')

@section('content')
<div class="container position-absolute top-50 start-50 translate-middle">
    <div class="row justify-content-md-center">
        <div class="col-sm-4">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="d-grid mb-3">
                    <button type="button" class="btn btn-outline-primary">Login</button>
                </div>
                <div class="form-text text-center">Not registered? <a href="">Register Now!</a></div>
            </form>
        </div>
    </div>
</div>
@endsection
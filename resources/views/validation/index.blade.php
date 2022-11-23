@extends('validation.layouts.main')

@section('content')
    <h3>Please Login</h3>
    <form action="{{ route('actionlogin') }}" method="post">
        @csrf
        <div class="input-group mb-1">
            <span class="input-group-text"><span class="fad fa-user"></span></span>
            <input type="text" class="form-control" placeholder="username..." name="username">
        </div>
        <div class="input-group mb-1">
            <span class="input-group-text"><span class="fal fa-key"></span></span>
            <input type="password" id="password" class="form-control" placeholder="password..." name="password">
        </div>
        <div class="mb-3 password-show">
            <p>
                <input type="checkbox" onclick="showpassword()"> Show Password
            </p>
        </div>
        <button class="btn btn-primary col-md-12 col-sm-12">Login</button>
    </form>
    <a href="reset password" onclick="return confirm('Apakah anda yakin untuk mereset password?')">Saya lupa password</a>
@endsection
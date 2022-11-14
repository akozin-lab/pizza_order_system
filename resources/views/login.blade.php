@extends('layouts.master')

@section('title', 'login')

@section('myContent')
<div class="login-wrap">
    <div class="login-content">
        <div class="login-logo">
            <a href="#">
                <img src="{{asset('Admin/images/icon/logo.png')}}" alt="CoolAdmin">
            </a>
        </div>
        <div class="login-form">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Email Address</label>
                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                </div>
                @error('email')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label>Password</label>
                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                </div>
                @error('password')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>

            </form>
            <div class="register-link">
                <p>
                    Don't you have account?
                    <a href="{{route('Auth#register')}}">Sign Up Here</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

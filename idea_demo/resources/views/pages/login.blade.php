@extends('layouts.login-layout')
@section('content')
   <div class="login">
       <div class="left-sec">
        <div class="content">
            <h3>Welcome To</h3>
            <h1>Mother's Treat</h1>
        </div>
       </div>

       <div class="right-sec">
           <div class="login-div" id="login">
               <div class="social-login">
                    <button class="fb-login">Login with Facebook</button>
                    <p>or</p>
                    <button class="gmail-login">Login with Gmail</button>
               </div>
                <form action="{{route('custom.login')}}" method="post">
                    @csrf
                    <div class="input-div">
                        <input type="email" placeholder="Email" name="email" value="{{old('email')}}">
                    </div>

                    <div class="input-div">
                        <input type="password" placeholder="Password" name="password" value="{{old('password')}}">
                    </div>

                    <div class="input-div">
                        <button type="submit">Login <i class="fa fa-long-arrow-right"></i></button>
                    </div>
                </form>

                <div class="links">
                    <p>Don't have an account?
                        <a href="{{ action('CustomAuthController@registerView') }}" id="register-link">Register
                            {{-- <i class="fa fa-long-arrow-right"></i> --}}
                        </a>
                    </p>
                </div>
           </div>
       </div>
   </div>
@stop

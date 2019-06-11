@extends('layouts.login-layout')
@section('content')
   <div class="login">
       <div class="left-sec">
        <div class="content">
            <h3>Welcome To</h3>
            <h1>Investment Portal</h1>
        </div>
       </div>

       <div class="right-sec">
           <div class="login-div">
               @if (!@empty($errors))
                   {{$errors}}
               @endif

               <h3 class="text-center mb-4">REGISTER</h3>
               <form action="{{route('custom.register')}}" method="post">
                    @csrf
                    <div class="input-div">
                        <input type="text" placeholder="Name" name="name" value="{{old('name')}}">
                    </div>

                    <div class="input-div">
                        <input type="email" placeholder="Email" name="email" value="{{old('email')}}">
                    </div>

                    <div class="input-div">
                        <input type="text" placeholder="Phone" name="phone" value="{{old('phone')}}">
                    </div>

                    <div class="input-div">
                        <input type="password" placeholder="Password" name="password" value="{{old('password')}}">
                    </div>

                    <div class="input-div">
                        <button type="submit">Register <i class="fa fa-long-arrow-right"></i></button>
                    </div>
                </form>

                <div class="links">
                    <p>Already have an account?
                        <a href="{{url('login')}}" id="login-link">Login
                            {{-- <i class="fa fa-long-arrow-right"></i> --}}
                        </a>
                    </p>
                </div>
           </div>
       </div>
   </div>
@stop

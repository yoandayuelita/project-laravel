@extends('section.mainbase')

@section('content')

<div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/')}}">LOGIN</a></li>
                    <li class="active">REGISTER</li>
                </ol>
            </div>
        </div>
    <div class="reg-form">
        <div class="container">
            <div class="reg">
                <h3>Register Now</h3>
                @include('utils.notif')
                <p>Welcome, please enter the following details to continue.</p>
                <p>If you have previously registered with us, <a href="{{url('login')}}">click here</a></p>
                 <form action="{{url('register')}}" method="post">
                    @csrf
                    <ul>
                        <li class="text-info">Name: </li>
                        <li><input type="text" value="" name="nama"></li>
                    </ul>
                    <ul>
                        <li class="text-info">Username: </li>
                        <li><input type="text" value="" name="username"></li>
                     </ul>               
                    <ul>
                        <li class="text-info">Email: </li>
                        <li><input type="text" value="" name="email"></li>
                    </ul>
                    <ul>
                        <li class="text-info">Password: </li>
                        <li><input type="password" value="" name="password"></li>
                    </ul>                      
                    <input type="submit" value="Register Now">
                    <p class="click">By clicking this button, you are agree to my  <a href="#">Policy Terms and Conditions.</a></p> 
                </form>
            </div>
        </div>
    </div>

@endsection
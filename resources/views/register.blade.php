@extends('layout/master')
@section('mainpart')
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>
<div class="col-lg-3" >
@if (count($errors)>0)
  @foreach($errors->all() as $error)
  <p class="alert alert-danger">{{$error}}</p> 
  @endforeach
@endif
</div>
<div class="login-page">
  <body background="images/books2.png">
  <div class="form">
    <form class="login-form" method="POST" action="{{url('/user_registersubmit')}}">
      {{ csrf_field() }}
        <input type="text" name="uname" placeholder="name" value="{{old('uname')}}" />
      <input type="text" name="email" placeholder="email address" value="{{old('email')}}"/>
      <input type="password" name="password" placeholder="Enter date of Birth" value="{{old('password')}}"/>
            <button  type="submit">Register</button>
      <p class="message">Already registered? <a href="{{ url('/login_users') }}">Sign in</a></p>
    </form>
  </div>
</div>

            
@endsection
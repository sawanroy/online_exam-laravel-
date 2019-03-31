@extends('layout/master')
@section('mainpart')
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    
  </div>
</nav>
@if (count($errors)>0)
@foreach($errors->all() as $error)
  <div class="col-lg-3">
  <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Oh snap!</strong> <a href="#" class="alert-link">{{$error}}
</div>
</div>
@endforeach
@endif
<div class="login-page">
  <body background="images/books2.png">
  <div class="form">
    <form class="login-form" method="POST" action="{{ url('/validate_user') }}">
      {{ csrf_field() }}
      <input type="text" name="email" placeholder="Email" value="{{old('email')}}" />
      <input type="password" name="password" placeholder="password"/>
      <button type="submit">login</button>
      <p class="message">Not registered? <a href="{{ url('/user_registershow') }}" id="message">Create an account</a></p>
    </form>
  </div>
</div>

            
@endsection
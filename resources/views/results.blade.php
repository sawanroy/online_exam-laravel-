@extends('layout/master')
@section('mainpart')
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
    </ul>
  </div>
</nav>
<div class="header">
    @foreach(Session::get('test') as $test)

@endforeach

    <div align="left">
      <font color="yellow">
      <h3> Candidate name:</h3>
      <h2>{{$test->uname}}</h2>
      <h4>subject:</font><font color="white"> mock test</font></h4>
    </div>
  </div>
</div>
</div>
<div class="article">

  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Sno.</th>
      <th scope="col">Test Name</th>
      <th scope="col">Total Question</th>
      <th scope="col">Total Marks</th>
      <th scope="col">Time limit</th>
      <th scope="col">Question Attempted</th>
      <th scope="col">marks obtained</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
      @foreach($testname as $tname)
      <th scope="row">{{$tname->id}}</th>
      <td scope="row">{{$tname->name}}</td>
      <td scope="row">{{$tname->totalquestion}}</td>
      <td scope="row">{{$tname->totalmarks}}</td>
      <td scope="row">{{$tname->time}}</td>
      <td scope="row"><div class="buttons">
        <form method="post" action="{{url('/exam')}}" >
          {{ csrf_field() }}
                      <input type="hidden" name="tname" value="{{$tname->name}}">
                      <button type="submit" class="btn btn-primary btn-sm">Click Here</button>
                    </div></form></td>
    </tr>
    @endforeach
  </tbody>
</table> 
</div>         
@endsection
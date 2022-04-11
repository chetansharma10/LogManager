@extends('layouts.users.admin.login_signUp')

@section('title',"🧔 LogIn")

@section('content') 

<div class="container" style="position:absolute; right:450px">
   <div class="row" style="margin-top:45px">
      <div class="col-md-4 col-md-offset-4">
           <h4> Login 🔑 | Auth</h4><hr>

           <form action="{{ route('login.check') }}" method="post">

           @if(Session::get('fail'))
               <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif
@csrf    
<!-- Here whenever we send the POST request from this from then we need to secure
     it by the help of CROSS-SITE FORGIRY-->

     <h4> Select the Mode </h4>
     <div class="form-check">
  <input class="form-check-input" type="radio" name="mode" id="exampleRadios1" value="admin" checked>
  <label class="form-check-label" for="exampleRadios1">
    Project Manager
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="mode" id="exampleRadios2" value="gen-user">
  <label class="form-check-label" for="exampleRadios2">
    Devloper
  </label>
</div>
<br>
    
    <div class="form-group">
                 <label>Username</label>
                 <input type="text" class="form-control" name="username" placeholder="Enter Username" value="{{ old('username') }}">
                 <span class="text-danger">@error('username'){{ $message }} @enderror</span>
              </div>

              <div class="form-group">
                 <label>Password</label>
                 <input type="password" class="form-control" name="password" placeholder="Enter password">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>

              <button type="submit" class="btn btn-block btn-primary">Sign In</button>
              <br>

      <h4>New Admin?</h4>
      <a href="{{ route('admin-signup') }}">Create New Admin Account!</a>   
</div>

@endsection 
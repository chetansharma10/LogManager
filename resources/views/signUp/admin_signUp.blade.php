@extends('layouts.users.admin.login_signUp')

@section('title',"🧔 Admin Signup")

@section('content') 



<div class="container" style="position:relative; right: 400px;">
   <div class="row" style="margin-top:45px">
      <div class="col-md-4 col-md-offset-4">
           <h4>Create New Admin 🧔 |  Register </h4><hr>
           <form action="{{ route('admin.signup.save') }}" method="post">
    
@if(Session::get('success'))
       <div class="alert alert-sucess">
              {{Session :: get('success')}}
</div>
    @endif
    
    @if(Session::get('fail'))
       <div class="alert alert-danger">
              {{Session :: get('fail')}}
</div>
    @endif

    @if(Session::get('err'))
       <div class="alert alert-danger">
              {{Session :: get('err')}}
</div>
    @endif

@csrf    
<!-- Here whenever we send the POST request from this from then we need to secure
     it by the help of CROSS-SITE FORGIRY-->

     <div class="form-group">
                 <label>Name</label>
                 <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ old('name') }}">
                 <span class="text-danger">@error('name'){{ $message }} @enderror</span>
              </div>

              <div class="form-group">
                 <label>JobID</label>
                 <input type="text" class="form-control" name="jobid" placeholder="Enter JobID" value="{{ old('jobid') }}">
                 <span class="text-danger">@error('jobid'){{ $message }} @enderror</span>
              </div>

     
              <div class="form-group">
                 <label>Mail</label>
                 <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{ old('email') }}">
                 <span class="text-danger">@error('email'){{ $message }} @enderror</span>
              </div>

    <div class="form-group">
                 <label>Access Key</label>
                 <input type="password" class="form-control" name="accesskey" placeholder="Enter the Acess Key" value="{{ old('accesskey') }}">
                 <span class="text-danger">@error('accesskey'){{ $message }} @enderror</span>
              </div>
    <!-- This is important which provided by the org so that this admin can able to create his account -->

    <div class="form-group">
                 <label>Team Key</label>
                 <input type="password" class="form-control" name="teamkey" placeholder="Enter the Team Key" value="{{ old('disc') }}">
                 <span class="text-danger">@error('teamkey'){{ $message }} @enderror</span>
              </div>
    <!-- Its also an most important key through which he will create the records of devlopers -->

    <div class="form-group">
                 <label>Username</label>
                 <input type="text" class="form-control" name="username" placeholder="Enter the Username" value="{{ old('username') }}">
                 <span class="text-danger">@error('username'){{ $message }} @enderror</span>
              </div>

    <div class="form-group">
                 <label>Password</label>
                 <input type="password" class="form-control" name="password" placeholder="Set the Password">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>

    <div class="form-group">
                 <label>Discription</label>
                 <textarea type="text" class="form-control" name="disc" placeholder="Write Short Discription" value="{{ old('disc') }}"></textarea>
                 <span class="text-danger">@error('disc'){{ $message }} @enderror</span>
              </div>
    <!-- Admin Have to mention about his work or contribution. -->
    <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
              <br>
              <a href="{{ route('login') }}">I already have an account, sign in</a>
    </div>
              

  </from>
 </div>
</div>

<img src="https://i.pinimg.com/originals/2b/01/17/2b01170a33ad2ea5ef6d70d5acee68c5.gif" height="50%" width="50%" alt="" style="position:absolute;right:0;top:200px"> 


@endsection   
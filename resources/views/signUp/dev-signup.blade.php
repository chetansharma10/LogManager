@extends('layouts.admin.dashboard.main')

@section('title',"🧔 Admin Dashboard")

@section('name',$LoggedAdminData['name'])

@section('teamkey',$LoggedAdminData['teamkey'])

@section('email',$LoggedAdminData['email'])

@section('disc',$LoggedAdminData['discription'])

@section('content') 

 <!-- Adding New Devloper HTML -->
 
 <div class="container">
   <div class="row" style="margin-top:45px">
      <div class="col-md-4 col-md-offset-4">
           <h4>Create New Dev Account  👩‍💻 |  Register </h4><hr>
   <form action="{{ route('admin.dev.save') }}" method="post">


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

    @csrf
     <div class="form-group">
                 <label>Name</label>
                 <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ old('name') }}">
                 <span class="text-danger">@error('name'){{ $message }} @enderror</span>
              </div>

              <div class="form-group">
                 <label>Mail</label>
                 <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{ old('email') }}">
                 <span class="text-danger">@error('email'){{ $message }} @enderror</span>
              </div>

              <div class="form-group">
                 <label>Discription About Dev</label>
                 <textarea type="text" class="form-control" name="discOfDev" placeholder="Write Short Description About Devloper" value="{{ old('disc') }}"></textarea>
                 <span class="text-danger">@error('discOfDev'){{ $message }} @enderror</span>
              </div>

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
                 <label>Server IP</label>
                 <input type="text" class="form-control" name="serverip" placeholder="Enter the Server IP/DNS">
                 <span class="text-danger">@error('serverip'){{ $message }} @enderror</span>
              </div>

              <div class="form-group">
                 <label>LogAccessKey</label>
                 <input type="password" class="form-control" name="logaccesskey" placeholder="Enter the Log Access Key">
                 <span class="text-danger">@error('logaccesskey'){{ $message }} @enderror</span>
              </div>    
      
              <div class="form-group">
                 <label>Domain</label>
                 <input type="text" class="form-control" name="domain" placeholder="Enter the Devloper Domain">
                 <span class="text-danger">@error('domain'){{ $message }} @enderror</span>
              </div>

              <div class="form-group">
                 <label>Project Name</label>
                 <input type="text" class="form-control" name="projectname" placeholder="Enter the Project Name">
                 <span class="text-danger">@error('projectname'){{ $message }} @enderror</span>
              </div>
             
              <div class="form-group">
                 <label>Repo Link</label>
                 <input type="url" class="form-control" name="repolink" placeholder="Enter the Project Repo Link">
                 <span class="text-danger">@error('repolink'){{ $message }} @enderror</span>
              </div>

              <div class="form-group">
                 <label>Discription About Project</label>
                 <textarea type="text" class="form-control" name="discOfProject" placeholder="Write Short Description About Project" value="{{ old('disc') }}"></textarea>
                 <span class="text-danger">@error('discOfProject'){{ $message }} @enderror</span>
              </div>
              <button type="submit" class="btn btn-block btn-primary">Create New Devloper</button>
    
</div>
     
    </form>
   </div>
</div>
</div>

@endsection
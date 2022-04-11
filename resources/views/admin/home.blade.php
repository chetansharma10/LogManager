@extends('layouts.admin.dashboard.main')

@section('title',"🧔 Admin Dashboard")

@section('name',$LoggedAdminData['name'])

@section('teamkey',$LoggedAdminData['teamkey'])

@section('email',$LoggedAdminData['email'])

@section('disc',$LoggedAdminData['discription'])

@section('content') 

<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
      <h2>Manage  <b>  Devlopers </b></h2>
     </div>


     <div class="col-sm-6">
     
     <a href="{{ route('admin.dev.signup') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Devloper</span></a>
       <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete Devloper By Username</span></a>      
     </div>
                </div>
            </div>
           
            <table class="table table-striped table-hover">
    
            <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th> Username </th>
                        <th>ProjectName</th>
                        <th>ServerIP</th>
                        <th>Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($devlopers  as $devloper)
                    <tr>
                        
                        <td>{{ $devloper -> name }} </td>
                        <td> {{ $devloper->email }} </td>
                        <td> {{ $devloper->username }}</td>
                        <td> {{ $devloper->projectname }} </td>
                        <td> {{ $devloper->serverip }} </td>
                        

                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="{{ route('admin.dev.delete' , ['dev_id' => $devloper->dev_id]) }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
   
            </div>
        </div>
    </div>


 <!-- Edit Modal HTML -->
 <div id="editEmployeeModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    
   <form action="{{ route('admin.dev.edit', ['dev_id' => $devloper->dev_id]) }}" method="post">

     <div class="modal-header">      
      <h4 class="modal-title">Edit Dev Profile</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body">     
      
     <div class="form-group">
                 <label>ServerIP</label>
                 <input type="text" class="form-control" name="serverip" placeholder="Enter New ServerIP" value="{{ old('jobid') }}">
              </div>
     
              <div class="form-group">
                 <label>Email</label>
                 <input type="text" class="form-control" name="email" placeholder="Enter New Email" value="{{ old('email') }}">
              </div>

              <div class="form-group">
                 <label>LogAccessKey</label>
                 <input type="text" class="form-control" name="logaccesskey" placeholder="Enter New LogAccessKey" value="{{ old('logaccesskey') }}">
              </div>

              <div class="form-group">
                 <label>ProjectName</label>
                 <input type="text" class="form-control" name="projectname" placeholder="Enter New ProjectName" value="{{ old('projectname') }}">
              </div>

              <div class="form-group">
                 <label>RepoLink</label>
                 <input type="text" class="form-control" name="repolink" placeholder="Enter New repolink" value="{{ old('repolink') }}">
              </div>
     
    </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" class="btn btn-info" value="Update">
     </div>
    </form>
   </div>
  </div>
 </div>
 <!-- Delete Modal HTML -->
 <div id="deleteEmployeeModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
   <form action="{{ route('admin.dev.deletebyUsername') }}" method="post">
   @csrf    
     <div class="modal-header">      
      <h4 class="modal-title">Delete Devloper</h4>
      
      <div class="form-group">
                 <label>UserName</label>
                 <input type="text" class="form-control" name="username" placeholder="Enter Dev Username">
              </div>

      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     
    </div>
     <div class="modal-body">     
      <p>Are you sure you want to delete these Records?</p>
      <p class="text-warning"><small>This action cannot be undone.</small></p>
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" class="btn btn-danger" value="Delete">
     </div>
    </form>
   </div>
  </div>
 </div>

</div>
@endsection
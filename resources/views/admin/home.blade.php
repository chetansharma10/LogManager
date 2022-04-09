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
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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
    <form>
     <div class="modal-header">      
      <h4 class="modal-title">Edit Employee</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     </div>
     <div class="modal-body">     
      <div class="form-group">
       <label>Name</label>
       <input type="text" class="form-control" required>
      </div>
      <div class="form-group">
       <label>Email</label>
       <input type="email" class="form-control" required>
      </div>
      <div class="form-group">
       <label>Address</label>
       <textarea class="form-control" required></textarea>
      </div>
      <div class="form-group">
       <label>Phone</label>
       <input type="text" class="form-control" required>
      </div>     
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" class="btn btn-info" value="Save">
     </div>
    </form>
   </div>
  </div>
 </div>
 <!-- Delete Modal HTML -->
 <div id="deleteEmployeeModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form>
     <div class="modal-header">      
      <h4 class="modal-title">Delete Employee</h4>
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
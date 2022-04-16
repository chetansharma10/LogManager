@extends('layouts.dev.dashboard.main')

@section('title',"👩‍💻 Dev Dashboard")

@section('name',$LoggedDevData['name']??"")

@section('teamkey',$LoggedDevData['teamkey']??"")

@section('email',$LoggedDevData['email']??"")

@section('disc',$LoggedDevData['discAboutDev']??"")

@section('content') 

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
      <h2>Assigned <b> Projects</b></h2>
     </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
      
                        <th>Project Name</th>
                        <th>Domain</th>
                        <th>Server IP</th>
                        <th>Repo Link</th>
                        <th>Actions</th>
                   
                    </tr>
                
                </thead>
                <tbody>
                    <tr>
      
                        <td>{{ $LoggedDevData['projectname']??"" }}</td>
                        <td>{{ $LoggedDevData['domain']??"" }}</td>
      <td>{{ $LoggedDevData['serverip']??"" }}</td>
                        <td>{{ $LoggedDevData['repolink']??"" }}</td>
                        <td>
                        <a href=" {{ route('logout') }} "><button type="submit" class="btn btn-block btn-primary">View Project</button></a>
                        <br>
                        <a href=" {{ route('dev.log.dashboard') }} "><button type="submit" class="btn btn-block btn-primary">Log View</button></a>
                        </td>
                    </tr>

                </tbody>
            </table>
   
        </div>
    </div>
 
    </form>
   </div>
  </div>
 </div>

</div>
@endsection
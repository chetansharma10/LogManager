<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> normal user </title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="adminstyle.css">
<script src="adminjs.js"></script>
<style>
    footer {
  top: 100%;
   width: 100%;
   position: absolute;
    text-align: center;
    padding: 3px;
    background-color: rgb(66, 66, 66);
    color: white;
  }







  .fa {
    padding: 14px;
    font-size: 15px;
    width: 4%;
    height: 40px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 100%;

    
    
  }
  
  .fa:hover {
      opacity: 0.7;
  }
  
  .fa-facebook {
    background: #3B5998;
    color: white;
    position: absolute;
    text-align: center;
    
  }
  
  .fa-twitter {
    background: #55ACEE;
    color: white;
  }
  
  .fa-google {
    background: #dd4b39;
    color: white;
  }
  
  .fa-linkedin {
    background: #007bb5;
    color: white;
  }
  
  .fa-youtube {
    background: #bb0000;
    color: white;
  }
  
  .fa-instagram {
    background: #125688;
    color: white;
  }
  
  .fa-pinterest {
    background: #cb2027;
    color: white;
  }
  
  .fa-snapchat-ghost {
    background: #fffc00;
    color: white;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  }
  
  .fa-skype {
    background: #00aff0;
    color: white;
  }
  
  .fa-android {
    background: #a4c639;
    color: white;
  }
  
  .fa-dribbble {
    background: #ea4c89;
    color: white;
  }
  
  .fa-vimeo {
    background: #45bbff;
    color: white;
  }
  
  .fa-tumblr {
    background: #2c4762;
    color: white;
  }
  
  .fa-vine {
    background: #00b489;
    color: white;
  }
  
  .fa-foursquare {
    background: #45bbff;
    color: white;
  }
  
  .fa-stumbleupon {
    background: #eb4924;
    color: white;
  }
  
  .fa-flickr {
    background: #f40083;
    color: white;
  }
  
  .fa-yahoo {
    background: #430297;
    color: white;
  }
  
  .fa-soundcloud {
    background: #ff5500;
    color: white;
  }
  
  .fa-reddit {
    background: #ff5700;
    color: white;
  }
  
  .fa-rss {
    background: #ff6600;
    color: white;
  }
</style>
</head>
<body>

<!-- --------------------------------------------------------- header-------------------------- -->

<div class="navbar navbar-inverse navbar-static-top">
    <div class="container " style="position: relative;">
     <button style="position: absolute;"> <img src="usericon.png" alt="" height="50px" style="top: 1%; position:absolute; bottom: 0%;"></button>
     <h3 style="position: absolute; left: 8%; color: rgb(255, 255, 255); "> Name</h3> 
     <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse navHeaderCollapse">
        <ul class="nav navbar-nav navbar-right text-center">
        
          <!-- <li calass="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">USERNAME <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="">facebook</a></li>
              <li><a href="">google+</a></li>
              <li><a href="">instagram</a></li>
              <li><button style="border: #03A9F4;">logout</button></li> -->
<p style="color: #bbb; left: 80%;position: absolute; margin-top: 1.5%;"> jhgfjrhfhidhkjdhgiyyrikjdhfhdf</p>

            </ul>
          </li>
         
        </ul>
      </div>
    </div>
  </div>

<!-- --------------------------------------------------------- header-------------------------- -->


    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
      <h2>Manage <b>Employees</b></h2>
     </div>
     <div class="col-sm-6">
      <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
      <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>      
     </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
      <th>
       <span class="custom-checkbox">
        <input type="checkbox" id="selectAll">
        <label for="selectAll"></label>
       </span>
      </th>
                        <th>Name</th>
                        <th>Email</th>
      <th>Address</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
      <td>
       <span class="custom-checkbox">
        <input type="checkbox" id="checkbox1" name="options[]" value="1">
        <label for="checkbox1"></label>
       </span>
      </td>
                        <td>Dany Lo</td>
                        <td>soengsouy@mail.com</td>
      <td>89 Chiaroscuro Rd, Portland, Phnom Penh</td>
                        <td>0966686371</td>
                        <td>
                          <button style="background-color: red; color: black;">log view</button>

                        </td>
                    </tr>
                    <tr>
      <td>
       <span class="custom-checkbox">
        <input type="checkbox" id="checkbox2" name="options[]" value="1">
        <label for="checkbox2"></label>
       </span>
      </td>
                        <td>Vivy Pay</td>
                        <td>soengsouy@mail.com</td>
      <td>Obere Str. 57, Berlin, Battombang</td>
                        <td>0966686372</td>
                        <td>
                            <button style="background-color: red; color: black;">log view</button>
                        </td>
                    </tr>

                </tbody>
            </table>
   <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>100</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
 <!-- Edit Modal HTML -->
 <div id="addEmployeeModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form>

     <div class="modal-header">      
      <h4 class="modal-title">Add Employee</h4>
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
      
      <div class="form-group">
        <label>Project</label>
        <input type="text" class="form-control" required>
       </div>     
      

      <div class="form-group">
        <label>Project Discription</label>
       <textarea class="form-control" required></textarea>
       </div>     
      

      <div class="form-group">
        <label>GITHUB LINK</label>
        <input type="text" class="form-control" required>
       </div>     
      </div>
      

     </div>
     
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" class="btn btn-success" value="Add">
     </div>
    </form>
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

<div style="height: 20%; width: 100%; background-color: rgb(255, 0, 0);" ></div>

<footer>
  <h6> contact us</h6>
 
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-google"></a>
  <a href="#" class="fa fa-linkedin"></a>
  <a href="#" class="fa fa-youtube"></a>
  <center> <h4> Privacy | Site Terms | Cookie Preferences | © 2022, Amazon Web Services, Inc. or its affiliates. All rights reserved.</h4></center>

</footer>
</body>
</html>                                                                    

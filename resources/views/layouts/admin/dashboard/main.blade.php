<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> @yield('title') </title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">

<link rel="stylesheet" href=@yield('logcss')>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/adminstyle.css">
<script src="/js/adminjs.js"></script>
<style>
    footer {
  top: 100%;
   width: 100%;
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

<div style="margin-top: 40px"> 
    <img src="/images/usericon.png" alt="" height="50px" style="top: 40px; position:absolute; bottom: 0%;">
     <h3 style="position: absolute; left: 8%; color: rgb(255, 255, 255); "> Hello !! @yield('name') 👋</h3> 
</div>

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
              <div style="width: 500px">
<div style="display: inline-block;">
<h5 style="color: #bbb; position: relative; right:10px"><b style="color:red">TeamKey🔑 :</b> @yield('teamkey')</h5>
</div>
<div style="display: inline-block;">
<h5 style="left: 70%; color: #bbb;"><b style="color:red">Email📧 :</b> @yield('email')</h5>
</div>

<h5 style="color: #bbb; left: 80%; margin-top: 1.5%;"><b style="color:red">Description📝 :</b> @yield('disc')</h5>

<br>
<br>
</div>

<div style="position: relative; bottom: 20px">

<div style="display: inline-block;">
<a href= " {{ route('logout') }} "><button type="submit" style="width: 100%; position: relative; right:10px" class="btn btn-block btn-primary">LogOut</button></a>
</div>

<div style="display: inline-block;">
<a href=" {{ route('admin.dashboard') }} "><button type="submit" style="width: 100%" class="btn btn-block btn-primary">Dashboard</button></a> 
</div>

</div>

</ul>
          </li>
         
        </ul>
      </div>
    </div>
  </div>

<!-- --------------------------------------------------------- header-------------------------- -->

@yield('content')

<!---- Footer --->
<footer
style="position:relative;
   top: 10px;
   bottom:0;
   height:20%;
   width:100%;"  
>
 
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-google"></a>
  <a href="#" class="fa fa-linkedin"></a>
  <a href="#" class="fa fa-youtube"></a>
  <center> <h4> Privacy | Site Terms | Cookie Preferences | © 2022, LogManager, Inc. or its affiliates. All rights reserved.</h4></center>

</footer>
<!--Footer -->
</body>
</html>
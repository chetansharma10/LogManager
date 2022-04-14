<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> @yield('title') </title>

{{-- Added Style Sheet File Here --}}

  {{-- Added Icons W3 --}}
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  
  {{-- Our Public/Css File Here --}}
  <link rel="stylesheet" href="{{asset("css/navFoot.css")}}">

  <link rel="stylesheet" href="{{asset("css/logDashboard.css")}}">
{{-- End Of Style Sheet File Here --}}


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

</head>
<body>

    {{-- NavBar Here --}}
    <div class="logNav">
      <div class="logo">
        <img src="{{asset("/images/log.png")}}">
        &nbsp;LogMng<span style="color:rgb(255, 153, 0);">.com</span>
      </div>

      <div class="importantLinks">
        <button><i class="	fa fa-user-circle-o"></i>&nbsp;@yield('name')</button>
        <a href="{{ route('logout') }} ">Logout</a>
        <a href="{{ route('dev.dashboard') }} ">Dashboard</a>
      </div>

    </div>


    {{-- Dynamic Content Here --}}
    @yield('content')


    {{-- Footer Here --}}
    <div class="footer">

      <div class="links">
        <p>Available Links</p>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/">Dashboard</a></li>
          <li><a href="/">Login</a></li>
          <li><a href="/">Sign Up</a></li>
        </ul>
      </div>


      <div class="links">
        <p>Support</p>
        <ul>
          <li><a href="/">Carriers</a></li>
          <li><a href="/">About</a></li>
          <li><a href="/">Follow</a></li>
          <li><a href="/">Subscribe</a></li>
        </ul>
      </div>


      <div class="links">
        <p>Help</p>
        <ul>
          <li><a href="/">Help Center</a></li>
          <li><a href="/">Author</a></li>
          <li><a href="/"></a></li>
          <li><a href="/"></a></li>
        </ul>
      </div>


      <div class="socialMedia">
        <ul>
          <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
          <li><a href=""><i class="fa fa-instagram"></i></a></li>
          <li><a href=""><i class="fa fa-github"></i></a></li>
          <li><a href=""><i class="fa fa-twitter"></i></a></li>

          <li><a href=""><i class="fa fa-youtube"></i></a></li>
        </ul>
      </div>


    </div>


</body>
</html>
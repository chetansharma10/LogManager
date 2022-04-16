<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset("images/extras/log.png")}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/gsap.min.js"></script>
    <link rel="stylesheet" href="{{asset("css/homePage.css")}}">
    <link rel="stylesheet" href="{{asset("css/logScreen.css")}}">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    {{-- Swiper JS --}}
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

</head>

<body>
    {{-- Container Starts --}}
    <div class="mainContainer">


        {{-- Navbar Starts --}}
        <div class="navBar">
            <div class="topNav">
                <div class="logo">
                    <p>Log</p>
                    <small>Manage Your Logs</small>
                </div>

                <div class="topLinks">
                    <a href="" class="link">Contact Us</a>
                    <a href="" class="link">Sign In</a>
                    <a href="" class="link create">Create Your Account</a>
                </div>

                <i class="material-icons hamburger" style="display:none;color:white;cursor:pointer;"  >dehaze</i>
            </div>

       
            <div class="bottomNav">
                <div class="bottomLinks">
                    <a href="" class="link">Dashboard</a>
                    <a href="" class="link">View Project</a>
                    <a href="" class="link">About</a>
                    <a href="" class="link">Our Contributors</a>
                    <a href="" class="link">Documentation</a>
                    <a href="" class="link">Learn</a>
                    <a href="" class="link">Contribute</a>
                    <a href="" class="link">Help and Support</a>
                </div>
                <div class="topLinksBottom">
                    <a href="" class="link">Contact Us</a>
                    <a href="" class="link">Sign In</a>
                    <a href="" class="link create">Create Your Account</a>
                </div>
            </div>
        </div>
        {{-- Navbar Ends --}}




        {{-- Content Starts --}}
        @yield('content')
        {{-- Content Ends --}}




        {{-- Footer Starts --}}
        <div class="footerBar">
            <div class="linkArea">
                <p class="linkHead">Support</p>
                <ul>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Contributors</a></li>
                    <li><a href="">Location</a></li>
                    <li><a href="">Privacy</a></li>

                </ul>
            </div>


            <div class="linkArea">
                <p class="linkHead">Help</p>
                <ul>
                    <li><a href="">Documentation</a></li>
                    <li><a href="">Other Projects</a></li>
                    <li><a href="">Tools</a></li>
                </ul>
            </div>



            <div class="linkArea">
                <p class="linkHead">Important Links</p>
                <ul>
                    <li><a href="">Sign Up</a></li>
                    <li><a href="">Login</a></li>
                    <li><a href="">Dashboard</a></li>
                    <li><a href="">About</a></li>
                </ul>
            </div>



            <div class="linkArea">
                <p class="linkHead">Follow</p>
                <ul style="align-items:center;">
                    <li><a href=""><i class='fa fa-instagram'></i></a></li>
                    <li><a href=""><i class='fa fa-facebook'></i></a></li>
                    <li><a href=""><i class='fa fa-github'></i></a></li>
                    <li><a href=""><i class='fa fa-google'></i></a></li>
                </ul>
            </div>
        </div>
        {{-- Footer Ends --}}





    </div>
    {{-- Container Ends --}}

    <script src="{{asset("js/homePage.js")}}"></script>
</body>
</html>
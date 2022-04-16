@extends('layouts.home.main')

@section('title',"Home")



@section('content')   
<div class="contentArea">

    {{-- Courasal Started --}}
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide" style="background-image: url({{asset("images/slideshow/1.png")}})">
            <div class="leftSlide">
                <p>Use Logger and Project Management tool for free full year</p>
                <a href="">Learn Our Tool >></a>
            </div>
            <div class="rightSlide">
                <i class="material-icons">equalizer</i>
            </div>
          </div>


          {{-- Slide 2 --}}
          <div class="swiper-slide" style="background-image: url({{asset("images/slideshow/2.png")}})">
            <div class="leftSlide">
                <p>Get Started With Our Project Management Feature</p>
                <a href="">Get Started Now >></a>
            </div>
            <div class="rightSlide">
                <i class="material-icons">touch_app</i>
            </div>
          </div>



          {{-- Slide 3 --}}
          <div class="swiper-slide" style="background-image: url({{asset("images/slideshow/3.png")}})">
            <div class="leftSlide">
                <p>Go and Contribute with our Professional Developer Us</p>
                <a href="">Contribute Now >></a>
            </div>
            <div class="rightSlide">
                <i class="material-icons">transfer_within_a_station</i>
            </div>
          </div>
          
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      
        <!-- If we need scrollbar -->
        {{-- <div class="swiper-scrollbar"></div> --}}
    </div>
    {{-- Courasal Ends --}}



    {{-- Features Tab Starts--}}
    <div class="featuresTab">
      {{-- Feature Item Start --}}
      <div class="feature">
        <img src="{{asset("images/features/1.png")}}" />
        
        <p><strong> Heading Here </strong>Lorem ipsum dolor sit amet consectetur adi
          pisicing elit. 
          </p>
      </div>
      {{-- Feature Item Ends --}}


      {{-- Feature Item Start --}}
      <div class="feature">
        <img src="{{asset("images/features/2.png")}}" />
        
        <p><strong> Heading Here </strong>Lorem ipsum dolor sit amet consectetur adi
          pisicing elit. 
          </p>
      </div>
      {{-- Feature Item Ends --}}


      {{-- Feature Item Start --}}
      <div class="feature">
        <img src="{{asset("images/features/3.png")}}" />
        
        <p><strong> Heading Here </strong>Lorem ipsum dolor sit amet consectetur adi
          pisicing elit. 
          </p>
      </div>
      {{-- Feature Item Ends --}}




      {{-- Feature Item Start --}}
      <div class="feature">
        <img src="{{asset("images/features/4.png")}}" />
        
        <p><strong> Heading Here </strong>Lorem ipsum dolor sit amet consectetur adi
          pisicing elit. 
          </p>
      </div>
      {{-- Feature Item Ends --}}




      
    </div>
    {{-- Features Tab Ends --}}


    {{-- Extra Features Tab Starts --}}
     <div class="extraFeatures">
       <p class="heading">Engineered for the Most Demanding Requirements</p>
       <div class="extraBottom">

        {{-- Extra Items --}}
         <div class="extraBottomItem">
           <i class="material-icons">enhanced_encryption</i>
           <p class="minHead">Secure</p>
           <p class="minDesc">Comprehensive security capabilities to satisfy the most demanding requirements.</p>
         </div>

         <div class="extraBottomItem">
          <i class="material-icons">verified_user</i>
          <p class="minHead">Complaint</p>
          <p class="minDesc">Rich controls, auditing and broad security accreditations.</p>
        </div>

         <div class="extraBottomItem">
          <i class="material-icons">layers</i>
          <p class="minHead">Hybrid</p>
          <p class="minDesc">Build hybrid architectures that extend your on-premises infrastructure to the Cloud.</p>
        </div>

        <div class="extraBottomItem">
          <i class="material-icons">zoom_out_map</i>
          <p class="minHead">Scalable</p>
          <p class="minDesc">Access as much or as little as you need, and scale up and down as required with only a few minutes notice.</p>
        </div>
        {{-- Extra Items Ends --}}




       </div>
     </div>
    {{-- Extra Features Tab Ends --}}
      

    
    {{-- Technologies Start--}}
     <div class="logDemoContainer">
       <div class="details">
         <p class="detailsTop">Consistent Experience Across Our Platform</p>
         <p class="detailsSub">
          For developers, data scientists, solutions architects, or anyone interested in learning
         </p>
       </div>
       <div class="logTv">
         <div class="logNav">
           <div class="logIcons">
             &nbsp;
             <span class="gray"></span>
             <span class="orange"></span>
             <span class="red"></span>
             <small>Anonymous</small>
           </div>
           
         </div>
         <div class="logScreen" style="background-image: url({{asset("images/gifs/1.gif")}})"></div>
       </div>
     </div>
    {{-- Technologies Ends --}}


    {{-- Tools Used --}}





</div>
 
@endsection         
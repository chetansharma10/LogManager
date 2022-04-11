@extends('layouts.dev.dashboard.main')

@section('title',"👩‍💻 Log Dashboard")

@section('logcss',"/css/logs1.css")

@section('name',$LoggedDevData['name'])

@section('teamkey',$LoggedDevData['teamkey'])

@section('email',$LoggedDevData['email'])

@section('disc',$LoggedDevData['discAboutDev'])

@section('content') 

<center>
<div>

<div style="width: 80%;height: 60px ; background-color: grey; position: relative">
   <center><h4 style="color: white;top:10px;position: relative"> {{ $LoggedDevData['username']."@".$LoggedDevData['serverip'] }} </h4> <center>
   <input type="image" name="close" id="" src="/images/close.png" height="50% " value="❌" style="position: absolute; left: 95%; top:10px;" >
 <input type="image" name="maxi" class="" src="/images/maximize.png" height="50% " style="position: absolute; left: 90%; top:10px;" >
 <input type="image" name="mini" class="" src="/images/minimize.png" height="50% " style="position: absolute; left: 85%; top:10px;">
 <input type="image" name="search" class="" src="/images/search.png" height="50% "style="position: absolute; left: 10%; top:10px;"> 
 <input type="image" name="refresh"   class="refresh" src="/images/refresh.png" height="50%"  style="position: absolute; left: 5%; top:10px"> 
 

</div>

   <div style="width: 80%;height: 50rem ; background-color: black; bottom:20px; position: relative">
   <h5 style=" padding: 25px 50px 75px 100px; color: green"> 
    software like Aldus PageMaker including versions of Lorem Ipsum. </h5>
</div>
    
</div>
</center>

@endsection 
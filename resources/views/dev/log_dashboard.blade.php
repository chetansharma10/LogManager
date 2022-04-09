@extends('layouts.admin.dashboard.main')

@section('title',"👩‍💻 Log Dashboard")

@section('name',$LoggedDevData['name'])

@section('teamkey',$LoggedDevData['teamkey'])

@section('email',$LoggedDevData['email'])

@section('disc',$LoggedDevData['discAboutDev'])

@section('content') 

    <div style="background-color: black; position: absolute; margin-top: 10%; width: 100%; height: 110%; color: rgb(255, 255, 255);"> </div>

    
@endsection 
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

//Importing Models
use App\Models\Dev;

class dev_dashboard extends Controller
{
    public function dashboard()
   {
       $data = ['LoggedDevData'=> Dev :: where('dev_id','=',session('LoggedDev'))->first()];
       
       return view("dev/home")->with($data);
   }

   public function log_dashboard()
   {
    //  $data = ['LoggedDevData'=> Dev :: where('dev_id','=',session('LoggedDev'))->first()];
     
     $dev = Dev :: where('dev_id','=',session('LoggedDev'))->first();

     $res = Http::post('http://'.$dev->serverip.':3000/accesslog', [
      'logkey' => $dev->logaccesskey
      ]);
      
      
      $res=$res->collect();
      
       //return view("dev/log_dashboard")->with(['LoggedDevData' => $dev,'apicall' => $res]);
       return view("dev/Log_dashboard",['LoggedDevData'=> $dev, 'apicall'=> $res]);
    }

   public function project_desc()
   {
     $data = ['LoggedDevData'=> Dev :: where('dev_id','=',session('LoggedDev'))->first()];
       
       return view("dev/project_desc")->with($data);
   }

   
   
}

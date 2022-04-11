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
     $data = ['LoggedDevData'=> Dev :: where('dev_id','=',session('LoggedDev'))->first()];
     
     $dev = Dev :: where('dev_id','=',session('LoggedDev'))->first();

    //  $res = Http::post('http://35.154.14.124:3000/accesslog', [
    //   'logkey' => $dev->logaccesskey
    //   ]);
      
    //   echo "<pre>";
    //   print_r($res);
    //   die;

       return view("dev/log_dashboard")->with($data);
   }

   public function project_desc()
   {
     $data = ['LoggedDevData'=> Dev :: where('dev_id','=',session('LoggedDev'))->first()];
       
       return view("dev/project_desc")->with($data);
   }

   
   
}

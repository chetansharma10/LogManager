<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
       
       return view("dev/log_dashboard")->with($data);
   }
   
}

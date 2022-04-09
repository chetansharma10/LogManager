<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importing Model
use App\Models\Admin;
use App\Models\Dev;


class admin_dashboard extends Controller
{
    public function dashboard(Request $req)
   {
       $data = ['LoggedAdminData'=> Admin :: where('admin_id','=',session('LoggedAdmin'))->first()];
       
       $data1=Admin :: where('admin_id','=',session('LoggedAdmin'))->first();
       
       $devlopers= Dev :: where('teamkey','=',$data1->teamkey)->get();
       $dat = compact('devlopers');
       
       return view("admin/home",$data)->with($dat);
   }


}

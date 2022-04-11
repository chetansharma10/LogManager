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

   public function deleteDev($dev_id)
   {
     $dev =  Dev :: where('dev_id','=',$dev_id);  //it look for primary key
     
     //Might be we are not able to find the data in data base so working on errors
     if(!is_null($dev))
     {
         $dev->delete();
         //this delete function only executed when we found the data
     }
     return redirect('/admin/dashboard'); //beter to use correct route url
   }

   public function deleteDevByUsername(Request $req)
   {
     $dev = Dev :: where('username','=',$req['username']);
     
     if(!is_null($dev))
     {
         $dev->delete();
         //this delete function only executed when we found the data
     }

     return redirect('/admin/dashboard');
   }

   public function editDevProfile(Request $req)
   {
     $dev = Dev :: where('username','=',$req['username']);
     
     if(!is_null($dev))
     {
         $dev->delete();
         //this delete function only executed when we found the data
     }

     return redirect('/admin/dashboard');
   }
   
}

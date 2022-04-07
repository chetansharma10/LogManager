<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importing Model
use App\Models\Admin;

class admin_dashboard extends Controller
{
    public function dashboard(Request $req)
   {
       $data = ['LoggedAdminData'=> Admin :: where('admin_id','=',session('LoggedAdmin'))->first()];
       return view("admin/home",$data);
   }


}

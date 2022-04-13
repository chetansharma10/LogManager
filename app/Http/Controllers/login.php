<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importing Modules
use Illuminate\Support\Facades\Hash;

//importing Model
use App\Models\Admin;
use App\Models\Dev;

class login extends Controller
{
    public function login()
   {
       return view("login/login");
   }

   public function checkCred(Request $req)
   {

       //validating

        $req->validate([
            'username' => 'required|alpha_dash|max:40',
            'password' => 'required'
        ]);

        $req->session()->put('mode',$req->mode);
        if($req->mode=='admin')
        {
            $admin_info= Admin :: where('username','=',$req->username)->first();   //finding the admin detail from admin table
            
            if(!$admin_info)
            {
                return back()->with('fail','We do not able to find the given Admin Details!');
            }
            else
            {
                if(Hash::check($req->password,$admin_info->password))
                {
                      //If Password is correct then put all the info in Session 
                      $req->session()->put('LoggedAdmin',$admin_info->admin_id);
                      return redirect('admin/dashboard');
                }
                else
                {
                     return back()->with('fail','Incorrect Admin Password or Username 🤦‍♂️');
                }
            }
        }
        else
        {
            $dev_info= Dev :: where('username','=',$req->username)->first();   //finding the admin detail from admin table
            
            if(!$dev_info)
            {
                return back()->with('fail','We do not able to find the given Dev Details!');
            }
            else
            {
                if(Hash::check($req->password,$dev_info->password))
                {
                      //If Password is correct then put all the info in Session 
                      $req->session()->put('LoggedDev',$dev_info->dev_id);
                      return redirect('/dev/dashboard');
                }
                else
                {
                     return back()->with('fail','Incorrect Admin Password 🤦‍♂️');
                }
            }
                }
   }

   public function logout()
   {
    session()->pull('mode');
       if(session()->has('LoggedAdmin'))
       {
        session()->pull('LoggedAdmin');
        
       }
       else if(session()->has('LoggedDev'))
       {
           session()->pull('LoggedDev');    
       }
       return view("login/login");
   }
}

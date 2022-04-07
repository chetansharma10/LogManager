<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importing Modules
use Illuminate\Support\Facades\Hash;

//importing Model
use App\Models\Admin;

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
            'username' => 'required|max:40',
            'password' => 'required|min:8|max:20'
        ]);

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
                     return back()->with('fail','Incorrect Admin Password 🤦‍♂️');
                }
            }
            return $req->password;
        }
        else
        {
            return "Chutiya Banaaya!";
        }
   }

   public function logout()
   {
       if(session()->has('LoggedAdmin'))
       {
        session()->pull('LoggedAdmin');
        
       }
       else if(session()->has('LoggedGenUser'))
       {
           session()->pull('LoggedGenUser');
           
       }
       return view("login/login");
   }
}

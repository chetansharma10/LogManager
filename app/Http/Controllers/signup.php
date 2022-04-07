<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importing Utils
use Illuminate\Support\Facades\Hash;

//Importing Model
use App\Models\Admin;

class signup extends Controller
{
    public function adminSignup()
    {
        return view("signUp/admin_signUp");
    }

    public function admincheckSave(Request $req)
    {
        $req->validate([
            'name' => 'required|min:5|max:40',
            'email' => 'required|email|unique:admin',
            'jobid' => 'required|numeric|unique:admin',
            'username' => 'required|max:40|unique:admin',
            'password' => 'required|min:8|max:20',
            'accesskey' => 'required|min:3|max:40',
            'teamkey' => 'required|min:3|max:40|unique:admin',
            'disc' => 'required|min:10|max:200'
          ]);
          
       if($req['accesskey']==env('ADMIN_ACCESS_KEY'))
       {
        $admin = new Admin;
        $admin->name=$req['name'];
        $admin->email=$req['email'];
        $admin->jobid=$req['jobid'];
        $admin->teamkey=Hash::make($req['teamkey']);
        $admin->username=$req['username'];
        $admin->password=Hash::make($req['password']);
        $admin->discription=$req['disc'];
        $save=$admin->save();
        
        if($save)
        {
            return back()->with('success','New Admin Has Successfully Created 🎉');
        }
        else
        {
            return back()->with('fail','Something Went Wrong, Try Again Later!');
        }
        
       }
       else
       {
        return back()->with('err','Something Went Wrong, You Are Not Autherized To Create An New Admin! Your Access Key is Wrong!');
       }
    }

}

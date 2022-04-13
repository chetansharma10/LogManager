<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importing Utils
use Illuminate\Support\Facades\Hash;

//Importing Model
use App\Models\Admin;
use App\Models\Dev;

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
          
       if($req['accesskey']=="Shashwat123")
       {
        $admin = new Admin;
        $admin->name=$req['name'];
        $admin->email=$req['email'];
        $admin->jobid=$req['jobid'];
        $admin->teamkey=$req['teamkey'];
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
    
    
    public function devSignup()
    {
        $data = ['LoggedAdminData'=> Admin :: where('admin_id','=',session('LoggedAdmin'))->first()];
        return view("signUp/dev-signup",$data);
    }

    public function devcheckSave(Request $req)
    {
        $data1=Admin :: where('admin_id','=',session('LoggedAdmin'))->first();
        
        $req->validate([
            'name' => 'required|max:40',
            'email' => 'required|email|unique:dev',
            'discOfDev' => 'required|min:10|max:200',
            'username' => 'required|max:40|unique:dev',
            'password' => 'required|min:8|max:20',
            'serverip' => 'required|max:100',
            'logaccesskey' => 'required|max:100',
            'domain' => 'required|max:40',
            'projectname' => 'required|max:50',
            'repolink' => 'required|max:100',
            'discOfProject' => 'required|min:10|max:200'
          ]);
          
        $dev = new Dev;
        $dev->name=$req['name'];
        $dev->email=$req['email'];
        $dev->discAboutDev=$req['discOfDev'];
        $dev->username=$req['username'];
        $dev->password=Hash::make($req['password']);
        $dev->teamkey=$data1->teamkey;
        $dev->serverip=$req['serverip'];
        $dev->logaccesskey=$req['logaccesskey'];
        $dev->domain=$req['domain'];
        $dev->projectname=$req['projectname'];
        $dev->repolink=$req['repolink'];
        $dev->discAboutproject=$req['discOfProject'];
        $save=$dev->save();
        
        if($save)
        {
            return back()->with('success','New Dev Has Successfully Created 🎉');
        }
        else
        {
            return back()->with('fail','Something Went Wrong, Try Again Later!');
        }
        
       }

}

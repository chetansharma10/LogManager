<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signup extends Controller
{
    public function signup()
    {
        return view("signUp/signUp");
    }

    public function checkSave(Request $req)
    {
        $req->validate([
            'name' => 'required|min:5|max:40',
            'email' => 'required|email|unique:users',
            'jobid' => 'required|numeric',
            'username' => 'required|regex:/^[a-zA-Z]+$/u|max:40|unique:users',
            'password' => 'required|min:8|max:20',
            'accesskey' => 'required|min:3|max:40',
            'teamkey' => 'required|min:3|max:40',
            'discription' => 'required|min:10|max:200'
        ]);


       return dd($req->input());
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signup extends Controller
{
    public function signup()
    {
        return view("signUp/signUp");
    }
}

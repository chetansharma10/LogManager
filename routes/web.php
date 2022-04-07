<?php

use Illuminate\Support\Facades\Route;


//Controllers
use App\Http\Controllers\home;
use App\Http\Controllers\login;
use App\Http\Controllers\signup;
use App\Http\Controllers\admin_dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Welcome Page
Route:: get('/',[home::class, 'home']);

//Comman LogIn Page
Route ::  post('/login/auth',[login::class,'checkCred'])->name('login.check');

//Common LogOut Page
Route :: get('/logout',[login::class,'logout'])->name('logout');

//Admin-SignUp
Route :: post('/admin-signup/admin-verify-save',[signUp::class,'admincheckSave'])->name('admin-signup.save');


//So that we can able to protect all those routes which should not be access without login
Route :: group(['middleware'=>['AuthCheck']],function(){

   //Admin Login --> If User Already Logged in then no need to Login Again (not able to access that route)
   Route ::  get('/login',[login::class,'login'])->name('login');

   //Admin Signup  --> If User Already logged in then no need to signup (not able to access that route)
   Route :: get('/admin-signup',[signUp::class,'adminSignup'])->name('admin-signup');
    
   //Admin Dashboard --> If User Not LogIn Then not able to access this route (not able to access that route)
   Route :: get('/admin/dashboard',[admin_dashboard::class,'dashboard'])->name('admin.dashboard');
});
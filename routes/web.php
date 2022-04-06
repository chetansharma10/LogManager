<?php

use Illuminate\Support\Facades\Route;


//Controllers
use App\Http\Controllers\home;
use App\Http\Controllers\login;
use App\Http\Controllers\signup;


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

//Login
Route ::  get('/login',[login::class,'login']);

//SignUp
Route :: get('/signup',[signUp::class,'signup']);
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //If they are not logged in then agin trying to access the Dashboard then not able to do it
        // || !session()->has('LoggedGenUser') 
        if(!session()->has('LoggedAdmin')&& ($request->path() != 'login'  && $request->path() != 'admin-signup'))
        {
            //Now when ever an logged Out User Trying To access the Dashboard page they will not able to access that and automatically
            // render to the login page
           return redirect('login')->with('fail','You Must Logged In First 😡');
        }
        
        //If they are already logged in then should not able to access the Login Page and Admin-SignUp Page Route Both
        // || session()->has('LoggedGenUser') 
        if(session()->has('LoggedAdmin') && ($request->path() == 'login'  && $request->path() == 'admin-signup'))
        {
           return back();
           //So when ever an logged in user trying to access the pages they automatically come back again an again
        }
        
        //Now we can see that when we try to use the browser back button it is redirecting to those routes
        // which we don't want after login or affter logout then how we can able to disable
        // browser back button
        //So, For this we will use header tricks
        return $next($request)->header('Cache-Control','no-cache,no-store,max-age=0,must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires', 'Sat 01 Jan 1990 00:00:00 GMT');
    }
}

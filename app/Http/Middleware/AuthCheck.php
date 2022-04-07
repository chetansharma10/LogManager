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
        if(!session()->has('LoggedAdmin') || !session()->has('LoggedGenUser') && ($request->path() != 'login'  && $request->path() != 'admin-signup'))
        {
            //Now when ever an logged Out User Trying To access the Dashboard page they will not able to access that and automatically
            // render to the login page
           return redirect('login')->with('fail','You Must Logged In First 😡');
        }
        
        //If they are already logged in then should not able to access the Login Page and Admin-SignUp Page Route Both
        if(session()->has('LoggedAdmin') || session()->has('LoggedGenUser') && ($request->path() == 'login'  && $request->path() == 'admin-signup'))
        {
           return back();
           //So when ever an logged in user trying to access the pages they automatically come back again an again
        }

        return $next($request);
    }
}

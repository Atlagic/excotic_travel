<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userId = \Auth::id();
        $user = User::find($userId);
        if($user->id != 1){
            echo "sorry";
        }
        //if ( Auth::check() && Auth::user()->isAdmin() )
       // {
            return $next($request);
        //}

        //return redirect('home');
    }
}

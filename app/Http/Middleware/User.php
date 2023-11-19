<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userInfo = session()->get("userInfo");
        if($userInfo && $userInfo["role"] == "User" || $userInfo["role"] == "Admin"){
            return $next($request);
        }
        return redirect("/Login/login");
    }
}

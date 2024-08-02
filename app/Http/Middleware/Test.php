<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, /* $role */...$role): Response
    {
        var_dump($role);
        /* dd($role); */
        if(1==2){
            return redirect('/');
        }
        elseif(1==$role){
            return redirect('/');
        }
        elseif($role[0]==$role[1]){
            return redirect('/');
        }
        return $next($request);
    }
}

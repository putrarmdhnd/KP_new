<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Siswa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
    */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->roles_id == 3){
            return $next($request);
        }

        return redirect('login')->with('error', 'Anda tidak memiliki akses sebagai Siswa');
    }
}

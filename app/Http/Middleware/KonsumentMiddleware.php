<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class KonsumentMiddleware
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
        if (!Session::get('login')) {
            return redirect('login');
        }else{
            if (Session::get('roles') == 'konsumen') {
                return $next($request);
            } elseif(Session::get('roles') == 'penjahit') {
                return redirect('penjahit/home');
            }else{
                return redirect('/');
            }

        }
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use Str;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        // Jika pengguna berperan sebagai 'user' dan bukan di halaman yang dimulai dengan '/user', redirect ke '/user'
        if (Auth::user()->role == 'user' && !Str::startsWith($request->path(), 'user')) {
            return redirect('/user');
        }

        // Jika pengguna berperan sebagai 'admin' dan bukan di halaman yang dimulai dengan '/admin', redirect ke '/admin'
        if (Auth::user()->role == 'admin' && !Str::startsWith($request->path(), 'admin')) {
            return redirect('/admin');
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (! auth()->check()) {
            return redirect('/login');
        }

        // Jika role "admin" atau "walikelas", bisa akses
        if (auth()->user()->role === 'admin' || auth()->user()->role === 'walikelas') {
            return $next($request);
        }

        // Siswa tidak boleh akses route admin
        abort(403, 'Akses ditolak.');
    }
}

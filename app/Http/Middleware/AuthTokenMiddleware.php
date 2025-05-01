<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class AuthTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $token = Session::get('auth_token');

        if (!$token) {
            return redirect()->to('login');
        }

        // Jika ingin menyisipkan token ke header setiap request ke downstream API:
        // $request->headers->set('Authorization', 'Bearer ' . $token);

        return $next($request);
    }
}

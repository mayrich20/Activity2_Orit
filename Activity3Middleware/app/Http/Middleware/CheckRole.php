<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Response $request, Closure $next): Response
    {
        if ($request->role !== 'admin') {
            return response('Access Denied: Admins Only', 403);
        }
        return $next($request);
    }
}

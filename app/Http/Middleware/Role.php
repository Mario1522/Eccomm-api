<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , $role): Response
    {
        if(!$request->user() || !$request->user()->hasRole($role)) {
            return response()->json(['message' => 'You do not have permission to access this resource.'], 403);
        }
        return $next($request);
    }
}

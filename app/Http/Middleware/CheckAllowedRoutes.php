<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class CheckAllowedRoutes
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedRoutes = ['/', 'join-us', 'welcome'];

        if (!in_array($request->path(), $allowedRoutes)) {
            Log::info('Path not allowed: ' . $request->path());
            abort(404);
        }

        return $next($request);
    }
}

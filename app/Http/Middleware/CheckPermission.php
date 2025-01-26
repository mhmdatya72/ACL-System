<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response)  $next
     */
    public function handle(Request $request, Closure $next, $permission)
    {
        $user = $request->user();
        if (!$user ||! $user->groups()->whereHas('permissions', fn($q) => $q->where('title', $permission))->exists()) {
            return response()->json(['message' => 'Forbidden'], 403);
        }

        return $next($request);
    }
}

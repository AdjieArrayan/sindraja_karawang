<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        if (!$user) {
            Log::warning("User belum login");
            return redirect()->route('login');
        }

        Log::info("Cek Role Middleware: dibutuhkan '" . implode(', ', $roles) . "', user punya '{$user->role}'");

        if (!in_array($user->role, $roles)) {
            Log::warning("User tidak punya akses role ini");
            abort(403, 'Unauthorized.');
        }

        return $next($request);
    }

}

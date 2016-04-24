<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if(!$user) {
            return view('auth.login');
        }

        if($user && $user->isAdmin()) {
            return $next($request);
        }

        return view('admin.restricted');
    }
}

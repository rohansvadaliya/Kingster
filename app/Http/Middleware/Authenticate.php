<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route(Auth::check() ? 'admin.warranty.management' : 'login');
        }
    }

    public function handle(Request $request, Closure $next, ...$guards)
    {
        /** @var \App\Models\User $user **/
        $user = Auth::user();

        if ($user && isset($user->session_id)) {
            Session::setId($user->session_id);
            $sessionId = Session::getId();

            if ($user->session_id !== $sessionId) {
                Auth::logout();
                return redirect()->route('login');
            }
        }

        return $next($request);
    }
}

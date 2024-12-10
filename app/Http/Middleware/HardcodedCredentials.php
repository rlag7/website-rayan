<?php

namespace App\Http\Middleware;

use Closure;

class HardcodedCredentials
{
    public function handle($request, Closure $next)
    {
        if ($request->is('admin/login') || $request->is('admin/logout')) {
            return $next($request);
        }

        $hardcodedPassword = 'R@y@N2007$';

        if ($request->is('admin*') && $request->isMethod('post')) {
            if ($request->password !== $hardcodedPassword) {
                return redirect('/admin/login')->withErrors(['password' => 'Invalid password.']);
            }
        }

        return $next($request);
    }
}

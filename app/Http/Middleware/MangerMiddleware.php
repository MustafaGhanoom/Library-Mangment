<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MangerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if (auth()->user()->role === 'Manager') {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('/')->with('error', 'Unauthorized Access.');
        }

        return $next($request);

    }
}

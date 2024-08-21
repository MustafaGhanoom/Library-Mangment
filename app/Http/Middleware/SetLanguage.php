<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App; // تأكد من أن الاستيراد صحيح
use Illuminate\Support\Facades\Log;

class SetLanguage
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

        if (session()->has('locale')) {
            App::setLocale(session('locale'));
            Log::info('Locale set in session: ' . session('locale'));
        } else {
            Log::info('Locale not set, using default: ' . App::getLocale());
        }

        return $next($request);

    }



}

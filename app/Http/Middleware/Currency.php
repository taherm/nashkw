<?php

namespace App\Http\Middleware;

use Closure;

class Currency
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (request()->has('currency')) {
            $currency = \App\Models\Currency::where('symbol', request('currency'))->first();
            session()->put('currency', $currency);
        } else {
            $currency = \App\Models\Currency::where('symbol', session('currency'))->first();
            session()->put('currency', $currency);
        }

        return $next($request);
    }
}

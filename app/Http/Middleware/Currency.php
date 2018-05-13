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
        if (!session()->has('currency')) {
            $currency = \App\Models\Currency::where('symbol', 'KWD')->first();
            session()->put('currency', $currency);
//            $currency = \App\Models\Currency::where('symbol', strtoupper(session('currency')->symbol))->first();
//            session()->put('currency', $currency);
        }

        return $next($request);
    }
}

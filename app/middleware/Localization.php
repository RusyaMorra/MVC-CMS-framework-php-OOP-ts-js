<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class Localization
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
        $locale = 'en';
        if ($request->hasHeader('X-localization')) {
            $locale = $request->header('X-localization');
        } else if ($request->localization || $request->input('locale')) {
            $locale = $request->localization ?? $request->input('locale');
        }
        App::setLocale($locale);

        return $next($request);
    }
}

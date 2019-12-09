<?php

namespace App\Http\Middleware;

use Closure;


class ChangeLanguage
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
        $locale = $request->headers->get('Accept-language');
        if($locale) {
            \App::setLocale($locale);
        }

        return $next($request);
    }
}

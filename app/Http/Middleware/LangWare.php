<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LangWare
{
    public function handle($request, Closure $next)
    {
        if (Session::get("locale")) {
            App::setLocale(Session::get("locale"));
        } else {
            App::setLocale(Config::get("app.fallback_locale"));
        }
        return $next($request);
    }
}

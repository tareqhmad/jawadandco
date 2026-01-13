<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = $request->route('locale');

        if (! in_array($locale, ['fr', 'en', 'nl'])) {
            abort(404);
        }

        app()->setLocale($locale);

        return $next($request);
    }
}

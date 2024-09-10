<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

class CacheViews
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Cache views if they are not already cached
        if ($response->status() == 200 && !Cache::has($request->getRequestUri())) {
            Cache::put($request->getRequestUri(), $response->getContent(), now()->addMinutes(60));
        }

        return $response;
    }
}

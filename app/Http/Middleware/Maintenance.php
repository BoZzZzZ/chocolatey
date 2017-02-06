<?php

namespace App\Http\Middleware;

use App\Facades\Session;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

/**
 * Class Maintenance
 * @package App\Http\Middleware
 */
class Maintenance
{
    /**
     * Handle an incoming request.
     *
     * @param  Request $request
     * @param  Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Config::get('chocolatey.forceMaintenance')):
            Session::erase('ChocolateyWEB');

            return response()->json(['error' => 'maintenance'], 503);
        endif;

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class DateFormatter
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
        $all_request = $request->all();
        foreach ($all_request as $key => $value) {
            if (strpos($key, 'time') !== FALSE) {
                $request->$key = date('Y-m-d', strtotime($request->$key));
            }
        }
        return $next($request);
    }
}

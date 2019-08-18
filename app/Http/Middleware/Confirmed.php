<?php

namespace App\Http\Middleware;

use Closure;

class Confirmed
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
      if (auth()->check() && auth()->user()->email_verified_at !== null) {
        return $next($request);
      }
      return abort('406');
    }
}

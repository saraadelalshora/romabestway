<?php

namespace App\Http\Middleware;

use App\Langauge;
use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $lang1=$request->lang;
        if (Auth::guard($guard)->check()) {
            if($lang1==null) {
                $lang = Langauge::where('default', 1)->first();
                return redirect($request->path() . '/' . $lang['alies'], 301);
            }
        }

                return $next($request);

    }
}




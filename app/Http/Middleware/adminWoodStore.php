<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class adminWoodStore
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $grade )
    {
        if($request->user()->grade===$grade)return $next($request);
        // on recupere la $request->user avec son "grade" si la variable contenue dans $grade=admin 
        //return la prochaine $request

        //sinon 
        abort(403);
    }
}

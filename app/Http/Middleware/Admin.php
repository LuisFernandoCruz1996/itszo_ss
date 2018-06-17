<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\User;

use Illuminate\Auth\AuthenticationException;

use Illuminate\Contracts\Auth\Factory as Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        if($this->auth->User()->admin())
        {
            return $next($request);
        }
        if($this->auth->User()->acceso())
        {
            return redirect()->route('createacces');
        }
        if($this->auth->User()->jefe_otros())
        {
            return redirect()->route('seguimiento.indexisc');
        }
        else
        {
            return redirect('/');
        }      
    }
}

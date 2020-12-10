<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ValidateFirstUserSignUp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // se cuenta la cantidad de usuarios que estan registrados
        $usersCount = User::count();
        // se pregunta si hay mas de un usuario en la bd y ademas no se inicio sesion
        if($usersCount >0 && !Auth::check()){
            return redirect('/');

        };
        return $next($request);
    }
}

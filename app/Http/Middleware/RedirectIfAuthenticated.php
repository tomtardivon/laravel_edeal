<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $guard = null) {
        if (Auth::guard($guard)->check()) {
          $statut = Auth::user()->statut; 
      
          switch ($statut) {
            case 'apprenant':
               return redirect('/apprenant_acceuilapprenant');
               break;
            case 'formateur':
               return redirect('/formateur_acceuilformateur');
               break; 
      
            default:
               return redirect('/home'); 
               break;
          }
        }
        return $next($request);
      }
}

<?php

namespace sisHospital\Http\Middleware;

use Closure;

class AdministradorMiddleware
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
     switch (auth()->User()->Rol_idRol) {
         case '1':
 
            break;

         case '2':
           return redirect()->to('/operario/registro/index');
            break;
         
         case '3':
           return redirect()->to('/seguridad/usuario');
            break;


         default:
             return '/login';
             break;
     }
        
        $response = $next($request);
        return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
            ->header('Pragma','no-cache')
            ->header('Expires','Sun, 02 Jan 1990 00:00:00 GMT');

    }
}

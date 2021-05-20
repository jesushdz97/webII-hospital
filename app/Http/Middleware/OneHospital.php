<?php

namespace App\Http\Middleware;

use App\Models\Hospital;
use Closure;
use Illuminate\Http\Request;

class OneHospital
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
        $hospitalisEmpty = Hospital::first();

        if (!empty($hospitalisEmpty)) {
            return redirect()->route('hospital.index'); // Si existe un hospital nos redirige a nuestro index.hospital
        }     

        return $next($request);
    }
}

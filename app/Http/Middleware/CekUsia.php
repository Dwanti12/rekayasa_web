<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekUsia
{
    public function handle($request, Closure $next)
    {
        $usia = $request->input('usia');

        if ($usia < 17) {
            return response(
              'Anda belum berusia 17 tahun.', 403
            );
        }

        return $next($request);
    }
}

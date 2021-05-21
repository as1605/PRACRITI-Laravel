<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Closure;
use Cookie;

class OAuthMiddleware {
    public function handle($request, Closure $next) {
        if(strpos($request->ip(), "10.") !== 0) {
            if(Cookie::get('token') === null) {
                return redirect('/oauth/link');
            }
            if(Cookie::get('token') !== null) {
                $val = Cookie::get('token');
                $response = Http::asForm()->post('https://oauth.iitd.ac.in/resource.php', [
                    'access_token'=>$val,
                ]);
                if ($response['name'] === null) {
                    return redirect('/oauth/link');
                }
            }
        }
        return $next($request);
    }
}


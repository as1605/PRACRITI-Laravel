<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Cookie;

class OauthController extends Controller {
    public function redirect(Request $request) {
        $response = Http::post('https://oauth.iitd.ac.in/token.php', [
            'client_id' => env('OAUTH_CLIENT_ID'),
            'client_secret' => env('OAUTH_CLIENT_SECRET'),
            'grant_type' => 'authorization_code',
            'code' => $request->code
        ]);
        if(isset($response['access_token'])) {
            $minutes = 25;
            $cookie = Cookie::queue('token', $response['access_token'], $minutes);
            return redirect('/internal');
        }
        return redirect('/oauth/link');
    }

    public function logout() {
        if(Cookie::get('token') !== null) {
            Cookie::queue(Cookie::forget('token'));
            return redirect('/');
        }
        return redirect('/oauth/link');
    }
}


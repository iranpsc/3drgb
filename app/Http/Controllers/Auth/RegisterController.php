<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __invoke()
    {
        $query = http_build_query([
            'client_id' => config('app.oauth_client_id'),
            'redirect_uri' => route('login'),
        ]);

        $url = config('app.oauth_server_url') . '/register?' . $query;

        return redirect()->to($url);
    }
}

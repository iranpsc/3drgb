<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class OAuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {

            try {
                $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $request->user()->access_token,
                ])
                    ->acceptJson()
                    ->get(config('app.oauth_server_url') . '/api/auth/check');

                if ($response->status() !== 200) {
                    $this->logout($request);
                }
            } catch (\Exception $e) {
                $this->logout($request);
            }
        }

        return $next($request);
    }

    /**
     * Logout user out
     *
     * @param Illuminate\Http\Request $request
     */
    private function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}

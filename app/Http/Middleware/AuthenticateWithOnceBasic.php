<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateWithOnceBasic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken();

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->acceptJson()->get(config('app.oauth_server_url') . '/api/auth/check');

        if ($response->status() !== 200) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $response = $response->json();

        $user = Cache::remember('user:' . $response['user']['email'], now()->addDay(), function () use ($response) {
            return User::where('email', $response['user']['email'])->first();
        });

        Auth::onceUsingId($user->id);

        return $next($request);
    }
}

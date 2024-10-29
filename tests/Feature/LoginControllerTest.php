<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginControllerTest extends TestCase
{
    public function test_redirect_to_oauth_authorization()
    {
        echo "Starting test: Redirect to OAuth Server\n";

        // Set configuration values from .env
        config([
            'app.oauth_client_id' => env('OAUTH_CLIENT_ID', '17'),
            'app.oauth_server_url' => env('OAUTH_SERVER_URL', 'https://accounts.irpsc.com'),
        ]);

        echo "Configuration set with OAuth client ID and server URL\n";

        // Call the redirect method and check if the URL is set correctly
        $response = $this->get(route('login'));

        echo "Redirect method called, response received\n";

        // Build the expected URL with URL encoding
        $expectedUrl = 'https://accounts.irpsc.com/oauth/authorize?' . http_build_query([
            'client_id' => '17',
            'redirect_uri' => route('auth.callback'),
            'response_type' => 'code',
            'scope' => '',
            'state' => session('state'),
        ]);

        echo "Expected URL built: $expectedUrl\n";

        // Assert redirection to the OAuth URL
        $response->assertRedirect($expectedUrl);
        echo "Redirection to OAuth server was successful\n";
    }

    public function test_callback_handles_oauth_response()
    {
        echo "Starting test: Handling OAuth callback\n";

        // Set configuration values and initialize session state
        config([
            'app.oauth_client_id' => env('OAUTH_CLIENT_ID', '17'),
            'app.oauth_server_url' => env('OAUTH_SERVER_URL', 'https://accounts.irpsc.com'),
            'app.oauth_client_secret' => 'test-client-secret',
        ]);

        echo "Configuration values set\n";

        // Simulate session state
        $state = Str::random(40);
        Session::put('state', $state);
        echo "Session state set: $state\n";

        // Mock token and user response from OAuth server
        Http::fake([
            'https://accounts.irpsc.com/oauth/token' => Http::response([
                'access_token' => 'test-access-token',
                'refresh_token' => 'test-refresh-token',
                'expires_in' => 3600,
                'token_type' => 'Bearer',
            ], 200),
            'https://accounts.irpsc.com/api/user' => Http::response([
                'email' => 'testuser@example.com',
                'name' => 'Test User',
                'mobile' => '1234567890',
                'code' => 'test-code',
            ], 200),
        ]);

        echo "Mocked token and user data responses set up\n";

        // Simulate callback request with state and authorization code
        $response = $this->get(route('auth.callback', [
            'state' => $state,
            'code' => 'test-authorization-code',
        ]));

        echo "Callback request sent\n";

        // Assert user creation or update
        $user = User::where('email', 'testuser@example.com')->first();
        echo "User found: " . optional($user)->email . "\n";

        $this->assertNotNull($user);
        $this->assertEquals('test-access-token', $user->access_token);
        echo "User information and access token validated\n";

        // Assert user login and redirection to home
        $this->assertTrue(Auth::check());
        echo "User logged in successfully\n";

        $response->assertRedirect(route('home'));
        echo "User redirected to home\n";
    }
}

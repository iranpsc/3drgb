<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;

class RegisterTest extends TestCase
{
    public function test_register_redirects_to_oauth_server()
    {
        // .env
        config([
            'app.oauth_client_id' => env('OAUTH_CLIENT_ID', '17'),
            'app.oauth_server_url' => env('OAUTH_SERVER_URL', 'https://accounts.irpsc.com'),
        ]);

        
        $response = $this->get(route('register'));
        
        $expectedUrl = 'https://accounts.irpsc.com/register?client_id=17&redirect_uri=' . urlencode(route('login'));

        $response->assertRedirect($expectedUrl);
    }
}

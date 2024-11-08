<?php

namespace Tests\Feature;

use Tests\TestCase;

class RegisterTest extends TestCase
{
    public function test_register_redirects_to_oauth_server()
    {
        // .env
        config([
            'app.oauth_client_id' => env('OAUTH_CLIENT_ID', '19'),
            'app.oauth_server_url' => env('OAUTH_SERVER_URL', 'https://accounts.irpsc.com'),
        ]);


        $response = $this->get(route('register'));

        $expectedUrl = 'https://accounts.irpsc.com/register?client_id=19&redirect_uri=' . urlencode(route('login'));

        $response->assertRedirect($expectedUrl);
    }
}

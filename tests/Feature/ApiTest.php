<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_create()
    {
        $response = $this->postJson('/api/authenticate', [
            'name' => 'Sally',
            'email' => 'test@gmail.com',
            'api_token' => '1234567891234567891234568789',
            'password' => '123456789'
        ]);

        $response
            ->assertStatus(200)
            ->assertTrue($response['user']);
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
class ApiThrottlingTest extends TestCase
{
    /**
     * Test for API Throttling
     * //todo - Fix X-RateLimit-Limit value only accesses default limit value set by laravel
     *
     * @return void
     */
    public function testAPIThrottling(){

        $user = factory(User::class)->create();

        $token = $user->createToken('authToken')->plainTextToken;

        $response = $this->get('/api/v1/countries/', ['Authorization' => 'Bearer ' . $token])->assertStatus(200);

        $response->assertHeader('X-RateLimit-Limit');

    }

}

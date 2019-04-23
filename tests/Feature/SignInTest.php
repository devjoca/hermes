<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class SignInTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_sign_in()
    {
        $this->withoutExceptionHandling();

        $user = factory(User::class)->create();
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response->assertRedirect('/apps');
    }
}

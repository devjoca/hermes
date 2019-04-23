<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateMonitoredAppTest extends TestCase
{
    public function test_need_auth_to_create_app()
    {
        $response = $this->get('/apps/create');

        $response->assertStatus(302);
    }
}

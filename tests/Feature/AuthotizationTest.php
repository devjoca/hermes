<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthotizationTest extends TestCase
{
    public function test_dashboard_need_authorization()
    {
        $response = $this->get('/dashboard');

        $response-> assertRedirect('/');
    }
}

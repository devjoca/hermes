<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Spatie\UptimeMonitor\Models\Monitor;

class CreateMonitoredAppTest extends TestCase
{
    use RefreshDatabase;

    public function test_need_auth_to_create_app()
    {
        $response = $this->get('/apps/create');
        $response->assertStatus(302);

        $user = factory(User::class)->make();
        $response = $this->actingAs($user)->get('/apps/create');
        $response->assertStatus(200);
    }

    public function test_create_a_monitored_app()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->make();
        $response = $this->actingAs($user)->post('/apps', [
            'url' => 'http://someourl.org',
        ]);

        $response->assertRedirect('/apps');
        $this->assertEquals(1, Monitor::count()); }
}

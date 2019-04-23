<?php

namespace Tests\Feature;

use Tests\TestCase;
use Spatie\UptimeMonitor\Models\Monitor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteMonitoredAppTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_delete_app()
    {
        $user = factory(User::class)->make();
        factory(Monitor::class)->create();
        $response = $this->actingAs($user)->delete('/apps/1');

        $response->assertStatus(200);
        $this->assertEquals(Monitor::count(), 0);
    }
}

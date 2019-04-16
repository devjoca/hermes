<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\UptimeMonitor\Models\Monitor;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $monitors = Monitor::all()->map(function($m) {
            return [
                'id' => $m->id,
                'url' => "{$m->url}",
                'status' => $m->uptime_status,
                'certificate_check_enabled' => $m->certificate_check_enabled,
                'certificate_status' => $m->certificate_status,
            ];
        });

        return view('dashboard.monitor', compact('monitors'));
    }
}

<?php

namespace App\Http\Controllers;

use Spatie\UptimeMonitor\Models\Monitor;
use Illuminate\Http\Request;
use Spatie\Url\Url;

class AppsController extends Controller
{
    public function index()
    {
        $monitors = Monitor::all()->map(function ($m) {
            return [
                'id' => $m->id,
                'url' => "{$m->url}",
                'status' => $m->uptime_status === 'not yet checked' ? 'not yet checked': $m->uptimeStatusAsEmoji,
                'certificate_check_enabled' => $m->certificate_check_enabled,
                'certificate_status' => $m->certificate_status === 'not yet checked' ? 'not yet checked' : $m->certificateStatusAsEmoji,
            ];
        });

        return view('apps.index', compact('monitors'));
    }
    public function delete($id)
    {
        Monitor:: destroy($id);

        return response(200);
    }

    public function create()
    {
        return view('apps.create');
    }

    public function store(Request $request)
    {
        $url = Url::fromString($request->url);
        Monitor::create([
            'url' => trim($url, '/'),
            'look_for_string' => '',
            'uptime_check_method' => 'head',
            'certificate_check_enabled' => $url->getScheme() === 'https',
            'uptime_check_interval_in_minutes' => config('uptime-monitor.uptime_check.run_interval_in_minutes'),
        ]);

        return response()->redirectTo('/apps');
    }
}

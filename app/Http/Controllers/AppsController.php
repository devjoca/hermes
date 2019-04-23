<?php

namespace App\Http\Controllers;

use Spatie\UptimeMonitor\Models\Monitor;

class AppsController extends Controller
{
    public function delete($id)
    {
        Monitor:: destroy($id);

        return response(200);
    }

    public function create()
    {
        return 'holi';
    }
}

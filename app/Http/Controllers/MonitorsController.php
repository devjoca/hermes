<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\UptimeMonitor\Models\Monitor;

class MonitorsController extends Controller
{
    public function delete($id)
    {
        Monitor:: destroy($id);

        return response(200);
    }
}

<?php

use Faker\Generator as Faker;
use Spatie\UptimeMonitor\Models\Monitor;

$factory->define(Monitor::class, function (Faker $faker) {
    return [
        'url' => 'https://randomurl.org',
    ];
});

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

class SlackLoginController extends Controller
{
    public function index()
    {
        return Socialite::driver('slack')->redirect();
    }

    public function handle()
    {
        $slackUser = Socialite::driver('slack')->user();
        $user = User::whereEmail($slackUser->getEmail())->first();
        if (is_null($user)) {
            $user = User::create([
                'name' => $slackUser->getName(),
                'email' => $slackUser->getEmail(),
                'password' => 'random-string',
            ]);
        }

        Auth::login($user);
        return redirect('/apps');
    }
}

<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class SocialteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('social_id', $google_user->getId())->first();
            if (!$user) {
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'image' => $google_user->getAvatar(),
                    'role' => 'user',
                    'social_id' => $google_user->getId(),
                ]);
                Auth::login($new_user);
                return redirect(RouteServiceProvider::HOME);
            } else {
                Auth::login($user);
                return redirect(RouteServiceProvider::HOME);
            }
        } catch (\Throwable $th) {
            dd("something went wrong! " . $th->getMessage());
        }
    }


}

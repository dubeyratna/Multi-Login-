<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\User;
use Auth;
use App\ServiceProvider;

class LinkedinController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('linkedin')->user();
            $userModel = new User;
            $userModel->name = $user->getName();
            $userModel->email = $user->getEmail();
            $userModel->save();

            //$create['provider_id'] = $user->getId();

            $serviceprovider=new ServiceProvider;
            $serviceprovider->user_id=$userModel->id;
            $serviceprovider->provider_id=$user->getId();
            $serviceprovider->provider='linkedin';
            $serviceprovider->save();

            Auth::loginUsingId($userModel->id);


            return redirect()->route('home');
        } catch (Exception $e) {
            return redirect('auth/linkedin');
        }
    }
}

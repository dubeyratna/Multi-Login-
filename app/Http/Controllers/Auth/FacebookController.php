<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\User;
use Auth;
use App\ServiceProvider;

class FacebookController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $userModel = new User;
            $userModel->name = $user->getName();
            $userModel->email = $user->getEmail();
            $userModel->save();

            //$create['provider_id'] = $user->getId();

            $serviceprovider=new ServiceProvider;
            $serviceprovider->user_id=$userModel->id;
            $serviceprovider->provider_id=$user->getId();
            $serviceprovider->provider='Facebook';
            $serviceprovider->save();

            Auth::loginUsingId($userModel->id);


            return redirect()->route('home');
        } catch (Exception $e) {
            return redirect('auth/facebook');
        }
    }
}

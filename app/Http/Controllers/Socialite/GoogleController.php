<?php

namespace App\Http\Controllers\Socialite;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Laravel\Socialite\Facades\Socialite;
use Ramsey\Uuid\Uuid;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {        
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }else{
                $newUser = User::create([
                    'id' => Uuid::uuid4(),
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'is_socialite'=> 1               
                ]);
                
                $finduser = User::where('google_id', $user->id)->first();
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}

<?php

namespace App\Http\Controllers\Socialite;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Auth;
use Exception;
use Socialite;
use App\Models\User;

class TwitterController extends Controller
{
    public function loginwithTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }
       

    public function cbTwitter()
    {
        try {
            $user = Socialite::driver('twitter')->user();
            $userWhere = User::where('twitter_id', $user->id)->first();
            if($userWhere){
                Auth::login($userWhere);
                return redirect('/home');
            }else{
                $gitUser = User::create([
                    'id' => Uuid::uuid4(),
                    'name' => $user->name,
                    'email' => $user->email,
                    'twitter_id'=> $user->id,
                    'is_socialite'=> 1
                ]);
                $userWhere = User::where('twitter_id', $user->id)->first();
                Auth::login($userWhere);
                return redirect('/home');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
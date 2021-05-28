<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    
public function redirectToProvider() {

    return Socialite::driver('github')->redirect();

}

  public function handleProviderCallback() {

    $user = Socialite::driver('github')->user();

    var_dump($user);

  }

  public function redirectToProviderAzure() {

    return Socialite::driver('azure')->redirect();

  }

  public function handleProviderCallbackAzure(Request $request) {


    // armazena o code em session
    Session::put('code', $request->query('code'));
     echo Session::get('code');

    echo Socialite::with('azure')-> getUserByToken($request->query('code'));

   

  }
    
    
    


}

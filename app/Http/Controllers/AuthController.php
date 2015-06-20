<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Lol_Profile;
use Auth;
use App\Http\Controller\View;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function TwitterAuth(Request $request)
    {
        // get data from request
        $token = $request->get('oauth_token');
        $verify = $request->get('oauth_verifier');

        // get twitter service
        $tw = \OAuth::consumer('Twitter');

        // check if code is valid

        // if code is provided get user data and sign in
        if (!is_null($token) && !is_null($verify)) {
            // This was a callback request from twitter, get the token
            $token = $tw->requestAccessToken($token, $verify);

            // Send a request with it
            $result = json_decode($tw->request('account/verify_credentials.json'), true);

            $user = User::find($result['id']);

            if (empty($user)) {
                $user = new User();
                $user->id = $result['id'];
            }

            $user->screen_name = $result['screen_name'];
            $user->name = $result['name'];
            $user->oauth_token = $token->getRequestToken();
            $user->oauth_token_secret = $token->getRequestTokenSecret();
            $user->save();

            $lolprofile = Lol_Profile::Where('twitter_id', $result['id'])->get();
                    // $result  = Lol_Profile::Where('twitter_id',$result['id'])->get();

                    // dd(User::find($result['id']));
                    Auth::login(User::find($result['id']));

            if (count($lolprofile) == 0) {
                return Redirect('register');
            } else {
                return Redirect('user');
            }
            //Var_dump
            //display whole array.
            // dd(count($result));
        }
        // if not ask for permission first
        else {
            // get request token
            $reqToken = $tw->requestRequestToken();

            // get Authorization Uri sending the request token
            $url = $tw->getAuthorizationUri(['oauth_token' => $reqToken->getRequestToken()]);

            // return to twitter login url
            return redirect((string) $url);
        }
    }
    /**
     * LoLのIDとかを登録する.
     *
     * @return view [description]
     */
    public function registerLoLProfile()
    {
        return View('register');
    }
    /**
     * フォームから受け取る.
     *
     * @param Request $request [description]
     *
     * @return [type] [description]
     */
    public function postRegister(Request $request)
    {
        $lolprofile = new Lol_Profile();
        $inputs = \Request::all();

        $lolprofile->twitter_id = Auth::user()->id;
        $lolprofile->server = $inputs['server'];
        $getProfile = $this->getLoLName($inputs['lol_myname'], $inputs['server']);
        $lolprofile->summoner_name;

        dd($lolprofile);

        return json_encode($request->lol_myname);
    }
    public function getLoLName($lol_name, $server)
    {
        $url = "https://{$server}.api.pvp.net/api/lol/{$server}/".env('LOL_VERSION')."/summoner/by-name/{$lol_name}?api_key=".env('LOL_API_KEY');
        $profile = @file_get_contents($url);
        if ($http_response_header[0] != 'HTTP/1.1 200 OK') {
            return  $http_response_header[0];
        }
        return $profile;
    }
}

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function (){
    return view('index');
});

Route::get('/{username}', function ($username){
    $client = new \Github\Client();
    $client->authenticate(env('GITHUB_TOKEN', 'false'), null, Github\Client::AUTH_ACCESS_TOKEN);
    $github = $client->api('user')->repositories($username);
    $profile = $client->api('user')->show($username);
    $followings = $client->api('user')->following($username);
    $followers = $client->api('user')->followers($username);
    //dd($followings);
    return view('profile', compact('followings', 'followers'))->with('data', $github)->with('profile', $profile);
});

Route::get('/{username}/repo', function ($username){
    $client = new \Github\Client();
    $github = $client->api('user')->repositories($username);
    $profile = $client->api('user')->show($username);
    dd($profile);
    return view('repo')->with('data', $github)->with('profile', $profile);
});
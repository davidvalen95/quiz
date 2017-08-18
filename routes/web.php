<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/coba-coba', function(){

    $games = App\Model\Room::find(1)->getGames;
    $wut = "";
    foreach($games as $game){
        // die();
        $wut .= $game->tipe. " ";
    }
    return 'helow ! '. $wut;
});

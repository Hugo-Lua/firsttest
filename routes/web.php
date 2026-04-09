<?php

use Illuminate\Support\Facades\Route;
use App\Models\Games;
use App\Models\Colours;

Route::get('/', function () {
    $allGames = Games::all();
    $genre = request('genre');

    if($genre){
        $games = [];
        foreach($allGames as $game){
            if(str_contains($game['tags'], $genre)){
                array_push($games, $game);
            }
        }
    } else {
        $games = $allGames;
    }

    return view('games', [
        'title' => 'Latest games',
        'games' => $games,

        'c_blue' => Colours::c_blue,
        'c_primary_bg' => Colours::c_primary_bg,
        'c_secondary_text' => Colours::c_secondary_text
    ]);
});

Route::get('/games/{id}', function($id){
    return view('game', [
        'game' => Games::find($id),

        'c_blue' => Colours::c_blue,
        'c_primary_bg' => Colours::c_primary_bg,
        'c_secondary_text' => Colours::c_secondary_text
    ]);
});
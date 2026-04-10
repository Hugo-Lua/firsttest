<?php

use Illuminate\Support\Facades\Route;
use App\Models\Games;
use App\Models\Colours;

use function Pest\Laravel\post;

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

Route::get('/search', function(){
    $query = request('q');
    
    // search by id or title
    $game = Games::where('id', $query)
                 ->orWhere('title', 'LIKE', '%' . $query . '%')
                 ->first();
    
    if($game){
        return redirect('/games/' . $game->id);
    } else {
        return redirect('/')->with('error', 'No game found');
    }
});

Route::get('/publish', function(){
    return view('publish');
});

Route::get('/manage', function(){
    return view('manage');
});

Route::patch('/manage', function(){
    $id = request('id');

    if(!$id){
        return redirect('/manage')->with('error', 'No ID provided!');
    }

    $game = Games::find($id);

    if(!$game){
        return redirect('/manage')->with('error', 'No game found with ID: ' . $id);
    }

    // If title is being updated, rename the folder too
    if(request('title')){
        $oldFolder = public_path('images/' . str_replace(' ', '_', $game->title));
        $newFolder = public_path('images/' . str_replace(' ', '_', request('title')));

        if(file_exists($oldFolder)){
            rename($oldFolder, $newFolder);
        }
    }

    $fields = ['title', 'tags', 'creator', 'genre', 'email', 'short_description', 'description'];

    foreach($fields as $field){
        if(request($field)){
            $game->$field = request($field);
        }
    }

    $game->save();

    return redirect('/games/' . $id)->with('success', 'Game updated!');
});
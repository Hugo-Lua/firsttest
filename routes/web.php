<?php

use Illuminate\Support\Facades\Route;
use App\Models\Games;
use App\Models\Colours;
use GuzzleHttp\Promise\Create;
use Symfony\Component\HttpKernel\HttpCache\Store;

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

Route::post('/publish', function(){
    
    Games::create([
        'title'             => request('title'),
        'tags'              => request('tags'),
        'creator'           => request('creator'),
        'genre'             => request('genre'),
        'email'             => request('email'),
        'short_description' => request('short_description'),
        'description'       => request('description'),
    ]);

    $folderName = str_replace(' ', '_', request('title'));  
    $path = public_path('images/' . $folderName);

    mkdir($path,0755,true);

    $cover = request('cover');
    $cover->move($path, 'cover.jpg');

    $pic1 = request('pic1');
    $pic1->move($path, 'pic1.jpg');

    $pic2 = request('pic2');
    $pic2->move($path, 'pic2.jpg');

    $pic3 = request('pic3');
    $pic3->move($path, 'pic3.jpg');

    $pic4 = request('pic4');
    $pic4->move($path, 'pic4.jpg');


    return redirect('/')->with('success', 'Game published!');
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
        $oldFolder = public_path('images/' . str_replace(':','.col',str_replace(' ', '_', $game->title)));
        $newFolder = public_path('images/' . str_replace(':','.col',str_replace(' ', '_', request('title'))));

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
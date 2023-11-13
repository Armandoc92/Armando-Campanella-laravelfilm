<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function (){
    $movies = [
        [
            'title' => 'Inception',
            'plot' => 'Gente che entra nei sogni e non fa dormire',
            'director' => 'Cristofer Nolan',
            'genre' => 'Fantascienza',
            'duration' => 3,
            'release_at' => 2010,
            'img' => '/img/inception.jpg',

        ],

        [    
            'title' => 'Fight Club',
            'plot' => 'Gente che si mena ma solo nella mente di un tizio',
            'director' => 'David Fincher',
            'genre' => 'thiller',
            'duration' => 2.2,
            'release_at' => 1999,
            'img' => '/img/fight_club.jpg',

        ],
        [  
            'title' => 'Non aprite quella porta',
            'plot' => 'Tizio che ama indossare le pelle di altra gente',
            'director' => 'Tobe Hooper',
            'genre' => 'horror',
            'duration' => 1.2,
            'release_at' => 1974,
            'img' => '/img/non_aprire_quella_porta.jpg', 

        ],

    ];
    return view('welcome',['movies'=> $movies]);
    
       
  
}) ->name('homepage');

Route::get('/chi_siamo', function(){
    return view('chisiamo');}) ->name('chiSiamo');


Route::get('/movie/show/{movietitle}', function($movietitle){
    dd($movietitle);
    return view('movies.show');
})->name('movies.show');
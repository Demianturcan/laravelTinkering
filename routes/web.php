<?php

use App\Helpers\Http\Controllers\ComptadorController;
use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/films', [FilmController::class, 'films'])->name('films');
Route::get('/films/create', [FilmController::class, 'create'])->name('films.create');
Route::post('/films', [FilmController::class, 'store'])->name('films.store');
Route::get('/films/{film}/edit', [FilmController::class, 'edit'])->name('films.edit');
Route::put('/films/{film}/update', [FilmController::class, 'update'])->name('films.update');
Route::get('/films/{film}/destroy', [FilmController::class, 'destroy'])->name('films.destroy');
Route::get('/films/{id}', [FilmController::class, 'show'])->name('films.show');


Route::get('/shows', [ShowController::class, 'shows'])->name('shows');
Route::get('/shows/create', [ShowController::class, 'create'])->name('shows.create');
Route::post('/shows', [ShowController::class, 'store'])->name('shows.store');
Route::get('/shows/{show}/edit', [ShowController::class, 'edit'])->name('shows.edit');
Route::put('/shows/{show}/update', [ShowController::class, 'update'])->name('shows.update');
Route::get('/shows/{show}/destroy', [ShowController::class, 'destroy'])->name('shows.destroy');
Route::get('/shows/{id}', [ShowController::class, 'show'])->name('shows.show');


//Route::get('/films', 'App\Http\Controllers\FilmController@index');

/*
Route::get('/comptador', [ComptadorController::class, 'index']);
Route::post('/incrementar', [ComptadorController::class, 'incrementar']);
Route::post('/decrementar', [ComptadorController::class, 'decrementar']);
Route::post('/reset', [ComptadorController::class, 'reset']);
*/

/*
Route::get('/', 'FilmController@index');
Route::get('/films', 'FilmController@index');
Route::get('/films/create', 'FilmController@create');
Route::post('/films', 'FilmController@store');
Route::get('/films/{id}', 'FilmController@show');
Route::get('/films/{id}/edit', 'FilmController@edit');
Route::patch('/films/{id}', 'FilmController@update');
Route::delete('/films/{id}', 'FilmController@destroy');
*/

/*
Route::post('/incrementar',function(){
   $comptador = session('comptador',0);
   session()->put('comptador',$comptador+1);

   return response()->json(['comptador'=>$comptador]);
});

Route::post('/reset', function(){
    session('comptador',0);
    return response()->json(['comptador'=>0]);
});
*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

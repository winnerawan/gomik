<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('tes/{id}', 'API\ImageController@store');
Route::get('newchapters', 'API\ChapterController@getNewChapter');
Route::get('comics', 'API\ComicController@getComics');
Route::get('images/{chapter_id}', 'API\ImageController@getImageByChapter');
Route::get('comic/{comidId}', 'API\ChapterController@getChapterByComic');
Route::get('genres', 'API\GenreController@genres');
Route::get('comics/{genre_id}', 'API\ComicController@byGenre');
Route::get('app', 'API\AppController@app');
Route::get('search', 'API\SearchController@search');
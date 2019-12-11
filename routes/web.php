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
    //return $artist->getTranslation('nickname', 'fa');
    return 'hello';
});
//Route::get('Music/song', 'panel\Music\SongController@index');
Route::group(['namespace' => 'panel'], function() {
    Route::group([
        'namespace' => 'Music',
        'prefix'    => 'Music',
        //    'middleware' => 'auth',
    ], function () {
        Route::get('/artist', 'ArtistController@index');
        Route::post('/artist', 'ArtistController@store');
        Route::get('/song', 'SongController@index');
        Route::post('/song', 'SongController@store');
        Route::get('/song/{song}', 'SongController@show');
        Route::get('/artist/{artist}', 'ArtistController@show');
        Route::put('/artist/{artist}', 'ArtistController@update');
        Route::delete('/artist/{artist}', 'ArtistController@destroy');
        Route::post('/artist/{id}', 'ArtistController@restore');

//    Route::apiResource('/post', 'PostController');

//
//    Route::post('/comment', 'CommentController@store');
//    Route::post('/comment/{comment}/status', 'CommentController@changeStatus');
    });
});


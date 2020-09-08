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

Route::get('/', function () {
    return view('Welcome');
});
// Route::get('admin/settings', function () {
//     return view('settings');
// });


Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    // Route::get('/', 'HomeController@index')->name('home');
    Route::get('/dashboard', [

        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);

    Route::post('/post/store', [


        'uses' => 'PostsController@store',
        'as' => 'post.store'

    ]);
    Route::get('/posts', [


        'uses' => 'PostsController@index',
        'as' => 'posts'

    ]);
    Route::get('/posts/delete/{id}', [


        'uses' => 'PostsController@destroy',
        'as' => 'posts.delete'

    ]);
    Route::get('/posts/trashed', [


        'uses' => 'PostsController@trashed',
        'as' => 'posts.trashed'

    ]);
    Route::get('/posts/kill/{id}', [


        'uses' => 'PostsController@kill',
        'as' => 'post.kill'

    ]);
    Route::get('/posts/restore/{id}', [


        'uses' => 'PostsController@restore',
        'as' => 'posts.restore'

    ]);
    Route::get('/posts/edit/{id}', [


        'uses' => 'PostsController@edit',
        'as' => 'posts.edit'

    ]);

    Route::post('/posts/update/{id}', [


        'uses' => 'PostsController@update',
        'as' => 'posts.update'

    ]);
});

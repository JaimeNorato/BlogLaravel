<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/',[
        'uses' => function(){ return view('admin.index'); },
        'as'=>'admin.index'
    ]);
    //rutas del usuario
	Route::resource('users','UserController');
    Route::get('users/{id}/destroy',[
        'uses' => 'UserController@destroy',
        'as' => 'admin.users.destroy'
    ]);

    //rutas de la categoria
    Route::resource('categories','CategoryController');
    Route::get('categories/{id}/destroy',[
        'uses' => 'CategoryController@destroy',
        'as' => 'admin.categories.destroy'
    ]);

    //rutas de los tags
    Route::resource('tags','TagController');
    Route::get('tags/{id}/destroy',[
        'uses' => 'TagController@destroy',
        'as' => 'admin.tags.destroy'
    ]);

});

Route::get('admin/auth/login',[
    'uses' => 'Auth\AuthController@getLogin',
    'as'   => 'admin.auth.login'
]);
Route::post('admin/auth/login',[
    'uses' => 'Auth\AuthController@postLogin',
    'as'   => 'admin.auth.login'
]);
Route::get('admin/auth/logout',[
    'uses' => 'Auth\AuthController@getLogout',
    'as'   => 'admin.auth.logout'
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

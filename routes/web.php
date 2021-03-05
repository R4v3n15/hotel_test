<?php

//test 1 ..
Route::get('reset', function () {
    return view('auth.empleados.resetEmpleado');
});

Route::get('/',                 ['as' => 'auth/admin',      'uses' => 'LoginController@index']);
Route::get('login',             ['as' => 'login',           'uses' => 'LoginController@index']);
Route::post('auth/admin',       ['as' => 'auth/admin',      'uses' => 'LoginController@postLogin']);


Route::group(['middleware' => 'auth'], function() {

    Route::group(['prefix' => 'admin'], function () {
        Route::get('logout', ['as' => 'logout', 'uses' => 'LoginController@getLogout']);

        /*
        |------------------------------------------------------------------------------------------------------------------
        | = = = > H O M E
        |------------------------------------------------------------------------------------------------------------------
        */
        Route::get('/',         ['as' => 'index', 'uses' => 'HomeController@index']);
        Route::get('users',     ['as' => 'users', 'uses' => 'UsersController@index']);

        // Module Hotel routes

        Route::get('/hotels', 'HotelController@index')->name('hotels');
        
        Route::get('/hotels/{id}', 'HotelController@show')
        ->where('id', '[0-9]+')->name('hotels.show');
        
        Route::get('/hotels/new', 'HotelController@create')->name('hotels.create');

        Route::post('/hotels/add', 'HotelController@store')->name('hotels.add');

        Route::put('/hotels/{hotel}', 'HotelController@update')->name('hotels.update');

        Route::delete('/hotels/{hotel}', 'HotelController@destroy')->name('hotels.delete');
    });
});


// Route to reload and change language
Route::get('lang/{lang}' , function ($lang) {
            session(['lang' => $lang]);
            return \Redirect::back();
        })
        ->where([
            'lang' => 'en|es'
        ]);

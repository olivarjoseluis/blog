<?php

Route::get('/', 'paginasController@inicio');


//Grupo de rutas para la administración
Route::group(
    ['prefix' => 'dashboard', 'namespace' => 'Admin', 'middleware' => 'auth'],
    function () {
        Route::get('/', 'PostController@dashboard')->name('dashboard');
        Route::get('posts', 'PostController@index')->name('dashboard.posts.index');
        Route::get('posts/create', 'PostController@create')->name('dashboard.posts.create');
    }
);



// Authentication Routes...
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

// Registration Routes...
/*Route::get('register', 'Auth\AuthController@showRegistrationForm');
Route::post('register', 'Auth\AuthController@register');
*/
// Password Reset Routes...
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');

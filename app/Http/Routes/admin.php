<?php

Route::group(['middleware' => ['auth:admin']], function ($router) {
    Route::get('/', [
        'uses' => 'ActivitesController@indexAdmin',
        'as' => 'admin.index',
    ]);
});

Route::get('login', [
    'uses' => 'AuthController@index',
    'as' => 'admin.auth.index',
]);

Route::post('login', [
    'uses' => 'AuthController@login',
    'as' => 'admin.auth.login',
]);

Route::get('logout', [
    'uses' => 'AuthController@logout',
    'as' => 'admin.auth.logout',
]);


Route::get('ajoutActivite', [
    'uses' => 'ActivitesController@getActivite',
    'as' => 'admin.activites.Add',
]);
Route::post('ajoutActivite', [
    'uses' => 'ActivitesController@store',
    'as' => 'admin.activites.add',
]);
Route::get('/Activites/{id_activite}/edit', [
    'uses' => 'ActivitesController@edit',
    'as' => 'admin.activites.edit',
]);
Route::PUT('/Activites/{id_activite}/Update', [
    'uses' => 'ActivitesController@update',
    'as' => 'admin.activites.update',
]);

Route::resource('/activites', 'ActivitesController');
Route::get('/activites/{id_activite}/destroy',
    ['as' =>'admin.activites.destroy',
        'uses' =>'ActivitesController@destroy']);

Route::resource('/categories', 'Admin\CategoriesController');
Route::get('/categories/{id_categorie}/destroy', ['as' =>'categories.destroy', 'uses' =>'CategoriesController@destroy']);

Route::get('categorie', function () {
    return view('categories.form');
});
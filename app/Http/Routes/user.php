<?php

Route::group(['middleware' => ['auth:users']], function ($router) {
    Route::get('/', [
        'uses' => 'ActivitesController@index',
        'as' => 'users.index',
    ]);
});

Route::get('login', [
    'uses' => 'AuthController@index',
    'as' => 'users.auth.index',
]);

Route::post('login', [
    'uses' => 'AuthController@login',
    'as' => 'users.auth.login',
]);

Route::get('logout', [
    'uses' => 'AuthController@logout',
    'as' => 'users.auth.logout',
]);


Route::get('password/reset/{token?}', [
    'uses' => 'PasswordController@showResetForm',
    'as' => 'users.password.reset',
]);

Route::post('password/reset', [
    'uses' => 'PasswordController@reset',
    'as' => 'users.password.reset',
]);

Route::post('password/email', [
    'uses' => 'PasswordController@sendResetLinkEmail',
    'as' => 'users.password.email',
]);

Route::get('/Activites/{id}/edit', [
    'uses' => 'UserController@edit',
    'as' => 'users.user.edit',
]);
Route::put('/Activites/{id_activite}/update', [
    'uses' => 'UserController@update',
    'as' => 'users.user.update',
]);
Route::get('AllUser', [
    'uses' => 'UserController@index',
    'as' => 'users.user.index',
]);
Route::get('/Utilisateur/{id}/destroy', ['as' =>'user.user.destroy', 'uses' =>'UserController@destroy']);

Route::get('programme', [
    'uses' => 'ActivitesController@getprogramme',
    'as' => 'users.activites.calendrier',
]);
Route::get('ajoutActivite', [
    'uses' => 'ActivitesController@getActivite',
    'as' => 'users.activites.Add',
]);
Route::post('ajoutActivite', [
    'uses' => 'ActivitesController@store',
    'as' => 'users.activites.add',
]);
Route::get('/Activites/{id_activite}/edit', [
    'uses' => 'ActivitesController@edit',
    'as' => 'users.activites.edit',
]);
Route::PUT('/Activites/{id_activite}/Update', [
    'uses' => 'ActivitesController@update',
    'as' => 'users.activites.update',
]);


Route::get('rechercheLearn', [
    'uses' => 'ActivitesController@Recherchelearn',
    'as' => 'users.activites.rechercheLearn',
]);

Route::get('rechercheChat', [
    'uses' => 'ActivitesController@Recherchechat',
    'as' => 'users.activites.rechercheChat',
]);

Route::get('rechercheClass', [
    'uses' => 'ActivitesController@Rechercheclass',
    'as' => 'users.activites.rechercheClass',
]);
Route::get('recherchePlay', [
    'uses' => 'ActivitesController@Rechercheplay',
    'as' => 'users.activites.recherchePlay',
]);
Route::get('rechercheEnjoy', [
    'uses' => 'ActivitesController@Rechercheenjoy',
    'as' => 'users.activites.rechercheEnjoy',
]);
Route::get('rechercheCorner', [
    'uses' => 'ActivitesController@Recherchecorner',
    'as' => 'users.activites.rechercheCorner',
]);
Route::get('rechercheWork', [
    'uses' => 'ActivitesController@Recherchework',
    'as' => 'users.activites.rechercheWork',
]);

Route::resource('/activites', 'ActivitesController');
Route::get('/activites/{id_activite}/destroy',
    ['as' =>'users.activites.destroy',
        'uses' =>'ActivitesController@destroy']);


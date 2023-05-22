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

Route::get('/', ['middleware' => 'web', function () {
    return view('index');
}]);

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
    Route::group(['prefix' => 'user', 'namespace' => 'User'], function () {
        require app_path('Http/Routes/user.php');
    });

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
        require app_path('Http/Routes/admin.php');
    });
    Route::get('add-to-cart/{id}', 'IndexController@addToCart');
    Route::get('remove-from-cart/{id}', 'IndexController@remove');
    
    Route::get('/','IndexController@showIndex');

});


Route::get('/indexfr','IndexController@showIndexfr');
Route::get('addAdmin',function(){
        $admin = new App\Models\Admin();
        $admin->name = 'admin';
        $admin->username= 'admin';
        $admin->email = 'rabeb.frigui95@gmail.com';
        $admin->password= 'admin';
        $admin->save();
});
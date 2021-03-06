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
    return view('welcome');
});

Auth::routes();

Route::get('home','HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']],function(){
    Route::get('/dashboard', function(){
        return view('admin.dashboard');
    });
    Route::get('Aregister','Admin\DashboardController@registred');
    Route::get('/edit/{id}','Admin\DashboardController@registrededit');
    Route::delete('/delete/{id}','Admin\DashboardController@registredelete');
    Route::get('/create','Admin\DashboardController@createe');

    Route::put('/register-update/{id}','Admin\DashboardController@registreupdate');
    Route::put('/register-create','Admin\DashboardController@registrecreate');

 

});
////////////////
Route::group(['middleware' => ['auth', 'citoyen']],function(){
    Route::get('/citoyen', function(){
        return view('citoyens.citoyens');
        Route::get('Aregister','Citoyen\citoyenController@registred');
        Route::get('/edit/{id}','Citoyen\citoyenController@registrededit');
        Route::delete('/delete/{id}','Citoyen\citoyenController@registredelete');
        Route::get('/create','Citoyen\citoyenController@createe');
    
        Route::put('/register-update/{id}','Citoyen\citoyenController@registreupdate');
        Route::put('/register-create','Citoyen\citoyenController@registrecreate');
    
    });
    });
    //////////////////
    Route::group(['middleware' => ['auth', 'association']],function(){
        Route::get('/association', function(){
            return view('association.association');
        });

        });
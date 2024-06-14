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


Route::group(['guard' => ['guest']], function () {
    //LOGIN
    Route::get('/',"PageController@login")->name('login');
    Route::post('/Login',"AuthController@ceklogin");
});

Route::group(['middleware' => ['auth']], function () {
    //AUTH
    Route::get('/User', "PageController@formedituser");
    Route::post('/UpdateUser', "PageController@updateuser");
    Route::get('/Logout', "AuthController@ceklogout");
    //LAMAN
    Route::get('/Dashboard', "PageController@dashboard");
    Route::get('/Produk', "PageController@produk");
    Route::get('/Keranjang', "PageController@keranjang");
    Route::get('/Delivery', "PageController@delivery");
    Route::get('/Profile', "PageController@profile");
    Route::get('/Roti_Royale', "PageController@rotiroyale");
    //CRUD
    Route::get('/Roti_Royale/form-add-roti', "PageController@formaddrotiroyale");
    Route::post('/Save_Roti', "PageController@saverotiroyale");
    Route::get('Roti_Royale/form-edit-roti/{id}', "PageController@formeditrotiroyale");
    Route::put('/Update/{id}', "PageController@updaterotiroyale");
    Route::get('/Delete/{id}', "PageController@deleterotiroyale");
});

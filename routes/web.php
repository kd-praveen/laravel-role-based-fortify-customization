<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::view('/', 'auth.login');

Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => ['role:super-admin'], 'prefix' => 'admin'], function () {

        Route::view('home', 'home');

    });

    Route::group(['middleware' => ['role:store-manager'], 'prefix'  => 'store-manager'], function () {

        Route::view('store-home', 'store-home');
        
    });

});



Route::get('dashboard', [DashboardController::class, 'index']);
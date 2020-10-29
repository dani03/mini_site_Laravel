<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
    return view('/pages/welcome');
})->name("vers-home");

Route::get('/apropos', function () {

    return view('/pages/apropos');
})->name("vers-about");

Route::get('/test', [TestController::class, 'home'])->name("vers-test");
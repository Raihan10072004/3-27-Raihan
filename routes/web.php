<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
    return view('Home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('About', [
        "tittle" => "About",
        "nama" => "Raihan Ahmad Hafizh",
        "email" => "Raihan@smktelkom-pwt.sch.id",
        "gambar" => "Raihan.jpg"
    ]);
});

Route::get('/gallery', function () {
    return view('Gallery', [
        "tittle" => "Gallery"
    ]);
});

Route::resource('/contacts', ContactController::class);
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('landing-page');
});
Route::get('/classic-original', function () {
    return view('classic-original');
});
Route::get('/classic-color', function () {
    return view('classic-color');
});
Route::get('/classic-light', function () {
    return view('classic-light');
});
Route::get('/classic-video', function () {
    return view('classic-video');
});
Route::get('/classic-video-light', function () {
    return view('classic-video-light');
});

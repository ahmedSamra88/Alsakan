<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/register', function () {
    return view('pages.register');
});
Route::get('/management', function () {
    return view('pages.management');
});
Route::get('/management-project', function () {
    return view('pages.manage-projects');
});
Route::get('/management-eng', function () {
    return view('pages.manage-eng');
});
Route::get('/management-client', function () {
    return view('pages.manage-client');
});

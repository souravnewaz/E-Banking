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
    return view('launcher');
});
Route::get('/lock', function () {
    return view('lock');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/transfer', function () {
    return view('transfer.select');
});
Route::get('/transfer-receiver', function () {
    return view('transfer.receiver');
});
Route::get('/transfer-amount', function () {
    return view('transfer.amount');
});
Route::get('/transfer-pattern', function () {
    return view('transfer.pattern');
});
Route::get('/deposit', function () {
    return view('deposit');
});
Route::get('/withdraw-qr', function () {
    return view('withdraw.qr');
});
Route::get('/withdraw-agent', function () {
    return view('withdraw.agent');
});
Route::get('/withdraw-amount', function () {
    return view('withdraw.amount');
});
Route::get('/withdraw-pattern', function () {
    return view('withdraw.pattern');
});
Route::get('/success', function () {
    return view('success');
});


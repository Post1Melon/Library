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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/sign-up', function () {
    return view('sign-up');
});
Route::get('/sign-in', function () {
    return view('sign-in');
});
Route::get('/reservation', function () {
    return view('reservation');
});
Route::get('/reserve', function () {
    return view('reserve');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/searchresult', function () {
    return view('searchresult');
});
Route::get('/logout', function () {
    return view('logout');
});
Route::get('/editing', function () {
    return view('editing');
});
Route::get('/librarian', function () {
    return view('librarian');
});
Route::get('/editing_book', function () {
    return view('editing_book');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/admin_panel', function () {
    return view('admin_panel');
});
Route::get('/editing_admin', function () {
    return view('editing_admin');
});
Route::get('/editing_book_admin', function () {
    return view('editing_book_admin');
});
Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'ID: '. $id .'.Name: '. $name;
});

<?php



Route::get('/', function () {
    return view('welcome');
});
Route::get('/tentang', function () {
    return view('tentang');
});

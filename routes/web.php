<?php

Route::get('/', function () {
    return view('pages.landing-page.index');
});

Route::get('/admin', function () {
    return view('pages.admin-page.home.index');
});

Route::get('/register', function () {
    return view('pages.auth-page.register');
});

Route::get('/login', function () {
    return view('pages.auth-page.login');
});

Route::get('/3-column-example', function () {
    return view('pages.3-column-example.index');
});

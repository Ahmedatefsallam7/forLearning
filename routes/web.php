<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});

Route::get('/counter', function () {
    return view('counter-page');
});

Route::get('/slots', function () {
    return view('slot-machine-page');
});


Collection::macro('isAhmed', function ($name) {

    return $name === 'Ahmed' ? "ok the name is Ahmed" : "the name is not Ahmed";
});

Route::get('test', function () {

    return request()->getPreferredLanguage();
});

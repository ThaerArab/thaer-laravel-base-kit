<?php

use Illuminate\Support\Facades\Route;

Route::get('/lang/{lang}', function($lang){
    if(!in_array($lang, ['en', 'ar'])){
        abort(400, 'Invalid Language');
    }

    session()->put('local', $lang);

    app()->setLocale($lang);

    return redirect()->back();
})->name('changeLang');

Route::get('/', function () {
    return view('home');
});

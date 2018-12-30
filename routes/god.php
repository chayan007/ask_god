<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('god')->user();

    //dd($users);

    return view('god.home');
})->name('home');


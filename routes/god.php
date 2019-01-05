<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('god')->user();

    //dd($users);

    return view('god.home');
})->name('home');

Route::get('/dashboard', 'GodController@dashboard');
Route::post('/addLord', 'LordController@addLord');
Route::get('/addLord', 'LordController@showForm');
Route::get('/lords', 'LordController@showLords');
Route::get('/deleteLord/{id}', 'LordController@deleteLord');
Route::get('/questions','QuestionController@getQuestions');
Route::post('/addAnswer');



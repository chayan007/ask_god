<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('user')->user();
    return view('user.home');
})->name('home');

Route::view('/profile', 'user.profile');
Route::get('/share', 'MessageController@getShareLink');
Route::post('/sendMessage/{username}','MessageController@sendMessage');
Route::post('/addReply/{messageID}', 'MessageController@addReply');
Route::get('/getInboxMessages', 'MessageController@getInboxMessages');
Route::get('/getOutboxMessages', 'MessageController@getOutboxMessages');
Route::get('/addComplaint', 'ComplaintController@addComplaint');

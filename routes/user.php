<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('user')->user();
    return view('user.home');
})->name('home');
Route::view('/help', 'user.help');
Route::view('/', 'user.home');
Route::view('/profile', 'user.profile');
Route::get('/share', 'MessageController@getShareLink');
Route::post('/sendMessage/{username}','MessageController@sendMessage');
Route::post('/addReply/{messageID}', 'MessageController@addReply');
Route::get('/getInboxMessages', 'MessageController@getInboxMessages');
Route::get('/getOutboxMessages', 'MessageController@getOutboxMessages');
Route::get('/addComplaint', 'ComplaintController@addComplaint');
Route::post('/addComplaint', 'ComplaintController@addComplaint');
Route::get('/addComplaint', 'ComplaintController@showComplaintForm');
Route::get('/myComplaints', 'ComplaintController@myComplaints');
Route::get('/complaints', 'ComplaintController@seeComplaints');
Route::post('/profile', 'UserController@edit');
Route::get('/profile', 'UserController@profile');
Route::get('/complaint/{slug}', 'ComplaintController@getComplaint');
Route::post('/addComment/{id}', 'CommentController@addComment');
Route::get('/ask', 'QuestionController@showForm');
Route::post('/addQuestion', 'QuestionController@addQuestion');
Route::get('/answers', 'QuestionController@myQuestions');
Route::get('/gods', 'LordController@getLords');
Route::get('/{username}', 'MessageController@getProfile');


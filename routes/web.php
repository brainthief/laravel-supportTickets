<?php

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
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
// Route::get('/contact', 'PagesController@contact');
//create ticket
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
//get all tickets
Route::get('/tickets', 'TicketsController@index');
// get current ticket
Route::get('/ticket/{slug?}', 'TicketsController@show');
//edit current ticket
Route::get('/ticket/{slug?}/edit', 'TicketsController@edit');
Route::post('/ticket/{slug?}/edit', 'TicketsController@update');
//delete ticket
Route::post('/ticket/{slug?}/delete', 'TicketsController@destroy');

//pašto siuntimas
Route::get('sendemail', function () {
    $data = array(
      'name' => "Learning Laravel",
    );

    Mail::send('emails.welcome', $data, function ($message) {
        $message->from('fmrcsender@gmail.com', 'Learning Laravel');
        $message->to('fmrcsender@gmail.com')->subject('Learning Laravel test email');
    });

    return "Your email has been sent successfully";
});

//comment create new
Route::post('/comment', 'CommentsController@newComment');

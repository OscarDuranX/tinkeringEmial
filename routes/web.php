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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sendmail', function () {
    Mail::send('emails.welcome',[],function($message) {
       $message->to('oscarduran@gmail.com')->subject('Asunto: HOLAA');
    });
    dump('Email enviat correctament');
});
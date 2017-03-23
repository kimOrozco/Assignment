<?php

Route::get('/' , 'StudentsController@showStudentsForm');
Route::post('/student-reg' , 'StudentsController@processRegistration');
Route::post('/registration-complete' , 'FinishRegistrationController@finishRegistrationForm');
Route::post('/add-student' , 'StudentsController@showStudentsForm');
Route::post('/show-list' , 'StudentsController@showList');
Route::get('/show-list' , 'StudentsController@showList');
Route::post('/delete/{id}' , 'StudentsController@delete');
Route::post('/update' , 'StudentsController@showEdit');
Route::post('/edit/{id}' , 'StudentsController@showUpdate');
Route::auth();

Auth::routes();

Route::get('/home', 'HomeController@index');

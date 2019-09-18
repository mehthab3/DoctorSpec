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
// Route::get('/doctors', function () {
//     return view('doctors');
// });
Route::get('/speciality', function () {
    return view('speciality');
});
Route::get('/newdoc', function () {
    return view('newdoc');
});
Route::get('/newspec', function () {
    return view('newspec');
});


Route::post('/insertdoctor','doctorController@add');
Route::get('/doctors','doctorController@viewDoc');

Route::get('/update/{id}','doctorController@update');
Route::post('/edit/{id}','doctorController@edit');
Route::get('/delete/{id}','doctorController@delete');




Route::post('/insertspec','specialityController@add');
Route::get('/speciality','specialityController@viewDoc');
Route::get('/updates/{id}','specialityController@update');
Route::post('/edits/{id}','specialityController@edit');
Route::get('/deletes/{id}','specialityController@delete');
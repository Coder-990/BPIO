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

Route::get('/', function ()
{
    return view('welcome');
});

Route::get('/documents', 'DocumentController@index')->name('documents');
Route::post('/documents', 'DocumentController@store')->name('documents.store');
Route::get('/companies', 'CompanyController@index');
Route::get('/companies/new','CompanyController@create');
Route::post('/companies','CompanyController@store');
Route::get('/companies/delete/{id}', 'CompanyController@destroy');
Route::get('/goods','GoodController@index');
Route::get('/goods/new','GoodController@create');
Route::post('/goods','GoodController@store');
Route::get('/goods/delete/{id}', 'GoodController@destroy');
Route::get('/accesions','AccesionController@index');
Route::get('/accesions/new', 'AccesionController@create');
Route::post('/accesions', 'AccesionController@store');
Route::get('/accesions/delete/{id}', 'AccesionController@destroy');
Route::get('/deliveryNotes','DeliveryNoteController@index');
Route::get('/deliveryNotes/new', 'DeliveryNoteController@create');
Route::post('/deliveryNotes', 'DeliveryNoteController@store');
Route::get('/deliveryNotes/delete/{id}', 'DeliveryNoteController@destroy');
Route::get('/caseDeliveryNotes','CaseDeliveryNoteController@index');
Route::get('/caseDeliveryNotes/new', 'CaseDeliveryNoteController@create');
Route::post('/caseDeliveryNotes', 'CaseDeliveryNoteController@store');
Route::get('/caseDeliveryNotes/delete/{id}', 'CaseDeliveryNoteController@destroy');
Route::get('/caseAccesions','CaseAccesionController@index');
Route::get('/caseAccesions/new', 'CaseAccesionController@create');
Route::post('/caseAccesions', 'CaseAccesionController@store');
Route::get('/caseAccesions/delete/{id}', 'CaseAccesionController@destroy');
Route::get('/continents', 'ContinentController@index');
Route::get('/continents/new', 'ContinentController@create');
Route::post('/continents', 'ContinentController@store');
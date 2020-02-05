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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/view', 'HomeController@view')->name('view');
Route::get('/week-1', 'HomeController@week_1')->name('week1');
Route::get('/view-score', 'HomeController@vs')->name('week1');
Route::get('/week-2', 'HomeController@week_2')->name('week2');
Route::get('/table', 'HomeController@table')->name('table');
Route::get('/fixture', 'HomeController@fixture')->name('fixture');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/view-team/{id}', 'HomeController@view_team')->name('view.team');
Route::get('/edit/{id}', 'HomeController@edit')->name('edit');
Route::get('/view-week-1/{id}', 'HomeController@view_fixture')->name('view.fixture');
Route::get('/view-week-2/{id}', 'HomeController@view_fixture2')->name('view.fixture2');
Route::get('/delete/{id}', 'HomeController@delete')->name('delete');
Route::get('/update/{id}', 'HomeController@update')->name('update');


Route::resource('team', 'TeamController');
Route::resource('week', 'FixtureController');
Route::resource('update', 'PointController');
Route::resource('score', 'ScoreController');
Route::get('/search/action', 'SearchController@action')->name('search.action');
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

Route::get('/test', function () {

    return $user = DB::select('select * from user');
});

Route::resource('archetypes', 'ArchetypeController');

Route::resource('projects', 'ProjectController');

Route::resource('matches', 'MatchController');

Route::resource('formats', 'FormatController');
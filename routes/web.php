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
    return view('login');
});

Route::get('/goal', function () {
    return view('goal');
});

Route::get('/police_entry', function () {
    return view('police_entry');
});

Route::get('/accused', function () {
    return view('accused');
});

Route::get('/add_admin', function () {
    return view('add_admin');
});

Route::get('/login', function () {return view('login'); });

Route::post('/login', 'Auth\LoginController@store')->name('login');


Route::get('/register', function () {return view('register'); });

Route::post('/create', 'Auth\RegisterController@store')->name('register');


Route::get('/add_data', function () { return view('add_data'); });

Route::post('/add_data/store', 'EntryTextController@store')->name('petitioner_form');


Route::get('/administratr', function () { return view('administratr');});

Route::post('/administratr/store', 'AdminFormController@store')->name('administratr');



Route::get('/avalability', function () {
    return view('avalability');
});

Route::get('/case_outcome', function () {
    return view('case_outcome');
});

Route::get('/cases', function () {
    return view('cases');
});

Route::get('/delete_admin', function () {
    return view('delete_admin');
});

Route::get('/entry_captured', function () {
    return view('entry_captured');
});

Route::get('/entry_text', function () {
    return view('entry_text');
});

Route::get('/fir', function () {
    return view('fir');
});

Route::get('/r_accused', function () {
    return view('r_accused');
});

Route::get('/r_case_outcome', function () {
    return view('r_case_outcome');
});

Route::get('/r_case', function () {
    return view('r_case');
});

Route::get('/r_entry_text', function () {
    return view('r_entry_text');
});

Route::get('/r_fir', function () {
    return view('r_fir');
});

Route::get('/investigate', function () {
    return view('investigate');
});

Route::get('/r_section_of_low', function () {
    return view('r_section_of_low');
});

Route::get('/r_victim', function () {
    return view('r_victim');
});

Route::get('/section_of_low', function () {
    return view('section_of_low');
});

Route::get('/victim', function () {
    return view('victim');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/wornted_person', function () {
    return view('wornted_person');
});

Route::get('/main', function () {
    return view('main');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


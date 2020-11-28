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

Route::get('/home', function () {
    return view('home');
});

Route::get('/goal', function () {
    return view('main');
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


//Route::get('/login', function () {return view('login'); });
//
//Route::post('/login', 'Auth\LoginController@store')->name('login');


Route::get('/register', function () {return view('register'); });

Route::post('/create', 'Auth\RegisterController@store')->name('register');


Route::post('/add_admin/store', 'AdminFormController@store')->name('admin_forms');


Route::get('/add_data', 'EntryTextController@show');

Route::post('/add_data/store', 'EntryTextController@store')->name('petitioner_form');

Route::post('/add_data/delete', 'EntryTextController@delete')->name('delete_petitioner');


Route::get('/administratr', function () { return view('administratr');});

Route::post('/administratr/store', 'AdminFormController@store')->name('administratr');



Route::get('/avalability', function () {
    return view('avalability');
});


Route::get('/case_outcome', function () {
    return view('case_outcome');
});
Route::post('/case_outcome/store', 'case_outcomeController@store')->name('case_outcome_forms');



Route::get('/crime_case', function () {
    return view('crime_case');
});
Route::post('/crime_case/store', 'crime_caseController@store')->name('crime_case_forms');



Route::get('/delete_admin', function () {
    return view('delete_admin');
});
Route::post('/delete_admin/store', 'delete_adminController@store')->name('delete_admin_forms');



Route::get('/entry_captured', function () {
    return view('entry_captured');
});
Route::post('/entry_captured/store', 'entry_capturedController@store')->name('entry_captured_forms');



Route::get('/entry_text', function () {
    return view('entry_text');
});
Route::post('/entry_text/store', 'entry_textFormController@store')->name('entry_text_forms');



Route::get('/crime_file', function () {
    return view('fir');
});
Route::post('/crime_file/store', 'crime_fileFormController@store')->name('crime_file_forms');



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
    return view('investigation');
});
Route::post('/investigation/store', 'investigationFormController@store')->name('investigation_forms');


Route::get('/r_section_of_low', function () {
    return view('r_section_of_low');
});


Route::get('/r_victim', function () {
    return view('r_victim');
});


Route::get('/section_of_low', function () {
    return view('section_of_low');
});
Route::post('/section_of_low/store', 'section_of_lowFormController@store')->name('section_of_low_forms');


Route::get('/victim', function () {
    return view('victim');
});
Route::post('/victim/store', 'victimFormController@store')->name('victim_forms');


Route::get('/admin', function () {
    return view('admin');
});


Route::get('/wornted_person', function () {
    return view('wornted_person');
});
Route::post('/wornted_person/store', 'wornted_personFormController@store')->name('wornted_person_forms');


Route::get('/main', function () {
    return view('main');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


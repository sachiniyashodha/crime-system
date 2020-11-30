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

//Route::get('/home', function () {
//    return view('home');
//});

Route::get('/goal', function () {
    return view('main');
});

Route::get('/police_entry', function () {
    return view('police_entry');
});

Route::get('/police_entry', function () {return view('police_entry'); });

// Route::get('/police_entry', 'AccusedController@show');
// Route::post('/police_entry/store', 'AccusedController@store')->name('accused_forms');

Route::get('/accused', 'AccusedController@show');
Route::post('/accused/store', 'AccusedController@store')->name('accused_form');


Route::get('/', function () {return view('Auth\login'); });
Route::post('/login', 'Auth\LoginController@store')->name('login');

Route::get('/register', function () {return view('register'); });
Route::post('/create', 'Auth\RegisterController@store')->name('register');



Route::get('/add_admin', 'AdminFormController@show');
Route::post('/add_admin/store', 'AdminFormController@store')->name('admin_forms');
//Route::post('/add_admin/delete', 'AdminFormController@delete')->name('delete_admin');


Route::get('/petitioner', 'PetitionerController@show');
Route::post('/petitioner/store', 'PetitionerController@store')->name('petitioner_form');
//Route::post('/petitioner/delete', 'PetitionerController@delete')->name('delete_petitioner');

Route::get('/case_outcome', 'CaseOutcomesController@show');
Route::post('/case_outcome/store', 'CaseOutcomesController@store')->name('caseoutcome_form');

Route::get('/cases', 'CrimeCaseController@show');
Route::post('/cases/store', 'CrimeCaseController@store')->name('crimecase_forms');


Route::get('/administratr', function () { return view('administratr');});
Route::post('/administratr/store', 'AdminFormController@store')->name('administratr');

Route::get('/delete_admin', function () {return view('delete_admin');});
Route::post('/delete_admin/store', 'delete_adminController@store')->name('delete_admin_forms');

Route::get('/entry_captured', function () {return view('entry_captured');});
Route::post('/entry_captured/store', 'entry_capturedController@store')->name('entry_captured_forms');

Route::get('/entry_text', 'EntryTextController@show');
Route::post('/entry_text/store', 'EntryTextController@store')->name('entrytext_form');

Route::get('/crime_file', 'CrimeFileController@show');
Route::post('/crime_file/store', 'CrimeFileController@store')->name('crimefile_forms');


Route::get('/avalability', 'AvalabilityController@index');
Route::get('/avalability', 'AvalabilityController@search');
Route::get('/avalability', 'AvalabilityController@show');


Route::get('/r_case_outcome', function () {return view('r_case_outcome');});
Route::get('/r_case', function () { return view('r_case');});
Route::get('/r_entry_text', function () { return view('r_entry_text');});
Route::get('/r_fir', function () {return view('r_fir');});
Route::get('/r_section_of_low', function () {return view('r_section_of_low');});
Route::get('/r_victim', function () {return view('r_victim');});
Route::get('/view_wornted_p', function () {return view('view_wornted_p');});
Route::get('/view_admin', function () {return view('view_admin');});
Route::get('/r_police_entry_c', function () {return view('r_police_entry_c');});


Route::get('/r_accused', 'AccusedController@index');
Route::get('/r_petitioner', 'PetitionerController@index');

Route::get('/investigate', 'InvestigationController@show');
Route::post('/investigation/store', 'InvestigationController@store')->name('investigation_forms');

Route::get('/section_of_low', 'SectionOfLowController@show');
Route::post('/section_of_low/store', 'SectionOfLowController@store')->name('section_of_low_forms');


Route::get('/victim', 'VictimController@show');
Route::post('/victim/store', 'VictimController@store')->name('victim_forms');


Route::get('/admin', function () {return view('admin');});


Route::get('/wornted_person',  'WorntedPersonController@show');
Route::post('/wornted_person/store', 'wornted_personFormController@store')->name('wornted_person_form');


Route::get('/main', function () { return view('main');});
Route::get('/dashboard', function () {return view('dashboard');});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


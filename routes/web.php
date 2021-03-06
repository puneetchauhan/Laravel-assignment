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



Route::group(['middleware' => ['auth']], function() {

		Route::get('/experience-dashboard', 'EmpExperienceController@index')->name('experience-dashboard');

		Route::get('/experience', 'EmpExperienceController@index')->name('experience');
		Route::get('/experience/{id}/edit', 'EmpExperienceController@edit')->name('experience-edit');

		Route::get('/experience/create', 'EmpExperienceController@create')->name('experience-create');

		Route::get('/experience/{id}/delete', 'EmpExperienceController@delete')->name('experience-delete');

		Route::post('/experience/store', 'EmpExperienceController@store')->name('experience-store');


		//employee Skills

		Route::get('/skill-dashboard', 'EmpSkillController@index')->name('skill-dashboard');

		Route::get('/skill', 'EmpSkillController@index')->name('skill');
		Route::get('/skill/{id}/edit', 'EmpSkillController@edit')->name('skill-edit');

		Route::get('/skill/create', 'EmpSkillController@create')->name('skill-create');

		Route::get('/skill/{id}/delete', 'EmpSkillController@delete')->name('skill-delete');

		Route::post('/skill/store', 'EmpSkillController@store')->name('skill-store');


		// Generate PDF

		Route::get('generatepdfview','EmpExperienceController@generatePDFHtml')->name('generate-pdf-view');

});

	Route::get('generate-pdf-view','EmpExperienceController@generatePDFview');
	
	Route::get('generate-pdf','EmpExperienceController@generatePDFHtml');


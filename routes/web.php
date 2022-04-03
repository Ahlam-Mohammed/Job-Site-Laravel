<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/','web.index')->name('home');
Route::view('/about','web.about')->name('about');
Route::view('/service','web.services')->name('service');
Route::view('/contact','web.contact')->name('contact');
Route::view('/companies','web.companies')->name('companies');
Route::view('/jobs','web.jobs')->name('jobs');
Route::view('/details','web.details-job')->name('details');

///////////////////////// Start Seekers /////////////////////////
Route::prefix('seeker')->group(function (){

    Route::name('seeker.')->group(function (){

        Route::view('/profile','web.seeker.profile')->name('profile');

        ///////////////////////// Start Seekers Dashboard /////////////////////////
        Route::view('/dashboard','dashboard.seeker.index')->name('dashboard');
        Route::view('/account','dashboard.seeker.account')->name('account');
        Route::view('/skills','dashboard.seeker.skills')->name('skills');
        Route::view('/experiences','dashboard.seeker.experiences')->name('experiences');
        Route::view('/educations','dashboard.seeker.educations')->name('educations');
        Route::view('/languages','dashboard.seeker.languages')->name('languages');
        ///////////////////////// End Seekers Dashboard /////////////////////////

    });

});
///////////////////////// End Seekers /////////////////////////


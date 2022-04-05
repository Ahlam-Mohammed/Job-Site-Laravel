<?php

use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\Seeker\ExperienceController;
use App\Http\Controllers\Seeker\SkillController;
use Illuminate\Support\Facades\Auth;
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

Route::view('/register-way','auth.register-way')->name('register.way');
Route::get('/register/{role}', function ($role){
    return view('auth.register',compact('role'));
})->name('registerUser');

Route::view('/','web.index')->name('home');
Route::view('/about','web.about')->name('about');
Route::view('/service','web.services')->name('service');
Route::view('/contact','web.contact')->name('contact');
Route::view('/companies','web.companies')->name('companies');
Route::view('/jobs','web.jobs')->name('jobs');
Route::view('/details','web.details-job')->name('details');


///////////////////////// Start Dashboard /////////////////////////
Route::prefix('dashboard')->group(function (){

    Route::middleware(['auth'])->name('dashboard.')->group(function (){

        Route::view('/','dashboard.index');
        Route::resource('users', UserController::class);

    });

});
///////////////////////// End Dashboard /////////////////////////




///////////////////////// Start Seekers /////////////////////////
Route::prefix('seeker')->group(function (){

    Route::middleware(['auth'])->name('seeker.')->group(function (){

        Route::view('/profile','web.seeker.profile')->name('profile');

        ///////////////////////// Start Seekers Dashboard /////////////////////////
        Route::view('/dashboard','dashboard.seeker.index')->name('dashboard');
        Route::view('/account','dashboard.seeker.account')->name('account');
        Route::resource('skills', SkillController::class);
        Route::resource('experiences', ExperienceController::class);
        Route::view('/educations','dashboard.seeker.educations')->name('educations');
        Route::view('/languages','dashboard.seeker.languages')->name('languages');
        ///////////////////////// End Seekers Dashboard /////////////////////////

    });

});
///////////////////////// End Seekers /////////////////////////


Auth::routes();


<?php

use App\Http\Controllers\dashboard\JobController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\Seeker\AboutController;
use App\Http\Controllers\Seeker\EducationController;
use App\Http\Controllers\Seeker\ExperienceController;
use App\Http\Controllers\Seeker\InfoController;
use App\Http\Controllers\Seeker\LanguageController;
use App\Http\Controllers\Seeker\ProfileController;
use App\Http\Controllers\Seeker\SettingController;
use App\Http\Controllers\Seeker\SkillController;
use App\Http\Controllers\Seeker\SocialController;
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

/*
|--------------------------------------------------------------------------
| Start Dashboard
|--------------------------------------------------------------------------
*/
Route::prefix('dashboard')->group(function (){

    Route::middleware(['auth'])->name('dashboard.')->group( function (){

        Route::view('/','dashboard.index')->name('index');

        Route::controller(UserController::class)->group(function (){
            Route::get('/users/{role?}', 'index')->name('users.index');
            Route::post('/users/store', 'store')->name('users.store');
            Route::put('/users/update/{id}', 'update')->name('users.update');
            Route::delete('/users/destroy{id}', 'destroy')->name('users.destroy');
        });

        Route::controller(JobController::class)->group(function (){
            Route::get('/jobs/{status?}', 'index')->name('jobs.index');
            Route::post('/jobs/store', 'store')->name('jobs.store');
            Route::put('/jobs/update{id}', 'update')->name('jobs.update');
            Route::delete('/jobs/destroy{id}', 'destroy')->name('jobs.destroy');
            Route::get('/jobs/status/{id}/{status}', 'status')->name('jobs.status');
            Route::get('/jobs/active/{id}', 'active')->name('jobs.active');
        });

    });

});



/*
|--------------------------------------------------------------------------
| Start Seekers
|--------------------------------------------------------------------------
*/
Route::prefix('seeker')->group(function (){

    Route::middleware(['auth'])->name('seeker.')->group(function (){

        Route::get('/profile',[ProfileController::class, 'index'])->name('profile');

        ///////////////////////// Start Seekers Dashboard /////////////////////////

        Route::controller(SettingController::class)->group(function (){

            Route::get('/account','account')->name('account');
            Route::post('/accountUpdate', 'accountUpdate')->name('account.update');
            Route::post('update/avatar', 'updateAvatar')->name('update.avatar');

        });

        Route::controller(AboutController::class)->group(function (){

            Route::get('/about', 'index')->name('about.index');
            Route::post('/about/store', 'store')->name('about.store');

        });

        Route::controller(SocialController::class)->group(function (){

            Route::get('/social', 'index')->name('social.index');
            Route::post('/social/store', 'store')->name('social.store');

        });

        Route::resource('info', InfoController::class);
        Route::resource('skills', SkillController::class);
        Route::resource('experiences', ExperienceController::class);
        Route::resource('/educations',EducationController::class);
        Route::resource('/languages',LanguageController::class);
        ///////////////////////// End Seekers Dashboard /////////////////////////

    });

});


Auth::routes();


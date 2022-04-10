<?php

use App\Http\Controllers\auth\ChangePasswordController;
use App\Http\Controllers\company\AccountController;
use App\Http\Controllers\dashboard\JobController;
use App\Http\Controllers\company\JobController as JobCompanyController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Seeker\AboutController;
use App\Http\Controllers\company\AboutController as AboutCompany;
use App\Http\Controllers\seeker\CvController;
use App\Http\Controllers\Seeker\EducationController;
use App\Http\Controllers\Seeker\ExperienceController;
use App\Http\Controllers\Seeker\InfoController;
use App\Http\Controllers\Seeker\LanguageController;
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

Route::post('/change/password', [ChangePasswordController::class, 'updatePassword'])->name('update-password');


/*
|--------------------------------------------------------------------------
| Start Web
|--------------------------------------------------------------------------
*/
Route::controller(HomeController::class)->group(function (){

    Route::get('/', 'index')->name('home');

    Route::get('/about', 'about')->name('about');
    Route::get('/service', 'service')->name('service');
    Route::get('/contact', 'contact')->name('contact');

    Route::get('/jobs','getAllJobs')->name('all.job');
    Route::get('/details/job/{id}', 'details')->name('details.job');

    Route::get('/companies', 'getAllCompanies')->name('companies');

    Route::get('/company/profile/{id}','companyProfile')->name('company.profile');
    Route::get('/seeker/profile/{id}','seekerProfile')->name('seeker.profile');

});

/*
|--------------------------------------------------------------------------
| Start Admin Dashboard
|--------------------------------------------------------------------------
*/
Route::prefix('dashboard')->group(function (){

    Route::middleware(['auth','role:SUPER_ADMIN'])->name('dashboard.')->group( function (){

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
| Start Company
|--------------------------------------------------------------------------
*/
Route::prefix('company')->group(function (){

    Route::middleware(['auth','role:COMPANY'])->name('company.')->group(function (){

        Route::controller(AccountController::class)->group(function (){

            Route::get('/account', 'index')->name('account');
            Route::post('/update/avatar', 'updateAvatar')->name('update.avatar');
            Route::post('/accountUpdate', 'accountUpdate')->name('account.update');

        });

        Route::controller(AboutCompany::class)->group(function (){

            Route::get('/about', 'index')->name('about.index');
            Route::post('/about/store', 'store')->name('about.store');
            Route::post('/update/logo', 'updateLogo')->name('update.logo');

        });

        Route::controller(JobCompanyController::class)->group(function (){

            Route::get('/job', 'index')->name('job.index');
            Route::post('/job/store', 'store')->name('job.store');
            Route::put('/job/update/{id}', 'update')->name('job.update');
            Route::delete('/job/destroy/{id}', 'destroy')->name('job.destroy');
            Route::get('/job/active/{id}', 'active')->name('job.active');

        });

    });

});


/*
|--------------------------------------------------------------------------
| Start Seeker
|--------------------------------------------------------------------------
*/
Route::prefix('seeker')->group(function (){

    Route::middleware(['auth','role:SEEKER'])->name('seeker.')->group(function (){

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

Route::controller(CvController::class)->group(function (){

    Route::get('/cv/{id}', 'showCV')->name('show.cv');
    Route::get('/download/cv/PDF/{id}','downloadPDF')->name('download.cv');

});


Auth::routes();


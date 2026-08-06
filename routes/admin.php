<?php

use Illuminate\Support\Facades\Route;

/* Admin controllers */
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\Admin\AlertsController;
use App\Http\Controllers\Admin\ActivityLogController;
/* end admin controllers */

/* auth controllers */
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
/* end auth controllers */

/* 
route::get('/analytics', function () {
    return view('_admin.dashboard.analytics.index');
});
 */
/* Rota de verificação de e-mail */
Auth::routes(['verify' => true]);

/* Routas de admin */


/* Rota de Logging (página de visualização de logs) */
Route::get('/admin/activity-logs', [ActivityLogController::class, 'index'])->name('activity.logs');
/* Dashboard */
Route::redirect('/admin', '/admin/dashboard')->name('dashboard');
Route::get('/admin/dashboard', [HomeController::class, 'management'])->name('admin.dashboard')->middleware(['auth', 'role:admin']);

Route::middleware(['role:admin,editor', 'auth'])->prefix('admin/')->name('admin.')->group(function () {
    /* Users routes */
    Route::prefix('users')->name('user.')->group(function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\UserController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'Admin\UserController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'Admin\UserController@store']);
        Route::get('details/{user:slug}', ['as' => 'show', 'uses' => 'Admin\UserController@show']);
        Route::get('edit/{user:slug}', ['as' => 'edit', 'uses' => 'Admin\UserController@edit']);
        Route::put('update/{user:slug}', ['as' => 'update', 'uses' => 'Admin\UserController@update']);
        Route::get('delete/{user:slug}', ['as' => 'delete', 'uses' => 'Admin\UserController@destroy']);
    });
    /* end users routes */

    /*Category routes*/
    Route::prefix('categories')->name('category.')->group(function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\CategoryController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'Admin\CategoryController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'Admin\CategoryController@store']);
        Route::get('details/{category}', ['as' => 'show', 'uses' => 'Admin\CategoryController@show']);
        Route::get('edit/{category}', ['as' => 'edit', 'uses' => 'Admin\CategoryController@edit']);
        Route::put('update/{category}', ['as' => 'update', 'uses' => 'Admin\CategoryController@update']);
        Route::get('delete/{category}', ['as' => 'delete', 'uses' => 'Admin\CategoryController@destroy']);
    });


    /*Curso routes*/
    Route::prefix('courses')->name('course.')->group(function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\CourseController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'Admin\CourseController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'Admin\CourseController@store']);
        Route::get('details/{course}', ['as' => 'show', 'uses' => 'Admin\CourseController@show']);
        Route::get('edit/{course}', ['as' => 'edit', 'uses' => 'Admin\CourseController@edit']);
        Route::put('update/{course}', ['as' => 'update', 'uses' => 'Admin\CourseController@update']);
        Route::get('delete/{course}', ['as' => 'delete', 'uses' => 'Admin\CourseController@destroy']);
    });
    
    /*aluno routes*/
    Route::prefix('alunos')->name('student.')->group(function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\StudentController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'Admin\StudentController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'Admin\StudentController@store']);
        Route::get('details/{student:slug}', ['as' => 'show', 'uses' => 'Admin\StudentController@show']);
        Route::get('edit/{student:slug}', ['as' => 'edit', 'uses' => 'Admin\StudentController@edit']);
        Route::put('update/{student:slug}', ['as' => 'update', 'uses' => 'Admin\StudentController@update']);
        Route::get('delete/{student:slug}', ['as' => 'delete', 'uses' => 'Admin\StudentController@destroy']);

        //rota para tornar aluno finalista
        Route::put('finalizar-curso/{student:slug}', ['as' =>'setFinalist', 'uses' => 'Admin\StudentController@setFinalist']);
        
        //rota para imprimir certificado do aluno finalista
        Route::get('certificado-curso/{student:slug}', ['as' =>'certificate', 'uses' => 'Admin\StudentController@certificate']);
    });


    /*Formadores routes*/
    Route::prefix('teachers')->name('teacher.')->group(function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\TeacherController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'Admin\TeacherController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'Admin\TeacherController@store']);
        Route::get('details/{teacher}', ['as' => 'show', 'uses' => 'Admin\TeacherController@show']);
        Route::get('edit/{teacher}', ['as' => 'edit', 'uses' => 'Admin\TeacherController@edit']);
        Route::put('update/{teacher}', ['as' => 'update', 'uses' => 'Admin\TeacherController@update']);
        Route::get('delete/{teacher}', ['as' => 'delete', 'uses' => 'Admin\TeacherController@destroy']);
    });


    /*services routes*/
    Route::prefix('services')->name('service.')->group(function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\ServiceController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'Admin\ServiceController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'Admin\ServiceController@store']);
        Route::get('details/{service}', ['as' => 'show', 'uses' => 'Admin\ServiceController@show']);
        Route::get('edit/{service}', ['as' => 'edit', 'uses' => 'Admin\ServiceController@edit']);
        Route::put('update/{service}', ['as' => 'update', 'uses' => 'Admin\ServiceController@update']);
        Route::get('delete/{service}', ['as' => 'delete', 'uses' => 'Admin\ServiceController@destroy']);
    });
    
    /*serviceRequest routes*/
    Route::prefix('services-request')->name('serviceRequest.')->group(function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\ServiceRequestController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'Admin\ServiceRequestController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'Admin\ServiceRequestController@store']);
        Route::get('details/{serviceRequest}', ['as' => 'show', 'uses' => 'Admin\ServiceRequestController@show']);
        Route::get('edit/{serviceRequest}', ['as' => 'edit', 'uses' => 'Admin\ServiceRequestController@edit']);
        Route::put('update/{serviceRequest}', ['as' => 'update', 'uses' => 'Admin\ServiceRequestController@update']);
        Route::get('delete/{serviceRequest}', ['as' => 'delete', 'uses' => 'Admin\ServiceRequestController@destroy']);
    });

    Route::post('/notifications/mark-all-read', [AlertsController::class, 'markAllRead'])->name('notifications.markAllRead');
    Route::get('/notifications', [AlertsController::class, 'index'])->name('notifications.all');

    /*-------------------------------------------------------
                    galery routes
    -------------------------------------------------------*/
   Route::prefix('galery')->name('galery.')->group(function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\GaleryController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'Admin\GaleryController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'Admin\GaleryController@store']);
        Route::get('details/{galery}', ['as' => 'show', 'uses' => 'Admin\GaleryController@show']);
        Route::get('edit/{galery}', ['as' => 'edit', 'uses' => 'Admin\GaleryController@edit']);
        Route::put('update/{galery}', ['as' => 'update', 'uses' => 'Admin\GaleryController@update']);
        Route::get('delete/{galery}', ['as' => 'delete', 'uses' => 'Admin\GaleryController@destroy']);
    });
   
    /*-------------------------------------------------------
                    Ads routes
    -------------------------------------------------------*/
   Route::prefix('ads')->name('ads.')->group(function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\AdvertisementController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'Admin\AdvertisementController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'Admin\AdvertisementController@store']);
        Route::get('details/{advertisement}', ['as' => 'show', 'uses' => 'Admin\AdvertisementController@show']);
        Route::get('edit/{advertisement}', ['as' => 'edit', 'uses' => 'Admin\AdvertisementController@edit']);
        Route::put('update/{advertisement}', ['as' => 'update', 'uses' => 'Admin\AdvertisementController@update']);
        Route::get('delete/{advertisement}', ['as' => 'delete', 'uses' => 'Admin\AdvertisementController@destroy']);
    });
});
/*-------------------------------------------------------
                    Auth routes
-------------------------------------------------------*/
Auth::routes();
Route::redirect('/home', '/admin');
/* Route::get('/admin', 'HomeController@index')->name('home'); */
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

/* Rotas de Autenticação Social */

// Google
Route::get('auth/{provider}', [SocialAuthController::class, 'redirect']);
Route::get('auth/google/redirect', [SocialAuthController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback'])->name('google.callback');
/* MicroSoft */
Route::get('auth/{provider}/callback', [SocialAuthController::class, 'callback']);

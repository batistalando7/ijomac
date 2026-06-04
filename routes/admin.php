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
Route::redirect('/admin', 'admin/dashboard')->name('dashboard');
Route::get('/admin/dashboard', [HomeController::class, 'management'])->name('admin.dashboard')->middleware(['auth', 'role:admin']);

Route::middleware(['role:admin', 'auth'])->prefix('admin/')->name('admin.')->group(function () {
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

    Route::post('/notifications/mark-all-read', [AlertsController::class, 'markAllRead'])->name('notifications.markAllRead');
    Route::get('/notifications', [AlertsController::class, 'index'])->name('notifications.all');

    /* news routes */
    /* Route::get('news', ['as' => 'news.index', 'uses' => 'Admin\NewsController@index']);
    Route::get('newsArchived', ['as' => 'newsArchived.index', 'uses' => 'Admin\NewsController@arquivadas']);
    Route::get('newsDraft', ['as' => 'newsDraft.index', 'uses' => 'Admin\NewsController@rascunho']);
    Route::get('create', ['as' => 'news.create', 'uses' => 'Admin\NewsController@create']);
    Route::post('newsStore', ['as' => 'news.store', 'uses' => 'Admin\NewsController@store']);
    Route::get('edit/{news}', ['as' => 'news.edit', 'uses' => 'Admin\NewsController@edit']);
    Route::put('newsUpdate/{news}', ['as' => 'news.update', 'uses' => 'Admin\NewsController@update']);
    Route::get('details/{news}', ['as' => 'news.view', 'uses' => 'Admin\NewsController@show']);
    Route::get('newsDelete/{news}', ['as' => 'news.delete', 'uses' => 'Admin\NewsController@destroy']);
    Route::resource('tags', TagController::class);
    Route::post('news/upload-image', ['as' => 'news.uploadImage', 'uses' => 'Admin\NewsController@uploadImage']); */

    /* Gerar Relatorio */
    /* Route::get('formulario/relatorio', [RelatorioController::class, 'formReports'])->name('form.reports');
    Route::get('relatorio', [RelatorioController::class, 'noticia'])->name('relatorio.noticia'); */


    /* comments routes */
    /* Route::get('comment', ['as' => 'comments.index', 'uses' => 'Admin\CommentController@index']);
    Route::get('create', ['as' => 'comment.create', 'uses' => 'Admin\CommentController@create']);
    Route::post('commentStore', ['as' => 'comment.store', 'uses' => 'Admin\CommentController@store']);
    Route::get('edit/{comment}', ['as' => 'comment.edit', 'uses' => 'Admin\CommentController@edit']);
    Route::put('commentUpdate/{comment}', ['as' => 'comment.update', 'uses' => 'Admin\CommentController@update']);
    Route::get('details/{comment}', ['as' => 'comment.view', 'uses' => 'Admin\CommentController@show']);
    Route::get('commentDelete/{comment}', ['as' => 'comment.delete', 'uses' => 'Admin\CommentController@destroy']); */

    /* tags routes */
    /* Route::get('tags', ['as' => 'tags.index', 'uses' => 'Admin\TagController@index']);
    Route::get('create', ['as' => 'tag.create', 'uses' => 'Admin\TagController@create']);
    Route::post('tagStore', ['as' => 'tag.store', 'uses' => 'Admin\TagController@store']);
    Route::get('edit/{tag}', ['as' => 'tag.edit', 'uses' => 'Admin\TagController@edit']);
    Route::put('tagUpdate/{tag}', ['as' => 'tag.update', 'uses' => 'Admin\TagController@update']);
    Route::get('tagView/{tag}', ['as' => 'tag.view', 'uses' => 'Admin\TagController@show']);
    Route::get('tagDelete/{tag}', ['as' => 'tag.delete', 'uses' => 'Admin\TagController@destroy']); */

    /* typeCategory routes */
    /* Route::get('typeCategory', ['as' => 'typeCategories.index', 'uses' => 'Admin\TypeCategoryController@index']);
    Route::get('create', ['as' => 'typeCategory.create', 'uses' => 'Admin\TypeCategoryController@create']);
    Route::post('typeCategories', ['as' => 'typeCategories.store', 'uses' => 'Admin\TypeCategoryController@store']);
    Route::get('typeview/{typeCategory}', ['as' => 'typeCategory.show', 'uses' => 'Admin\TypeCategoryController@show']);
    Route::get('typeedit/{typeCategory}', ['as' => 'typeCategory.edit', 'uses' => 'Admin\TypeCategoryController@edit']);
    Route::put('typeCategoryUpdate/{typeCategory}', ['as' => 'typeCategory.update', 'uses' => 'Admin\TypeCategoryController@update']);
    Route::get('typeCategoryDelete/{typeCategory}', ['as' => 'typeCategory.delete', 'uses' => 'Admin\TypeCategoryController@destroy']); */

    /*-------------------------------------------------------
                    Ads routes
    -------------------------------------------------------*/
    Route::get('ads', ['as' => 'ads.index', 'uses' => 'Admin\AdvertisementController@index']);
    Route::get('create', ['as' => 'ads.create', 'uses' => 'Admin\AdvertisementController@create']);
    Route::post('ads', ['as' => 'ads.store', 'uses' => 'Admin\AdvertisementController@store']);
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

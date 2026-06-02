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


route::get('/analytics', function () {
    return view('_admin.dashboard.analytics.index');
});

/* Rota de verificação de e-mail */
Auth::routes(['verify' => true]);

/* Routas de admin */

/* Dashboard */
Route::redirect('/admin', 'admin/dashboard')->name('dashboard');
Route::get('/admin/dashboard', [HomeController::class, 'management'])->name('admin.dashboard');

/* Rota de Logging (página de visualização de logs) */
Route::get('/admin/activity-logs', [ActivityLogController::class, 'index'])->name('activity.logs');

/* Users routes */
Route::prefix('admin.users')->name('admin.')->group(function () {
    Route::get('user', ['as' => 'user.index', 'uses' => 'Admin\UserController@index']);
    Route::get('create', ['as' => 'user.create', 'uses' => 'Admin\UserController@create']);
    Route::post('userStore', ['as' => 'user.store', 'uses' => 'Admin\UserController@store']);
    Route::get('details/{user:slug}', ['as' => 'user.show', 'uses' => 'Admin\UserController@show']);
    Route::get('edit/{user:slug}', ['as' => 'user.edit', 'uses' => 'Admin\UserController@edit']);
    Route::put('userUpdate/{user:slug}', ['as' => 'user.update', 'uses' => 'Admin\UserController@update']);
    Route::get('userDelete/{user:slug}', ['as' => 'user.delete', 'uses' => 'Admin\UserController@destroy']);
});
/* end users routes */

/*Category routes*/
Route::prefix('admin.categories')->name('admin.')->group(function () {
    Route::get('list', ['as' => 'categories.index', 'uses' => 'Admin\CategoryController@index']);
    Route::get('create', ['as' => 'category.create', 'uses' => 'Admin\CategoryController@create']);
    Route::post('store', ['as' => 'categories.store', 'uses' => 'Admin\CategoryController@store']);
    Route::get('details/{category}', ['as' => 'category.show', 'uses' => 'Admin\CategoryController@show']);
    Route::get('edit/{category}', ['as' => 'category.edit', 'uses' => 'Admin\CategoryController@edit']);
    Route::put('update/{category}', ['as' => 'category.update', 'uses' => 'Admin\CategoryController@update']);
    Route::get('delete/{category}', ['as' => 'category.delete', 'uses' => 'Admin\CategoryController@destroy']);
});

/*Curso routes*/
Route::prefix('admin.courses')->name('admin.')->group(function () {
    Route::get('list', ['as' => 'courses.index', 'uses' => 'Admin\CourseController@index']);
    Route::get('create', ['as' => 'course.create', 'uses' => 'Admin\CourseController@create']);
    Route::post('store', ['as' => 'courses.store', 'uses' => 'Admin\CourseController@store']);
    Route::get('details/{course}', ['as' => 'course.show', 'uses' => 'Admin\CourseController@show']);
    Route::get('edit/{course}', ['as' => 'course.edit', 'uses' => 'Admin\CourseController@edit']);
    Route::put('update/{course}', ['as' => 'course.update', 'uses' => 'Admin\CourseController@update']);
    Route::get('delete/{course}', ['as' => 'course.delete', 'uses' => 'Admin\CourseController@destroy']);
});

/*Formadores routes*/
Route::prefix('admin.teachers')->name('admin.')->group(function () {
    Route::get('list', ['as' => 'teacher.index', 'uses' => 'Admin\TeacherController@index']);
    Route::get('create', ['as' => 'teacher.create', 'uses' => 'Admin\TeacherController@create']);
    Route::post('store', ['as' => 'teacher.store', 'uses' => 'Admin\TeacherController@store']);
    Route::get('details/{teacher}', ['as' => 'teacher.show', 'uses' => 'Admin\TeacherController@show']);
    Route::get('edit/{teacher}', ['as' => 'teacher.edit', 'uses' => 'Admin\TeacherController@edit']);
    Route::put('update/{teacher}', ['as' => 'teacher.update', 'uses' => 'Admin\TeacherController@update']);
    Route::get('delete/{teacher}', ['as' => 'teacher.delete', 'uses' => 'Admin\TeacherController@destroy']);
});

/*services routes*/
Route::prefix('admin.services')->name('admin.')->group(function () {
    Route::get('list', ['as' => 'service.index', 'uses' => 'Admin\ServiceController@index']);
    Route::get('create', ['as' => 'service.create', 'uses' => 'Admin\ServiceController@create']);
    Route::post('store', ['as' => 'service.store', 'uses' => 'Admin\ServiceController@store']);
    Route::get('details/{service}', ['as' => 'service.show', 'uses' => 'Admin\ServiceController@show']);
    Route::get('edit/{service}', ['as' => 'service.edit', 'uses' => 'Admin\ServiceController@edit']);
    Route::put('update/{service}', ['as' => 'service.update', 'uses' => 'Admin\ServiceController@update']);
    Route::get('delete/{service}', ['as' => 'service.delete', 'uses' => 'Admin\ServiceController@destroy']);
});

Route::post('/notifications/mark-all-read', [AlertsController::class, 'markAllRead'])->name('notifications.markAllRead');
Route::get('/notifications', [AlertsController::class, 'index'])->name('notifications.all');

/* news routes */
Route::prefix('admin.news')->name('admin.')->group(function () {
    Route::get('news', ['as' => 'news.index', 'uses' => 'Admin\NewsController@index']);
    Route::get('newsArchived', ['as' => 'newsArchived.index', 'uses' => 'Admin\NewsController@arquivadas']);
    Route::get('newsDraft', ['as' => 'newsDraft.index', 'uses' => 'Admin\NewsController@rascunho']);
    Route::get('create', ['as' => 'news.create', 'uses' => 'Admin\NewsController@create']);
    Route::post('newsStore', ['as' => 'news.store', 'uses' => 'Admin\NewsController@store']);
    Route::get('edit/{news}', ['as' => 'news.edit', 'uses' => 'Admin\NewsController@edit']);
    Route::put('newsUpdate/{news}', ['as' => 'news.update', 'uses' => 'Admin\NewsController@update']);
    Route::get('details/{news}', ['as' => 'news.view', 'uses' => 'Admin\NewsController@show']);
    Route::get('newsDelete/{news}', ['as' => 'news.delete', 'uses' => 'Admin\NewsController@destroy']);
    Route::resource('tags', TagController::class);
    Route::post('news/upload-image', ['as' => 'news.uploadImage', 'uses' => 'Admin\NewsController@uploadImage']);
});

/* Gerar Relatorio */
/* Route::get('formulario/relatorio', [RelatorioController::class, 'formReports'])->name('form.reports');
    Route::get('relatorio', [RelatorioController::class, 'noticia'])->name('relatorio.noticia'); */


/* comments routes */
Route::prefix('admin/comments')->name('admin.')->group(function () {
    Route::get('comment', ['as' => 'comments.index', 'uses' => 'Admin\CommentController@index']);
    Route::get('create', ['as' => 'comment.create', 'uses' => 'Admin\CommentController@create']);
    Route::post('commentStore', ['as' => 'comment.store', 'uses' => 'Admin\CommentController@store']);
    Route::get('edit/{comment}', ['as' => 'comment.edit', 'uses' => 'Admin\CommentController@edit']);
    Route::put('commentUpdate/{comment}', ['as' => 'comment.update', 'uses' => 'Admin\CommentController@update']);
    Route::get('details/{comment}', ['as' => 'comment.view', 'uses' => 'Admin\CommentController@show']);
    Route::get('commentDelete/{comment}', ['as' => 'comment.delete', 'uses' => 'Admin\CommentController@destroy']);
});
/* tags routes */
Route::prefix('admin.tags')->name('admin.')->group(function () {
    Route::get('tags', ['as' => 'tags.index', 'uses' => 'Admin\TagController@index']);
    Route::get('create', ['as' => 'tag.create', 'uses' => 'Admin\TagController@create']);
    Route::post('tagStore', ['as' => 'tag.store', 'uses' => 'Admin\TagController@store']);
    Route::get('edit/{tag}', ['as' => 'tag.edit', 'uses' => 'Admin\TagController@edit']);
    Route::put('tagUpdate/{tag}', ['as' => 'tag.update', 'uses' => 'Admin\TagController@update']);
    Route::get('tagView/{tag}', ['as' => 'tag.view', 'uses' => 'Admin\TagController@show']);
    Route::get('tagDelete/{tag}', ['as' => 'tag.delete', 'uses' => 'Admin\TagController@destroy']);
});

/* typeCategory routes */
Route::prefix('admin.typeCategories')->name('admin.')->group(function () {
    Route::get('typeCategory', ['as' => 'typeCategories.index', 'uses' => 'Admin\TypeCategoryController@index']);
    Route::get('create', ['as' => 'typeCategory.create', 'uses' => 'Admin\TypeCategoryController@create']);
    Route::post('typeCategories', ['as' => 'typeCategories.store', 'uses' => 'Admin\TypeCategoryController@store']);
    Route::get('typeview/{typeCategory}', ['as' => 'typeCategory.show', 'uses' => 'Admin\TypeCategoryController@show']);
    Route::get('typeedit/{typeCategory}', ['as' => 'typeCategory.edit', 'uses' => 'Admin\TypeCategoryController@edit']);
    Route::put('typeCategoryUpdate/{typeCategory}', ['as' => 'typeCategory.update', 'uses' => 'Admin\TypeCategoryController@update']);
    Route::get('typeCategoryDelete/{typeCategory}', ['as' => 'typeCategory.delete', 'uses' => 'Admin\TypeCategoryController@destroy']);
});

/*-------------------------------------------------------
                    Ads routes
-------------------------------------------------------*/
Route::prefix('admin.ads')->name('admin.')->group(function () {
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

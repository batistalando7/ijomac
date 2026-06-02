<?php

use Illuminate\Support\Facades\Route;

/*-------------------------------------------------------
                    Site Routes
-------------------------------------------------------*/

Route::redirect('/', 'portal/home');

Route::get('portal/home', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);
Route::get('portal/contactos', ['as' => 'site.contacts', 'uses' => 'Site\ContactController@index']);
Route::get('portal/cursos', ['as' => 'site.courses', 'uses' => 'Site\CourseController@index']);
Route::get('portal/cursos/{course:slug}', ['as' => 'site.courses.details', 'uses' => 'Site\CourseController@show']);
Route::get('portal/cursos/{course:slug}/participar', ['as' => 'site.courses.participate', 'uses' => 'Site\CourseController@participate']);
Route::get('portal/quem-somos', ['as' => 'site.about', 'uses' => 'Site\AboutController@index']);

/* Rota de Comentarios */
/* Route::post('/comment/store/{news}', [CommentController::class, 'store'])->name('site.comment.store'); */

/* Rota de Mensagens */
Route::post('portal/contactos', ['as' => 'site.message', 'uses' => 'Site\ContactController@store']);


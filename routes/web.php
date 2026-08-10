<?php

use Illuminate\Support\Facades\Route;

/*-------------------------------------------------------
                    Site Routes
-------------------------------------------------------*/

Route::redirect('/', 'portal/home');

Route::get('portal/home', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);
Route::get('portal/quem-somos', ['as' => 'site.about', 'uses' => 'Site\AboutController@index']);
Route::get('portal/about/faqs', ['as' => 'site.about.faq', 'uses' => 'Site\AboutController@faqs']);
Route::get('portal/contactos', ['as' => 'site.contacts', 'uses' => 'Site\ContactController@index']);

/* rotas do curso*/
Route::get('portal/cursos', ['as' => 'site.courses', 'uses' => 'Site\CourseController@index']);
Route::get('portal/cursos/{course:slug}', ['as' => 'site.courses.details', 'uses' => 'Site\CourseController@show']);
Route::get('portal/cursos/{course:slug}/participar', ['as' => 'site.courses.request', 'uses' => 'Site\CourseController@request']);
Route::post('portal/inscricao-curso', ['as' => 'site.courses.store', 'uses' => 'Site\CourseController@store']);
/* fim das rotas do curso */


/* rota de serviços */
Route::get('portal/servicos', ['as' => 'site.services', 'uses' => 'Site\ServiceController@index']);
Route::get('portal/servicos/{service:slug}', ['as' => 'site.services.details', 'uses' => 'Site\ServiceController@show']);
Route::get('portal/servicos/{service:slug}/solicitação', ['as' => 'site.services.request', 'uses' => 'Site\ServiceController@request']);
Route::post('portal/solicitação-servico', ['as' => 'site.service.store', 'uses' => 'Site\ServiceController@store']);
/* fim das rota de serviço */

/* rota de galeria */
Route::get('portal/galery', ['as' => 'site.galery.index', 'uses' => 'Site\GaleryController@index']);
Route::get('portal/galery/{galery:slug}', ['as' => 'site.galery.show', 'uses' => 'Site\GaleryController@show']);
/* fim das rotas da galeria */

/* Rota de subscrição */
Route::post('/portal/subscrever', ['as' => 'site.subscrive', 'uses' => 'Site\SubscriptionController@store']);

/* Rota de Mensagens */
Route::post('portal/contactos', ['as' => 'site.message', 'uses' => 'Site\ContactController@store']);

//pesquisa
Route::get('portal/pesquisar/finalistas', ['as' => 'site.search', 'uses' => 'Site\SearchController@search']);

//verificação de certificado
Route::get('portal/{student:slug}/verificar-certificado', ['as' => 'site.verify.certificate', 'uses' => 'Site\CertificateController@verify']);
Route::get('portal/{student:slug}/mostrar-certificado', ['as' => 'site.verify.show', 'uses' => 'Site\CertificateController@show']);


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
/*
Route::get('/', function () {


    die('ok');
    ///return view('welcome');
});

*/
Route::get('/','HomeController@index')->name('home.index');

Route::resources([
    'chapitre' => 'ChapitresController',
    'question' => 'QuestionsController',
    'reponse' => 'ReponsesController',
    'sujet' => 'SujetsController',
    'note' => 'NotesController'
]);

Route::get('listes/chapitres','ChapitresController@listesChapitres')->name('chapitre.listes');
Route::get('listes/sujet/bychapitre/{name}','SujetsController@listSujetByChapitre')->name('sujet.listes');
Route::get('listes/question/bySujetchapitre/{id}/{namechapitres}','QuestionsController@sujetByChapitreQuestion')->name('question.sujet.listes');

// route add reponse user by test examen

Route::post('reponse/by/user/examen','EvaluationController@addChoiceReponseUser');
Route::post('note/by/user/examen','EvaluationController@addNoteUserBySujet');

Route::post('resultats/questionByUserSujet','EvaluationController@resultatsQuestionByUser')->name('resultats.question.user');

Route::post('resultats/question/speciaux','EvaluationController@resultatsQuestionByUserSujetSpeciaux')->name('resultats.question.user.sujet.Speciaux');



Route::get('page/loadingbyResultats/{id}/{sujet}','EvaluationController@pageResultats')->name('resultats.pages');

Route::get('page/loadingbyResultats/sujet40/{id}/{sujet}','EvaluationController@pageResultatsBysujet40')->name('resultats.pages.sujet40');


Route::get('corriger/type/{sujet}','EvaluationController@corriger')->name('corriger.user');
Route::get('corriger/type/sujet40/{sujet}','EvaluationController@corrigerSujet40')->name('corriger.user.sujet40');



Route::get('corriger/loading/{user}/{sujet}/{questionId}','EvaluationController@corrigerUser')->name('corrigerUser');


//les 32 sujets

Route::get('les/38sujets', 'SujetsController@sujet38')->name('sujet32.list');
Route::get('historique/resultats', 'HomeController@historisques')->name('historique.resultats');
Route::get('test/generales/{nQuestion}', 'TestGeneralesController@testGenerales')->name('test.generales');



//Test generales
Route::get('test/page/loadingbyResultats/{user_id}','TestGeneralesController@pageResultats')->name('resultats.pages');
Route::get('test/generale/corriger/type/{user}','TestGeneralesController@corrigerQuestionTest')->name('corrigerQuestionTest.user');
Route::get('test/corriger/loading/{user}/{questionId}','TestGeneralesController@correctionTestGenerales');
Route::post('resultats/questionByUserSujet/testGenerales','TestGeneralesController@resultatsQuestionByUser')->name('resultats.question.user.testGenerale');

Route::post('test/generale/by/user/examen','TestGeneralesController@addChoiceReponseUser');

// les 38 SUJETS

Route::get('les/38/sujets','TestSujet38Controller@index')->name('test.sujet38');

Route::get('list/38/sujets/{idQuestion}','TestSujet38Controller@listQuestion38')->name('test.listQuestion38');


Auth::routes();
///https://noisim.net/permis/download/drivetool
Route::get('download/drivetool','Api\ApiController@getDownload')->name('link');
Route::get('drivetool/download','Api\ApiController@pageDownload')->name('link.page');

//Route::get('/home', 'HomeController@index')->name('home');

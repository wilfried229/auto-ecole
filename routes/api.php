<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */
Route::group(['prefix'=> 'v1'], function(){

    Route::post('transaction/paiement','Api\PaiementController@store');

    Route::get('transaction/paiement/{id}','Api\PaiementController@getTransaction');


    Route::get('listes/chapitres','Api\ApiController@listesChapitresApi');
    Route::get('listes/sujet/bychapitreid/{id}','Api\ApiController@listSujetByChapitreID');
    Route::get('listes/question/bySujetchapitre/{id}','Api\ApiController@sujetByChapitreQuestionapi');

    Route::get('last/evalution','Api\ApiController@lastEvaluation');
    Route::get('page/loadingbyResultats/{userId}/{sujet}','Api\ApiController@pageResultats');

    Route::get('corection/byUser/question/{userId}/{sujet}/{questionId}','Api\ApiController@corrigerUser');

    Route::get('list/question/sujet/{sujet}','Api\ApiController@questionBySujet');

    Route::get('list/question/{questionId}','Api\ApiController@questionById');

    Route::get('list/questions/sujet/chapitre/{sujetId}/{chapitreId}','Api\ApiController@listQuestionBySujet');


    Route::post('reponse/by/user/examen','Api\ApiController@addChoiceReponseUser');
    Route::post('resultats/questionByUserSujet','Api\ApiController@resultatsQuestionByUser');

    //Test générales
    Route::get('list/question/test/generale/{nQuestion}','Api\ApiController@testGeneralesQuestionRandom');


    Route::get('list/40sujet','Api\ApiController@sujets40');

    Route::get('list/40/sujets/{sujetId}','Api\ApiController@list40SujetByquestions');


    Route::resource('codes', 'CodeController');

    ///https://globalconsultingcommuincation.com/permis/storage/app/audios/questions/mp3/q001.mp3

    });

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'PagesController@index');
Route::get('/details', 'PagesController@details');
Route::get('/news', 'PagesController@news');
Route::get('/oldnews', 'PagesController@oldnews');
Route::get('/recruitment', 'PagesController@recruitment');
Route::get('/men', 'PagesController@men');
Route::get('/offers', 'PagesController@offers');
// Route::get('/prices', 'PagesController@prices');
Route::get('/apprenticeprices', 'PagesController@apprenticePrices');
Route::get('/salon', 'PagesController@salon');
Route::get('/booking', 'PagesController@booking');
Route::get('/kebelo', 'PagesController@offerBrad');
Route::get('/team', 'PagesController@team');
Route::get('/team/{staff}', 'PagesController@teamInd');
Route::get('/newstaff', 'PagesController@newstaff');
Route::get('/kate', 'PagesController@leaver');
Route::get('/base', 'PagesController@base');

Route::get('/reviews/{stylist?}', 'PagesController@reviews');

Route::get('/news/index', 'NewsController@index');

Route::get('/admin', 'AdminController@index');

Route::get('/prospect/emailmale1', 'ProspectController@emailMale1');
Route::get('/prospect/emailmale2', 'ProspectController@emailMale2');
Route::get('/prospect/emailmale3', 'ProspectController@emailMale3');
Route::get('/prospect/emailfemale1', 'ProspectController@emailFemale1');
Route::get('/prospect/emailfemale2', 'ProspectController@emailFemale2');
Route::get('/prospect/emailfemale3', 'ProspectController@emailFemale3');
Route::get('/prospect/test', 'ProspectController@test');

Route::get('/prospect/admin', 'ProspectController@admin');
Route::patch('prospect/{prospect}', 'ProspectController@update');
Route::get('prospect/{prospect}/note', 'ProspectController@createNote');
Route::post('prospect/note', 'ProspectController@storeNote');

Route::get('/prospect/taster', 'ProspectController@tasterIndex');
Route::get('/prospect/freeproducts', 'ProspectController@freeproductsIndex');
Route::get('/prospect/freeproducts/{prospect}', 'ProspectController@freeproductsShow' );
Route::get('/prospect/taster/{prospect}', ['as' => 'prospect.show', 'uses' => 'ProspectController@tasterShow']);

Route::get('/freeproducts', 'ProspectController@freeproducts');
Route::get('/freeproducts/man', 'ProspectController@freeproducts');
Route::get('/freeproducts/create', 'ProspectController@create');
Route::get('/freeproducts/man/create', 'ProspectController@create');
Route::post('prospect/store', 'ProspectController@store');

Route::get('/taster', 'ProspectController@taster');
Route::get('/taster/create', 'ProspectController@tasterCreate');
Route::post('/taster/store', 'ProspectController@tasterStore');

Route::get('contact',
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('sendEmail',
  ['as' => 'sendEmail', 'uses' => 'ContactController@sendEmail']);

Route::get('/joinpk', 'PotentialEmployeeController@create');
Route::post('joinpk/store',
  ['uses' => 'PotentialEmployeeController@store']);

Route::resource('apprentice', 'ApprenticeController');
Route::resource('stylist', 'StylistController');

Route::get('feedback/{client}',
  ['as' => 'feedbackCreate', 'uses' => 'FeedbackController@create']);
Route::post('feedback/store',
  ['uses' => 'FeedbackController@store']);

Route::get('offer/{client}',
  ['uses' => 'OfferController@show']);
Route::get('offer2/{client}',
  ['uses' => 'OfferController@show2']);
Route::patch('offer/{client}',
  ['as' => 'offerUpdate', 'uses' => 'OfferController@update']);


Route::get('/blog', 'BlogController@index');
Route::get('/blog/{blog}', 'BlogController@show');

Route::get('/models', 'HairModelController@create');
Route::post('/hairmodel/store', 'HairModelController@store');

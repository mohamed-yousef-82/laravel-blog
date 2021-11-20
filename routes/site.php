<?php
use App\Article;
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
// Route::get('/ui', function () {
//     return redirect('/sss');
// });

Route::get('/', 'HomeController@index')->name('home');
Route::get('/read/{id}', 'HomeController@read')->name('read');
Route::post('/read/{id}', 'HomeController@read')->name('postread');
Route::group(['prefix' => 'dashboard','middleware' => 'guest:api'], function () {
    Route::get('/', 'HomeController@admin_index')->name('dashboard');
    Route::get('/add', 'HomeController@AddArticle')->name('addarticle');
    Route::post('/add', 'HomeController@AddArticle')->name('addpostarticle');
    Route::get('/delete/{id}','HomeController@DeleteArticle');
    Route::post('/edit/{id}', 'HomeController@Edit')->name('edit');
    Route::get('/edit/{id}','HomeController@Edit'); 
});
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/test', function () {
    return view('pages.show');
});

Auth::routes();

Route::get('/', 'BrowseController@home')->name('civil.home');
Route::get('/about', 'BrowseController@about')->name('civil.about');
Route::get('/contact', 'BrowseController@contact')->name('civil.contact');
Route::get('/events', 'BrowseController@event')->name('civil.events');
//Arbic route
// Route::group(['prefix' => app()->getlocale()], function() {
Route::get('/ar', 'BrowseController@ar_home')->name('index.ar');
Route::get('about/ar', 'BrowseController@ar_about')->name('about.ar');
Route::get('contact/ar', 'BrowseController@ar_contact')->name('contact.ar');
Route::get('events/ar', 'BrowseController@ar_event')->name('events.ar');

Route::prefix('dashboard')->middleware('auth')->group(function(){
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::resource('articles', 'ArticleController');
    Route::resource('events', 'EventController')->except(['create' , 'edit','update']);
    Route::put('event/update', 'EventController@update')->name('event.update');
    Route::delete('event/delete', 'EventController@delete')->name('event.delete');
    Route::resource('abouts','AboutController')->except(['destroy', ]);
});

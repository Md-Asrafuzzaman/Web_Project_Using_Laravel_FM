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
    return view('index');
});



//Route for Admin....
Route::get('/admin', 'AdminController@admin');
Route::get('/postnews', 'AdminController@postNews');
Route::get('/allpost', 'AdminController@allPost');
Route::post('newssave', 'AdminController@saveNews');
Route::get('allpost', 'AdminController@allPost');
Route::get('/postad', 'AdminController@postAd');
Route::post('savead', 'AdminController@saveAd');



//Navigation Bar Route....
Route::get('/','PagesController@index');
// Route::get('/','PagesController@index2');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contuct');
Route::get('/advertisement','PagesController@advertisement');
Route::get('/editor','PagesController@editor');
Route::get('/search','PagesController@search');
Route::get('/blank', 'PagesController@blank');
Route::get('/calender', 'PagesController@calender');


//Sidebar Route.....
Route::get('/bangladesh','SidebarController@bangladesh');
Route::get('/sports','SidebarController@sports')->name('sports');
Route::get('/international','SidebarController@international');
Route::get('/business','SidebarController@business');
Route::get('/Political','SidebarController@Political');
Route::get('/ad','SidebarController@ad');
Route::get('/binodon','SidebarController@binodon');
Route::get('/campus','SidebarController@campus');
Route::get('/city','SidebarController@city');
Route::get('/agriculture','SidebarController@agriculture');
Route::get('/frontpagead','SidebarController@frontAd');


Auth::routes();
Route::get('/home', 'HomeController@index');

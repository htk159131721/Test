<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('webhome', 'WebhomeController@index');
Route::get('products', 'ProductsController@index');
Route::get('productsdetail', 'ProductsController@detail');
Route::get('register', 'UsersController@index');
Route::get('orders-history', 'UsersController@orders_history');
Route::get('order-history-detail', 'UsersController@order_history_detail');
Route::get('wish-list', 'UsersController@wish_list');
Route::get('account', 'UsersController@account');
Route::get('basket', 'UsersController@basket');
Route::get('checkout', 'UsersController@checkout');
Route::get('contact', 'Pages_BlogsController@contact');
Route::get('blog-detail', 'Pages_BlogsController@blog_detail');
Route::get('blogs', 'Pages_BlogsController@blogs');
Route::get('404', 'Pages_BlogsController@page404');
Route::get('faq', 'Pages_BlogsController@faq');


/*Admin start*/
Route::get('webmaster','AdminController@index');
Route::get('widgets','AdminController@widgets');
Route::get('tables/simple','AdminController@tableSimple');
Route::get('tables/data','AdminController@tableData');
Route::get('forms/general','AdminController@formGeneral');
Route::get('forms/advance','AdminController@formAdvance');
Route::get('forms/editor','AdminController@formEditor');
Route::get('mailbox','AdminController@mail');
/*Admin end*/
Route::post('check-amount-img/{number}', 'AdminController@showAmountImg');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

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
 //use Illuminate\Auth\Middleware\Authenticate;
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/admin',function(){
// 	return view('admin.layout.index');
// });
Route::group(['prefix'=>'admin'],function(){
	Route::get('/',[
		'uses'=>'Admin\AdminController@index',
		'as'=>'admin.index'
	]);
	Route::get('categories', 'Admin\CategoryController@index');
	Route::get('products', 'Admin\ProductController@index');
	Route::get('brands', 'Admin\BrandController@index');
	Route::get('users', 'Admin\UserController@index');
	Route::get('sales', 'Admin\SaleController@index');
	Route::get('orders', 'Admin\OrderController@index');
	Route::get('orderDetail/{id}', 'Admin\OrderDetailController@index');
	Route::get('customers', 'Admin\CustomerController@index');
	Route::get('comments', 'Admin\CommentController@index');
});
 Route::get('login',[
	'uses'=>'Admin\LoginController@getLogin',
	'as'=>'login'
	]);
 Route::post('login','Admin\LoginController@postLogin');
 Route::get('logout','Admin\LoginController@logout');
 Route::group(['prefix'=>'swatch'],function(){
 	Route::get('/','Page\HomeController@index')->name('home');
 	Route::get('/product/{id}',function(){
 		return view('layouts.product_detail');
 	});
 	Route::get('/contact',function(){
 		return view('layouts.contact');
 	});
 	Route::get('/about',function(){
 		return view('layouts.about');
 	});
 	Route::get('/mens',function(){
 		return view('layouts.mens');
 	});
 	Route::get('/womens',function(){
 		return view('layouts.womens');
 	});
 	Route::get('/couples',function(){
 		return view('layouts.couples');
 	});
 	Route::get('/cart',function(){
 		return view('layouts.cart');
 	});
 	Route::get('/checkout',function(){
 		return view('layouts.checkout');
 	});
 	Route::get('/complete',function(){
 		return view('layouts.complete');
 	});


 });
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

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

	Route::get('categories/{id}', 'Admin\CategoryController@show')->name('category');
	Route::post('categories/create', 'Admin\CategoryController@create');
	Route::post('categories/update/{id}', 'Admin\CategoryController@update');
	Route::get('categories/delete/{id}', 'Admin\CategoryController@delete');
	
	Route::get('brands', 'Admin\BrandController@index');
	Route::post('brands/create','Admin\BrandController@create');
	Route::get('brands/{id}', 'Admin\BrandController@show');
	Route::post('brands/update/{id}', 'Admin\BrandController@update');
	Route::get('brands/delete/{id}', 'Admin\BrandController@delete');

	Route::get('products', 'Admin\ProductController@index');
	Route::post('products/create','Admin\ProductController@create');
	Route::get('products/{id}', 'Admin\ProductController@show');
	Route::post('products/update/{id}', 'Admin\ProductController@update');
	Route::get('products/delete/{id}', 'Admin\ProductController@delete');

	Route::get('sales', 'Admin\SaleController@index');
	Route::post('sales/create','Admin\SaleController@create');
	Route::get('sales/{id}', 'Admin\SaleController@show');
	Route::post('sales/update/{id}', 'Admin\SaleController@update');
	Route::get('sales/delete/{id}', 'Admin\SaleController@delete');


	Route::get('users', 'Admin\UserController@index');
	Route::post('users/create','Admin\UserController@create');
	Route::get('users/{id}', 'Admin\UserController@show');
	Route::post('users/update/{id}', 'Admin\UserController@update');
	Route::get('users/delete/{id}', 'Admin\UserController@delete');

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
 	Route::get('/','Page\HomeController@index');
 	Route::get('/contact',function(){
 		return view('layouts.contact');
 	});
 	Route::get('/about',function(){
 		return view('layouts.about');
 	});
 	
 	Route::get('/addToCart/{id}','Page\CartController@create')->name('addToCart');
 	Route::get('/cart','Page\CartController@index')->name('cart');
 	Route::get('/updateCart/{id}/{quantity}','Page\CartController@update');
 	Route::get('/deleteCart/{id}','Page\CartController@delete');
 	Route::get('/deleteAllCart','Page\CartController@clear');
 	
 	Route::post('/checkout','Page\CartController@buy');
 		
 	Route::post('/complete','Admin\CustomerController@add');


 	// Route::get('/master','Page\BrandController@index');
 	Route::get('/{gender}','Page\ProductController@getByGender');
 	Route::get('/brand/{slug}','Page\BrandController@getBySlug');
 	Route::get('/product/{id}','Page\ProductController@detail');

 	
 	


 });
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

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
//Home
Route::get('/', 'HomeController@index');
Route::get('/trang-chu', 'HomeController@index');
Route::post('/tim-kiem', 'HomeController@search');
Route::get('/team', 'HomeController@team');
Route::get('/mail', 'HomeController@mail');


Route::get('/danh-muc/{category_id}', 'CategoryController@show_category_index');
Route::get('/thuong-hieu/{brand_id}', 'BrandController@show_brand_index');
Route::get('/chi-tiet/{product_id}', 'ProductController@detail_product');

//SendMail
Route::get('/send-mail', 'HomeController@send_mail');


//Admin
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout',"AdminController@logout");
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/revenue',"AdminController@revenue");


//Category
Route::get('/add-category','CategoryController@add_category');
Route::get('/all-category','CategoryController@all_category');

Route::get('/edit-category/{category_id}','CategoryController@edit_category');
Route::get('/delete-category/{category_id}','CategoryController@delete_category');


Route::get('/unactive-category/{category_id}','CategoryController@unactive_category');
Route::get('/active-category/{category_id}','CategoryController@active_category');


Route::post('/save-category','CategoryController@save_category');
Route::post('/update-category/{category_id}','CategoryController@update_category');

//Brand
Route::get('/add-brand','BrandController@add_brand');
Route::get('/all-brand','BrandController@all_brand');

Route::get('/edit-brand/{brand_id}','BrandController@edit_brand');
Route::get('/delete-brand/{brand_id}','BrandController@delete_brand');


Route::get('/unactive-brand/{brand_id}','BrandController@unactive_brand');
Route::get('/active-brand/{brand_id}','BrandController@active_brand');


Route::post('/save-brand','BrandController@save_brand');
Route::post('/update-brand/{brand_id}','BrandController@update_brand');

//Product
Route::get('/add-product','ProductController@add_product');
Route::get('/all-product','ProductController@all_product');

Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');


Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');


Route::post('/save-product','ProductController@save_product');
Route::post('/update-product/{product_id}','ProductController@update_product');

Route::post('/export','ProductController@export');
Route::post('/import','ProductController@import');

//Cart
Route::post('/save-cart','CartController@save_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-cart/{rowId}','CartController@delete_cart');
Route::post('/update-cart','CartController@update_cart');
Route::post('/check-coupon','CartController@check_coupon');

//Voucher
Route::get('/insert-coupon','CouponController@insert_coupon');
Route::get('/delete-coupon/{coupon_id}','CouponController@delete_coupon');
Route::get('/list-coupon','CouponController@list_coupon');

Route::post('/insert-voucher','CouponController@insert_voucher');


//Checkout
Route::post('/login-customer','CheckoutController@login_customer');

Route::get('/login-checkout','CheckoutController@login_checkout');
Route::post('/add-customer','CheckoutController@add_customer');
Route::get('/checkout','CheckoutController@checkout');
Route::get('/logout-checkout','CheckoutController@logout_checkout');
Route::post('/save-checkout','CheckoutController@save_checkout');
Route::get('/payment','CheckoutController@payment');
Route::post('/order-place','CheckoutController@order_place');

//Order
Route::get('/manager-order','CheckoutController@manager_order');
Route::get('/view-order/{orderId}','CheckoutController@view_order');


//Banner
Route::get('/manage-slider','SliderController@manage_slider');
Route::get('/add-slider','SliderController@add_slider');
Route::post('/insert-slider','SliderController@insert_slider');

//Blog
Route::get('/add-post','PostController@add_post');
Route::get('/all-post','PostController@all_post');
Route::get('/delete-post/{post_id}','PostController@delete_post');
Route::get('/edit-post/{post_id}','PostController@edit_post');
Route::post('/save-post','PostController@save_post');
Route::post('/update-post/{post_id}','PostController@update_post');


Route::get('/blog','PostController@blog');
Route::get('/detail/{post_id}','PostController@detail');



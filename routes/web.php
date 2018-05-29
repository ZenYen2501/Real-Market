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

Route::get('', [
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);

Route::get('loai-san-pham/{type}', [
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSP'
]);

Route::get('chi-tiet-san-pham/{id}', [
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getChitietSP'
]);

Route::get('contact', [
	'as'=>'lien-he',
	'uses'=>'PageController@getContact'
]);

Route::get('about', [
	'as'=>'gioi-thieu',
	'uses'=>'PageController@getAbout'
]);

Route::get('add-to-cart/{id}',[
	 'as'=> 'themgiohang',
	 'uses'=>'PageController@getAddtoCart'	
]);

Route::get('del-cart/{id}', [
	'as'=>'xoagiohang',
	'uses'=>'PageController@getDelItemCart'
]);

Route::get('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@getCheckout'
]);

Route::post('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@postCheckout'
]);

Route::get('dang-nhap',[
	'as'=>'dangnhap',
	'uses'=>'PageController@getLogin'
]);

Route::post('dang-nhap',[
	'as'=>'dangnhap',
	'uses'=>'PageController@postLogin'
]);

Route::get('dang-ky',[
	'as'=>'dangky',
	'uses'=>'PageController@getSignup'
]);

Route::post('dang-ky',[
	'as'=>'dangky',
	'uses'=>'PageController@postSignup'
]);

Route::get('dang-xuat',[
	'as'=>'dangxuat',
	'uses'=>'PageController@getLogout'
]);

Route::get('search',[
	'as'=>'search',
	'uses'=>'PageController@getSearch'
]);



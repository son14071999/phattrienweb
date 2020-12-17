<?php

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

Route::get('/', function () {
    return view('homePage');
})->name('index');

Route::get('don-vi-dao-tao', 'controllerTruong@getDanhsach')->name('dvdd');
Route::get('tieu-chi', 'ControllerTieuchi@getTieuchi')->name('tieuchi');
route::get('trang-chu','ControllerTrangchu@getTrangchu')->name('trangchu');
Route::get('gioi-thieu', 'ControllerGioithieu@getGioithieu')->name('gioithieu');
Route::get('login', 'ControllerAccount@getLogin')->name('getLogin');
Route::get('login/forget-pass', 'ControllerAccount@viewforgetpass')->name('forgetpass');
Route::post('login/forget-pass', 'ControllerAccount@forgetpass')->name('postForgetPass');
Route::get('forget/pass', 'ControllerAccount@checkemail')->name('checkemail');
Route::post('forget/pass', 'ControllerAccount@changePass')->name('changePass');

Route::post('login', 'ControllerAccount@postLogin')->name('postLogin');
Route::get('logout', 'ControllerAccount@logout')->name('logout');
//Route::get('thong-ke', 'ControllerTieuchi@getThongke')->name('thongke');

Route::post('tieu-chi','ControllerTieuchi@getLoc')->name('loc');
Route::post('search','ControllerTieuchi@getSearch')->name('search');






Route::get('thongke', 'ControllerTieuchi@demoThongKe')->name('thongke');
//Route::post('thongkep', 'ControllerTieuchi@postThongKe')->name('postthongke');
Route::post('getnamthongke', 'ControllerTieuchi@getnamthongke')->name('getnamthongke');
//Route::post('gettruongthongke', 'ControllerTieuchi@gettruongthongke')->name('gettruongthongke');
Route::post('test1234', 'ControllerTieuchi@test1234')->name('test1234');
Route::get('test1', 'ControllerTieuchi@test1')->name('test1');
$ManagerAdminController = 'ManagerAdminController@';
// Route::get("/admin/index", $ManagerAdminController.'index');

$ManagerAdminTieuChiController = 'ManagerAdminTieuChiController';
Route::resource("/admin/tieuchi", $ManagerAdminTieuChiController);
Route::get("/admin/showtc/{id}/{id1}", 'ManagerAdminTieuChiController@showTC');
Route::get("/admin/create-tieuchi", 'ManagerAdminTieuChiController@create_tieuchi');
Route::post("/admin/add-tieuchi", 'ManagerAdminTieuChiController@add_tieuchi');
Route::get("/admin/list-tieuchi", 'ManagerAdminTieuChiController@list_tieuchi');
Route::get("/admin/edit-tieuchi/{id}", 'ManagerAdminTieuChiController@show_edit_tieuchi');
Route::post("/admin/update-tieuchi/{id}", 'ManagerAdminTieuChiController@update_tieuchi');
Route::get("/admin/detete-tieuchi/{id}", 'ManagerAdminTieuChiController@delete_tieuchi');
Route::put("/admin/updatetc/{id_tc}/{id1}", 'ManagerAdminTieuChiController@updateTC');

Route::resource("/admin/account", 'ManagerAdminAccountController');
Route::get("/admin/account/change-pass/{id}", 'ManagerAdminAccountController@viewchangepass');
Route::post("/admin/account/change-pass/{id}", 'ManagerAdminAccountController@changepass');

Route::resource("/admin/daotao", 'ManagerAdminDaotaoController');
Route::resource("/admin/school", 'ManagerAdminSchoolController');
Route::get("/delete-donvi/{id}", 'ManagerAdminDaotaoController@destroy_donvi');
Route::get("/delete-school/{id}", 'ManagerAdminSchoolController@destroy_school');


Route::get('truong/{truong}', 'ControllerTieuchi@truong')->name('truong');

Route::post('tieu-chi/{truong}','ControllerTieuchi@getLoctruong')->name('loctruong');





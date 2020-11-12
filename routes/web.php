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
Route::post('login', 'ControllerAccount@postLogin')->name('postLogin');
Route::get('logout', 'ControllerAccount@logout')->name('logout');
Route::get('thong-ke', 'ControllerTieuchi@getThongke')->name('thongke');

Route::post('tieu-chi','ControllerTieuchi@getLoc')->name('loc');
Route::post('search','ControllerTieuchi@getSearch')->name('search');




$ManagerAdminController = 'ManagerAdminController@';
Route::get("/admin/index", $ManagerAdminController.'index');

$ManagerAdminTieuChiController = 'ManagerAdminTieuChiController';
Route::resource("/admin/tieuchi", $ManagerAdminTieuChiController);
Route::get("/admin/showtc/{id}/{id1}", 'ManagerAdminTieuChiController@showTC');
Route::put("/admin/updatetc/{id_tc}/{id1}", 'ManagerAdminTieuChiController@updateTC');

<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('lich-su-choi/{id}','API\NguoiChoiController@PlayerHistory');
Route::get('linh-vuc','API\LinhVucController@index');
Route::get('cau-hoi','API\CauHoiController@layDSCauHoi');
Route::get('cau-hoi/{id}','API\CauHoiController@show');
Route::get('cau-hoi','API\CauHoiController@layDSCauHoiTheoLV');
//Route::get('nguoi-choi/{id}','API\NguoiChoiController@layNguoiChoi');	
Route::get('diem-cao','API\NguoiChoiController@top10');
//Route::post('dang-nhap','API\NguoiChoiController@DangNhap');
Route::get('nguoi-choi','API\NguoiChoiController@layDSNguoiChoi');
Route::post('dang-nhap', 'API\NguoiChoiLoginController@login');
Route::group(['assign.guard:api','jwt.auth'], function () {
    Route::get('lay-thong-tin','API\NguoiChoiLoginController@getUser');
    //Route::get('ok','API\NguoiChoiLoginController@thongtin');
});

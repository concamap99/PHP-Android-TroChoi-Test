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
// Route::get('something',function(){
// 	$dsGoiCredit = App\GoiCredit::all();
// 	return view('somethingelse',compact('dsGoiCredit'));
// });
Route::get('lock-screen',function(){
	return view('lock-screen');
})->name('lock-screen');
Route::post('lock-screen','QuanTriVienController@xuLyKhoaManHinh')->name('lock');
Route::get('something',function(){
	return view('somethingelse');
});
Route::get('dang-nhap','QuanTriVienController@dangNhap')->name('dangnhap')->middleware('guest');
Route::get('dang-xuat','QuanTriVienController@dangXuat')->name('dangxuat');
Route::post('dang-nhap','QuanTriVienController@xuLyDangNhap')->name('dangnhap.xuly');
Route::middleware('auth')->group(function(){
	Route::get('/',function(){
		return view('dashboard');
	})->name('dashboard');
	
	Route::prefix('admin-profile')->group(function(){
		Route::get('/','QuanTriVienController@index')->name('admin-profile');
		Route::post('/{id}','QuanTriVienController@update')->name('admin-profile.post');
		Route::post('/{id}/change-password','QuanTriVienController@DoiMatKhau')->name('change-password');
	});
	
	Route::prefix('cau-hoi')->group(function(){
		Route::prefix('thung-rac')->group(function(){
			Route::get('','CauHoiController@onlyTrashed')->name('cauhoi.thungrac');
			Route::get('/khoi-phuc/{id}','CauHoiController@restore');
			Route::get('/xoa/{id}','CauHoiController@forceDelete');
		});
		Route::get('/them-moi',function(){
			return view('them-moi-cau-hoi');
		})->name('cauhoi.themmoi');

		Route::get('xoa/{id}','CauHoiController@Delete');
		Route::get('','CauHoiController@create')->name('cauhoi');
		Route::get('/{id}','CauHoiController@show')->name('cauhoi.get');
		Route::post('/{id}','CauHoiController@update')->name('cauhoi.capnhat');
		Route::post('','CauHoiController@store')->name('cauhoi.themmoipost');

	});
	Route::prefix('linh-vuc')->group(function(){
		Route::prefix('thung-rac')->group(function(){
			Route::get('','LinhVucController@onlyTrashed')->name('linhvuc.thungrac');
			Route::get('/khoi-phuc/{id}','LinhVucController@restore');
			Route::get('/xoa/{id}','LinhVucController@forceDelete');
		});
		Route::get('/them-moi',function(){
			return view('them-moi-linh-vuc');
		})->name('linhvuc.themmoi');
		Route::get('/', 'LinhVucController@create')->name('linhvuc');
		Route::get('/{id}','LinhVucController@show')->name('linhvuc.get');
		Route::get('xoa/{id}','LinhVucController@Delete');
		Route::post('/{id}','LinhVucController@update')->name('linhvuc.capnhat');
		Route::post('/','LinhVucController@store')->name('linhvuc.themmoipost');
	});
	Route::prefix('nguoi-choi')->group(function(){
		Route::prefix('thung-rac')->group(function(){
			Route::get('','NguoiChoiController@onlyTrashed')->name('nguoichoi.thungrac');
			Route::get('/khoi-phuc/{id}','NguoiChoiController@restore');
			Route::get('/xoa/{id}','NguoiChoiController@forceDelete');
		});
		// Route::get('/them-moi',function(){
		// 	return view('them-moi-nguoi-choi');
		// })->name('nguoichoi.themmoi');
		Route::get('/', 'NguoiChoiController@create')->name('nguoichoi');
		Route::get('xoa/{id}','NguoiChoiController@Delete');
		Route::post('','NguoiChoiController@store')->name('nguoichoi.themmoipost');
	});
	Route::prefix('goi-credit')->group(function(){
		Route::prefix('thung-rac')->group(function(){
			Route::get('','GoiCreditController@onlyTrashed')->name('goicredit.thungrac');
			Route::get('/khoi-phuc/{id}','GoiCreditController@restore');
			Route::get('/xoa/{id}','GoiCreditController@forceDelete');
		});
		Route::get('/them-moi',function(){
			return view('them-moi-goi-credit');
		})->name('goicredit.themmoi');

		Route::get('xoa/{id}','GoiCreditController@Delete');
		Route::get('/','GoiCreditController@create')->name('goicredit');
		Route::get('/{id}','GoiCreditController@show')->name('goicredit.get');
		Route::post('/{id}','GoiCreditController@update')->name('goicredit.capnhat');
		Route::post('/','GoiCreditController@store')->name('goicredit.themmoipost');
	});
	Route::prefix('lich-su')->group(function(){
		Route::prefix('choi/')->group(function(){
			Route::get('/{id}','LichSuChoiController@index')->name('ls-choi');
			Route::get('/chi-tiet/{id}','LichSuChoiController@chiTietLuotChoi')->name('ls-choi.detail');
		});
		Route::get('/mua-credit/{id}','LichSuMuaCreditController@index')->name('ls-mua-credit');
	});
	Route::prefix('cau-hinh')->group(function(){
		Route::prefix('app')->group(function(){
			Route::get('','CauHinhController@CauHinhApp')->name('cauhinh.app');
			Route::post('','CauHinhController@editCauHinhApp')->name('cauhinh.app.edit');
		});
		Route::prefix('diem-cau-hoi')->group(function(){
			Route::get('','CauHinhController@CauHinhDiemCauHoi')->name('cauhinh.diem');
			Route::get('\{id}','CauHinhController@showCauHinhDiemCauHoi')->name('cauhinh.diem.show');
			Route::post('\{id}','CauHinhController@editCauHinhDiemCauHoi')->name('cauhinh.diem.edit');
			Route::post('them-moi','CauHinhController@storeCauHinhDiemCauHoi')->name('cauhinh.diem.store');
		});
	});
});

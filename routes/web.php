<?php

Route::resource('khoa', 'KhoaController');/// sửa lại lần nữa

Route::resource('chuong_trinh_dao_tao', 'ChuongTrinhDaoTaoController');

Route::resource('lop', 'LopController');

Route::resource('sinh_vien', 'SinhVienController');

Route::any('hoc_phi', 'HocPhiController@getHocPhi')->name('hoc_phi.index');

Route::resource('hoa_don', 'HoaDonController');

Route::get('test', 'TestController@test');

Route::get('send_mail', 'Controller@send_mail')->name('send_mail');



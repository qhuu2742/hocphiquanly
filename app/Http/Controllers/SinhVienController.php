<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\SinhVien;

class SinhVienController extends Controller
{

    public function index(Request $request)
    {
        $ten_sinh_vien = $request->get('ten_sinh_vien');
        $array_sinh_vien = SinhVien::where('ten_sinh_vien', 'like', "%$ten_sinh_vien%")
            ->join('lop', 'lop.ma_lop', 'sinh_vien.ma_lop')
            ->paginate(10);
        $title = 'Xem tất cả Sinh viên';
        return view('sinh_vien.index', compact('array_sinh_vien', 'ten_sinh_vien',  'title'));
    }


    public function create()
    {
        return view('sinh_vien.create');
    }


    public function store(Request $request)
    {
        $sinh_vien                      = new SinhVien();
        $sinh_vien->ma_sinh_vien        = $request->get('ma_sinh_vien');
        $sinh_vien->email               = $request->get('email');
        $sinh_vien->mat_khau            = $request->get('mat_khau');
        $sinh_vien->ten_sinh_vien       = $request->get('ten_sinh_vien');
        $sinh_vien->ho_sinh_vien        = $request->get('ho_sinh_vien');
        $sinh_vien->ngay_sinh           = $request->get('ngay_sinh');
        $sinh_vien->dia_chi             = $request->get('dia_chi');
        $sinh_vien->so_dien_thoai       = $request->get('so_dien_thoai');
        $sinh_vien->gioi_tinh           = $request->get('gioi_tinh');
        $sinh_vien->ma_lop              = $request->get('ma_lop');
        $sinh_vien->thoi_gian_nhap_hoc  = $request->get('thoi_gian_nhap_hoc');
        $sinh_vien->save();

        return redirect()->route('sinh_vien.index');
    }


    public function show(SinhVien $sinhVien)
    {
        //
    }


    public function edit($id)
    {
        $sinh_vien = SinhVien::where('ma_sinh_vien', $id)->first();
        return view('sinh_vien.edit', compact('sinh_vien'));
    }


    public function update(Request $request, $id)
    {
        $sinh_vien                      = SinhVien::where('ma_sinh_vien', $id)->first();
        $sinh_vien->ma_sinh_vien        = $request->get('ma_sinh_vien');
        $sinh_vien->email               = $request->get('email');
        $sinh_vien->mat_khau            = $request->get('mat_khau');
        $sinh_vien->ten_sinh_vien       = $request->get('ten_sinh_vien');
        $sinh_vien->ho_sinh_vien        = $request->get('ho_sinh_vien');
        $sinh_vien->ngay_sinh           = $request->get('ngay_sinh');
        $sinh_vien->dia_chi             = $request->get('dia_chi');
        $sinh_vien->so_dien_thoai       = $request->get('so_dien_thoai');
        $sinh_vien->gioi_tinh           = $request->get('gioi_tinh');
        $sinh_vien->ma_lop              = $request->get('ma_lop');
        $sinh_vien->thoi_gian_nhap_hoc  = $request->get('thoi_gian_nhap_hoc');
        $sinh_vien->save();

        return redirect()->route('sinh_vien.index'); 
    }
}

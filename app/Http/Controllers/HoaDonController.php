<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HoaDon;

class HoaDonController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('hoa_don.create');
    }


    public function store(Request $request)
    {
        $hoa_don                      = new HoaDon();
        $hoa_don->ma_sinh_vien        = $request->get('ma_sinh_vien');
        $hoa_don->thang_hoc_phi       = $request->get('thang_hoc_phi');
        $hoa_don->nam_hoc_phi         = $request->get('nam_hoc_phi');
        $hoa_don->so_tien_dong        = $request->get('so_tien_dong');
        $hoa_don->ma_ke_toan          = $request->get('ma_ke_toan');
        $hoa_don->save();

        return redirect()->route('hoa_don.create');
    }
}

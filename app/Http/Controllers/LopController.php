<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Lop;

use App\Models\Khoa;

class LopController extends Controller
{

    public function index(Request $request)
    {
        $ten_lop   = $request->get('ten_lop');
        $ten_khoa = $request->get('ten_khoa');
        $array_khoa = Khoa::where('ten_khoa', 'like', "%$ten_khoa%");
        $array_lop = Lop::where('ten_lop', 'like', "%$ten_lop%")
            ->join('khoa', 'khoa.ma_khoa', 'lop.ma_khoa')
            ->join('chuong_trinh_dao_tao', 'chuong_trinh_dao_tao.ma_nganh', 'lop.ma_nganh')
            ->paginate(10);
        $title = 'Xem tất cả Lớp';
        return view('lop.index', compact('array_lop', 'array_khoa', 'ten_lop', 'ten_khoa', 'title'));
    }


    public function create()
    {
        return view('lop.create');
    }


    public function store(Request $request)
    {
        $lop            = new Lop();
        $lop->ma_lop    = $request->get('ma_lop');
        $lop->ten_lop   = $request->get('ten_lop');
        $lop->ma_khoa   = $request->get('ma_khoa');
        $lop->ma_nganh  = $request->get('ma_nganh');
        $lop->save();

        return redirect()->route('lop.index');
    }


    public function show(Lop $lop)
    {
        //
    }


    public function edit($id)
    {
        $lop = Lop::where('ma_lop', $id)->first();
        return view('lop.edit', compact('lop'));
    }


    public function update(Request $request, $id)
    {
        $lop            = Lop::where('ma_lop', $id)->first();
        $lop->ma_lop    = $request->get('ma_lop');
        $lop->ten_lop   = $request->get('ten_lop');
        $lop->ma_khoa   = $request->get('ma_khoa');
        $lop->ma_nganh  = $request->get('ma_nganh');
        $lop->save();

        return redirect()->route('lop.index');
    }


    public function destroy($id)
    {
        Lop::where('ma_lop', $id)->delete();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChuongTrinhDaoTao;

class ChuongTrinhDaoTaoController extends Controller
{

    public function index(Request $request)
    {
        $ten_nganh   = $request->get('ten_nganh');
        $array_chuong_trinh_dao_tao = ChuongTrinhDaoTao::where('ten_nganh', 'like', "%$ten_nganh%")->paginate(10);
        return view('chuong_trinh_dao_tao.index', compact('array_chuong_trinh_dao_tao', 'ten_nganh'));
    }


    public function create()
    {
        return view('chuong_trinh_dao_tao.create');
    }


    public function store(Request $request)
    {
        $chuong_trinh_dao_tao                       = new ChuongTrinhDaoTao();
        $chuong_trinh_dao_tao->ma_nganh             = $request->get('ma_nganh');
        $chuong_trinh_dao_tao->ten_nganh            = $request->get('ten_nganh');
        $chuong_trinh_dao_tao->hoc_phi_theo_thang   = $request->get('hoc_phi_theo_thang');
        $chuong_trinh_dao_tao->save();

        return redirect()->route('chuong_trinh_dao_tao.index');
    }


    public function show(ChuongTrinhDaoTao $chuongTrinhDaoTao)
    {
        return view('chuong_trinh_dao_tao.show');
    }


    public function edit($id)
    {
        $chuong_trinh_dao_tao = ChuongTrinhDaoTao::where('ma_nganh', $id)->first();
        return view('chuong_trinh_dao_tao.edit', compact('chuong_trinh_dao_tao'));
    }


    public function update(Request $request, $id)
    {
        $chuong_trinh_dao_tao                       = ChuongTrinhDaoTao::where('ma_nganh', $id)->first();

        $chuong_trinh_dao_tao->ten_nganh            = $request->get('ten_nganh');
        $chuong_trinh_dao_tao->hoc_phi_theo_thang   = $request->get('hoc_phi_theo_thang');
        $chuong_trinh_dao_tao->save();

        return redirect()->route('chuong_trinh_dao_tao.index');
    }


    public function destroy($id)
    {
        ChuongTrinhDaoTao::where('ma_nganh', $id)->delete();
    }
}

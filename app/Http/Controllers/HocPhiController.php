<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HocPhiController extends Controller
{

    // public function index()
    // {
    //     return view('hoc_phi.index');
    // }


    public function getHocPhi()
    {
        try {
            $array = DB::select(DB::raw('SELECT *,
            CASE
                WHEN (tb1.da_dong - tb1.tong_tien_dong) = 0 THEN "Hoàn Thành"
                WHEN (tb1.da_dong - tb1.tong_tien_dong) > 0 THEN "Thừa"
                ELSE "Còn nợ"
            END as tinh_trang,
            (tb1.da_dong - tb1.tong_tien_dong) as tien,
            ROUND((tb1.da_dong - tb1.tong_tien_dong)/tb1.hoc_phi_theo_thang,1) as thang
            FROM
            (
            SELECT
            `sinh_vien`.`ma_sinh_vien`, CONCAT(`ten_sinh_vien`) as name,lop.`ma_lop`, 
            TIMESTAMPDIFF(MONTH, thoi_gian_nhap_hoc, CURDATE()) as so_thang,
            (TIMESTAMPDIFF(MONTH, thoi_gian_nhap_hoc, CURDATE()))*chuong_trinh_dao_tao.hoc_phi_theo_thang as tong_tien_dong,
            lop.ma_khoa,lop.ma_nganh,
            chuong_trinh_dao_tao.hoc_phi_theo_thang,
            CASE
                WHEN hd.da_dong IS NULL THEN 0
                ELSE hd.da_dong
            END as da_dong
            FROM `sinh_vien`
            INNER JOIN lop ON
            lop.ma_lop =sinh_vien.ma_lop
            INNER JOIN chuong_trinh_dao_tao ON
            chuong_trinh_dao_tao.ma_nganh = lop.ma_nganh
            LEFT JOIN (
            SELECT hoa_don.ma_sinh_vien,SUM(hoa_don.so_tien_dong) as da_dong 
            FROM `hoa_don`
            GROUP BY hoa_don.ma_sinh_vien
            ) as hd ON
            hd.ma_sinh_vien = sinh_vien.ma_sinh_vien
            ) as tb1'));
            // dd($array);
            return view('hoc_phi.index', ['arr_sinh_vien' => $array]);
        } catch (\Exception $e) {
            dd($e);
        }
    }
}

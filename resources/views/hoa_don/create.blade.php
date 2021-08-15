@extends('layout.master')


@section('content')

<form action="{{ route('hoa_don.store') }}" method="post">
    {{csrf_field()}}
    Mã sinh viên <input type="number" name="ma_sinh_vien" class="form-control">
    <br>
    Tháng học phí <input type="number" name="thang_hoc_phi" class="form-control" value="<?php echo date("m") ?>">
    <br>
    Năm học phí <input type="number" name="nam_hoc_phi" class="form-control" value="<?php echo date("Y") ?>">
    <br>
    Số tiền đóng <input type="number" name="so_tien_dong" class="form-control" >
    <br>
    Ngày đóng <input type="date" name="ngay_dong" class="form-control" value="<?php echo date("Y-m-d") ?>" disabled>
    <br>
    Mã kế toán thu <input type="number" name="ma_ke_toan" class="form-control" value="1">

    <br>
    <button class="btn btn-primary">Xử lý</button>
</form>

@endsection
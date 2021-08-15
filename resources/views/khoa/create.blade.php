@extends('layout.master')


@section('content')
<style type="text/css">
.span_error{
    color: red;
}
</style>
<form action="{{ route('khoa.store') }}" method="post">
    {{csrf_field()}}
    <!-- Mã khóa <input type="text" name="ma_khoa"> -->
    <!-- <br> -->
    Tên khóa <input type="text" name="ten_khoa" class="form-control">
    @if ($errors->first('ten_khoa'))
    <span class="span_error">{{ $errors->first('ten_khoa') }} </span>
    @endif
    <br>
    Thời gian bắt đầu <input type="date" name="thoi_gian_bat_dau" class="form-control" value="<?php echo date("Y-m-d") ?>">
    <br>
    <!-- Thời gian kết thúc <input type="date" name="thoi_gian_ ket_thuc" class="form-control">

    <br> -->
    <button class="btn btn-primary">Thêm</button>
</form>

@endsection
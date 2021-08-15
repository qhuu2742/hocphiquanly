@extends('layout.master')


@section('content')
<style type="text/css">
.span_error{
    color: red;
}
</style>
<form action="{{ route('khoa.update',['id'=> $khoa->ma_khoa]) }}" method="post">
    <input type="hidden" name="_method" value="PUT" class="form-control">
    {{csrf_field()}}
    Mã khóa <input type="text" name="ma_khoa" class="form-control">
    @if ($errors->first('ma_khoa'))
    <span class="span_error">{{ $errors->first('ma_khoa') }} </span>
    @endif
    <br>
    Tên khóa <input type="text" name="ten_khoa" class="form-control">
    @if ($errors->first('ten_khoa'))
    <span class="span_error">{{ $errors->first('ten_khoa') }} </span>
    @endif
    <br>
    Thời gian bắt đầu <input type="date" name="thoi_gian_bat_dau" class="form-control" value="<?php echo date("Y-m-d") ?>">
    <br>
    
    <button class="btn btn-primary">Sửa</button>
</form>
@endsection
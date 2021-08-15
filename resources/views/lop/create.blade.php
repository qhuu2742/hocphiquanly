@extends('layout.master')


@section('content')
<form action="{{ route('lop.store') }}" method="post">
    {{csrf_field()}}
    <!-- Mã khóa <input type="text" name="ma_khoa"> -->
    <!-- <br> -->
    Tên lớp <input type="text" name="ten_lop" class="form-control">
    <br>
    Mã khóa <input type="text" name="ma_khoa" class="form-control">
    <br>
    Mã ngành <input type="text" name="ma_nganh" class="form-control">
    <br>    

    <button class="btn btn-primary">Thêm</button>
</form>
@endsection
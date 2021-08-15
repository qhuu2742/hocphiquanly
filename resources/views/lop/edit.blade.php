@extends('layout.master')


@section('content')
<form action="{{ route('lop.update',['id'=> $lop->ma_lop]) }}" method="post">
    <input type="hidden" name="_method" value="PUT" class="form-control">
    {{csrf_field()}}
    Mã lớp <input type="text" name="ma_lop" class="form-control">
    <br>
    Tên lớp <input type="text" name="ten_lop" class="form-control">
    <br>
    Mã khóa <input type="text" name="ma_khoa" class="form-control">
    <br>
    Mã ngành <input type="text" name="ma_nganh" class="form-control">

    <br>
    <button class="btn btn-primary">Sửa</button>
</form>
@endsection
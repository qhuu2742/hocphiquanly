@extends('layout.master')


@section('content')
<form action="{{ route('chuong_trinh_dao_tao.store') }}" method="post">
    {{csrf_field()}}
   
    Tên ngành <input type="text" name="ten_nganh" class="form-control">
    <br>
    Học phí theo tháng <input type="text" name="hoc_phi_theo_thang" class="form-control">
    <br>
    <button class="btn btn-primary">Thêm</button>
</form>
@endsection
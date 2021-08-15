@extends('layout.master')


@section('content')
<caption>
	<form>
		Tìm kiếm <input type="search" name="ten_sinh_vien" value="{{$ten_sinh_vien}}" class="form-control form-control-navbar">
	</form>
</caption>
<br>
<a href="{{route('sinh_vien.create')}}" class="btn btn-primary">
	Thêm
</a>
<table class="table table-hover">

	<tr>
		<th>Mã sinh viên</th>
		<th>Email</th>
		<th>Tên sinh viên</th>
		<th>Ngày sinh</th>
		<th>Địa chỉ</th>
		<th>Số điện thoại</th>
		<th>Giới tính</th>
		<th>Lớp</th>
		<th>Ngày nhập học</th>


		<th>Xem</th>
		<th>Sửa</th>

	</tr>
	@foreach ($array_sinh_vien as $sinh_vien)
	<tr>
		<td>
			{{$sinh_vien->ma_sinh_vien}}
		</td>

		<td>
			{{$sinh_vien->email}}
		</td>

		<td>
			{{$sinh_vien->ten_day_du()}}
		</td>

		<td>
			{{$sinh_vien->ngay_sinh}}
		</td>

		<td>
			{{$sinh_vien->dia_chi}}
		</td>

		<td>
			{{$sinh_vien->so_dien_thoai}}
		</td>

		<td>
			{{$sinh_vien->get_gioi_tinh()}}
		</td>

		<td>
			{{$sinh_vien->ten_lop}}
		</td>

		<td>
			{{$sinh_vien->thoi_gian_nhap_hoc}}
		</td>



		<td>
			<a href="{{ route('sinh_vien.show',['id' => $sinh_vien->ma_sinh_vien ]) }}" class="btn btn-primary">
				Xem
			</a>
		</td>

		<td>
			<a href="{{ route('sinh_vien.edit',['id' => $sinh_vien->ma_sinh_vien ]) }}" class="btn btn-primary">
				Sửa
			</a>
		</td>


	</tr>
	@endforeach

</table>
{{ $array_sinh_vien->links() }}
@endsection
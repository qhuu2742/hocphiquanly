@extends('layout.master')


@section('content')
<caption>
		<form>
			Tìm kiếm <input type="search" name="ten_khoa" value="{{$ten_khoa}}" class="form-control form-control-navbar">
		</form>
	</caption>
	<br>
<a href="{{route('khoa.create')}}" class="btn btn-primary">
	Thêm
</a>

<br>

<table class="table table-hover">
	
	<tr>
		<th>Mã khóa</th>
		<th>Tên khóa</th>
		<th>Thời gian bắt đầu</th>
		<!-- <th>Thời gian kết thúc</th> -->

		<th>Xem</th>
		<th>Sửa</th>
		<!-- <th>Xóa</th> -->
	</tr>

	@foreach ($array_khoa as $khoa)
	<tr>
		<td>
			{{$khoa->ma_khoa}}
		</td>

		<td>
			{{$khoa->ten_khoa}}
		</td>

		<td>
			{{$khoa->thoi_gian_bat_dau}}
		</td>

		<!-- <td>
			{{$khoa->thoi_gian_ket_thuc}}
		</td> -->



		<td>
			<a href="{{ route('khoa.show',['id' => $khoa->ma_khoa ]) }}" class="btn btn-primary">
				Xem
			</a>
		</td>

		<td>
			<a href="{{ route('khoa.edit',['id' => $khoa->ma_khoa ]) }}" class="btn btn-primary">
				Sửa
			</a>
		</td>

		<!-- <td>
			<form action="{{ route('khoa.destroy',['id' => $khoa->ma_khoa ]) }}" method="post">
				<input type="submit" value="Xóa" class="btn btn-primary">
				<input type="hidden" name="_method" value="delete">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
		</td> -->
	</tr>
	@endforeach

</table>
{{ $array_khoa->links() }}
@endsection
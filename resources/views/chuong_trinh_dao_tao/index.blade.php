@extends('layout.master')


@section('content')
<caption>
	<nav>
		<form>
			Tìm kiếm <input type="search" name="ten_nganh" value="{{$ten_nganh}}" class="form-control form-control-navbar">

		</form>
	</nav>
</caption>
<br>
<a href="{{route('chuong_trinh_dao_tao.create')}}" class="btn btn-primary">
	Thêm
</a>
<table class="table table-hover">


	<tr>
		<th>Mã ngành</th>
		<th>Tên ngành</th>
		<th>Học phí theo tháng</th>


		<th>Xem</th>
		<th>Sửa</th>
		<!-- <th>Xóa</th> -->
	</tr>


	@foreach ($array_chuong_trinh_dao_tao as $chuong_trinh_dao_tao)

	<tr>
		<td>
			{{$chuong_trinh_dao_tao->ma_nganh}}
		</td>

		<td>
			{{$chuong_trinh_dao_tao->ten_nganh}}
		</td>

		<td>
			{{number_format($chuong_trinh_dao_tao->hoc_phi_theo_thang)}} VNĐ

		</td>




		<td>
			<a href="{{ route('chuong_trinh_dao_tao.show',['id' => $chuong_trinh_dao_tao->ma_nganh ]) }}" class="btn btn-primary">
				Xem
			</a>
		</td>

		<td>
			<a href="{{ route('chuong_trinh_dao_tao.edit',['id' => $chuong_trinh_dao_tao->ma_nganh ]) }}" class="btn btn-primary">
				Sửa
			</a>
		</td>

		<!-- <td>
			<form action="{{ route('chuong_trinh_dao_tao.destroy',['id' => $chuong_trinh_dao_tao->ma_nganh ]) }}" method="post">
				<input type="submit" value="Xóa" class="btn btn-primary">
				<input type="hidden" name="_method" value="delete">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</form>
		</td> -->
	</tr>

	@endforeach


</table>

{{ $array_chuong_trinh_dao_tao->links() }}
@endsection
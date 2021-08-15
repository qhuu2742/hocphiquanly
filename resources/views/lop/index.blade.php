@extends('layout.master')


@section('content')
<caption>
    <form>
        Tìm kiếm <input type="search" name="ten_lop" value="{{$ten_lop}}" class="form-control form-control-navbar">
    </form>
</caption>
<br>
<a href="{{route('lop.create')}}" class="btn btn-primary">
    Thêm
</a>

<table class="table table-hover">
    <tr>
        <th>Mã lớp</th>
        <th>Tên lớp</th>
        <th>Khóa</th>
        <th>Chuyên ngành</th>

        <th>Xem</th>
        <th>Sửa</th>
        <!-- <th>Xóa</th> -->
    </tr>

    @foreach ($array_lop as $lop)
    <tr>
        <td>
            {{$lop->ma_lop}}
        </td>

        <td>
            {{$lop->ten_lop}}
        </td>

        <td>
            {{$lop->ten_khoa}}
        </td>

        <td>
            {{$lop->ten_nganh}}
        </td>

        <td>
            <a href="{{ route('lop.show',['id' => $lop->ma_lop ]) }}" class="btn btn-primary">Xem</a>
        </td>

        <td>
            <a href="{{ route('lop.edit',['id' => $lop->ma_lop ]) }}" class="btn btn-primary">Sửa</a>
        </td>

        <!-- <td>
            <form action="{{ route('lop.destroy',['id' => $lop->ma_lop ]) }}" method="post">
                <input type="submit" value="Xóa" class="btn btn-primary">
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </td> -->
    </tr>
    @endforeach

</table>
{{ $array_lop->links() }}
@endsection
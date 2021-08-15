 @extends('layout.master')


 @section('content')
 <table class="table table-hover">

     <tr>
         <th>Mã sinh viên</th>
         <th>Tên</th>
         <!-- <th>Mã lớp</th>
         <th>Số tháng đã học</th> -->
         <th>tổng tiền phải đóng</th>
         <!-- <th>Mã khóa</th>
             <th>Mã Ngành</th> -->
         <th>Học phí theo tháng</th>
         <th>Số tiền đã đóng</th>
         <th>Tình trạng</th>
         <th>Nợ/Thừa tháng</th>
         <th>Thành tiền</th>


     </tr>


     @foreach ($arr_sinh_vien as $each)

     <tr>

         <td>
             {{$each->ma_sinh_vien}}
         </td>

         <td>
             {{$each->name}}
         </td>

         <!-- <td>
             {{$each->ma_lop}}
         </td>

         <td>
             {{$each->so_thang}}
         </td> -->

         <td>
             {{number_format($each->tong_tien_dong)}} VNĐ
         </td>

         <!-- <td>
             {{$each->ma_khoa}}
         </td>

         <td>
             {{$each->ma_nganh}}
         </td> -->

         <td>
             {{number_format($each->hoc_phi_theo_thang)}} VNĐ
         </td>

         <td>
             {{number_format($each->da_dong)}} VNĐ
         </td>

         <td>
             {{$each->tinh_trang}}
         </td>

         <td>
             {{$each->thang}}
         </td>
         
         <td>
             {{number_format($each->tien)}} VNĐ
         </td>


     </tr>
     @endforeach


 </table>

 <a href="{{route('send_mail')}}" class="btn btn-primary" onclick="myFunction()">
     Send mail
 </a>

 @endsection
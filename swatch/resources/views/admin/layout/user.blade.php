 @extends('admin.layout.master')
 @section('title')
  user
@endsection
 @section('content')
  <section class="content-header">
               <h2 >Danh sách thành viên</h2>
  </section>
  <section class="content">
            <table class="table table-bordered" id="table" >
               <thead>
                  <tr>
                     <th>Mã thành viên</th>
                     <th>Tên thành viên</th>
                     <th>Tài khoản</th>
                     <th>Mật khẩu</th>
                     <th>Địa chỉ</th>
                     <th>Ngày sinh</th>
                     <th>Số điện thoại</th>
                     <th>Giới tính</th>
                     <th>Chức vụ</th>
                     <th>Ảnh đại diện</th>
                     <th>Thao tác</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                    <td>1000</td>
                    <td>Roger</td>
                    <td>Roger</td>
                    <td>$%^&*</td>
                    <td>Ha Noi</td>
                    <td>20-03</td>
                    <td>123</td>
                    <td>Nam</td>
                    <td>admin</td>
                    <td><img src="{{ URL::asset('dist/img/user2-160x160.jpg')}}" style="width: 50px; height: 50px;"></td>
                    <td>
                      <button class="btn btn-success">Vô hiệu hóa</button>
                    </td>
                  </tr>
               </tbody>
            </table>
  </section>
       <script>
       </script>
@endsection
 @extends('admin.layout.master')
 @section('title')
  customer
@endsection
 @section('content')
  <section class="content-header">
               <h2 >Danh sách khách hàng</h2>
  </section>
  <section class="content">
            <table class="table table-bordered" id="table" >
               <thead>
                  <tr>
                     <th>Mã khách hàng</th>
                     <th>Tên khách hàng</th>
                     <th>Địa chỉ</th>
                     <th>Email</th>
                     <th>Số điện thoại</th>
                     <th>Nghề nghiệp</th>
                     <th>Ngày sinh</th>
                     <th>Giới tính</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                    <td>1000</td>
                    <td>Han Nguyen</td>
                    <td>123 Ha Noi</td>
                    <td>abc@gmail.com</td>
                    <td>123</td>
                    <td>Sinh viên</td>
                    <td>02-08-1997</td>
                    <td>Nữ</td>
                  </tr>
               </tbody>
            </table>
  </section>
       <script>
       </script>
@endsection
 @extends('admin.layout.master')
 @section('title')
  comment
@endsection
 @section('content')
  <section class="content-header">
               <h2 >Bình luận</h2>
  </section>
  <section class="content">
            <table class="table table-bordered" id="table" >
               <thead>
                  <tr>
                     <th>Số bình luận</th>
                     <th>Tên Sản phẩm</th>
                     <th>Username</th>
                     <th>Nội dung</th>
                     <th>Trạng thái</th>
                     <th>Ngày bình luận</th>
                     <th>Ngày sửa</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                    <td>1000</td>
                    <td>FACC09B</td>
                    <td>Sam</td>
                    <td>Good</td>
                    <td>Đã xuất bản</td>
                    <td>12-11-2018</td>
                    <td></td>
                  </tr>
               </tbody>
            </table>
  </section>
       <script>
       </script>
@endsection
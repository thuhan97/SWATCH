 @extends('admin.layout.master')
 @section('title')
  order
@endsection
 @section('content')
  <section class="content-header">
               <h2>Danh sách hóa đơn</h2>
  </section>
  <section class="content">
            <table class="table table-bordered" id="table">
               <thead>
                  <tr>
                     <th>Mã hóa đơn</th>
                     <th>Mã khách hàng</th>
                     <th>Tên khách hàng</th>
                     <th>Địa chỉ</th>
                     <th>Số điện thoại</th>
                     <th>Tổng sản phẩm</th>
                     <th>Tổng tiền</th>
                     <th>Trạng thái</th>
                     <th>Xem chi tiết</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                    <td>1000</td>
                    <td>1000</td>
                    <td>Han Nguyen</td>
                    <td>Ha Noi</td>
                    <td>123</td>
                    <td>2</td>
                    <td>12.000.000</td>
                    <td>Giao hàng</td>
                    <td>
                      <button class="btn btn-danger"><a href="/admin/orderDetail/1" style="text-decoration: none; color: #fff;">Xem Chi Tiết</a></button>
                    </td>
                  </tr>
               </tbody>
            </table>
  </section>
       <script>
       </script>
@endsection
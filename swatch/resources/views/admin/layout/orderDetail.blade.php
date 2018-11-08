 @extends('admin.layout.master')
 @section('title')
  order-detail
@endsection
 @section('content')
  <section class="content-header">
               <h2 >Chi tiết hóa đơn </h2>
  </section>
  <section class="content">
            <h5><span>Mã hóa đơn: </span> </h5>
            <h5><span>Mã Khách hàng: </span> </h5>
            <h5><span>Tên Khách hàng: </span> </h5>
            <h5><span>Địa chỉ nhận: </span> </h5>
            <h5><span>Số điện thoại: </span> </h5>
            <table class="table table-bordered" id="table" >
               <thead>
                  <tr>
                     <th>Mã sản phẩm</th>
                     <th>Tên sản phẩm</th>
                     <th>Số lượng</th>
                     <th>Đơn giá</th>
                     <th>Thành tiền</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                    <td>1000</td>
                    <td>FAABC09F</td>
                    <td>2</td>
                    <td>6.170.000 đ</td>
                    <td>12.340.000 đ</td>
                  </tr>
               </tbody>
            </table>
           <h5 class="pull-right" style="margin-right: 30px;">Tổng tiền:<span style="color: red; font-size: 20px;">    12.340.000 đ</span> </h5>         
  </section>
   <table class="pull-left" >
             <tr>
               <td style="padding: 10px;">Tổng tiền hàng</td>
               <td style="padding: 10px;">12.340.000 đ</td>
             </tr>
              <tr>
               <td style="padding: 10px;">Phí giao hàng</td>
               <td style="padding: 10px;">40.000 đ</td>
             </tr>
              <tr>
               <td style="padding: 10px;">Tổng thanh toán</td>
               <td style="padding: 10px; color: red;
               font-size: 20px;" >12.380.000 đ</td>
             </tr>
           </table>
       <script>
       </script>
@endsection
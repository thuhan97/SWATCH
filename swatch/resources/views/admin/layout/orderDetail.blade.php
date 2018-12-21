 @extends('admin.layout.master')
 @section('title')
  order-detail
@endsection
 @section('content')
  <section class="content-header">
               <h2 >Chi tiết hóa đơn </h2>
  </section>
  <section class="content">
    <table class="table "  style="width: 200px;">
      <tr>
        <td>Mã hóa đơn:</td>
        <td><strong> {{$order->id}}</strong></td>
      </tr>
      <tr>
        <td>Mã Khách hàng:</td>
        <td><strong> {{$order->customer_id}}</strong></td>
      </tr>
      <tr>
        <td>Tên Khách hàng:</td>
        <td><strong> {{$order->customer->name}}</strong></td>
      </tr>
      <tr>
        <td>Địa chỉ nhận:</td>
        <td><strong> {{$order->customer->address}}</strong></td>
      </tr>
      <tr>
        <td>Số điện thoại</td>
        <td><strong> {{$order->customer->phone}}</strong></td>
      </tr>
    </table>

            <table class="table table-bordered" id="table" >
               <thead>
                  <tr style="background-color: #ccc;">
                     <th>Mã sản phẩm</th>
                     <th>Tên sản phẩm</th>
                     <th>Số lượng</th>
                     <th>Đơn giá</th>
                     <th>Thành tiền</th>
                  </tr>
               </thead>
               <tbody>
                <script>
                    console.log(<?php echo  $order->orderDetail;?>);
                  </script>
                @foreach($order->orderDetail as $row)
                  
                  <tr>
                    <td>{{$row->product->id}}</td>
                    <td>{{$row->product->name}}</td>
                    <td>{{$row->quantity}}</td>
                    <td>{{number_format($row->unit_price)}} đ</td>
                    <td>{{number_format(($row->quantity)*($row->unit_price))}} đ</td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
           <h5 class="pull-right" style="margin-right: 30px;">Tổng tiền:<span style="color: red; font-size: 20px;">   {{$order->total_price}} đ</span> </h5>         
  </section>
   <table class="pull-left" >
             <tr>
               <td style="padding: 10px;">Tổng tiền hàng</td>
               <td style="padding: 10px;"> {{number_format($order->total_price)}} đ</td>
             </tr>
              <tr>
               <td style="padding: 10px;">Tổng thanh toán</td>
               <td style="padding: 10px; color: red;
               font-size: 20px;" > {{number_format($order->total_price)}} đ</td>
             </tr>
           </table>
       <script>
       </script>
@endsection
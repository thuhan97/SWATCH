 @extends('admin.layout.master')
 @section('title')
  order
@endsection
 @section('content')
  <section class="content-header">
               <h2>Danh sách hóa đơn</h2>
  </section>
  <section class="content">
            <table class="table table-bordered table-hover table-striped" id="table">
               <thead>
                  <tr style="background: gainsboro; ">
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
                @foreach($order as $row)
                  <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->customer_id}}</td>
                    <td>{{$row->customer->name}}</td>
                    <td>{{$row->customer->address}}</td>
                    <td>{{$row->customer->phone}}</td>
                    <td>{{$row->total_quantity}}</td>
                    <td>{{number_format($row->total_price)}} đ</td>
                    <td>
                      <select class="status" id="{{$row->id}}" >
                        <option value="1" <?php if($row->status==1){?> selected="selected" <?php }?>>Đặt hàng</option>
                        <option value="2" <?php if($row->status==2){?> selected="selected" <?php }?>>Giao hàng</option>
                        <option value="3" <?php if($row->status==3){?> selected="selected" <?php }?>>Hủy đơn</option>
                        <option value="4" <?php if($row->status==4){?> selected="selected" <?php }?>>Thành công</option>
                      </select>
                    </td>
                    <td>
                      <button class="btn btn-success"><a href="/admin/orderDetail/{{$row->id}}" style="text-decoration: none; color: #fff;">Xem Chi Tiết</a></button>
                    </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
  </section>
       <script>
        $('#table').DataTable();
        $('.status').on('change keyup',function() {
            var id=$(this).attr('id');
            var data={
            _token: '{!! csrf_token() !!}',
            'id': $(this).attr('id'),
            'status': $(this).val()
            };
            $.ajax({
              url:'/admin/order/update/'+id,
              type:"post",
              data:data,
              success:function(data){
                  console.log(data);
                  location.reload();
              }
            });
        })
       </script>
@endsection
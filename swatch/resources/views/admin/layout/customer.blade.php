 @extends('admin.layout.master')
 @section('title')
  customer
@endsection
 @section('content')
  <section class="content-header">
               <h2 >Danh sách khách hàng</h2>
  </section>
  <section class="content">
            <table class="table table-bordered table-hover table-striped" id="table" >
               <thead >
                  <tr style="background:gainsboro;  ">
                     <th>Mã khách hàng</th>
                     <th>Tên khách hàng</th>
                     <th>Địa chỉ</th>
                     <th>Email</th>
                     <th>Số điện thoại</th>
                     <th>Giới tính</th>
                     <th>Xóa</th>
                  </tr>
               </thead>
               <tbody>
                @foreach($customer as $row)
                  <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->address}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->phone}}</td>
                    <td>{{($row->gender==0)? "Nam" : "Nữ"}}</td>
                    <td><a href="" class="delete_customer" id="{{$row->id}}"><button class="btn btn-danger">Xóa</button></a></td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
  </section>
       <script>
        $('#table').DataTable();
          $('.delete_customer').click(function(){
            if (!confirm("Do you want to delete")){
             return false;
            }
            id=$(this).attr('id');
            $.ajax({
              type:"get",
              url:"/admin/customers/delete/"+id,
              data:id,
              success:function(data){
                console.log(data);
                location.reload();
                },
            });
          });
       </script>
@endsection
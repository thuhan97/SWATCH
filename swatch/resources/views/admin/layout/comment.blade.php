 @extends('admin.layout.master')
 @section('title')
  comment
@endsection
 @section('content')
  <section class="content-header">
               <h2 >Bình luận</h2>
  </section>
  <section class="content">
            <table class="table table-bordered table-hover table-striped" id="table" >
               <thead>
                  <tr style="background: gainsboro;">
                     <th>Số bình luận</th>
                     <th>Tên Sản phẩm</th>
                     <th>Tên khách hàng</th>
                     <th>Nội dung</th>
                     <th>Ngày bình luận</th>
                     <th>Ngày sửa</th>
                     <th>Xóa</th>
                  </tr>
               </thead>
               <tbody>
                @foreach($comment as $row)
                  <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->product->name}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->content}}</td>
                    <td>{{$row->created_at}}</td>
                    <td>{{$row->updated_at}}</td>
                    <td><a href="" class="delete_comment" id="{{$row->id}}"><button class="btn btn-danger" >Xóa</button></a></td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
  </section>
       <script>
        $('#table').DataTable();
        $('.delete_comment').on('click',function(event){
          //event.preventDefault();
          if(!confirm("Bạn có chắc chắn muốn xóa bình luận này? ")){
            return false;
          }
          id= $(this).attr('id');
          $.ajax({
            type:"get",
            url:'/swatch/comment/delete/'+id,
            data:id,
            success:function(data){
              console.log(data);
              location.reload();
            }
            
          });

        });
       </script>
@endsection
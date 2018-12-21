 @extends('admin.layout.master')
 @section('title')
  sale
@endsection
 @section('content')
  <section class="content-header">
               <h2 >Chương trình giảm giá</h2>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="add_sale">Thêm chương trình giảm giá </button>
  </section>
  <section class="content">
            <table class="table table-bordered table-hover" id="table" >
               <thead>
                  <tr style="background: gainsboro;">
                     <th>Id</th>
                     <th>Mã sản phẩm</th>
                     <th>Giá cũ</th>
                     <th>Giá khuyến mại</th>
                     <th>Ngày bắt đầu</th>
                     <th>Ngày kết thức</th>
                     <th>Thao tác</th>
                  </tr>
               </thead>
               <tbody>
              @foreach($sales as $row)
                 <tr>
                     <td>{{$row->id}}</td>
                     <td>{{$row->product_id}}</td>
                     <td>{{number_format($row->product->price)}}</td>
                     <td>{{number_format($row->discount)}}</td>
                     <td>{{$row->start_at}}</td>
                     <td>{{$row->end_at}}</td>
                     <td>
                       <a href=""  data-toggle="modal" data-target="#myModal" class="eidt_sale" id="{{$row->id}}"><button class="btn btn-primary" style="height: 30px; line-height: 10px;">Sửa</button></a>
                       <a href="" class="delete_sale" id="{{$row->id}}" ><button class="btn btn-danger" style="height: 30px;line-height: 10px;">Xóa</button></a>
                     </td>
                  </tr>
                @endforeach
               </tbody>
            </table>
  </section>
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div id="message" class=""></div>
          <form action="#" id="form_insert_sale">
             @csrf
             <input type="hidden" name="id" id="sale_id" value="">
              <div class="form-group">
                <label for="email">Tên sản phẩm</label>
                <select type="text" class="form-control" name="product_id" id="product_id">
                  <option value="">Tên sản phẩm</option>
                  @foreach($products as $row)
                  <option value="{{$row->id}}">{{$row->name}}</option>
                  @endforeach
                </select>
              </div>
               <div class="form-group">
                <label for="email">Giá khuyến mại</label>
                <input type="text" class="form-control" name="discount" id="discount">
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="email">Ngày bắt đầu</label>
                      <input type="date" name="start_at" id="start_at">
                    </div>
                </div>
                 <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="email">Ngày kết thúc</label>
                      <input type="date" name="end_at" id="end_at">
                    </div>
                </div>
              </div>
          
        </div>  
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary pull-left">Lưu</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
        </div>
       </form> 
      </div>
    </div>
  </div>
      
       <script>
       $(document).ready(function() {
          $('#table').DataTable();
        });

       $('#add_sale').click(function(){
          $('.modal-title').text("Thêm chương trình giảm giá");
          $('#sale_id').val('');
          $('#product_id').val('');
          $('#discount').val('');
          $('#start_at').val('');
          $('#end_at').val('');
       });

       $('.eidt_sale').click(function(){
          $('.modal-title').text("Sửa chương trình giảm giá");
          var id=$(this).attr('id');
          var url='/admin/sales/'+id;
          $.ajax({
            type:'get',
            url:url,
            data:id,
            dataType: "JSON",
            success:function(data){
                console.log(data);
                $('#sale_id').val(JSON.parse(data.id));
                $('#product_id').val(JSON.parse(data.product_id));
                $('#discount').val(JSON.parse(data.discount));
                $('#start_at').val(data.start_at);
                $('#end_at').val(data.end_at);
            }
          });
         
       });

       $('#form_insert_sale').on('submit',function(event){
          event.preventDefault();
          id=$('#sale_id').val();
          if(id==''){
            url= '/admin/sales/create';
          }
          else{
            url='/admin/sales/update/'+id;
          }
          $.ajax({
            type:"post",
            url:url,
            data:$('#form_insert_sale').serialize(),
            dataType:"JSON",
            success:function(data){
                console.log(data);
                if(data.message){
                  $('#message').css('display','block');
                  $('#message').attr('class',data.class_name);
                  console.log(data.message);
                  $('#message').html(data.message);
                  return false;
                }
                location.reload();
            },
            error: function(){
              console.log('error');
            }
          });
        });

          $('.delete_sale').click(function(){
            if (!confirm("Do you want to delete")){
             return false;
            }
            id=$(this).attr('id');
            $.ajax({
              type:"get",
              url:"/admin/sales/delete/"+id,
              data:id,
              success:function(data){
                console.log(data);
                location.reload();
                },
            });
          });
       </script>
@endsection
@extends('admin.layout.master')
@section('title')
  product
@endsection
 @section('content')
  <section class="content-header">
               <h2 >Danh sách sản phẩm</h2>
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="add_product">
   Thêm sản phẩm
  </button>
  </section>
  <section class="content">
            <table class="table table-bordered table-hover table-striped" id="table" >
               <thead>
                  <tr style="background: gainsboro; ">
                     <th>Mã sản phẩm</th>
                     <th>Tên sản phẩm</th>
                     <th>Ảnh minh họa</th>
                     <th>Giá sản phẩm</th>
                     <th>Thương hiệu</th>
                     <th>Giới tính</th>
                     <th>Bảo hành</th>
                     <th>Mô tả</th>
                     <th>Trạng thái</th>
                     <th>Đặc biệt</th>
                     <th>Thao tác</th>
                  </tr>
               </thead>
               <tbody>
                @foreach($products as $row)
                  <tr>
                    <td><span class="infor-product">{{$row->id}}</span></td>
                    <td><span class="infor-product">{{$row->name}}</span></td>
                    <td><span class="infor-product"><img src="{{URL::asset('dist/img/product/'.$row->image)}}" style="width: 50px;height: 50px;"></span></td>
                    <td><span class="infor-product">{{number_format($row->price)}}</span></td>
                    <td><span class="infor-product">{{$row->brand->name}}</span></td>
                    <td><span class="infor-product">
                      <?php if($row->gender=='dong-ho-nam') echo 'Đồng hồ nam'; 
                            elseif ($row->gender=='dong-ho-nu') {
                              echo 'Đồng hồ nữ';
                            }
                            else echo 'Đồng hồ đôi';
                     ?>
                   </span></td>
                    <td><span class="infor-product">{{$row->guarantee}}</span></td>
                    <td><span class="infor-product">{{$row->description}}</span></td>
                    <td><span class="infor-product">{{($row->status==1)? "Còn hàng" :"Hết hàng"}}</span></td>
                    <td><span class="infor-product">{{($row->special==1)? "Sản phẩm đặc biệt": ""}}</span></td>
                    <td><span class="infor-product">
                      <a class="edit_product" data-toggle="modal"  id="{{$row->id}}" data-target="#myModal"> <i class="fa fa-edit"></i></a>
                      <a id="{{$row->id}}" class="delete_product" > <i class="fa fa-trash"></i></a>
                    </span></td>
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
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div id="message_product" class=""></div>
         <!-- Modal body.. -->
         <form action="" method="post" class="form" role="form" enctype="multipart/form-data" id="form_insert_product"> 
           @csrf
           <input type="hidden" name="id" value="" id="id_product">
            <div class="row"> 
              <div class="col-xs-6 col-md-6"> 
                 <div class="form-group">
                <label for="email">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" value="" id="name_product">
          </div>
              </div> 
              <div class="col-xs-6 col-md-6"> 
                 <div class="form-group">
                <label for="email">Giá</label>
                <input type="text" class="form-control" name="price" value="" id="price_product">
          </div>
              </div> 
          </div>   
           <div class="row"> 
              <div class="col-xs-6 col-md-6"> 
                 <div class="form-group">
                <label for="email">Kích thước</label>
                <input type="text" class="form-control" name="size" value="" id="size">
          </div>
              </div> 
              <div class="col-xs-6 col-md-6"> 
                 <div class="form-group">
                <label for="email">Áp lực nước</label>
                <input type="text" class="form-control" name="presure" value="" id="presure">
              </div>
          </div> 
          </div> 
          <div class="row"> 
              <div class="col-xs-6 col-md-6"> 
                 <div class="form-group">
                <label for="email">Bảo hành</label>
                <input type="text" class="form-control" name="guarantee" value="" id="guarantee">
          </div>
              </div> 
              <div class="col-xs-6 col-md-6"> 
                 <div class="form-group">
                <label for="email">Ảnh minh họa</label>
                <input type="file"  name="image" value="" id="image_product">
              </div>
          </div> 
          </div> 
          <div class="row"> 
           <div class="col-xs-6 col-md-6"> 
              <select class="form-control" id="gender" name="gender">              
                <option value="">Giới tính</option> 
                <option value="dong-ho-nam">Đồng hồ nam</option> 
                <option value="dong-ho-nu">Đồng hồ nữ</option> 
                <option value="dong-ho-doi">Đồng hồ đôi</option>            
              </select> 
           </div> 
           <div class="col-xs-6 col-md-6"> 
              <select class="form-control" id="brand_id" name="brand_id">              
                  <option value="">Thương hiệu</option>
                  @foreach($brands as $row)
                <option value="{{$row->id}}">{{$row->name}}</option> 
                @endforeach                
              </select> 
           </div> 
            </div> 
             <br> 
          <div class="row"> 
           <div class="col-xs-4 col-md-4"> 
                <div class="form-group">
                <label for="email">Chất liệu vỏ</label>
                <input type="text" class="form-control" name="shell_material" value="" id="shell_material">
          </div>
           </div> 
           <div class="col-xs-4 col-md-4"> 
                <div class="form-group">
                <label for="email">Chất liệu dây</label>
                <input type="text" class="form-control" name="chain_material" value="" id="chain_material">
          </div>
           </div> 
           <div class="col-xs-4 col-md-4"> 
               <div class="form-group">
                <label for="email">Chất liệu kính</label>
                <input type="text" class="form-control" name="glass_material" value="" id="glass_material">
          </div> 
           </div> 
          </div> 
        </br>
           <div class="row">
              <div class="col-xs-6 col-md-6"> 
                <div class="form-group">
                  <label for="email">Mô tả</label>
                  <textarea class="form-control" name="description" id="description" value=""></textarea>
                </div>
              </div> 
              <div class="col-xs-3 col-md-3"> 
                <div class="form-group">
                  <label for="email">Còn hàng</label></br>
                  <input type="checkbox" name="status" value="1" id="status" checked="false">
                </div>
              </div> 
               <div class="col-xs-3 col-md-3"> 
                <div class="form-group">
                  <label for="email">Đặc biệt</label></br>
                  <input type="checkbox" name="special" value="1" id="special" checked="false">
                </div>
              </div> 
            </div>
       
        </div>  
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn  btn-primary pull-left" type="submit" id="insert_product"> Lưu</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
        </div>
       </form> 
      </div>
    </div>
  </div>
  
       <script>
        $(document).ready(function() {
          $('#table').DataTable();
        } );

          // $(document).ready(function() {


          /**
          get value to edit
          */
           $('.edit_product').click(function() {
              $('.modal-title').text("Sửa sản phẩm");
              var id=$(this).attr('id');
              var url = '/admin/products/'+id;
              $.ajax({
                type : 'get',
                url  : url,
                data : {'id':id},
                success:function(data){
                  // $('#id').val(data.id);
                  $('#id_product').val(JSON.parse(data).id);
                  $('#name_product').val(JSON.parse(data).name);
                  $('#size').val(JSON.parse(data).size);
                  $('#price_product').val(JSON.parse(data).price);
                  $('#gender').val(JSON.parse(data).gender);
                  $('#brand_id').val(JSON.parse(data).brand_id);
                  $('#shell_material').val(JSON.parse(data).shell_material);
                  $('#chain_material').val(JSON.parse(data).chain_material);
                  $('#glass_material').val(JSON.parse(data).glass_material);
                  $('#guarantee').val(JSON.parse(data).guarantee);
                  $('#presure').val(JSON.parse(data).presure);
                  $('#description').val(JSON.parse(data).description);
                  if(JSON.parse(data).status==1){
                    console.log(1);
                    $('#status').attr('checked', true);
                  }
                  else{
                     $('#status').attr('checked', false);
                  }
                  if(JSON.parse(data).special==1){
                    $('#special').attr('checked', true);
                  }
                  else{
                   $('#special').attr('checked', false);
                  }
                  // $('#myModal').modal('show');
                  console.log(JSON.parse(data));
                  console.log(JSON.parse(data).name);
                }
              }); 
            });
          // }); 
          $('#add_product').click(function(){
              $('.modal-title').text("Thêm sản phẩm");
              $('#id_product').val('');
              $('#name_product').val('');
              $('#size').val('');
              $('#price_product').val('');
              $('#gender').val('');
              $('#brand_id').val('');
              $('#shell_material').val('');
              $('#chain_material').val('');
              $('#glass_material').val('');
              $('#guarantee').val('');
              $('#presure').val('');
              $('#description').val('');
               $('#status').attr('checked',false);
               $('#special').attr('checked',false);

            });
          /**  
          insert data in database
          */
          $('#form_insert_product').on('submit',function(event){
              event.preventDefault();
              id=$('#id_product').val();
              console.log(id);
              if(id==''){
              var url = '/admin/products/create';
            }
            else{
              var url = '/admin/products/update/'+id;
            }
              $.ajax({
                type:"post",
                url:url,
                data: new FormData(this),
                dataType:"JSON",
                contentType:false,
                cache:false,
                processData:false,
                success:function(data){
                   // //$('#myModal').modal('hide');
                    console.log(data);
                    if(data.message){
                        console.log(data);
                        $('#message_product').css('display','block');
                        $('#message_product').html(data.message);
                        return false;
                      }
                   
                    location.reload(); 
                },
                 error: function() {
                 console.log("error");
                }
              });
            });

          $('.delete_product').click(function(){
            if (!confirm("Do you want to delete")){
             return false;
            }
            id=$(this).attr('id');
            $.ajax({
              type:"get",
              url:"/admin/products/delete/"+id,
              data:id,
              success:function(data){
                console.log(data);
                location.reload();
                },
            });
          });
       </script>
@endsection
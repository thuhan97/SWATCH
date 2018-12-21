 @extends('admin.layout.master')
 @section('title')
  category
@endsection
 @section('content')
  <section class="content-header">
               <h2>Danh mục sản phẩm</h2>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="add_cate" >Thêm danh mục </button></section>
  </section>
  <section class="content">
            <table class="table table-bordered table-hover table-striped" id="table" >
               <thead>
                  <tr style="background: gainsboro; ">
                     <th style="width: 15%;">Số danh mục</th>
                     <th>Tên danh mục</th>
                     <th style="width: 20%;">Thao tác</th>
                  </tr>
               </thead>
               <tbody>
                @foreach($categories as $row)
                <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->name}}</td>
                  <td>
                  <a data-toggle="modal"  id="{{$row->id}}" class="edit_cate" data-target="#myModal" ><p class="btn btn-primary">Cập nhật</p></a>
                  <a id="{{$row->id}}" class="delete_cate" > <p class="btn btn-danger">Xóa</p></a>
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
         <form role="form" method="post" id="form_insert" action="">
        <div class="modal-body">
         
             @csrf
             <input type="hidden" id="id" value="">
              <div class="form-group">
                <label for="email">Tên danh mục</label>
                <input type="text" class="form-control" name="name" id="name" value="">
              </div>
             
        </div>  
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit"  class="btn btn-primary pull-left insert" >Lưu</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal" >Đóng</button>
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
           $('.edit_cate').click(function() {
              $('.modal-title').text("Sửa danh mục");
              var id=$(this).attr('id');
              var url = '/admin/categories/'+id;
              $.ajax({
                type : 'get',
                url  : url,
                data : {'id':id},
                success:function(data){
                  // $('#id').val(data.id);
                  $('#id').val(JSON.parse(data).id);
                  $('#name').val(JSON.parse(data).name);
                  // $('#myModal').modal('show');
                  console.log(JSON.parse(data));
                  console.log(JSON.parse(data).name);
                }
              }); 
            });
          // }); 
          $('#add_cate').click(function(){
               $('.modal-title').text("Thêm danh mục");
               $('#id').val('');
               $('#name').val('');
            });
          /**  
          insert data in database
          */
          $('.insert').click(function(event){
              event.preventDefault();
              name=$('#name').val();
              if(name==''){
                $('#name').after('<span style="color: red;">Name is required.</span>');
                return false;
              }
              id=$('#id').val();
              if(id==''){
              var url = '/admin/categories/create';
            }
            else{
              var url = '/admin/categories/update/'+id;
            }
              $.ajax({
                type:"post",
                url:url,
                data: $("#form_insert").serialize() ,
                success:function(data){
                   // //$('#myModal').modal('hide');
                    console.log(data);
                    location.reload(); 
                },
                 error: function() {
                 console.log("error");
                }
              });
            });

           $('.insert').click(function(event){
              event.preventDefault();
              email=$('#email').val();
              title=$('#email').val();
              content=$('#content').val();
              if(name==''){
                $('#name').after('<span style="color: red;">Name is required.</span>');
                return false;
              }
               if(title==''){
                $('#title').after('<span style="color: red;">Title is required.</span>');
                return false;
              }
               if(title==''){
                $('#title').after('<span style="color: red;">Content is required.</span>');
                return false;
              }

              id=$('#id').val();
            
              var url = '/admin/mail/send/'+id;
            
              $.ajax({
                type:"post",
                url:url,
                data: $("#form_insert").serialize() ,
                success:function(data){
                   // //$('#myModal').modal('hide');
                    console.log(data);
                    location.reload(); 
                },
                 error: function() {
                 console.log("error");
                }
              });
            });

          $('.delete_cate').click(function(){
            if (!confirm("Do you want to delete")){
             return false;
            }
            id=$(this).attr('id');
            $.ajax({
              type:"get",
              url:"/admin/categories/delete/"+id,
              data:id,
              success:function(data){
                console.log(data);
                location.reload();
                },
            });
          });
       </script>
@endsection
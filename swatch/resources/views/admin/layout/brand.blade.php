 @extends('admin.layout.master')
 @section('title')
  brand
@endsection
 @section('content')
  <section class="content-header">
               <h2 >Danh sách thương hiệu</h2>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="add_brand">Thêm thương hiệu </button>
  </section>
  <section class="content">
            <table class="table table-bordered table-hover table-striped" id="table" >
               <thead>
                  <tr style="background:gainsboro;">
                     <th>Số thương hiệu</th>
                     <th>Tên thương hiệu</th>
                     <th>Nguồn gốc</th>
                     <th>Logo</th>
                     <th>Slug</th>
                     <th>Thao tác</th>
                  </tr>
               </thead>
               <tbody>
                @foreach($brands as $row)
                <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->category->name}}</td>
                  <td><img src="{{URL::asset('dist/img/brand/' . $row->image)}}" style="width: 50px;height: 50px;"></td>
                  <td>{{$row->slug}}</td>
                  <td>
                    <a data-toggle="modal"  id="{{$row->id}}" class="edit_brand" data-target="#myModal" > <i class="fa fa-edit"></i></a>
                      <a id="{{$row->id}}" class="delete_brand" > <i class="fa fa-trash"></i></a>
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
          <h4 class="modal-title">Thêm thương hiệu</h4>
          <button type="button" class="close" data-dismiss="modal" >&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div id="message" class=""></div>
          <form  enctype="multipart/form-data" role="form" method="post" id="form_insert_brand" action="">
            @csrf
              <input type="hidden" name="id" id="id_brand" value="">  
              <div class="form-group"> 
                <label for="email">Tên thương hiệu</label>
                <input type="text" class="form-control" name="name" id="name_brand" value="">
              </div>
              <div class="form-group">
                <label for="email">Nguồn gốc</label>
                <select class="form-control" id="category_id" name="category_id">
                  <option value="">Nguồn gốc</option>
                  @foreach($categories as $row)
                  <option value="{{$row->id}}">{{$row->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="email">Logo</label>
                <input type="file"  name="image" id="image_brand" value="" class="form-control">
              </div>  
               <div class="form-group">
                <label for="email">Slug</label>
                <input type="text"  name="slug" id="slug_brand" value="" class="form-control">
              </div>  
              
        </div>  

        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary pull-left" id="insert_brand">Lưu</button>
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
           $('.edit_brand').click(function() {
              $('.modal-title').text("Sửa thương hiệu");
              var id=$(this).attr('id');
              var url = '/admin/brands/'+id;
              $.ajax({
                type : 'get',
                url  : url,
                data : {'id':id},
                success:function(data){
                  // $('#id').val(data.id);
                  console.log(JSON.parse(data));
                  $('#id_brand').val(JSON.parse(data).id);
                  $('#name_brand').val(JSON.parse(data).name);
                  $('#category_id').val(JSON.parse(data).country);
                   $('#slug_brand').val(JSON.parse(data).slug);
                  // $('#myModal').modal('show');
                  
                  console.log(JSON.parse(data).name);
                }
              }); 
            });
          // }); 
          $('#add_brand').click(function(){
               $('.modal-title').text("Thêm thương hệu");
               $('#id_brand').val('');
               $('#name_brand').val('');
               $('#category_id').val('');
               $('#slug_brand').val('');
            });
          /**  
          insert data in database
          */
          $('#form_insert_brand').on('submit',function(event){
              event.preventDefault();
              id = $('#id_brand').val();
              if(id==''){
                var url = '/admin/brands/create';
              }
              else{
                var url = '/admin/brands/update/'+id;
              }
              $.ajax({
                  url: url,
                  type: "post",
                  data: new FormData(this),
                  dataType:'JSON',
                  contentType:false,
                  cache:false,
                  processData:false,
                  success: function (data) {
                      //success
                      if(data.message){
                        $('#message').css('display','block');
                        $('#message').html(data.message);
                        return false;
                      }
                      else {
                      console.log(data);
                      location.reload();
                       }
                  },
                  error: function (e) {
                      //error
                  }
              });
            });

          $('.delete_brand').click(function(){
            if (!confirm("Do you want to delete")){
             return false;
            }
            id=$(this).attr('id');
            $.ajax({
              type:"get",
              url:"/admin/brands/delete/"+id,
              data:id,
              success:function(data){
                console.log(data);
                location.reload();
                },
            });
          });
       </script>
      
@endsection
 @extends('admin.layout.master')
 @section('title')
  user
@endsection
 @section('content')
  <section class="content-header">
               <h2 >Danh sách thành viên</h2>
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="add_user">Thêm thành viên</button>
  </section>
  <section class="content table-reponsive" >
            <table class="table table-hover table-striped " id="table" >
               <thead>
                  <tr style="background: gainsboro;">
                     <th>#</th>
                     <th>Email</th>
                     <th>Tài khoản</th>
                     <th >Mật khẩu</th>
                     <th>Level</th>
                     <th>Ảnh đại diện</th>
                     <th>Thao tác</th>
                  </tr>
               </thead>
               <tbody>
                @foreach($users as $row)
                  <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->username}}</td>
                    <td style="width: 120px; word-wrap:break-word;">{{$row->password}}</td>
                    <td><?php if($row->level==1) echo 'Admin'; else echo "Thành viên"; ?></td>
                    <td><img src="{{ URL::asset('dist/img/user/'.$row->avatar)}}" style="width: 50px; height: 50px;"></td>
                    <td>
                      <button class="btn btn-primary edit_user" data-toggle="modal" data-target="#myModal" id="{{$row->id}}">Sửa</button>
                      <button class="btn btn-danger delete_user" id="{{$row->id}}" >Xóa</button>
                    </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
  </section>
<!-- the modal -->
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
          <form action="#" id="form_insert_user" enctype="multipart/form-data">
             @csrf
             <input type="hidden" name="id" id="user_id" value="">
              
               <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email">
              </div>
               
                    <div class="form-group">
                      <label for="email">Username</label>
                      <input type="text" name="username" id="username" class="form-control">
                    </div>
                
                
                    <div class="form-group">
                      <label for="email">Password</label>
                      <input type="text" name="password" id="password" class="form-control">
                    </div>
                <div class="form-group">
                <label for="email">Level</label>
                <select type="text" class="form-control" name="level" id="level" class="form-control">
                  <option value="">Level</option>
                  <option value="1">Admin</option>
                   <option value="2">Thành viên</option>
                </select>
              </div>
               <div class="form-group">
                <label for="email">Avatar</label>
                <input type="file" name="avatar" id="avatar" class="form-control">
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
        } );

        $('.edit_user').click(function() {
              $('.modal-title').text("Sửa thành viên");
              var id=$(this).attr('id');
              var url = '/admin/users/'+id;
              $.ajax({
                type : 'get',
                url  : url,
                data : {'id':id},
                success:function(data){
                  // $('#id').val(data.id);
                  console.log(JSON.parse(data));
                  $('#user_id').val(JSON.parse(data).id);
                  $('#email').val(JSON.parse(data).email);
                  $('#username').val(JSON.parse(data).username);
                  console.log(JSON.parse(data).password);
                  $('#password').attr('disabled','disabled');
                  $('#level').val(JSON.parse(data).level);
                  // $('#myModal').modal('show');
                  
                  //console.log(JSON.parse(data).name);
                }
              }); 
            });

          $('#add_user').click(function(){
               $('.modal-title').text("Thêm thành viên");
               $('#user_id').val('');
               $('#email').val('');
               $('#username').val('');
               $('#password').removeAttr('disabled');
               $('#password').val('');
               $('#level').val('');
               $('#avatar').val('');

            });

        $('#form_insert_user').on('submit',function(event){
           event.preventDefault();
              id = $('#user_id').val();
              if(id==''){
                var url = '/admin/users/create';
              }
              else{
                var url = '/admin/users/update/'+id;
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

          $('.delete_user').click(function(){
            if (!confirm("Do you want to delete")){
             return false;
            }
            id=$(this).attr('id');
            $.ajax({
              type:"get",
              url:"/admin/users/delete/"+id,
              data:id,
              success:function(data){
                console.log(data);
                location.reload();
                },
            });
          });
       </script>
@endsection
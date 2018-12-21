 @extends('admin.layout.master')
 @section('title')
  contact
@endsection
 @section('content')
  <section class="content-header">
               <h2 >Ý kiến khách hàng</h2>
  </section>
  <section class="content">
            <table class="table table-bordered table-hover table-striped" id="table" >
               <thead>
                  <tr style="background: gainsboro;">
                     <th>#</th>
                     <th>Tên </th>
                     <th>Email</th>
                     <th>Website</th>
                     <th>Chủ đề</th>
                     <th>Nội dung</th>
                     <th>Ngày gửi</th>
                     <th>Phản hồi</th>
                     <th>Xóa</th>
                  </tr>
               </thead>
               <tbody>
                @foreach($contacts as $row)
                  <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td> 
                    <td>{{$row->website}}</td>
                    <td>{{$row->title}}</td>
                    <td>{{$row->content}}</td>
                    <td>{{$row->created_at}}</td>
                    <td><?php if($row->status==0) echo '<button  class="btn btn-warning send_mail" data-toggle="modal" data-target="#myModal" id="'.$row->id.'" >Gửi mail</button>'; else echo '<button class="btn btn-success" disable>Đã gửi</button>'?></td>
                    <td><a href="" class="delete_contact" id="{{$row->id}}"><button class="btn btn-danger" >Xóa</button></a></td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
  </section>
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Phản hồi khách hàng</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
         <form role="form" method="post" id="form_mail" action="">
        <div class="modal-body">
         
             @csrf
             <input type="hidden" id="id" value="">
             <div class="form-group">
                <label for="email">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="">
              </div>
               <div class="form-group">
                <label for="email">Chủ đề</label>
                <input type="text" class="form-control" name="title" id="title" value="">
              </div>
               <div class="form-group">
                <label for="email">Nội dung</label>
                <textarea type="text" class="form-control" name="content" id="content" value=""></textarea>
              </div>
           </form>     
        </div>  
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit"  class="btn btn-primary pull-left insert">Gửi</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal" >Đóng</button>
        </div>
      </form>     
      </div>
    </div>
  </div>
       <script>
        $('#table').DataTable();

        $('.send_mail').click(function(event){
          event.preventDefault();
          var id= $(this).attr('id');
          console.log(id);
          $.ajax({
            url:'/admin/mail/show/'+id,
            type:"get",
            data:id,
            success:function(data) {
              $('#id').val(data.id);
               $('#name').val(data.name);
              $('#email').val(data.email);
            }
          });
        });
        $('.insert').click(function(event){
              event.preventDefault();
              name=$('#name').val();
              email=$('#email').val();
              title=$('#email').val();
              content=$('#content').val();
              if(name==''){
                $('#name').after('<span style="color: red;">Name is required.</span>');
                return false;
              }
               if(email==''){
                $('#email').after('<span style="color: red;">Email is required.</span>');
                return false;
              }
               if(title==''){
                $('#title').after('<span style="color: red;">Title is required.</span>');
                return false;
              }
               if(content==''){
                $('#content').after('<span style="color: red;">Content is required.</span>');
                return false;
              }

              id=$('#id').val();
            
              var url = '/admin/mail/send/'+id;
            
              $.ajax({
                type:"post",
                url:url,
                data: $("#form_mail").serialize() ,
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

        $('.delete_contact').on('click',function(event){
          //event.preventDefault();
          if(!confirm("Bạn có chắc chắn muốn xóa liên lạc này? ")){
            return false;
          }
          id= $(this).attr('id');
          $.ajax({
            type:"get",
            url:'/swatch/contact/delete/'+id,
            data:id,
            success:function(data){
              console.log(data);
              location.reload();
            }
            
          });

        });
       </script>
@endsection
 @extends('admin.layout.master')
 @section('title')
  brand
@endsection
 @section('content')
  <section class="content-header">
               <h2 >Danh sách thương hiệu</h2>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm thương hiệu </button>
  </section>
  <section class="content">
            <table class="table table-bordered" id="table" >
               <thead>
                  <tr>
                     <th>Số thương hiệu</th>
                     <th>Tên thương hiệu</th>
                     <th>Nguồn gốc</th>
                     <th>Logo</th>
                     <th>Thao tác</th>
                  </tr>
               </thead>
               <tbody>
                <tr>
                  <td>10000</td>
                  <td>Orient</td>
                  <td>Nhật Bản</td>
                  <td><img src="{{URL::asset('page/images/e1.jpg')}}" style="width: 50px;height: 50px;"></td>
                  <td>
                    <a> <i class="fa fa-edit"></i></a>
                      <a> <i class="fa fa-trash"></i></a>
                  </td>
                </tr>
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
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="#" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                <label for="email">Tên thương hiệu</label>
                <input type="text" class="form-control" name="name">
              </div>
              <div class="form-group">
                <label for="email">Nguồn gốc</label>
                <input type="text" class="form-control" name="country">
              </div>
              <div class="form-group">
                <label for="email">Logo</label>
                <input type="file"  name="image">
              </div>
          </form>
        </div>  
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary pull-left">Lưu</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
        </div>
        
      </div>
    </div>
  </div>
       <script>
       </script>
      
@endsection
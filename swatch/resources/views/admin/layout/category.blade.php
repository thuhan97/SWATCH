 @extends('admin.layout.master')
 @section('title')
  category
@endsection
 @section('content')
  <section class="content-header">
               <h2>Danh mục sản phẩm</h2>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm danh mục </button>
  </section>
  <section class="content">
            <table class="table table-bordered" id="table" style="width:800px;">
               <thead>
                  <tr>
                     <th>Số danh mục</th>
                     <th>Tên danh mục</th>
                     <th>Thao tác</th>
                  </tr>
               </thead>
               <tbody>
                <tr>
                  <td>1000</td>
                  <td>Đồng hồ nam</td>
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
          <h4 class="modal-title">Thêm danh mục</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="#">
             @csrf
              <div class="form-group">
                <label for="email">Tên danh mục</label>
                <input type="text" class="form-control" name="name">
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
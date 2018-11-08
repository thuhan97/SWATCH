 @extends('admin.layout.master')
 @section('title')
  sale
@endsection
 @section('content')
  <section class="content-header">
               <h2 >Chương trình giảm giá</h2>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm chương trình giảm giá </button>
  </section>
  <section class="content">
            <table class="table table-bordered" id="table" >
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Mã sản phẩm</th>
                     <th>Giá khuyến mại</th>
                     <th>Ngày bắt đầu</th>
                     <th>Ngày kết thức</th>
                     <th>Thao tác</th>
                  </tr>
               </thead>
               <tbody>
            
                 <tr>
                     <td>1</td>
                     <td>OP</td>
                     <td>15000</td>
                     <td>12-3-2018</td>
                     <td>12-5-2018</td>
                     <td>
                       <a href=""><button class="btn btn-primary" style="height: 30px; line-height: 10px;">Sửa</button></a>
                       <a href=""><button class="btn btn-danger" style="height: 30px;line-height: 10px;">Xóa</button></a>
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
          <h4 class="modal-title">Thêm chương trình giảm giá</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="#">
             @csrf
              <div class="form-group">
                <label for="email">Mã sản phẩm</label>
                <input type="text" class="form-control" name="product_id">
              </div>
               <div class="form-group">
                <label for="email">Giá khuyến mại</label>
                <input type="text" class="form-control" name="name">
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="email">Ngày bắt đầu</label>
                      <input type="datetime-local" name="start_at">
                    </div>
                </div>
                 <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="email">Ngày kết thúc</label>
                      <input type="datetime-local" name="end_at">
                    </div>
                </div>
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
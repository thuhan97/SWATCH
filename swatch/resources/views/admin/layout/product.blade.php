@extends('admin.layout.master')
@section('title')
  product
@endsection
 @section('content')
  <section class="content-header">
               <h2 >Danh sách sản phẩm</h2>
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
   Thêm sản phẩm
  </button>
  </section>
  <section class="content">
            <table class="table table-bordered" id="table" >
               <thead>
                  <tr>
                     <th>Mã sản phẩm</th>
                     <th>Tên sản phẩm</th>
                     <th>Ảnh minh họa</th>
                     <th>Giá sản phẩm</th>
                     <th>Thương hiệu</th>
                     <th>Loại sản phẩm</th>
                     <th>Kích thước</th>
                     <th>Chất liệu vỏ</th>
                     <th>Chất liệu dây</th>
                     <th>Chất liệu kính</th>
                     <th>Áp lực nước</th>
                     <th>Bảo hành</th>
                     <th>Mô tả</th>
                     <th>Thao tác</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                    <td><span class="infor-product">10000</span></td>
                    <td><span class="infor-product">FACCC09B</span></td>
                    <td><span class="infor-product"><img src="{{URL::asset('page/images/e1.jpg')}}" style="width: 50px;height: 50px;"></span></td>
                    <td><span class="infor-product">6.170.000</span></td>
                    <td><span class="infor-product">Orient</span></td>
                    <td><span class="infor-product">Đồng hồ nam</span></td>
                    <td><span class="infor-product">41 mm</span></td>
                    <td><span class="infor-product">Kim loại</span></td>
                    <td><span class="infor-product">Da</span></td>
                    <td><span class="infor-product">Cứng</span></td>
                    <td><span class="infor-product">200 m</span></td>
                    <td><span class="infor-product">1 năm</span></td>
                    <td><span class="infor-product"></span></td>
                    <td><span class="infor-product">
                      <a> <i class="fa fa-edit"></i></a>
                      <a> <i class="fa fa-trash"></i></a>
                    </span></td>
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
          <h4 class="modal-title">Thêm sản phẩm</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <!-- Modal body.. -->
         <form action="#" method="post" class="form" role="form" enctype="multipart/form-data"> 
           @csrf
            <div class="row"> 
              <div class="col-xs-6 col-md-6"> 
                 <div class="form-group">
                <label for="email">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name">
          </div>
              </div> 
              <div class="col-xs-6 col-md-6"> 
                 <div class="form-group">
                <label for="email">Giá</label>
                <input type="text" class="form-control" name="price">
          </div>
              </div> 
          </div>   
           <div class="row"> 
              <div class="col-xs-6 col-md-6"> 
                 <div class="form-group">
                <label for="email">Kích thước</label>
                <input type="text" class="form-control" name="size">
          </div>
              </div> 
              <div class="col-xs-6 col-md-6"> 
                 <div class="form-group">
                <label for="email">Áp lực nước</label>
                <input type="text" class="form-control" name="persure">
              </div>
          </div> 
          </div> 
          <div class="row"> 
              <div class="col-xs-6 col-md-6"> 
                 <div class="form-group">
                <label for="email">Bảo hành</label>
                <input type="text" class="form-control" name="guarantee">
          </div>
              </div> 
              <div class="col-xs-6 col-md-6"> 
                 <div class="form-group">
                <label for="email">Ảnh minh họa</label>
                <input type="file"  name="image">
              </div>
          </div> 
          </div> 
          <div class="row"> 
           <div class="col-xs-6 col-md-6"> 
              <select class="form-control">              
                <option value="">Loại sản phẩm</option> 
                <option value="1">Đồng hồ nam</option> 
                <option value="2">Đồng hồ nữ</option> 
                <option value="3">Đồng hồ đôi</option>            
              </select> 
           </div> 
           <div class="col-xs-6 col-md-6"> 
              <select class="form-control">              
                  <option value="">Thương hiệu</option>
                  <option value="1">Orient</option>
                  <option value="2">OP</option>
                  <option value="3">Citizen</option>
                  <option value="4">Elixa</option>
                  <option value="5">Seko</option>            
              </select> 
           </div> 
            </div> 
             <br> 
          <div class="row"> 
           <div class="col-xs-4 col-md-4"> 
                <div class="form-group">
                <label for="email">Chất liệu vỏ</label>
                <input type="text" class="form-control" name="shell_material">
          </div>
           </div> 
           <div class="col-xs-4 col-md-4"> 
                <div class="form-group">
                <label for="email">Chất liệu dây</label>
                <input type="text" class="form-control" name="chain_material">
          </div>
           </div> 
           <div class="col-xs-4 col-md-4"> 
               <div class="form-group">
                <label for="email">Chất liệu kính</label>
                <input type="text" class="form-control" name="glass_material">
          </div> 
           </div> 
          </div> 
        </br>
           <div class="row">
              <div class="col-xs-6 col-md-6"> 
                <div class="form-group">
                  <label for="email">Mô tả</label>
                  <textarea class="form-control" name="description"></textarea>
                </div>
              </div> 
              <div class="col-xs-6 col-md-6"> 
                <div class="form-group">
                  <label for="email">Còn hàng</label></br>
                  <input type="checkbox" name="status">
                </div>
              </div> 
            </div>
        </form> 
        </div>  
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn  btn-primary pull-left" type="submit"> Lưu</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
        </div>
        
      </div>
    </div>
  </div>
  
       <script>
       </script>
@endsection
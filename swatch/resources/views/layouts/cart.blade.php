@extends('layouts.master')
@section('title')
    Complete
@endsection
@section('content')
<div class="login">
                	<h2 style="margin-left: 75px;" class="cart-title">Giỏ hàng của bạn</h2>
                    <div class="cart ">
                    	<table class="table">
                            <!--  -->
                                <tr>
                                     <td><img src="{{URL::asset('page/images/e1.jpg')}}" class="cart_item_img"></td>
                                    <td><span>FAA_G235Q</span></td>
                                    <td><span>6,170,000 đ</span></td>
                                    <td>
                                        <input type="button" name="sub" value="-" >
                                        <input type="text" name="quantity" value="1">
                                        <input type="button" name="add" value="+">
                                    </td>
                                    <td><span>6,170,000 đ</span></td>
                                    <td><span>Xóa</span></td>
                                </tr>   
                        </table>
  
                       <div class="cart-bottom " >
                        <p>Tổng tiền hàng: <span>6 170 000 đ</span> </p></br>
                       <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">Mua hàng</button>

<div class="modal fade" id="myModal" role="dialog" >
     <div class="modal-dialog">
    
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h3 class="modal-title">Thêm địa chỉ </h3>
            </div>
            <div class="modal-body">
                <h4>Để đặt hàng, vui lòng thêm địa chỉ nhận hàng</h4>
                </br>
                <form method="post">
                     @csrf
                     <div class="form-group">
                        
                        <input type="text" name="name" class="form-control" placeholder="Tên">
                    </div>
                     <div class="form-group">
                         
                         <input type="text" name="phone" class="form-control" placeholder="Điện thoại">
                    </div>
                      <div class="form-group">
                         
                         <input type="text" name="city" class="form-control" placeholder="Tỉnh/Thành phố">
                     </div>
                     <div class="form-group">
                         
                         <input type="text" name="district" class="form-control" placeholder="Quận/Huyện">
                     </div>
                     <div class="form-group">
                        
                         <input type="text" name="town" class="form-control" placeholder="Phường/Xã">
                     </div>
                     <div class="form-group">
                        
                         <input type="text" name="street" class="form-control" placeholder="Tòa nhà, tên đường">
                     </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary pull-left">Mua hàng</button>
              <button class="btn btn-danger " data-dismiss="modal">Close</button>
            </div>
         </div>
        </div>
  </div>
  </div>
  

@endsection
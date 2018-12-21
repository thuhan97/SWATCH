@extends('layouts.master')
@section('title')
    cart
@endsection
@section('content')

<div class="login">
                	<h2 style="margin-left: 75px;" class="cart-title">Giỏ hàng của bạn</h2> 
                    <div class="cart ">
                    <?php 
                     if(Cart::getContent()->count()==0) echo "</br><h3>Chưa có sản phẩm nào trong giỏ hàng của bạn.</h3>";
                        else{
                    ?>
                    	<table class="table table-hover table-bordered table-striped">
                            
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <!--  -->
                            <tbody>
                                @foreach($cartItem as $row)
                                <tr>
                                     <td><img src="{{URL::asset('dist/img/product/'.$row->attributes->image)}}" class="cart_item_img"></td>
                                    <td><span>{{$row->name}}</span></td>
                                    <td><span>{{number_format($row->price)}} đ</span></td>
                                    <td>
                                        <a href="/swatch/updateCart/{{$row->id}}/1"><input type="button" name="plus"  value="+"></a>
                                        <input type="text" name="quantity" class="quantity" value="{{$row->quantity}}"  min="1" max="30" style="text-align: center; max-width: 50px;">
                                        <a href="/swatch/updateCart/{{$row->id}}/-1"><input type="button" name="sub"  value="-"></a>
                                           
                                    </td>
                                    <td><span>{{number_format($row->getPriceSum())}} đ</span></td>
                                    <td><span  ><a style=" color: red;" href="" id="{{$row->id}}" class="delCart">Xóa</a></span></td>
                                </tr>   
                                @endforeach
                                </tbody>
                        </table>
  
                       <div class="cart-bottom " >
                        <a href="" id="deleteAllCart" style="color: red;">Xóa toàn bộ giỏ hàng</a>
                    </br>
                        <p>Tổng tiền hàng: <span>{{number_format(Cart::getTotal())}} đ</span> </p></br>
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
                <form method="post" id="buy" action="/swatch/checkout">
                     @csrf
                     <div class="form-group">
                        
                        <input type="text" name="name" class="form-control" placeholder="Tên" required>
                    </div>
                     <div class="form-group">
                         
                         <input type="text" name="phone" class="form-control" placeholder="Điện thoại" required>
                    </div>
                    <div class="form-group">
                         
                         <input type="text" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                         <label>Giới tính</label></br>
                         <input type="radio" name="gender" value="0"> Nam &nbsp;
                         <input type="radio" name="gender" value="1"> Nữ
                    </div>

                      <div class="form-group">
                         
                         <input type="text" name="address" class="form-control" placeholder="Tỉnh/Thành phố" required>
                     </div>
                
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary pull-left" type="submit" id="btnBuy">Mua hàng</button>
              <button class="btn btn-danger " data-dismiss="modal">Close</button>
            </div>
            </form>
         </div>
        </div>
  </div>
<?php }?>
  </div>
  <script>
   

    $(".delCart").click(function(){
         id =$(this).attr('id');
         if (!confirm("Do you want to delete")){
             return false;
            }
         $.ajax({
            type:"get",
            url:'/swatch/deleteCart/'+id,
            data:id,
            success: function(data){
                console.log(data);
            }
         });
    });
    $("#deleteAllCart").click(function(){
         if (!confirm("Do you want to delete")){
             return false;
            }
             $.ajax({
            type:"get",
            url:'/swatch/deleteAllCart',
            success: function(data){
                console.log(data);
            }
         });
    });

    // $("#btnBuy").click(function(event){
    //     event.preventDefault();
    //     $.ajax({
    //         type:"post",
    //         url:"/swatch/checkout",
    //         data:$("#buy").serialize();
    //         success:function(data){
    //             console.log(data);
    //     }
    //     });
    // });
  </script>
  

@endsection
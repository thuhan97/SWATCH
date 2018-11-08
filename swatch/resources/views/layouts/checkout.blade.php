 @extends('layouts.master')
@section('title')
	Checkout
@endsection
@section('content')
 <!-- <div class="register_account">
           <div class="wrap">
    	     <h4 class="title">Shopping cart is empty</h4>
    	     <p class="cart">You have no items in your shopping cart.<br>Click<a href="index.html"> here</a> to continue shopping</p>
    	   </div>
    	</div> -->
 <div class="login">
        <div class="wrap">
                	<h4 class="title">Thanh toán</h4>
                    <div class="address">
                    <p> <i class="fa fa-map-marker" aria-hidden="true"></i> Địa chỉ nhận hàng </p>
                        <span class="header-address">Han Nguyen (+84) 0354086955</span>&emsp;
                        <span class="body-address">123, Yên Mỹ, huyện Yên Mỹ, tỉnh Hưng Yên</span>&emsp;
                        <a href="">Thay đổi</a>
                    </div>
                    	<table class="table ">
                            <thead>
                                <tr>
                                    <th><h2>Sản phẩm</h2></th>
                                    <th>Tên sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiên</th>

                                </tr>
                            </thead>
                            <tbody>
                             <tr>
                                    <td width="25%"><img src="{{URL::asset('page/images/e1.jpg')}}"></td>
                                    <td><span>FAA_G235Q</span></td>
                                    <td><span>6,170,000 đ</span></td>
                                    <td><span>1</span></td>
                                    <td><span>6,170,000 đ</span></td>
                                </tr> 
                            </tbody>
                        </table>
                        <div class="checkout-bottom ">
                            <table class=" pull-right">
                                <tr>
                                    <td>Tổng tiền hàng</td>
                                    <td>6.170.000 đ</td>
                                </tr>
                                <tr>
                                    <td>Phí vận chuyển</td>
                                    <td>36.000 đ</td>
                                </tr>
                                <tr>
                                    <td>Tổng thanh toán</td>
                                    <td><p>7.196.000 đ</p></td>
                                </tr>
                            </table>
                             <div class="clear"></div>
                        </div>
                        </br>
                       <a href="/swatch/complete"><button class="btn btn-danger btn-lg pull-right">Đặt hàng</button></a>
                            <div class="clear"></div>
                    </div>
            </div>
  @endsection
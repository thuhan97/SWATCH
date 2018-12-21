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
                        <span class="header-address">{{$data['name']}} {{$data['phone']}}</span>&emsp;
                        <span class="body-address">{{$data['address']}}</span>&emsp; 
                        <span class="body-address">{{$data['email']}}</span>&emsp;
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
                                @foreach($data['cartItem'] as $row)
                             <tr>
                                    <td width="25%"><img src="{{URL::asset('dist/img/product/'.$row->attributes->image)}}"></td>
                                    <td><span>{{$row->name}}</span></td>
                                    <td><span>{{number_format($row->price)}} đ</span></td>
                                    <td><span>{{$row->quantity}}</span></td>
                                    <td><span>{{number_format($row->getPriceSum())}} đ</span></td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                        <div class="checkout-bottom ">
                            <table class=" pull-right">
                                <tr>
                                    <td>Tổng tiền hàng</td>
                                    <td>{{number_format(Cart::getTotal())}} đ</td>
                                </tr>
                                <tr>
                                    <td>Tổng thanh toán</td>
                                    <td><p>{{number_format(Cart::getTotal())}} đ</p></td>
                                </tr>
                            </table>
                             <div class="clear"></div>
                        </div>
                        </br>
                       <a href="" id="complete"><button class="btn btn-danger btn-lg pull-right">Đặt hàng</button></a>
                            <div class="clear"></div>
                    </div>
            </div>
<script>
$("#complete").click(function (event) {
    event.preventDefault();
     data = {
        _token: '{!! csrf_token() !!}',
        'name':'{{$data['name']}}' ,
        'phone':{{$data['phone']}},
        'email':'{{$data['email']}}',
        'address':'{{$data['address']}}',
        'gender':{{$data['gender']}},
        'cartItem':[
        @foreach($data['cartItem'] as $row){
        'id':{{$row->id}},
        'name':'{{$row->name}}',
        'price':{{$row->price}},
        'quantity':<?php echo $row->quantity; ?>, 
        'image':'<?php echo $row->attributes->image?>',
        },
        @endforeach],
    };
    console.log(data);
    $.ajax({
    type:"post",
    url:'/swatch/order',
    data:data,
    success:function(data){
        console.log(data);
        location.href= "/swatch/order/complete";
     }
    });
});
</script>         
  @endsection
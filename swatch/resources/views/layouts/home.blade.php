@extends('layouts.master')
@section('title')
Home
@endsection
@section('slider')
@include('layouts.slider')
@endsection
@section('content')
	<div class="wrap">
		<div class="section group">
		  <div class="cont span_2_of_3">
		  	<h2 class="head">Sản phẩm khuyến mãi</h2>
			<div class="top-box1">
				<?php $i=0;?>
				@foreach($salePr as $row)
			 <div class="col_1_of_3 span_1_of_3"> 
			   <a href="/swatch/product/{{$row->product->id}}">
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('dist/img/product/'.$row->product->image)}}" alt=""/>
					</div>
                     <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">{{$row->product->name}}</p>
							<div class="price1">
							  <span class="reducedfrom">{{number_format($row->product->price)}} đ</span>
							  <span class="actual">{{number_format($row->discount)}} đ</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clearfix"></div>
					 </div>				
                   </div>
                 </a>
				</div>
				<?php $i++;
				if($i%3==0) echo '</div><div class="top-box1">';
					?>
				@endforeach
				
			</div>		
			<div class="clear"></div>	
		</br>
		  <h2 class="head">Sản phẩm đặc biệt</h2>
		 
		 	 <div class="top-box1">	
		 	 	<?php $i=0;?>
		 	 	@foreach($specialPr as $row)	
			  <div class="col_1_of_3 span_1_of_3">
			  	  <a href="/swatch/product/{{$row->id}}">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('dist/img/product/'.$row->image)}}" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">Special</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">{{$row->name}}</p>
							<div class="price1">
							  <span class="reducedfrom"><?php if(isset($row->sale->discount)) echo number_format($row->price).'đ'; else echo "";?> </span>
							  <span class="actual">{{(isset($row->sale->discount))?number_format($row->sale->discount) : number_format($row->price) }} đ</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>     	
				</div>
				<?php $i++;
				if($i%3==0) echo '</div><div class="top-box1">';
					?>
				@endforeach
			</div>	
			<div class="clear"></div>
			</br>
			
	        <h2 class="head">Sản phẩm mới</h2>	
		    <div class="section group">
		    	<?php $i=0;?>
		    	@foreach($newPr as $row)
			  <div class="col_1_of_3 span_1_of_3">
			  	  <a href="/swatch/product/{{$row->id}}">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('page/images/e2.jpg')}}" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">{{$row->name}}</p>
							<div class="price1">
							  <span class="reducedfrom"><?php if(isset($row->sale->discount)) echo number_format($row->price).'đ'; else echo "";?>  </span>
							  <span class="actual">{{(isset($row->sale->discount))?number_format($row->sale->discount) : number_format($row->price) }} đ</span>
							</div>
						</div>
						<div class="cart-right"><a href="/swatch/addToCart/{{$row->id}}"></a> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<?php $i++;
				if($i%3==0) echo '</div><div class="top-box1">';
					?>
				@endforeach
				<div class="clear"></div>
			</div>			 						 			    
		  </div>
			<div class="rsidebar span_1_of_left">
				<div class="top-border"> </div>
				 <div class="border">
	             <link href="{{URL::asset('page/css/default.css')}}" rel="stylesheet" type="text/css" media="all" />
	             <link href="{{URL::asset('page/css/nivo-slider.css')}}" rel="stylesheet" type="text/css" media="all" />
				  <script src="{{URL::asset('page/js/jquery.nivo.slider.js')}}"></script>
				    <script type="text/javascript">
				    $(window).load(function() {
				        $('#slider').nivoSlider();
				    });
				    </script>
		    <div class="slider-wrapper theme-default">
              <div id="slider" class="nivoSlider">
               
               	<img src="{{URL::asset('page/images/customer2.jpg')}}"  alt="" />
                <img src="{{URL::asset('page/images/customer3.jpg')}}"  alt="" />
                <img src="{{URL::asset('page/images/customer4.jpg')}}"  alt="" />
              </div>
             </div>
             </div>
	    </div>
	   <div class="clear"></div>
	</div>
	</div>
	
	@endsection
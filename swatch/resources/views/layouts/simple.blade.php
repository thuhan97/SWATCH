@extends('layouts.master')
@section('title')
	{{$brands->name}}
@endsection
@section('slider')
@include('layouts.slider')
@endsection
@section('content')
     <div class="wrap">
		<div class="cont span_2_of_3">
		  	<h2 class="head">{{$brands->name}}</h2>
		  	<div style="border-top: 1px solid #ccc; margin-bottom: 15px;">
            
             
     	<div class="clear"></div>
		</div>
		<?php if(count($brands->product)==0) echo '<h3>Không có sản phẩm nào.</h3>'; else{?>
		<div class="top-box">
				
				<?php $i=0;?>
				@foreach($brands->product as $row)
			 <div class="col_1_of_3 span_1_of_3"> 
			   <a href="/swatch/product/{{$row->id}}">
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('dist/img/product/'.$row->image)}}" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop"><?php if($row->special==1) echo " Special"; else if($row->sale->id) echo "Sale";?></span></div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">{{$row->name}}</p>
							<div class="price1">
							 <span class="reducedfrom"><?php if(isset($row->sale->discount)) echo number_format($row->price).'đ'; else echo "";?>  </span>
							  <span class="actual">{{(isset($row->sale->discount))?number_format($row->sale->discount) :number_format( $row->price) }} đ</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                 </a>
				</div>
				<?php 
					$i++;
					if($i%3==0) echo '</div><div class="top-box1">'
				?>
				@endforeach
			</div>

			
			<div class="clear"></div>
			<?php }?>		   	 							 			    
		  </div>
			@include('layouts.right_bar')
			<div class="clear"></div>
			</div>
		   </div>
		</div>
		<script src="{{URL::asset('page/js/jquery.easydropdown.js')}}"></script>
		@endsection
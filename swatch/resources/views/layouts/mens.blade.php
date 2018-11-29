@extends('layouts.master')
@section('title')
	Mens
@endsection
@section('slider')
@include('layouts.slider')
@endsection
@section('content')
     <div class="wrap">
		<div class="cont span_2_of_3">
		  	<h2 class="head"><?php if($gender=='dong-ho-nam') echo "Đồng hồ nam"; elseif($gender=='dong-ho-nu') echo "Đồng hồ nữ"; else echo "Đồng hồ đôi";?></h2>
		  	<div class="mens-toolbar">
              <div class="sort">
               	<div class="sort-by">
		            <label>Sắp xếp theo</label>
		            <select>
		                            <option value="">
		                    Tên                </option>
		                            <option value="">
		                    Giá                </option>
		            </select>
		            <a href=""><img src="{{URL::asset('page/images/arrow2.gif')}}" alt="" class="v-middle"></a>
               </div>
    		</div>
        <div class="pager">   
        	<div class="limiter visible-desktop">
            <label>Hiển thị</label>
            <select>
                            <option value="" selected="selected">
                    9                </option>
                            <option value="">
                    15                </option>
                            <option value="">
                    30                </option>
                        </select> một trang       
             </div>
	   		<div class="clear"></div>
    	</div>
     	<div class="clear"></div>
		</div>
		<div class="top-box">
				<?php $i=0;?>
				@foreach($products as $row)
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
							 <span class="reducedfrom"><?php if(isset($row->sale->discount)) echo $row->price.'đ'; else echo "";?>  </span>
							  <span class="actual">{{(isset($row->sale->discount))?$row->sale->discount : $row->price }} đ</span>
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
		  </div>
			@include('layouts.right_bar')
			<div class="clear"></div>
			</div>
		   </div>
		</div>
		<script src="{{URL::asset('page/js/jquery.easydropdown.js')}}"></script>
		@endsection
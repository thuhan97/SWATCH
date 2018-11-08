@extends('layouts.master')
@section('title')
	Womens
@endsection
@section('slider')
@include('layouts.slider')
@endsection
@section('content')
     <div class="wrap">
		<div class="cont span_2_of_3">
		  	<h2 class="head">Đồng hồ nữ</h2>
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
			 <div class="col_1_of_3 span_1_of_3"> 
			   <a href="single.html">
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('page/images/e1.jpg')}}" alt=""/>
					</div>
                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                 </a>
				</div>
			   <div class="col_1_of_3 span_1_of_3">
			   	 <a href="single.html">
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('page/images/e2.jpg')}}" alt=""/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 <a href="single.html">
				  <div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('page/images/e3.jpg')}}" alt=""/>
					</div>
                    <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="reducedfrom">$66.00</span>
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="clear"></div>
			</div>		
			<div class="top-box">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('page/images/e4.jpg')}}" alt=""/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					<a href="single.html">
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('page/images/e5.jpg')}}" alt=""/>
					</div>
					 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('page/images/e6.jpg')}}" alt=""/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                 </a>
				</div>
				<div class="clear"></div>
			</div>	
			<div class="top-box1">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('page/images/e7.jpg')}}" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 <a href="single.html">
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('page/images/e8.jpg')}}" alt=""/>
					</div>
					 <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="reducedfrom">$66.00</span>
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
				  <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('page/images/e9.jpg')}}" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="clear"></div>
			</div>	
		 <h2 class="head">Staff Pick</h2>
		  <div class="top-box1">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('page/images/e10.jpg')}}" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					 <a href="single.html">
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('page/images/e4.jpg')}}" alt=""/>
					</div>
				    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('page/images/e3.jpg')}}" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="clear"></div>
			</div>		
		   <h2 class="head">New Products</h2>	
		    <div class="section group">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('page/images/e2.jpg')}}" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					<a href="single.html">
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('page/images/e1.jpg')}}" alt=""/>
					</div>
					 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="{{URL::asset('page/images/e5.jpg')}}" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="clear"></div>
			</div>		 							 			    
		  </div>
			<div class="rsingle span_1_of_single">
				<h5 class="m_1">Danh mục sản phẩm</h5>
					<ul class="kids">
						<li><a href="#">Đồng hồ nam</a></li>
						<li><a href="#">Đồng hồ nữ</a></li>
						<li class="last"><a href="#">Đồng hồ đôi</a></li>
					</ul>
                   <section  class="sky-form">
					<h4>Khoảng giá</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Dưới 2,000,000 đ</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>2,000,000 đ-4,000,000 đ</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>4,000,000 đ-6,000,000 đ</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>6,000,000 đ-9,000,000 đ</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>9,000,000 đ-15,000,000 đ</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Trên 15,000,000 đ</label>
								
							</div>
						</div>
		        </section>
		    </br>
		       <section  class="sky-form">
					<h4>Thương hiệu</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Gucci</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Edox</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tissot</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Hamilton</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Ogival</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Calvin Kelin</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Citizen</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Seiko</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orient</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Michel Herbelin</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Elle</label>
							</div>
						</div>
		       </section>
		      </div>
			<div class="clear"></div>
			</div>
		   </div>
		</div>
		<script src="{{URL::asset('page/js/jquery.easydropdown.js')}}"></script>
		@endsection
@extends('layouts.home')
@section('title')
	Product
@endsection
@section('slider')
@include('layouts.slider')
@endsection
@section('content')
     <div class="wrap">
		<div class="cont span_2_of_3">
		  	<div class="grid images_3_of_2">
							
					<a href="optionallink.html">
						<img class="etalage_source_image" src="{{URL::asset('page/images/e1.jpg')}}" class="img-responsive" title="" />
					</a>
	            </div>
		         <div class="desc1 span_3_of_2">
		         	<h3 class="m_3">FAA02004B9</h3>
		             <p class="m_5">5,790,000 đ</p> <span class="reducedfrom">6,170,000 đ</span>
		         	 <div class="btn_form">
						<form>
							<input type="submit" value="buy" title="">
						</form>
					 </div>
				     <p class="m_text2">CA0201-51E Thuộc bộ sưu tập Citizen Eco Gents với những nét khỏe khoắn, mạnh mẽ dành riêng cho nam giới. Bộ sưu tập sở hữu thiết kế nam tính với từng chi tiết, hình khối chắc chắn, cứng cáp. Tuy vậy, sự tài tình của các nghệ nhân giúp chiếc đồng hồ vẫn sở hữu được vẻ lịch lãm, đẳng cấp. Đặc biệt Citizen Eco Gents chỉ chạy bộ máy Eco – Drive không dùng pin, chạy bằng ánh sáng siêu bền bỉ và tiện lợi. </p>
			     </div>
			   <div class="clear"></div>	
	    <div class="clients">
	    <h3 class="m_3">10 sản phẩm khác cùng loại</h3>
		 <ul id="flexiselDemo3">
			<li><img src="{{URL::asset('page/images/e5.jpg')}}" /><a href="#">Category</a><p>5,000,000 đ</p></li>
			<li><img src="{{URL::asset('page/images/e6.jpg')}}" /><a href="#">Category</a><p>5,000,000 đ</p></li>
			<li><img src="{{URL::asset('page/images/e7.jpg')}}" /><a href="#">Category</a><p>5,000,000 đ</p></li>
			<li><img src="{{URL::asset('page/images/e8.jpg')}}" /><a href="#">Category</a><p>5,000,000 đ</p></li>
			<li><img src="{{URL::asset('page/images/e9.jpg')}}" /><a href="#">Category</a><p>5,000,000 đ</p></li>
		 </ul>
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="{{URL::asset('page/js/jquery.flexisel.js')}}"></script>
     </div>
     <div class="toogle">
     	<h3 class="m_3">Chi tiết thông số kỹ thuật</h3>
     	<div class="table_detail">
     		<table class="table table-bordered ">
     			<tr>
     				<td>Bảo hành SWatch</td>
     				<td>5 năm tiêu chuẩn Thụy Sỹ</td>
     			</tr>
     			<tr>
     				<td>Thẩm định thật giả</td>
     				<td>Miễn phí</td>
     			</tr>
     			<tr>
     				<td>Đổi trả</td>
     				<td>30 ngày</td>
     			</tr>
     			<tr>
     				<td>Thương hiệu</td>
     				<td>Orient</td>
     			</tr>
     			<tr>
     				<td>Nguồn gốc</td>
     				<td>Nhật Bản</td>
     			</tr>
     			<tr>
     				<td>Giới tính</td>
     				<td>Nam</td>
     			</tr>
     			<tr>
     				<td>Kích cỡ</td>
     				<td>41.5 mm</td>
     			</tr>
     			<tr>
     				<td>Chất liệu vỏ</td>
     				<td>Thép không gỉ 316L</td>
     			</tr>
     			<tr>
     				<td>Chất liệu dây</td>
     				<td>Thép không gỉ 316L</td>
     			</tr>
     			<tr>
     				<td>Chất liệu kính</td>
     				<td>Kính cứng</td>
     			</tr>
     			<tr>
     				<td>Độ chịu nước</td>
     				<td>200 m</td>
     			</tr>
     			<tr>
     				<td>Bảo hành quốc tế</td>
     				<td>1 năm</td>
     			</tr>
     		</table>
     	</div>
     </div>
     <div class="toogle">
     	<h3 class="m_3">Bình luận</h3>
     	<h5 class="count_comment">0 bình luận</h5>
     </br>
     	<form method="post" class="form">
     		 <div class="form-group">
                <label for="email">Tên</label>
                <input type="text" class="form-control" name="name">
              </div>
               <div class="form-group">
                <label for="email">Nội dung</label>
                <textarea name="comment" class="form-control"></textarea>
              </div>
     		<button class="btn btn-primary pull-right">Bình luận</button>
     		<div class="clear"></div>
     	</form>
     </div>
     <div class="comment">
     	<h4 class="name_user">Sam</h4>
     	<h6>2018-11-05</h6></br>
     	<p class="content_commet">Tôi rất thích</p>

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
		       <script src="{{URL::asset('page/js/jquery.easydropdown.js')}}"></script>
		      </div
		      <div class="clear"></div>
			</div>
			 <div class="clear"></div>
		   </div>
	
@endsection
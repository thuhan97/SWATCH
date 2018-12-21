@extends('layouts.master')
@section('title')
	Product
@endsection

@section('content')
	<div class="login">
     <div class="wrap">
		<div class="cont span_2_of_3">
		  	<div class="grid images_3_of_2">
							
					<a href="optionallink.html">
						<img class="etalage_source_image" src="{{URL::asset('dist/img/product/'.$product->image)}}" class="img-responsive" title="" />
					</a>
	            </div>
		         <div class="desc1 span_3_of_2">
		         	<h3 class="m_3">{{$product->name}}</h3>
		             <p class="m_5">{{(isset($product->sale->discount))?number_format($product->sale->discount) : number_format($product->price) }} đ</p> <span class="reducedfrom"><?php if(isset($product->sale->discount)) echo number_format($product->price).'đ'; else echo "";?></span>
		         	 <div class="btn_form">
							
							<a href="/swatch/addToCart/{{$product->id}}"><button type="button" class="btn btn-primary addToCart" id="{{$product->id}}">Thêm vào giỏ hàng</button></a>
					
					 </div>
				     <p class="m_text2">{{$product->description}}</p>
			     </div>
			   <div class="clear"></div>	
	    <div class="clients">
	    <h3 class="m_3">10 sản phẩm khác cùng loại</h3>
		 <ul id="flexiselDemo3">
		 	@foreach($sameKind as $row)
			<li><img src="{{URL::asset('dist/img/product/'.$row->image)}}" /><a href="/swatch/product/{{$row->id}}">{{$row->name}}</a><p>{{$row->price}} đ</p></li>
			@endforeach
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
     				<td>{{$product->brand->name}}</td>
     			</tr>
     			<tr>
     				<td>Nguồn gốc</td>
     				<td>{{$product->brand->category->name}}</td>
     			</tr>
     			<tr>
     				<td>Đồng hồ dành cho</td>
     				<td><?php if($product->gender== 'dong-ho-nam') echo "Nam"; elseif($product->gender== 'dong-ho-nu') echo "Nữ"; else echo "Cặp đôi";?></td>
     			</tr>
     			<tr>
     				<td>Kích cỡ</td>
     				<td>{{$product->size}} mm</td>
     			</tr>
     			<tr>
     				<td>Chất liệu vỏ</td>
     				<td>{{$product->shell_material}}</td>
     			</tr>
     			<tr>
     				<td>Chất liệu dây</td>
     				<td>{{$product->chain_material}}</td>
     			</tr>
     			<tr>
     				<td>Chất liệu kính</td>
     				<td>{{$product->glass_material}}</td>
     			</tr>
     			<tr>
     				<td>Độ chịu nước</td>
     				<td>{{$product->presure}} m</td>
     			</tr>
     			<tr>
     				<td>Bảo hành quốc tế</td>
     				<td>{{$product->guarantee}}</td>
     			</tr>
     		</table>
     	</div>
     </div>
     <div class="toogle">
     	<h3 class="m_3">Bình luận</h3>
     	<h5 class="count_comment"><span id="count_comment">{{count($product->comment)}}</span> bình luận</h5>
     </br>
     	<form method="post" class="form" id="form_comment">
     		@csrf
     		<input type="hidden" name="product_id" value="{{$product->id}}">
     		 <div class="form-group">
                <label for="email">Tên</label>
                <input type="text" class="form-control" name="name" required id="name">
              </div>
               <div class="form-group">
                <label for="email">Nội dung</label>
                <textarea name="content" class="form-control" required id="content"></textarea>
              </div>
     		<button class="btn btn-primary pull-right" type="submit">Bình luận</button>
     		<div class="clear"></div>
     	</form>
     </div>
      <div id="comment">
     @foreach($product->comment as $row)
     
     <div class="comment">
     	<strong class="name_user">{{$row->name}}</strong> &nbsp;<span class="content_comment">{{$row->content}}</span>
     	<h6>{{$row->created_at}}</h6>
 	</div>
     @endforeach
    </div>


    <!-- begin wwww.htmlcommentbox.com -->
 
<!-- end www.htmlcommentbox.com -->
<script async type="text/javascript" src="http://apis.google.com/js/plusone.js?callback=gpcb"></script>
    </div>
			
		      @include('layouts.right_bar')
		       <script src="{{URL::asset('page/js/jquery.easydropdown.js')}}"></script>
		      </div
		      <div class="clear"></div>
			</div>
			 <div class="clear"></div>
		   </div>
</div>
<script >
	$('#form_comment').on('submit',function(event){
		event.preventDefault();
		$.ajax({
			url:'/swatch/comment',
			data: $('#form_comment').serialize(),
			type:"post",
			success:function(data){
				console.log(data);
				//location.reload();

				var title = $('#name').val();
      			var description = $('#content').val();
      			//var date= new TimeStamp();
      			var d = new Date($.now());
					date =d.getFullYear()+"-"+(d.getMonth() + 1)+"-"+d.getDate()+" "+d.getHours()+":"+d.getMinutes()+":"+d.getSeconds();

				$('#name').val("");
      			$('#content').val("");
      			
      			$('#comment').append('<div class="comment"><strong class="name_user">'+ title+'</strong> &nbsp; <span class="content_comment">' + description+'</span><h6>'+date+'</h6></div>');
      			
      			var count = parseInt($('#count_comment').text()) +1;
      			$('#count_comment').text(count);

			}
		});
	});
</script>
@endsection
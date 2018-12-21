<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>
<title>SWATCH | @yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<!-- bootstrap 3.3.7 -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{URL::asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<!-- end bootstrap -->
<script src="{{URL::asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="{{URL::asset('page/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{URL::asset('page/css/form.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="{{URL::asset('page/js/jquery1.min.js')}}"></script>
<!-- start menu -->
<link href="{{URL::asset('page/css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{URL::asset('page/css/cart.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{URL::asset('page/css/checkout.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{URL::asset('page/css/complete.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{URL::asset('page/js/megamenu.js')}}"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="{{URL::asset('page/css/fwslider.css')}}" media="all">
    <script src="{{URL::asset('page/js/jquery-ui.min.js')}}"></script>
    <script src="{{URL::asset('page/js/css3-mediaqueries.js')}}"></script>
    <script src="{{URL::asset('page/js/fwslider.js')}}"></script>
<!--end slider -->
<script src="{{URL::asset('page/js/jquery.easydropdown.js')}}"></script>

</head>
<body>
	
	<div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="index.html"><img src="{{URL::asset('page/images/logo.png')}}" alt=""/></a>
				</div>
			<div class="menu">
	        <ul class="megamenu skyblue">
			<li class="active grid"><a href="/swatch">Home</a></li>
			<li><a class="color4" href="#" id="brand">Thương hiệu</a>
				<div class="megapanel">
					<div class="row">
						<?php $i=0;?>
						@foreach($categories as $row)
						<div class="col1">
							<div class="h_nav">
								<h4>{{$row->name}}</h4>
								<ul>
									@foreach($row->brand as $brand)
									<li><a href="/swatch/brand/{{$brand->slug}}">{{$brand->name}}</a></li>
									@endforeach
								</ul>	
							</div>						
						</div>	
						<?php $i++;
								if($i%2==0) echo '</div><div class="row">'
						?>
					@endforeach	
					</div>
					
				</div>
				</li>				
				<li><a class="color5"  href="/swatch/cate/dong-ho-nam" id="mens">Đồng hồ Nam</a></li>
				<li><a class="color6" href="/swatch/cate/dong-ho-nu" id="womens">Đồng hồ nữ</a></li>
				<li><a class="color6" href="/swatch/cate/dong-ho-doi" id="couples">Đồng hồ đôi</a></li>
				<li><a class="color7" href="/swatch/about">Giới thiệu</a></li>
				<li><a class="color7" href="/swatch/contact">Liên hệ</a></li>

			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
         <div class="search">	 
         <form method="get" action="/swatch/search">
         	@csrf
				<input type="text" name="key" class="textbox" value="" placeholder="Tìm kiếm...">
				<input type="submit" value="Subscribe" id="submit" name="submit">
				<div id="response"> </div>
		</form>
		 </div>
	  <div class="tag-list">
		<ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c2" href="/swatch"></a>
				<ul class="sub-icon1 list">
					<li><h3><?php if(Cart::getContent()->count()==0) echo "Chưa có sản phẩm trong giỏ hàng"; else echo "Có ".Cart::getContent()->count()." sản phẩm trong giỏ hàng";?></h3></li>
					<li><p><?php if(Cart::getContent()->count()==0) echo "Vui lòng chọn sản phẩm"; else echo "" ?></p></li>
				</ul>
			</li>
		</ul>
	    <ul class="last"><li><a href="/swatch/cart">Giỏ hàng ({{Cart::getContent()->count()}})</a></li></ul>
	  </div>
    </div>
     <div class="clear"></div>
     </div>
	</div>
  <!-- start slider -->
   @yield('slider')
    <!--/slider -->
 <div class="main">
 @yield('content')
 </div>
 <div class="footer">
		<div class="footer-top">
			<div class="wrap">
			  <div class="section group example">
				<div class="col_1_of_2 span_1_of_2">
					<ul class="f-list">
					  <li><img src="{{URL::asset('page/images/2.png')}}"><span class="f-text">Miễn phí giao hàng toàn quốc </span><div class="clear"></div></li>
					</ul>
				</div>
				<div class="col_1_of_2 span_1_of_2">
					<ul class="f-list">
					  <li><img src="{{URL::asset('page/images/3.png')}}"><span class="f-text">Liên hệ hotline-0354-086-955 </span><div class="clear"></div></li>
					</ul>
				</div>
				<div class="clear"></div>
		      </div>
			</div>
		</div>
		<div class="footer-middle">
			<div class="wrap">
			
		   <div class="section group example">
			  <div class="col_1_of_f_1 span_1_of_f_1">
				 <div class="section group example">
				   <div class="col_1_of_f_2 span_1_of_f_2">
				      <h3>Facebook</h3>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="like_box">	
							<div class="fb-like-box" data-href="http://www.facebook.com/samblog97" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
						</div>
 				  </div>
 				   <div class="col_1_of_f_2 span_1_of_f_2">
				    <h3>Hệ thống Showroom</h3>
						<ul class="f-list1">
						    <li><a href="#">Tầng 1, Big C Hồ Gươm, Q.Hà Đông, Hà Nội</a></li>
				            <li><a href="#">Tầng 1, số 28LK-B, làng Việt Kiều Châu Âu, Mỗ Lao, Q.Hà Đông, Hà Nội  </a></li>
				            <li><a href="#">Tầng 3, TTTM Tràng Tiền Plaza , 24 Hai Bà Trưng, Q. Hoàn Kiếm, Hà Nội </a></li>
			         	</ul>
 				 </div>
		      </div>
 			 </div>
			 <div class="col_1_of_f_1 span_1_of_f_1">
			   <div class="section group example">	
				 <div class="col_1_of_f_2 span_1_of_f_2">
				    <h3>Thông tin hỗ trợ</h3>
						<ul class="f-list1">
						    <li><a href="#">Chính sách và quy định </a></li>
				            <li><a href="#">Chính sách mua hàng  </a></li>
				            <li><a href="#">Chính sách giao hàng </a></li>
				             <li><a href="#">Chính sách bảo hành </a></li>
				            <li><a href="#">Chính sách đổi trả </a></li>
				            <li><a href="#">Giải quyết khiếu nại</a></li>
			         	</ul>
 				 </div>
				 <div class="col_1_of_f_2 span_1_of_f_2">
				   <h3>Liên hệ</h3>
						<div class="company_address">
					                <p>Só 2, ngách 133/2,phố Nguyễn Văn Trỗi,</p>
							   		<p>phường Mỗ Lao, quận Hà Đông, thành phố Hà Nội</p>
							   		<p>Việt Nam</p>
					   		<p>Phone:(+84) 354 086 955</p>
					 	 	<p>Email: <span>hansena020897@gmail.com</span></p>
					   		
					   </div>
					   <div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="Google"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Linked in"><a href="#" target="_blank"> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Rss"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Facebook"><a href="#" target="_blank"> </a></span></li>
						    </ul>
					   </div>
				</div>
				<div class="clear"></div>
		    </div>
		   </div>
		  <div class="clear"></div>
		    </div>
		  </div>
		</div>
		<div class="footer-bottom">
			<div class="wrap">
	             <div class="copy">
			        <p>Bản quyền © 2018 SWatch - Đồng hồ chính hãng </p>
		         </div>	
	     </div>
	</div>
</body>
</html>
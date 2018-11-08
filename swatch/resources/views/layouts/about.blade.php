@extends('layouts.master')
@section('title')
	About
@endsection
@section('content')
<div class="login">
          <div class="wrap">
				<div class="section group">
				   <div class="labout span_1_of_about">
					 <h3>Khách hàng của chúng tôi:</h3>
					  <div class="testimonials ">
						<div class="testi-item">
						<blockquote class="testi-item_blockquote">
							<p><a href="#">SWatch</a> tự hào là nhà Giới thiệu, Phân phối và Bán lẻ Đồng hồ chính hãng chuyên nghiệp nhất. Ra đời từ năm 2003, trải qua hơn 14 năm không ngừng phát triển, Chuỗi cửa hàng của công ty đã được vinh dự phục vụ hơn 15,000 khách hàng thân thiết:
							</p>
							<div class="clear"></div>
						</blockquote>
						<img src="{{URL::asset('page/images/customer.jpg')}}">
					</div>
					   </div>
					   <div class="testimonials ">
						<div class="testi-item">
						<blockquote class="testi-item_blockquote">
						<p>Những Khách hàng khối công sở muốn sở hữu những chiếc đồng hồ đa dạng về mẫu mã, chất lượng vượt trội và quan trọng là phù hợp với chính mình để thể hiện tính cách, gu thẩm mỹ qua chiếc đồng hồ đeo trên cổ tay. </p>
							<div class="clear"></div>
						</blockquote>
						<img src="{{URL::asset('page/images/customer1.jpg')}}">
					</div>
					   </div>
				    </div>
				    <div class="cont span_2_of_about">
				       <h3>Xứ mệnh của chúng tôi</h3>
					   	<p>Với tiêu chí kinh doanh bền vững lâu dài, lấy đó làm kim chỉ nam xuyên suốt quá trình xây dựng và phát triển. Tiêu chí của chúng tôi là:

						<p>* Giới thiệu những Thương hiệu đồng hồ nổi tiếng của Thuỵ Sĩ và Nhật Bản và đã được kiểm nghiệm ở hơn 160 Quốc gia trên toàn Thế giới;</p>

						<p>* Mẫu mã phong phú hợp thời trang và phù hợp với người Việt Nam;</p>

						<p>* Tất cả sản phẩm đều được niêm yết Giá chính hãng công khai và Nguồn gốc xuất xứ rõ ràng để khách hàng dễ dàng lựa chọn;</p>

						<p>* Bảo hành chính hãng và Chế độ hậu mãi vượt trội bởi đội ngũ Kỹ thuật viên được hãng đào tạo, với trang thiết bị máy móc hiện đại nhất theo tiêu chuẩn của Hiệp Hội đồng hồ Thuỵ Sĩ.</p>
					  
				        <h5 class="m_6">Đối tác</h5>	
				        <p>SWatch tự hào là đối tác chính thức của các Hãng đồng hồ danh tiếng Toàn cầu như: Longines, Gucci, Tissot, Movado, RayMond Weil, Hamilton, Edox, Claude Bernard, Calvin Klein, Citizen.</p>
				        <div>
				        	<img src="{{URL::asset('page/images/doitac.png')}}">
				        </div>
				     
		   </div>
		   <!-- Add fancyBox main JS and CSS files -->
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
           </div>
		   <div class="clear"></div>	
		  </div>
	</div>	
   </div>  
   @endsection
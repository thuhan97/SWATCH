 @extends('layouts.master')
 @section('title')
	Contact
@endsection
 @section('content')
 <div class="login">
       <div class="wrap">
	   <h3 class="m_3">Hãy liên hệ với chúng tôi nếu bạn có bất ký thắc mắc nào !</h3>
		   <div class="content-top">
		   	@if (session('status'))
    	<div class="alert alert-success">
        {{ session('status') }}
    	</div>
		@endif
			   <form method="post" action="/swatch/contact">
			   	@csrf
			   	<input type="hidden" name="status" value="0">
					<div class="to">
                     	<input type="text" class="text" value="" placeholder="Tên"  name="name" }" required="">
					 	<input type="text" class="text" value="" placeholder="Email" style="margin-left: 10px" name="email" required="">
					</div>
					<div class="to">
                     	<input type="text" class="text" value="" placeholder="Website của bạn  (Có thể để trống)" name="website">
					 	<input type="text" class="text" value="" placeholder="Chủ đề" style="margin-left: 10px" name="title" required="">
					</div>
					<div class="text">
	                   <textarea value="" placeholder="Nội dung"  style="width: 1174.09px;" name="content" required=""></textarea>
	                </div>
	                <div class="submit">
	               		<input type="submit" value="Submit" class="btn btn-primary">
	                </div>
               </form>
                <div class="map">
                	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.142398392543!2d105.83638271422441!3d20.986928286021058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac67a2b03f19%3A0xd0b09d018f61dfb4!2zUGjhu5EgTmd1eeG7hW4gVsSDbiBUcuG7l2ksIFBoxrDGoW5nIExp4buHdCwgVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1541410712258" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen ></iframe>
				</div>
            </div>
       </div> 
    </div>
    @endsection
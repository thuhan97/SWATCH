<div class="rsingle span_1_of_single">
	<form action="/swatch/filter" method="get">
		@csrf
				<section class=" sky-form">
					<h5 class="m_1">Thương hiệu</h5>
					<select name="brand" style="width: 80%px; height: 30px;">
						<option value="">Thương hiệu</option>
						@foreach($brand as $row)
						<option value="{{$row->id}}">{{$row->name}}</option>>
						@endforeach
					</select>
					
				</section>
			</br>
                <section class="sky-form">
					<h4>Khoảng giá</h4>
						
							<div class="col col-4" style="margin-top: 15px;">
								<input type="number" name="min_price" style="width: 80px; height: 30px;" min="0" value="0" > - 
								<input type="number" name="max_price" style="width: 80px; height: 30px; " max="20000000" value="20000000"> VNĐ	
							</div> 
		        </section>
		    </br>
		       <section  class="sky-form">
					<h4>Giới tính</h4>
						
							<div class="col col-4" style="margin-top: 15px;">
								<select name="gender" style="width: 80%; height: 30px;">
									<option value="">Giới tính</option>
									<option value="dong-ho-nam">Đồng hồ nam</option>
									<option value="dong-ho-nu">Đồng hồ nữ</option>
									<option value="dong-ho-doi">Đồng hồ đôi</option>
								</select>
							</div>
						
		       </section>
		   </br>
		       <button class="btn btn-danger" style="width: 100%;">Lọc sản phẩm</button>
		   </form>
		    </div>
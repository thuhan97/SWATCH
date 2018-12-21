@extends('admin.layout.master')
@section('content')
<section class="content-header">
               <h2 >Thông tin cá nhân</h2>
 </section>
<section class="content">
	<div class="container">
		<input type="hidden" name="id" id="{{Auth::user()->id}}" class="user_id">
	<div class="row">
		<div class="col-md-3">
			<img src="{{URL::asset('dist/img/user/'.Auth::user()->avatar)}}" style="width: 250px; height: 250px;">
			<div style="margin-left: 80px;"><a href="#" class="edit_avatar"  >Thay đổi</a></div></br>
			<form method="post" enctype="multipart/form-data" action="/admin/profile/avatar/update" style="display: none;" class="form_insert_avatar">
				@csrf
				<input type="file" name="avatar">
				@if($errors->has('avatar'))
						<h6 style="color: red;">{{$errors->first('avatar')}}</h6>
				@endif
			</br>
				<input class="btn btn-primary" type="submit" value="Lưu">

			</form>
		 
			<div style="margin-top: 15px;"><i class="fa fa-user"> Tên đăng nhập: {{Auth::user()->username}}</i></div>
			<div><i class="fa fa-user-plus"> Vai trò: {{(Auth::user()->level==1)?"Amin": "Thành viên"}}</i></div>
		</div>
		<div class="col-md-6">
			<table class="table table-hover ">
				<tr>
					<td>Email</td>
					<td>{{Auth::user()->email}}</td>
					
				</tr>	
				<tr>
					<td>Tài khoản</td>
					<td>{{Auth::user()->username}}</td>
					
				</tr>	
				
				<tr>
					<td>Password</td>
					<td>******</td>
					<td><a href="#" class="edit_password" >Thay đổi</a></td>
				</tr>	
			</table>
			<form class="form_insert_password" method="post" action="/admin/profile/password/update" style="display: none;" >

				@csrf
				
				<label>Thay đổi mật khẩu</label>
				<div>
					<label>Mật khẩu cũ: </label>
					<input type="password" name="password" style="margin-left: 50px;">
					@if(session()->has('error'))
						<h6 style="color: red;">{{session()->get('error')}}</h6>
					@endif
					@if($errors->has('password'))
						<h6 style="color: red;">{{$errors->first('password')}}</h6>
					@endif

				</div>
				<div>
					<label>Mật khẩu mới: </label>
					<input type="password" name="new_password" style="margin-left: 41px;">
					@if($errors->has('new_password'))
						<h6 style="color: red;">{{$errors->first('new_password')}}</h6>
					@endif
				</div>
				<button class="btn btn-primary" type="submit">Lưu</button>
			</form>
		</div>
	</div>
	</div>
</section>
<script >
	$('.edit_avatar').click(function(){
		$('.form_insert_avatar').toggle();
		
	});

	$('.edit_password').click(function(){
		$('.form_insert_password').toggle();
	});
</script>

 
@endsection

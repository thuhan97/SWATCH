<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<style type="text/css">
		.login{
			width: 500px;
			margin: 120px auto;
		}
		h1{
			text-align: center;
		}
		span{
		font-size: 13px;
		color: red;
		}
	</style>
</head>
<body>
	<div class="login">
		<h1>Login</h1>
	@if($errors->has('errorlogin'))
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{$errors->first('errorlogin')}}
						</div>
	@endif
	<form action="/login" method="post">
		@csrf
  <div class="form-group">
    <label for=" username"> Username address:</label>
    <input type=" username" class="form-control" id=" username" name=" username">
   <?php 
   	if ($errors->has('username'))
       echo '<span>'. $errors->first('username').'</span>';		
	?>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
    <?php if ($errors->has('password')) {
       echo '<span>'. $errors->first('password').'</span>';
	}
	?>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
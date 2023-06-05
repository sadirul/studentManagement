<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Login</title>
  <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet"/>
  
</head>

<body class="bg-dark">
 <!-- Start wrapper-->
 <div id="wrapper">
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="{{ asset('assets/images/logo-icon.png') }}" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign In</div>
		  @error('message')
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<div class="alert-icon contrast-alert">
				<i class="fa fa-exclamation-triangle"></i>
				</div>
				<div class="alert-message">
				<span><strong>Error!</strong> {{ $message }}</span>
				</div>
			</div>
		  @enderror
		    <form action="{{ route('admin.login') }}" method="POST">
                @csrf
			  <div class="form-group">
			  <label for="exampleInputUsername" class="">Username</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" name="username" id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter Username">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
				  @error('username')
				  	<p class="error error-danger">{{ $message }}</p>
				  @enderror
			   </div>
			   
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" name="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Enter Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
				  @error('password')
				  	<p class="error error-danger">{{ $message }}</p>
				  @enderror
			   </div>
			  </div>
			<div class="form-row">
			 <div class="form-group col-6">
			   <div class="icheck-material-primary">
                <input type="checkbox" id="user-checkbox" checked="" />
                <label for="user-checkbox">Remember me</label>
			  </div>
			 </div>
			 <div class="form-group col-6 text-right">
			  <a href="javascript:void(0);">Reset Password</a>
			 </div>
			</div>
			 <button type="submit" class="btn btn-primary shadow-primary btn-block waves-effect waves-light">Sign In</button>
			 </form>
		   </div>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  
</body>

<!-- Mirrored from codervent.com/rukada/color-admin/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Nov 2019 15:12:17 GMT -->
</html>


	<link rel="stylesheet" href="/project/libraries/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/project/view/admin/login.css">
<body style="background: url(/project/view/images/dark.png);">
		<div align="center" style="margin-top: 10%;">
			<form method="POST" action="../admin/loginCheck" class="form-container">
				<h1 style="font-size: 45px" align="center">Admin Log In</h1>
				<div class="form-group">
					<label for="Username">Username</label>
					<input type="text" name="username" placeholder="Enter Username" class="form-control" required/>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="Enter password" class="form-control" required/>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox"> Remember me
					</label>
				</div>
				<div>
					<input type="Submit" name="login" value="Log In" class="btn btn-primary" style="width: 300px;">
				</div>
				 <div class="fpw">
                 <a href="#"><u>Forget Password?</u></a>
             </div>
			</form>
		</div>
	<script src="/project/libraries/jquery/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="/project/libraries/js/bootstrap.min.js"></script>
</body>
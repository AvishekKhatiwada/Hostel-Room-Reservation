
	<link rel="stylesheet" href="/project/libraries/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/project/view/user/login.css">
<body style="background: url(/project/view/images/dark.png);">
	<div class="container-fluid">
		<div align="center">
			<form method="POST" action="./User/LoginCheck" class="form-container">
				<h1 style="font-size: 45px" align="center">User Log In</h1>
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
						<input type="checkbox">Remember me</label>
				</div>
				<div>
					<input type="Submit" name="login" value="Log In" class="btn btn-primary" style="width: 140px;">
					<a href="student/register" style="width: 140px;" class="btn btn-warning">Sign Up</a>
				</div>
				 <div>
                 <a href="#" style="margin-left: 5%; margin-top: 5%;"><u>Forget Password ?</u></a>
             </div>
			</form>
		</div>	
	</div>
	<script src="/project/libraries/jquery/jquery.min.js"></script>
	<script src="/project/libraries/js/bootstrap.min.js"></script>
</body>
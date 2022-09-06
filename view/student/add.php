<?php 
	require_once "./view/shared/adminmenu.php" ;
 ?>

<style>
	input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
<body>
	<div  class="w-100 h-100" >
	<div class="col-sm-3"></div>
	<form method="POST" action="../Student/addstudent" class="form-container" enctype="multipart/form-data">
		<u>
			<h1 align="center" style="font-size: 45px;">Add New Student</h1>
		</u>
			<div class="ml-5 mr-5">
					<div class="form-group">
						<div class="row w-50">
							<div class="col col-xs-3">
								<label for="name">First Name:</label>
								<input type="text" class="form-control" placeholder="Enter First Name" name="fname" required/>
								<label for="naame">Last Name:</label>
								<input type="text" name="lname" class="form-control" placeholder="Enter Last Name" required/>
							</div>
							<div class="col col-md-5 mt-5">
								Insert Your Photo:<input type="file" name="simage" />
							</div>
							<div></div>
						</div>
						<div class="w-50">
							<label for="email">E-mail:</label>
							<input type="email" name="email" placeholder="Enter Your E-mail" class="form-control" required/>
						</div>
						<div class="radio mt-3 radio-inline">
							<label for="gender">Gender:</label>
							<label><input type="radio" value="Male" name="gender" checked/>Male</label>
							<label><input type="radio" value="female" name="gender" />Female</label>
						</div>
						<div class="row mt-1">
							<div class="col ">
								<label for="cars">Course:</label><br>
  								<select id="cars" name="course" style="width: 93px;height: 38px;">
    								<option value="BCA">BCA</option>
	    							<option value="BBA">BBA</option>
	    							<option value="Bsc">Bsc</option>
	    							<option value="BEd">BEd</option>
  								</select>
							</div>
								<div class="col col-xs-3"></div>
								<div class="col col-xs-3"></div>
								<div class="col col-xs-3"></div>
								<div class="col col-xs-3"></div>
						</div>
						<div class="row w-50">
							<div class="col mr-0">
								<label for="address">Address:</label>
								<input type="text" name="address" placeholder="Enter Permanent Address" class="form-control w-50" required/>
							</div>
							<div class="col" style="margin-left:-120px;">
								<label for="contact no">Contact No:</label>
								<input type="text" name="number" placeholder="Mobile Number" class="form-control w-50" maxlength="10" pattern="[0-9]+" required/>
							</div>
						</div>
  						<div class="mt-1">
							<input type="Submit" name="addstudent" value="Add Student" class="btn btn-warning w-25 ml-5 mt-3">
  						</div>
				</div>
			</div>
	</form>
	</div>
	<?php
    require_once "./view/shared/footer.php";
?>
</body>
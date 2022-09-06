<?php
	require_once "./view/shared/adminmenu.php"
?>
<style>
	input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
<body>
	<div  class="w-50 h-100">
		<form method="POST" action="../Student/index" class="form-container ">
			<u>
				<h1 class="h1" align="center">Update Student Detail</h1>
			</u>
			<?php
				while($row=$result->fetch_assoc()){
			?>
				<div class="ml-5 mr-5">
					<div class="form-group">
						<div class="row w-50">
							<div class="col col-xs-5">
								<label for="name">First Name:</label>
								<input type="text" class="form-control" value="<?php echo $row['fname']?>" placeholder="Update First Name" name="fame" required/>
								<label for="naame">Last Name:</label>
								<input type="text" name="lname" value="<?php echo $row['lname']?>" class="form-control" placeholder="Update Last Name" required/>
							</div>
							<div class="col">
								Insert Your Photo:<input type="file" name="simage" />
							</div>
							<div></div>
						</div>
						<div class="w-50">
							<label for="email">E-mail:</label>
							<input type="email" value="<?php echo $row['email']?>" name="email" placeholder="Enter Your E-mail" class="form-control" required/>
						</div>
						<div class="radio  radio-inline">
							<label for="gender">Gender:</label>
							<label><input type="radio" value="Male" name="gender" checked/>Male</label>
							<label><input type="radio" value="female" name="gender" />Female</label>
						</div>
						<div class="row ">
							<!-- <div class="col">
								<label for="Symbole No">Symbole No:</label>
								<input type="text" name="Symbole No" class="form-control" placeholder="Enter Symbole No" required/>
							</div> -->
							<div class="col">
								<label for="cars">Course:</label><br>
  								<select id="cars" name="cars" style="width: 93px;height: 28px;">
    								<option value="BCA">BCA</option>
	    							<option value="BBA">BBA</option>
	    							<option value="Bsc">Bsc</option>
	    							<option value="BEd">BEd</option>
  								</select>
							</div>
							<!-- <div class="col">
								<label for="birthday">Date-Of-Birth:</label>
  								<input type="date" id="birthday" name="birthday">
  							</div> -->
								<div class="col col-xs-3"></div>
								<div class="col col-xs-3"></div>
								<div class="col col-xs-3"></div>
								<div class="col col-xs-3"></div>
						</div>
						<!-- <div>
							<label for="parents name">Parents Name:</label>
							<input type="text" name="parentsname" placeholder="Father/Mother's Name" class="form-control w-50" required/>
						</div> -->
						<div>
							<label for="address">Address:</label>
							<input type="text" name="address" value="<?php echo $row['address']?>" placeholder="Enter Permanent Address" class="form-control w-50" required/>
						</div>
						<div>
							<label for="contact no">Contact No:</label>
							<input type="number" name="number" value="<?php echo $row['number']?>" placeholder="Mobile Number" class="form-control w-50" maxlength="10" required/>
						</div>
						<input type="Submit" name="Update" value="Update" class="btn btn-warning ml-5 mt-1">
					</div>
				</div>
		</form>
		</div>
		<div class="mt-5">
		<?php
				}
    require_once "./view/shared/footer.php";
?>
		</div>
</body>
<head>
<link rel="stylesheet" href="/project/libraries/css/bootstrap.min.css">
<style>
	input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
select {
        width: 150px;
        height: 45px;
    }
/* .background{
    /* background-image: url(/project/view/images/hms.png);
    /* background-size: 1350px 750px; 
	/*background-position:cover;
}
 */

</style>
</head>
<body style="background-color: #c2d6d6;">
<div class="w-100 h-100 text-dark" >
	<!-- <div class="col-sm-3"></div> -->
	<form method="POST" action="../Student/registerCheck" class="form-container" enctype="multipart/form-data">
		<u><h1 align="center" style="font-size: 45px;">Hostel Management System</h1></u>
			<div class="ml-2 mr-2" style="border:2px solid black;padding: 15px;">
				<b><u><p style="font-size: 24px;">Student registration</p></u></b>
				<div class="form-group">
					<div class=" w-50">
						<div class="row col-xs-3">
							<div class="col">
							<label for="fname">First Name:</label>
							<input type="text" class="form-control" placeholder="Enter First Name" name="fname" required/>
							</div>
							<div class="col">
							<label for="lame">Last Name:</label>
							<input type="text" name="lname" class="form-control" placeholder="Enter Last Name" required/>
							</div>
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
							<!-- <div class="col">
								<label for="Symbole No">Symbole No:</label>
								<input type="text" name="symboleno" class="form-control" placeholder="Enter Symbole No" required/>
							</div> -->
							<div class="col">
								<label for="cars">Course:</label><br>
  								<select id="cars" name="course" style="width: 93px;height: 38px;">
    								<option value="BCA">BCA</option>
	    							<option value="BBA">BBA</option>
	    							<option value="Bsc">Bsc</option>
	    							<option value="BEd">BEd</option>
  								</select>
							</div>
							<!-- <div class="col">
								<label for="birthday">Date-Of-Birth:</label>
  								<input type="date" id="birthday" name="dob">
  							</div> -->
								<div class="col col-xs-3"></div>
								<div class="col col-xs-3"></div>
								<div class="col col-xs-3"></div>
								<div class="col col-xs-3"></div>
						</div>
						<div class="row">
                            <div class="col mr-0" width="25%">
                                <label for="contact no">Contact No:</label>
							    <input type="number" name="number" placeholder="Mobile Number" class="form-control w-50" maxlength="10" required/>                            </div>
                            <DIV class="col" style="margin-left: -85px;">
                                <label for="address">Address:</label>
							    <input type="text" name="address" placeholder="Enter Permanent Address" class="form-control w-50" required/>
                            </DIV>
                            <div class="col" width="50%">
                            </div>
						</div>
						<div>
							<div class="mt-3 ml-5">
								<p style="text-decoration: underline;color: red;">Enter Your Photo below</p>
								<input class="form-control" type="file" accept="image/*" name="simage" id="file"
									onchange="loadFile(event)" style="display: none;;" required />
								<p><img class="card" style="padding: 3px" id="output" width="150" height="120" required /></p>
								<p><label for="file" style="cursor: pointer;margin-top:-9px;margin-left: 9px;" class="btn btn-info">Upload Image</label></p>
								<script>
								var loadFile = function(event) {
									var image = document.getElementById('output');
									image.src = URL.createObjectURL(event.target.files[0]);
									};
									</script>
								</div>
							</div>
						<!-- <div>
                            <label for="parents name">Parents Name:</label>
							<input type="text" name="parentsname" placeholder="Father/Mother's Name" class="form-control w-50" required/>
						</div> -->
  						<div class="mt-1">
							<input type="Submit" name="register" value="Register" class="btn btn-warning w-25 ml-5 mt-3">
  						</div>
				</div>
			</div>
	    </form>
	</div>
</body>
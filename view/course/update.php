<?php
	require_once "./view/shared/adminmenu.php"; 
?>
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

</style>

<body>
	<div class="mt-2">
		<u><h2 class="ml-4">Update Course Details</h2></u>
		<form method="POST" class="form-container ml-4 w-50 mt-4">
			<div>
				<label for="Id">Course ID</label>
				<input type="text" name="Id" class="form-control" placeholder="Enter Course Id" required/>
			</div>
			<div>
				<label for="Title">Title</label>
				<input type="text" name="Title" placeholder="Enter course Title" class="form-control" required/>
			</div>
			<div>
				<label for="Fees">Fees</label>
				<input type="number" name="Fees" placeholder="Enter Fee Amount" class="form-control" required/>
			</div>
			<div>
				<label for="Duration">Duration</label>
				<input type="number" name="Duration" placeholder="Enter duration in years" class="form-control" required/>
			</div>
				<input type="Submit" name="Update" value="Update" class="btn btn-warning mt-2"   >
		</form>
	</div>
	<?php
    require_once "./view/shared/footer.php";
?>
</body

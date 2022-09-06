<?php
	require_once "./view/shared/adminmenu.php"; 
?>
<style>
	input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
select {d
        width: 150px;
        height: 45px;
    }

</style>

<body>
	<div class="mt-2">
		<u><h2 class="ml-4">Add New Course</h2></u>
		<form method="POST" action="../course/addCourse" class="form-container ml-4 w-50 mt-4">
			<!-- <div>
				<label for="Id">Course ID</label>
				<input type="text" name="id" class="form-control" placeholder="Enter Course Id" required/>
			</div> -->
			<div>
				<label for="Title">Title</label>
				<input type="text" name="title" placeholder="Enter course Title" class="form-control" required/>
			</div>
			<div>
				<label for="Fees">Fees</label>
				<input type="number" name="fees" placeholder="Enter Fee Amount" class="form-control" required/>
			</div>
			<div>
				<label for="Duration">Duration</label>
				<input type="number" name="duration" placeholder="Enter duration in years" class="form-control" required/>
			</div>
				<input type="Submit" name="addcourse" value="Add course" class="btn btn-warning mt-2"   >
		</form>
	</div>
	<?php
    require_once "./view/shared/footer.php";
?>
</body

<?php
	require_once "./view/shared/adminmenu.php"
?>
<div>
	<u><h1 align="center" class="mt-3" style="color: black;">Course Requests</h1></u>
	<table class="table table-striped table-bordered">
			<thead align="center" class="bg-dark">
				<tr style="color: white;">
					<th>Id</th>
					<th>Title</th>
					<th>Fees</th>
					<th>Duration</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody align="center">
				<tr>
					<td>420</td>
					<td>BCA</td>
					<td>200000</td>
					<td>4-5</td>
					<td>
						<a style="width: 100px;" href="#" class="btn btn-success">Approve</a>
		  				<a href="#" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				<?php
    require_once "./view/shared/footer.php";
?>
</div>
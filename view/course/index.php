<?php
	require_once "./view/shared/adminmenu.php"; 
?>
<head>
</head>
<body>
<div >
	<u><h1 align="center" class="mt-2">Available Courses</h1></u>
	<div class="row mt-4 mr-1">
		<div class=" col">
			<a href="../course/add" class="btn btn-primary ml-1">Add course</a>
			<!-- <a href="../course/Requests" class="btn btn-secondary ml-auto">Requests</a> -->
		</div>
		<div class="col col-sm-3">
			<div class="input-group rounded ml-2">
					<input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
					aria-describedby="search-addon" />
					<span class="input-group-text border-0" id="search-addon">
					<i class="fas fa-search"></i></span>
			</div>
		</div>
</div>
		<table  class="table table-striped table-bordered">
			<thead class="bg-dark text-light">
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Fees</th>
					<th>Duration(In years)</th>
					<th>Action</th>
				</tr>
			</thead>
			<?php
					while($row=$result->fetch_assoc()){
			?>
			<tbody >
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['fees']; ?></td>
					<td><?php echo $row['duration']; ?></td>
					<td>
						<a href="../course/update" class="btn btn-success">Update</a>
						<button value="<?=$row['id'];?>"  class="btn btn-danger delete-btn" data-toggle="modal"
					 data-target="#delete">delete</button>
					 <!-- The Modal -->
					 <div class="modal fade" id="delete">
							<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
							
								<!-- Modal Header -->
								<div class="modal-header">
								<h4 class="modal-title">Do you really want to delete?</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								
								<!-- Modal body -->
								<div class="modal-body">
									<center>
							<i class="fas fa-exclamation-triangle text-danger fa-10x"></i></center>
								</div>
								
								<!-- Modal footer -->
								<div class="modal-footer">
								<a href="" id="yes-btn" class="btn btn-success">Yes</a>
								<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
								</div>
								
							</div>
							</div>
						</div>
					</td>
				</tr>
			</tbody>
			<?php }
			?>
			<script>
					$('.delete-btn').on('click', function() {
						let id = $(this).val();
						$('#yes-btn').attr("href", "../course/deleteCourse?id="+id);
					});
			
					//   $('.update-btn').on('click', function() {
					//     let isbn = $(this).val();
					//     $('#update1').attr("href", "Books/updateBook?isbn="+isbn);
					// });
				</script>
		</table>
</div>
<?php
    require_once "./view/shared/footer.php";
?>
</body>
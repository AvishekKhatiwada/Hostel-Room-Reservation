<?php
	require_once "./view/shared/adminmenu.php"
?>
<body style="100%;">
	<style>
		.btn-primary:hover{
			background: #08167c;
		}
	</style>
<u><h1 class="text-center mt-2">Registered Students</h1></u>
<div class="row mr-1">
	<div class="col">
		<a href="../student/add" class="btn btn-primary ml-1">Add Student</a>
		<a href="../student/requests" class="btn btn-secondary ml-auto">Requests</a>
	</div>
	<form action="/project/student/search" >
			<input type="search" name="search" class="form-control rounded" placeholder="Search" />
			<!-- <span class="input-group-text border-0" id="search-addon"> -->
			<!-- <i class="fas fa-search"></i></span> -->
	</form>
</div>
		<div>
		<table  class="table table-bordered">
			<thead align="center" class="bg-dark text-light">
				<tr>
					<th>Stu.id</th>
					<th>First_Name</th>
					<th>Last_Name</th>
					<th>Address</th>
					<th>gender</th>
					<th>Course</th>
					<th>E-mail</th>
					<th>Contact_No</th>
					<th>Picture</th>
					<th>Action</th>
				</tr>
			</thead>
			<?php
				while($row=$result->fetch_assoc()){
			?>
			<tbody align="center">
				<tr>
					<td><?php echo $row['sid']; ?></td>
					<td><?php echo $row['fname']; ?></td>
					<td><?php echo $row['lname']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><?php echo $row['course']; ?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['number']; ?></td>
					<td><img src="/project/<?php echo $row['image']; ?>" class="simg" height="50"></td>
					<td>
						<a href="../Student/update?sid=<?php echo $row['sid'] ?>" class="btn btn-success">Update</a>
						<button value="<?=$row['sid'];?>"  class="btn btn-danger delete-btn" data-toggle="modal"
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
		</table>
		<script>
        $('.delete-btn').on('click', function() {
            let sid = $(this).val();
            $('#yes-btn').attr("href", "../student/deletestudent?sid="+sid);
		});
		</script>
				</div>
	</div>
	<?php
    require_once "./view/shared/footer.php";
?>
</body>
<?php
	require_once "./view/shared/adminmenu.php"
?>
<div>
	<u><h1 class="text-center mt-2" >Student Requests</h1></u>
	<table class="table table-bordered mt-5">
			<thead align="center" class="bg-dark">
				<tr class="text-light">
					<th>sid</th>
					<th>First_Name</th>
					<th>Last_Name</th>
					<th>Address</th>
					<th>Course</th>
					<th>Gender</th>
					<th>E-mail</th>
					<th>Contact No</th>
					<th>Photo</th>
					<th>Action</th>
				</tr>
			</thead>
			<?php
				while($row=$result->fetch_assoc()){
			?>
			<tbody align="center">
				<tr>
					<td><?php echo $row['sid']?></td>
					<td><?php echo $row['fname']?></td>
					<td><?php echo $row['lname']?></td>
					<td><?php echo $row['address']?></td>
					<td><?php echo $row['course']?></td>
					<td><?php echo $row['gender']?></td>
					<td><?php echo $row['email']?></td>
					<td><?php echo $row['contactno']?></td>
					<td><img src="/project/<?php echo $row['image']; ?>" class="simg" height="50"></td>
					<td>
						<a href="/project/student/accept?sid=<?php echo $row['sid'];?>"class="btn btn-success">Approve</a>
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
			<?php
				}
			?>
		</table>
		<script>
        $('.delete-btn').on('click', function() {
            let sid = $(this).val();
            $('#yes-btn').attr("href", "../student/deleteRequest?sid="+sid);
		});
		</script>
			<?php
    require_once "./view/shared/footer.php";
?>
</div>
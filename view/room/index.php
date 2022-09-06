<?php 
	require_once "./view/shared/adminmenu.php";
?>
<body>
<div>
	<u><h1 align="center" class="mt-3">Room Details</h1></u>
	<div class="mt-3">
	<div class="row mr-0">
		<div class="col">
			<a href="../room/add" class="btn btn-primary ml-1">Add Rooms</a>
			<a href="../room/Requests"class="btn btn-secondary ml-auto">Requests</a>
		</div>
		<form action="/project/room/search" >
			<input type="search" name="search" class="form-control rounded" placeholder="Search" />
	</form>
	</div>
	</div>
	<table class="table table-striped table-bordered text-center">
		<thead  class="bg-dark text-light">
			<tr>
				<th>RID</th>
				<!-- <th>First_Name</th>
				<th>Last_Name</th> -->
				<th>Block</th>
				<th>Room No</th>
				<th>No Of beds</th>
				<th>Rent</th> 				
				<th>Beds Available</th>
				<th>Action</th>
			</tr>
		</thead>
		<?php
			while($row=$result->fetch_assoc()){
		?>
		<tbody>
			<tr>
				<td><?php echo $row['rid']; ?></td>
			
				<td><?php echo $row['block']; ?></td>
				<td><?php echo $row['Room_no']; ?></td>
				<td><?php echo $row['no_of_beds']; ?></td>
				<td><?php echo $row['rent']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<td>
					<a href="../Room/update?rid=<?php echo $row['rid'];?>" class="btn btn-success update-btn">update</a>
					
					 <button value="<?=$row['rid'];?>"  class="btn btn-danger delete-btn" data-toggle="modal"
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
            let rid = $(this).val();
            $('#yes-btn').attr("href", "../room/deleteRoom?rid="+rid);
		});
 
        //   $('.update-btn').on('click', function() {
        //     let isbn = $(this).val();
        //     $('#update1').attr("href", "Books/updateBook?isbn="+isbn);
        // });
    </script>
		<!-- <tbody align="center">
			<tr>
				<td>101A</td>
				<td>A</td>
				<td>420</td>
				<td>2</td>
				<td>4000</td>
				<td>Empty </td>
				<td>
					<a href="../room/Update"  class="btn btn-success">Update</a>
		  			<a href="#"  class="btn btn-danger">Delete</a>
				</td>
			</tr>
			<tr>
				<td>101B</td>
				<td>B</td>
				<td>320</td>
				<td>4</td>
				<td>4000</td>
				<td>Full</td>
				<td>
					<a href="../room/Update" class="btn btn-success">Update</a>
		  			<a href="#" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			<tr>
				<td>101C</td>
				<td>c</td>
				<td>220</td>
				<td>4</td>
				<td>4000</td>
				<td>Full</td>
				<td>
					<a href="#" class="btn btn-success">Update</a>
		  			<a href="#"  class="btn btn-danger">Delete</a>
				</td>
			</tr>
		</tbody> -->
	</table>
	</div>
</div>
<?php
    require_once "./view/shared/footer.php";
?>
</body>
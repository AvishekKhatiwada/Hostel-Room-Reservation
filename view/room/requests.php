<?php
	require_once "./view/shared/adminmenu.php"
?>
 
<div>
	<u><h1 align="center" class="mt-3" style="color: black;">Room Requests</h1></u>   
	<div style="margin: right 0;" class="row mr-0 mt-3">
		<DIV class="col ml-5 mr-5"></DIV>
		<DIV class="col ml-5"></DIV>  
		<div class="col mr-5 ml-5"></div>       
		<div class="col ml-5">
				<div class="input-group rounded">
				<form action="/project/room/search" >
			<input type="search" name="search" class="form-control rounded" placeholder="Search" />
	</form>
				</div>
		</div>
	</div> 
	<table  class="table table-stripped table-bordered" >
			<thead align="center" class="bg-dark">
				<tr style="color: white;">
					<th>s.no</th>
					<th>Requested BY</th>
					<th>RID</th>
					<th>Block</th>
					<th>Room No</th>
					<th>No Of beds</th>
					<TH>Rent</TH>
					<!-- <th>Beds Available</th>  -->
					<th>Action</th>
				</tr>
			</thead>
			<?php
				while($row=$result->fetch_assoc()){
			?>
			<tbody align="center">
				<tr>
					<td><?php echo $row['reqid']; ?></td>
					<td><?php echo $row['fname']; ?></td>
					<td><?php echo $row['rid']; ?></td>
					<td><?php echo $row['block']; ?></td>
					<td><?php echo $row['Room_no']; ?></td>
					<td><?php echo $row['no_of_beds']; ?></td>
					<TD><?php echo $row['rent']; ?></TD>
					<!-- <td><?php echo $row['status']; ?></td> -->
					<td>
						<!-- <a style="width: 100px;" href="../rooms/roomAccept" class="btn btn-success">Approve</a> -->
						<a href="/project/Room/accept?sid=<?=$row['sid'];?>&&rid=<?=$row['rid'];?>"
						 class="btn btn-success">Approve</a>
						<button value="<?php echo $row['rid'];?>"  class="btn btn-danger delete-btn" data-toggle="modal"
					 data-target="#delete">delete</button>

						  <!-- The Modal -->
						<div class="modal fade" id="delete">
							<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
							
								<!-- Modal Header -->
								<div class="modal-header">
								<h4 class="modal-title">Do you really want to delete This ?</h4>
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
            let rid = $(this).val();
            $('#yes-btn').attr("href", "../Room/deleteRequest?rid="+rid);
		});
 
        //   $('.update-btn').on('click', function() {
        //     let rid = $(this).val();
        //     $('#update1').attr("href", "room/updateroom?isbn="+isbn);
        // });
    </script>
	   <?php
    require_once "./view/shared/footer.php";
?>
</div>
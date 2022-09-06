<?php 
	require_once "./view/shared/adminmenu.php"
 ?>
 <body>
 	<u><h1 align="center" class="mt-2">NOTICE</h1></u>
 	<!-- <div class="mt-3 mr-2 ml-4" style="border: 2px;color: black;border-width:5px;border-style:groove;">
 		 <marquee>Latest News:-</marquee>
 	</div> -->
	  <a href="../notice/add" class="btn btn-primary mt-2 ml-4">Add New</a>
 	<div style="border: 2px solid black;" class="ml-4 mr-2 mt-2">
 		<table class="table table-responsive">
 			<thead>
 				<tr>
					<th>S.no</th>
 					<th>Date</th>
 					<th>Notices</th>
					<th></th>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<th>Action</th>
 				</tr>
 			</thead>
			 <?php
				while($row=$result->fetch_assoc()){
			 ?>
 			<tbody>
 				<tr>
				 	<td><?php echo $row['sno']; ?></td>
					<td><?php echo $row['date']; ?></td>
					<td><?php echo $row['description']; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					 <td>
					 	<button value="<?=$row['sno'];?>"  class="btn btn-danger delete-btn" data-toggle="modal"
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
			 <script>
			  $('.delete-btn').on('click', function() {
            let sno = $(this).val();
            $('#yes-btn').attr("href", "../notice/deleteNotice?sno="+sno);
		});
		</script>
 		</table>
 	</div>
	 <?php
    require_once "./view/shared/footer.php";
?>
 </body>
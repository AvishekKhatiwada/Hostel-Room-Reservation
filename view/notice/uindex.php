<?php 
	require_once "./view/shared/usermenu.php"
 ?>
 <body>
 	<u><h1 align="center" class="mt-2">NOTICE</h1></u>
 	<!-- <div class="mt-3 mr-2 ml-4" style="border: 2px;color: black;border-width:5px;border-style:groove;">
 		 <marquee>Latest News:-</marquee>
 	</div> -->
 	<div style="border: 2px solid black;" class="ml-4 mr-2 mt-4">
 		<table class="table table-responsive">
 			<thead>
			 <tr>
					 <th>s.no</th>
 					<th>Date</th>
 					<th>Notices</th>
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
				 </tr>
 			</tbody>
			 <?php }
		?>
 		</table>
 	</div>
	 <?php
    require_once "./view/shared/footer.php";
?>
 </body>
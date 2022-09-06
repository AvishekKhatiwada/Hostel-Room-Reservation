<?php 
	require_once "./view/shared/usermenu.php";
?>
<body>
<div>
	<u><h1 align="center" class="mt-2">Room Details</h1></u>
	<div class="row" style="width: 100%;">
		<div class="col"></div>
		<div class="col ml-5 col-sm-3">
		<form action="/project/room/userSearch" >
		<input type="search" name="search" class="form-control rounded" placeholder="Search" />
	</form>
		</div>
	</div>
	<table class="table table-striped table-bordered">
		<thead align="center" class="bg-dark text-light">
			<tr>
				<th>RID</th>
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
		<tbody align="center">  
		<tr>
				<td><?php echo $row['rid']; ?></td>
				<td><?php echo $row['block']; ?></td>
				<td><?php echo $row['Room_no']; ?></td>
				<td><?php echo $row['no_of_beds']; ?></td>
				<td><?php echo $row['rent']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<td>
				<a href="../Room/requestRoom?rid=<?php echo $row['rid'];?>" class="btn btn-success">Request</a>
				<!-- <form action="../Room/requestRoom" method="post">
					<input type="submit" class="btn btn-success" value="Request">		
			</form> -->
				</td>
			</tr>

		</tbody>
		<?php  }
		?>
	</table>
	</div>
</div>
<?php
    require_once "./view/shared/footer.php";
?>
</body>
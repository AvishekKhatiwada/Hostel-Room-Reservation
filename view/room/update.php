<?php
	require_once "./view/shared/adminmenu.php" ;
?>
<style>
	input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
select {
        width: 150px;
        height: 45px;
    }

</style>

<body>
	<?php
		while($row=$result->fetch_assoc()){
	?>
	<div class="w-100">    
		<div class="ml-5 mr-5">
			<form method="POST" action ="../Room/updateRoom" class="form-container w-50">
			<u><h2>Update Room Details</h2></u>
			<div class="mt-5">
				<label for="rid">RID</label>
				<input type="number" name="rid" value="<?php echo $row['rid']?>" class="form-control" required/>
			</div>
			<div >
				<label for="block">Block</label>
				<input  type="text" name="block" class="form-control"value="<?php echo $row['block']?>" required/>
			</div>
			<div>
				<label for="room no">Room No</label>
				<input type="number" name="roomno" value="<?php echo $row['Room_no']?>" class="form-control" required/>
			</div>
			<div>
				<label for="no of seates">No of Beds</label>
				<input type="number" name="noofbeds" value="<?php echo $row['no_of_beds']?>"class="form-control" required/>
			</div>
			<div>
				<label for="rent">Rent</label>
				<input type="number" name="rent" value="<?php echo $row['rent']?>" class="form-control" required/>
			</div>
				<input type="Submit" name="update" value="Update" class="btn btn-warning mt-3">
		</form>
		</div>
	</div>
	<?php
		}
    require_once "./view/shared/footer.php";
?>
</body>
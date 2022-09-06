<?php 
	require_once "./view/shared/adminmenu.php"
 ?>
 <head>
 <style>
	input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
select {d
        width: 150px;
        height: 45px;
    }

</style>
 </head>
 <body>
 <div class="mt-2">
		<u><h2 class="ml-4">Add NOTICE</h2></u>
		<form method="POST" action="../notice/addNotice" class="form-container ml-4 w-50 mt-4">
			<div>
				<label for="Title">Date</label>
				<input type="text" name="date" placeholder="Enter date" class="form-control" required/>
			</div>
			<div>
				<label for="descriptiom">Desription</label>
				<input type="textarea" name="description" placeholder="Enter notice" class="form-control" required/>
			</div>
            <div class="col mt-2">
								Enter Files here<input type="file" name="noticefile" />
							</div>
				<input type="Submit" name="addnotice" value="ADD" class="btn btn-warning mt-2"   >
		</form>f
	</div>
	<?php
    require_once "./view/shared/footer.php";
?>
 </body>
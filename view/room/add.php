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
	body {
    font-family: Arial, Helvetica, sans-serif;
  	}
	.button {
    border: 1 px solid #fff;
	font: 15px;
	width: 120px;
    border-radius: 5px;
    cursor: pointer;
  	}
	  .button:hover {
    background: #4b71e2;
	color: #fff;
  }
  	.model {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.5);
  }
  .model-content {
	background: #006600;
    margin: 10% auto;
    width: 50%; 
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.4), 0 7px 20px 0 rgba(0, 0, 0, 0.2);
    animation-name: modalopen;
    animation-duration: var(--modal-duration);
  }
  
  .model-header h2,
  .model-footer h3 {
    margin: 0;
  }
  
  .model-header {
    background: var(--modal-color);
    padding: 2px;
    color: #000;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
  }
  
  .model-body {
    padding: 60px 35px;
	font-family: Arial, Helvetica, sans-serif;
	background: #6aa8a2;
	font-size: 17px;
	font-weight: bold;
  }
  
  /*.model-footer {
    background: var(--modal-color);
    padding: 10px;
    color: #fff;
    text-align: center;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
  }*/
  .close {
    color: #000;
    float: right;
    font-size: 25px;
  }
  .close:hover,
  .close:focus {
    color: #fff;
    text-decoration: none;
    cursor: pointer;
  }
  .button2 {
    border: 1 px solid #fff;
	font: 15px;
    border-radius: 5px;
    cursor: pointer;
  	}
	  .button2:hover {
	background: #066e0b;
  }
</style>
<body>
	<div class="w-100">    
		<div class="ml-5 mr-5 mt-3">
			<u><h1 align="center">Add New Room</h1></u>
			<form method="POST" action="../room/AddRoom" class="form-container mt-2 w-25">
			<div>
				<label for="rid">Room_id</label>
				<input  type="text" name="rid" class="form-control" placeholder="Enter Room id" required/>
			</div>
			<div>
				<label for="block">Block</label>
				<input  type="text" name="block" class="form-control" placeholder="Enter Block" required/>
			</div>
			<div>
				<label for="room no">Room No</label>
				<input type="number" name="roomnumber" placeholder="Enter Room number" class="form-control" required/>
			</div>
			<div>
				<label for="no of seates">No of Beds</label>
				<input type="number" name="no_of_bed" placeholder="Enter number of seates" class="form-control" required/>
			</div>
			<div>
				<label for="rent">Rent</label>
				<input type="number" name="rent" placeholder="Enter Rent" class="form-control" required/>
			</div>
			<div>
				<label for="status">Available  seats</label>
				<input  type="number" name="status" class="form-control" placeholder="no. of available beds" required/>
			</div>
				<!-- <Button class="btn btn-warning mt-3 button" type="submit" >Add</button> -->
				<input type="submit" name="insert" value="Insert" class="btn btn-warning mt-3 button" />
			</form>
			<div id="mymodel" class="model">
    			<div class="model-content">
      				<div class="model-header">
        				<span class="closebtn">&times;</span>
        				<h2 align="center">Room Added!</h2>
      				</div>
      				<div class="model-body">
        				<p class="main-content">A New Room added Successfully!</p>
						<Button class="btn btn-success button2" type="submit">Ok</button>
      				</div>
      				<!--div class="model-footer">
        				<h3>Modal Footer</h3>
      				</div-->
    			</div>
  			</div>
			<script>
				var modal = document.getElementById('mymodal');
				var modalBtn = document.getElementById('modalbtn');
				var closeBtn = document.getElementsByClass('closebtn')[0];

				// Events
				modalBtn.addEventListener('click', openModal);
				closeBtn.addEventListener('click', closeModal);
				window.addEventListener('click', outsideClick);

				// Open
				function openModal() {
				modal.style.display = 'block';
				}

				// Close
				function closeModal() {
				modal.style.display = 'none';
				}

				// Close If Outside Click
				function outsideClick(e) {
				if (e.target == modal) {
					modal.style.display = 'none';
				}
				}
			</script>
		</div>	
	</div>
	<?php
    require_once "./view/shared/footer.php";
?>
</body>
<!--div id="my-modal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h2>Modal Header</h2>
      </div>
      <div class="modal-body"-->
				<!--div id="mymodal">
				<div>
					<div>
						<span class="close">&times;</span>
						<p>I am modal......</p>
						<p> hello hello</p>
						<h2>Modal Header</h2>
					</div>
					<div class="modal-body">
						<p>This is my modal</p>
					</div>
					<div class="modal-footer">
						<h3>Modal Footer</h3>
					</div>
				</div>
			</div-->
		
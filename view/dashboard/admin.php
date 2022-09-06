<?php
	require_once "./view/shared/adminmenu.php";
?>
<body style="background-color: grey;">
<!--
<div class="row w-100">
	<div class="bg-light text-center card-deck" style="width: 175px;height: 150px;margin-left: 5%; margin-top: 5%;">
		<div class="card-body">
			<label class="card-title">Total Student</label>
			<h2>243</h2>	
		</div>
	</div>
	
	<div class="bg-light text-center card-deck" style="width: 175px;height: 150px;margin-left: 5%; margin-top: 5%;">
		<div class="card-body">
			<label class="card-title">Total Rooms</label>
			<h2>143</h2>	
		</div>
	</div>
	
	<div class="bg-light text-center card-deck" style="width: 175px;height: 150px;margin-left: 5%; margin-top: 5%;">
		<div class="card-body">
			<label class="card-title">Total Course</label>
			<h2>12</h2>	
		</div>
	</div>
</div>-->
<!-- style="margin-top: 100px" -->
  <div class="container text-center p-4 "><h1><b>WELCOME!</b></h1></div>
    <div class="container">
      <div class="card-deck">
        <div class="card bg-primary text-light">
          <a href="../Room/index">
            <div class="card-body text-center text-light">
              <h3>Total Rooms</h3>
              <p class="card-text">12</p>
            </div>
          </a>
        </div>
        <div class="card bg-warning ">
          <a href="../Student/index">
            <div class="card-body text-center text-light">
              <h3>Total Students</h3>
              <p class="card-text">12</p>
            </div>
          </a> 
        </div>
      </div>
      <br>
      <div class="card-deck">
        <div class="card bg-danger text-light">
          <a href="../Room/index">
            <div class="card-body text-center text-light">
              <h3>Room Requests</h3>
              <p class="card-text">12</p>
            </div>
          </a>
        </div>
        <div class="card bg-success ">
          <a href="../Student/index">
            <div class="card-body text-center text-light">
              <h3>Student Requests</h3>
                <p class="card-text">12</p>
            </div>
          </a> 
        </div>
      </div>
    </div>
  </div>
    <!-- <div class="row mt-5 w-100" >
          <a href="../Student/index" class="text-light">
              <div class="bg-dark col ml-5 w-75 p-4">
                  <h3>Total Students</h3>
                  <h1>
                    
                      </h1>
              </div> -->
      
          <!-- <a href="../Room/index" style="color: white;">
              <div class="bg-dark col ml-5 w-75 p-4">
                  <h3>Total Rooms</h3>
                  <h1>
                  </h1>
              </div>
          </a>
          <a href="../course/index" style="color: white;">
              <div class="bg-dark col ml-5 w-75 p-4">
                  <h3>Total Courses</h3>
                  <h1>12</h1>
              </div>
          </a>
          <a href="" style="color: white;">
              <div class="bg-dark col ml-5 w-75 p-4">
                  <h3>Student Requests</h3>
                  <h1>54</h1>
              </div>
          </a>
      </div> -->
  <?php
    require_once "./view/shared/footer.php";
  ?>
</body>
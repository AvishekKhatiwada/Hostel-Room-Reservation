<?php 
	require_once "./view/shared/usermenu.php";
?>
<body>

 <div class="container">
<div class="card bg-info text-dark">
    <div class="card-body">
    <center>
            <img src="/project/photos/Student/roman@gmail.com.png" style="padding:1px; background-color:white;" class="rounded-circle img" height="150" width="150">
           <br><br> <h4 class="profile">Avishek Khatiwada</h4>
            <p class="pdef">
                email@gmail.com <br>
                mechingar jhapa <br>
                 5522002147 <br>
            </p>
        </center>
        <br>
 
        <!-- <button type="button" class="btn btn-warning mr-auto" data-toggle="modal" data-target="#changepassword">
            <i class="fas fa-lock"></i>
            Change Password
        </button> -->
 
         <a href ="#"  class="btn btn-warning mr-auto" data-toggle="modal"
                                data-target="#changepassword">
                               <i class="fas fa-lock"></i>
            Change Password
                            </a>
 
        <a href="../user/userLogout" class="btn btn-danger float-right">
            <i class="fas fa-sign-out-alt"></i>
            Logout
        </a>
    </div>
  </div>
  </div>
  
<?php
    require_once "./view/shared/footer.php";
?>
</body>
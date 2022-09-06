<?php
   session_start();
	class UserController{
      public $user;
		function __construct(){
			require_once "model/user.php";
	   		$this->user=new user();
      }
	  

      function login()
      {
			include "./view/user/login.php";
		}
	  function userLogout(){
		if(isset($_SESSION['id'])){
			session_destroy();
			header("location: ../user/login");
		}
	}
	function userProfile(){
		if(isset($_SESSION['id'])){
			include "./view/user/profile.php";
		}
	}function LoginCheck()
      {
         if(empty($_POST["username"]) && empty($_POST["password"])){
				echo "Enter data in all feild";
			}
         else{
            $username=trim($_POST["username"]);
            $password= $_POST["password"];
   		      if(!filter_var($username,FILTER_VALIDATE_EMAIL)) {
					   echo "<script> alert('Please enter valid email');
					   location = 'login';
					   </script>";
               }
               $this->user->username=$username;
				$this->user->password=$password;
			
				$result=$this->user->checkUser();
				$rowcount=mysqli_num_rows($result);
				if($rowcount==0){
					echo "<script> alert ('Incorrect email or password!'); 
					   location='login';
                 </script>";
					}
					else{
						$row = $result->fetch_assoc();
						$_SESSION['id'] = uniqid();
						$_SESSION['sid'] = $row['sid'];
						header('Location: ../dashboard/user');
					} 
         }
   	}
	} 
?>
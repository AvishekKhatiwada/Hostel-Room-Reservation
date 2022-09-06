<?php
	session_start();														
	class AdminController{
		public $admin;
		function __construct(){
			require_once "model/admin.php";
	   		$this->admin=new admin();
	  	}
		function logout(){
			if(isset($_SESSION['id'])){
				session_destroy();
				header ("location: ../admin/login");
			}
		}

		function login(){
			include "./view/admin/login.php";
		}
		function LoginCheck(){
			if(empty($_POST["username"]) && empty($_POST["password"])){
				echo "Enter data in all feild";
			}
			else{
				$username=trim($_POST["username"]);
				$password= $_POST["password"];
			
				// validation part
				if(!filter_var($username,FILTER_VALIDATE_EMAIL)) {
					echo "<script> alert('Please enter valid email');
					location = 'login';
					</script>";
				}
			
				$this->admin->username=$username;
				$this->admin->password=$password;
			
				$result=$this->admin->checkAdmin();
				$rowcount=mysqli_num_rows($result);
				if($rowcount==0){
					echo "<script> alert ('Incorrect email or password!'); 
					location='login';  </script>";
					}
					else{
						$row = $result->fetch_assoc();
			
						$_SESSION['id'] = uniqid();
						$_SESSION['aid'] = $row['aid'];
						header('Location: ../dashboard/admin');
					}               
			}
		}
   		// 	$username=$_POST["username"];
   		// 	$password=$_POST["password"];

   		//     if($username=="avishek" && $password=="admin"){
        //          //redirect to admin dashboard
        //       header("Location: ../Dashboard/admin");
   		//     	     //include "./view/Dashboard/admin.php";
   		//     }
        //     //else 
        //     //if($username=="user" && $password=="user"){
        //     	//redirect to user dashboard
        //        //header("Location: ../Dashboard/User");
        //     //}
   		//     else
        //      {
   		//         echo '<script>alert("Username or Password Incorrect !");
   		//         </script>';
   		//    }
		// }
}
?>
<?php
	session_start();
	class studentController{
	
		public $student;
		function __construct(){
			require_once "model/student.php";
	   		$this->student=new Student();
	  	}

		function index(){
			if(isset($_SESSION['id'])){
			//call function to select all records
			$result=$this->student->selectAllRecords();
			include "./view/student/index.php";
			}
		}
		
		function add(){
			if(isset($_SESSION['id'])){
			include "./view/student/add.php";
			}
		}

		function requests(){
			if(isset($_SESSION['id'])){
			//call function to select all records
			$result=$this->student->selectRequests();
			include "./view/student/requests.php";
		}
	}

		function register()     	{
        	include "./view/user/signup.php";
      	}

		function update(){
			//receive bid here
			$sid=$_GET["sid"];
			//send data to model
			$this->student->sid=$sid;
			//calling delete function
			$result=$this->student->selectBySid();
			include "./view/student/update.php";
		}

		function addstudent(){
			if(isset($_SESSION['id'])){
				if(isset($_POST["addstudent"]))
				{
				  $fname=$_POST["fname"];
				  $lname=$_POST["lname"];
				  $email=$_POST["email"];
				  $gender=$_POST["gender"];
				  $course=$_POST["course"];
				  $number=$_POST["number"];
				  $address=$_POST["address"];
				  $simage=$_FILES["simage"];

				  if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["email"]) 
				  	||  empty($_POST["number"]) || empty($_POST["course"])  || empty($_POST["address"]))
				  {
				    echo "Enter data in all field";
					}
				   else{

				//   if($simage['size'] == 0 || $simage['error'] > 0) {
				// 	echo "<script> alert ('Please upload a photo.') </script>";
				//  }
				  //validate here

				  //check email existance
					$this->student->email=$email;
				  	if(!($this->student->checkMail())){
						echo "<script> alert('email already exist!')</script>";
				// 	 // die;
				  }

				  $imageExtension="";
				  if($simage['type']=="image/jpeg"){
					  $imageExtension=".jpeg";
				  }elseif($simage['type']=="image/jpg"){
					$imageExtension=".jpg";
				  }elseif($simage['type']=="image/png"){
					$imageExtension=".png";
				  }else{
					$imageExtension=".svg";
				  }

				  $simage['name']=$_POST['email'].$imageExtension;
				  $imageDestination="photos/student/".$simage['name'];

				  if(move_uploaded_file($_FILES['simage']['tmp_name'],$imageDestination)){
					  echo "<script>console.log('Image Moved')</script>";
				  } else{
					  echo "<script>console.log('image cannot be moved')</script>";
				  }
				 

				  //send data to model
				  $this->student->fname=$fname;
				  $this->student->lname=$lname;
				  $this->student->email=$email;
				  $this->student->gender=$gender;
				  $this->student->course=$course;
				  $this->student->number=$number;
				  $this->student->address=$address;
				  //$this->student->image=$simage;
				  $this->student->image=$imageDestination;
				  if($this->student->insertStudent()){
					  echo "<script>alert ('Student added successfully!')
					  location= 'index';
					  </script>";
				  }else{
					  echo "<script> alert('Unable to insert record!');
					  location= 'register'
					  </script>";
				  }
				}
			 }
			}
		}
	function registerCheck(){
		if(isset($_POST["register"]))
		{
		  $fname=$_POST["fname"];
		  $lname=$_POST["lname"];
		  $email=$_POST["email"];
		  $gender=$_POST["gender"];
		  $course=$_POST["course"];
		  $number=$_POST["number"];
		  $address=$_POST["address"];
		  $simage=$_FILES["simage"];

		  if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["email"]) 
			  ||  empty($_POST["number"]) || empty($_POST["course"])  || empty($_POST["address"]))
		  {
			echo "Enter data in all field";
			}
		   else{

		//   if($simage['size'] == 0 || $simage['error'] > 0) {
		// 	echo "<script> alert ('Please upload a photo.') </script>";
		//  }
		  //validate here

		  //check email existance
			$this->student->email=$email;
			  if(!($this->student->checkMail())){
				echo "<script> alert('email already exist!')</script>";
		// 	 // die;
		  }

		  $imageExtension="";
		  if($simage['type']=="image/jpeg"){
			  $imageExtension=".jpeg";
		  }elseif($simage['type']=="image/jpg"){
			$imageExtension=".jpg";
		  }elseif($simage['type']=="image/png"){
			$imageExtension=".png";
		  }else{
			$imageExtension=".svg";
		  }

		  $simage['name']=$_POST['email'].$imageExtension;
		  $imageDestination="photos/avi/".$simage['name'];

		  if(move_uploaded_file($_FILES['simage']['tmp_name'],$imageDestination)){
			  echo "<script>console.log('Image Moved')</script>";
		  } else{
			  echo "<script>console.log('image cannot be moved')</script>";
		  }
		 

		  //send data to model
		  $this->student->fname=$fname;
		  $this->student->lname=$lname;
		  $this->student->email=$email;
		  $this->student->gender=$gender;
		  $this->student->course=$course;
		  $this->student->number=$number;
		  $this->student->address=$address;
		  //$this->student->image=$simage;
		  $this->student->image=$imageDestination;
		  if($this->student->registerStudent()){
			  echo "<script>alert ('Request Sent successfully!')
			  location= '../user/login';
			  </script>";
		  }else{
			  echo "<script> alert('Unable to insert record!');
			 	location= 'register'
			  </script>";
		  }
		}
	 // }
	}
	}
		// function registerCheck(){
		// 	if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["email"]) || empty($_POST["gender"])
		// 	 || empty($_POST["symboleno"]) || empty($_POST["course"]) || empty($_POST["dob"]) || empty($_POST["number"])
		// 	  ||empty($_POST["address"]))
		// 	  {
		// 		  echo "Enter data in all field";
		// 	  }
		// 	  else{
		// 		  $fname=$_POST["fname"];
		// 		  $lname=$_POST["lname"];
		// 		  $email=$_POST["email"];
		// 		  $gender=$_POST["gender"];
		// 		  $symboleno=$_POST["symboleno"];
		// 		  $course=$_POST["course"];
		// 		  $dob=$_POST["dob"];
		// 		  $number=$_POST["number"];
		// 		  $address=$_POST["address"];
		// 		  $simage=$_FILES["simage"];

		// 		//   if($simage['size'] == 0 || $simage['error'] > 0) {
		// 		// 	//echo "<script> alert ('Please upload a photo.') </script>";
		// 		//  }
		// 		  //validate here

		// 		  //check email existance
		// 			$this->student->email->$email;
		// 		  if(!($this->student->checkMail())){
		// 				echo "<script> alert('email already exist!')</script>";
		// 		// 	 // die;
		// 		  }
		// 		  //send data to model
		// 		  $this->student->fname=$fname;
		// 		  $this->student->lname=$lname;
		// 		  $this->student->email=$email;
		// 		  $this->student->gender=$gender;
		// 		  $this->student->symboleno=$symboleno;
		// 		  $this->student->course=$course;
		// 		  $this->student->dob=$dob;
		// 		  $this->student->number=$number;
		// 		  $this->student->address=$address;
		// 		  $this->student->image=$simage;

		// 		  if($this->student->insertStudent()){
		// 			  echo "<script>alert ('Student added successfully!')
		// 			  location= 'index';
		// 			  </script>";
		// 		  }else{
		// 			//   echo "<script> alert('Unable to insert record!');
		// 			//   location= 'register'
		// 			//   </script>";
		// 		  }
		// 	  }
		// }

		//deleting record
		public function deleteStudent(){
			if(isset($_SESSION['id'])){
					//receives rid
					$sid=$_GET["sid"];
					
					if(is_numeric($sid)){
						//send data to model
						$this->student->sid=$sid;
						//calling delete function
						$result=$this->student->deleteRecord();
						if($result==TRUE){
							echo "<script>alert('Deleted Student Recod Successfully!');
									location='index';
								</script>";
						}else{
							echo "<script>alert('Failed to Delete Student Record!');
									location='index';
								</script>";
							}	
					}else{
						echo "Something Went Wrong!!";
					}
			}
			}
			//deleting record
		public function deleteRequest(){
			if(isset($_SESSION['id'])){
					//receives rid
					$sid=$_GET["sid"];
					
					if(is_numeric($sid)){
						//send data to model
						$this->student->sid=$sid;
						//calling delete function
						$result=$this->student->deleteStudentRequest();
						if($result==TRUE){
							echo "<script>alert('Deleted Student request Successfully!');
									location='index';
								</script>";
						}else{
							echo "<script>alert('Failed to Delete Student Request!');
									location='index';
								</script>";
							}	
					}else{
						echo "Something Went Wrong!!";
					}
			}
			}
			function acceptRequest(){
				if(isset($_SESSION['id'])) {
					$sid = $_GET['sid'];
			  
					if(is_numeric($sid)) {
						 $this->student->sid=$sid;
			  
						 if($this->student->approveStudent()) {
							echo "<script>alert('student request accepted.');
							location = 'request';
							</script>";
						 } else {
							echo "<script>alert('Somthing went wrong. Try again!');
							location = 'request';
							 </script>";
						 }
					} else {
					   echo "Somthing went wrong";
					}
		 }
			}
			function search(){
				if(isset($_SESSION['id'])) {   
					$key = $_GET['search'];
				   $result = $this->student->selectRecordBYKey($key);
				   require_once "./view/student/index.php";
				} else {
				   header("Location: ../student/index");
				   }
			   }
	}
?>
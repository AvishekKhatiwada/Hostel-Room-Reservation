<?php
	session_start();
	class DashboardController{
		public $admin;
		function __construct(){
			require_once "model/admin.php";
	   		$this->admin = new admin();
	  	}
	function admin(){
			if(isset($_SESSION['id'])) {

				//$result1=$this->admin->countRooms();
			// 	//$this->result1 = $this->admin->counttotalstudents();
			$result=$this->admin->countStudents();				
			// 	//    $this->result3 = $this->librarian->countBooks();
			// 	//    $this->result4 = $this->librarian->countStudents();
				//    $this->result5 = $this->librarian->countBorrowed();
		
			include "./view/dashboard/admin.php";
	}
	else{
		header("location: ./view/admin/login.php");
	}
	}
		function user(){
			if(isset($_SESSION['id'])){
				include "./view/dashboard/user.php";
			}
			else {
				header("location: ./view/user/login.php");
			}
		}
	}
?>
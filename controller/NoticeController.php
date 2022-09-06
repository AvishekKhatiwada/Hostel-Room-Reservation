<?php
	session_start();
	class NoticeController{
		public $notice;
		function __construct(){
			require_once "model/notice.php";
	   		$this->notice=new notice();
	  	}
		function index(){
			if(isset($_SESSION['id'])){
			//call function to select all records
			$result=$this->notice->selectAllRecords();
			require_once "./view/notice/index.php";
			}
		}
		function uindex(){
			if(isset($_SESSION['id'])){
			//call function to select all records
			$result=$this->notice->selectAllRecords();
			require_once "./view/notice/uindex.php";
			}
		}
		function add(){
			if(isset($_SESSION['id'])){
			include "./view/notice/add.php";
			}
		}
		function addNotice()
		{
			if(isset($_SESSION['id'])){
			if(isset($_POST["addnotice"]))
			{
				$date=$_POST["date"];
				$description=$_POST["description"];
				//$noticefile=$_FILES["roomnumber"];
				//validation
				if(empty($description)){}
				
				else{
					//send data to model
					$this->notice->date=$date;
					$this->notice->description=$description;
				//calling insert function
                $result=$this->notice->insertNotice();
				if($result==TRUE)
				{
					echo "<script> alert ('Inserted Successfully!'); 
					 location='index';
					 </script>";
				}
				else
					{
                		echo "<script> alert ('Failed to Insert!'); 
						location='add';
                     	</script>";
					}
				}
			}
			}
		}
		public function deleteNotice(){
			if(isset($_SESSION['id'])){
					//receives rid
					$sno=$_GET["sno"];
					
					if(is_numeric($sno)){
						//send data to model
						$this->notice->sno=$sno;
						//calling delete function
						$result=$this->notice->deleteRecord();
						if($result==TRUE){
							echo "<script>alert('Deleted Successfully!');
									location='index';
								</script>";
						}else{
							echo "<script>alert('Failed to Delete!');
									location='index';
								</script>";
							}	
					}else{
						echo "Something Went Wrong!!";
					}
			}
			}
	}
?>
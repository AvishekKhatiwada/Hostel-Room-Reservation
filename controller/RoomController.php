<?php 
	session_start();
	class RoomController{
		public $room;
		function __construct(){
			require_once "model/Room.php";
	   	$this->room=new room();
	  	}
		function index(){
			if(isset($_SESSION['id'])){
			//call function to select all records
			$result=$this->room->selectAllRecords();
			require_once "./view/room/index.php";
			}
		}
		function add(){
			if(isset($_SESSION['id'])){
			require_once "./view/room/add.php";
			}
		}
		function requests(){
			if(isset($_SESSION['id'])){
			//call function to select room requests
			$result=$this->room->selectRoomRequests();
			require_once "./view/room/requests.php";
			}
		}
		function update(){
			if(isset($_SESSION['id'])){ 
			//receives rid here
			$rid=$_GET['rid'];
			//send data to model
			$this->room->rid=$rid;
			$result=$this->room->selectById();
			require_once "./view/room/update.php";
			}
		}
		function updateRoom(){
			if(isset($_SESSION['id'])){
				if(isset($_POST["update"])){

					$rid=$_POST["rid"];
					$block=$_POST["block"];
					$roomnumber=$_POST["roomno"];
					$no_of_bed=$_POST["noofbeds"];
					$rent=$_POST["rent"];

					$this->room->rid=$rid;
					$this->room->block=$block;
					$this->room->roomnumber=$roomnumber;
					$this->room->no_of_bed=$no_of_bed;
					$this->room->rent=$rent;

					$result=$this->room->updateRoomDetails();
					if($result==TRUE)
					{
						echo "<script> alert ('updated Successfully!'); 
						 location='index';
						 </script>";
					}
					else
						{
							echo "<script> alert ('Failed to Insert!'); 
							location='index';
							 </script>";
						}
				}
			}
		}
		function uindex(){
			if(isset($_SESSION['id'])){
			$result=$this->room->selectAllRecords();
			//$this->room->temporary = $result; 
			require_once "./view/room/user/index.php";
			}
		}
		function AddRoom()
		{
			if(isset($_SESSION['id'])){
			if(isset($_POST["insert"]))
			{
				
				$rid=$_POST["rid"];
				$block=$_POST["block"];
				$roomnumber=$_POST["roomnumber"];
				$no_of_bed=$_POST["no_of_bed"];
				$rent=$_POST["rent"];
				$status=$_POST["status"];
				//validation
				if(empty($rid)){}
				
				else{
					//send data to model
					$this->room->rid=$rid;
					$this->room->block=$block;
					$this->room->roomnumber=$roomnumber;
					$this->room->no_of_bed=$no_of_bed;
					$this->room->rent=$rent;
					$this->room->status=$status;
				//calling insert function
                $result=$this->room->insertRoom();
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
		public function deleteRoom(){
			if(isset($_SESSION['id'])){
					//receives rid
					$rid=$_GET["rid"];
					
					if(is_numeric($rid)){
						//send data to model
						$this->room->rid=$rid;
						//calling delete function
						$result=$this->room->deleteRecord();
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
				// function accept() {
				// 	if(isset($_SESSION['id'])) {
				// 	$sid = $_GET['sid'];
				
				// 	if(is_numeric($sid)) {
				// 			$this->room->rid=$rid;
				// 			$this->room->;
				
				// 			if($this->book->acceptBook()) {
				// 			echo "<script>alert('Successfully book request accepted.');
				// 			location = 'request';
				// 			</script>";
				// 			} else {
				// 			echo "<script>alert('Somthing went wrong. Try again!');
				// 			location = 'request';
				// 				</script>";
				// 			}
				// 	} else {
				// 		echo "Somthing went wrong";
				// 	}
				// 	}
				// }
		// public function updateRoom(){
		// 	if(isset($_SESSION['id'])){
		// 	if(isset($_POST["update"])){
		// 		$rid=$_POST["rid"];
		// 		$block=$_POST["block"];
		// 	}
		// 	}
		// }
		function requestRoom() {
			if(isset($_SESSION['id']) && isset($_SESSION['sid'])) {
			   $rid= $_GET['rid'];
		
			   // don't forgot to validate it
		
			   // send it to model
			  $this->room->rid=$rid;
			  //$result=$this->room->selectById();
			 // $this->room->setRid($_SESSION['sid']);

			  $result=$this->room->requestRoom();
			  if($result==TRUE) {
				 echo "<script>alert('Successfully room requested.');
					   location = 'uindex';
					</script>";
			  } else {
				 echo "<script>alert('Somthing went wrong. Try again!');
					 location = 'uindex';
					</script>";
			  }
		
			//}
		 }
	}
	function deleteRequest() {
		if(isset($_SESSION['id'])) {
		   //$sid = $_session['sid'];
		   $rid = $_GET['rid'];
	 
		//    if(is_numeric($sid)) {
				//$this->room->sid=$sid;
				$this->room->rid=$rid;
	 
				if($this->room->declineRoomRequest()) {
				   echo "<script>alert('rooom request declined.');
				   location = '../room/requests';
				   </script>";
				} else {
				   echo "<script>alert('Somthing went wrong. Try again!');
				   location = '../room/requests';
					</script>";
				}
			 } else {
			  echo "Somthing went wrong";
		   }
		}
	function search(){
		if(isset($_SESSION['id'])) {  
			 
			$key = $_GET['search'];
		   $result = $this->room->selectRecordBYKey($key);
		   require_once "./view/room/index.php";
		} else {
		   header("Location: ../room/index");
		   }
	   }
	   function userSearch(){
		if(isset($_SESSION['id'])) {  
			 
			$key = $_GET['search'];
		   $result = $this->room->selectRecordBYKey($key);
		   require_once "./view/room/user/index.php";
		} else {
		   header("Location: ../room/uindex");
		   }
	   }
	   function accept(){
			if(isset($_SESSION['id'])) {
			   $sid = $_GET['sid'];
			   $rid = $_GET['rid'];
		 
			   if(is_numeric($sid)) {
					$this->room->sid=$sid;
					$this->room->rid=$rid;
		 
					if($this->room->acceptRoom()) {
					   echo "<script>alert('Room request accepted.');
					   location = '../room/requests';
					   </script>";
					} else {
					   echo "<script>alert('Somthing went wrong. Try again!');
					   location = '../room/requests';
						</script>";
					}
			   } else {
				  echo "Somthing went wrong";
			   }
	}
}
	}

?>
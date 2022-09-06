<?php 
	session_start();
	class CourseController{
		public $course;
		function __construct(){
			require_once "model/course.php";
	   		$this->course=new Course();
	  	}
		function index(){
			if(isset($_SESSION['id'])){
			//call function to select all records
			$result=$this->course->selectAllRecords();
			include "./view/course/index.php";
			}
			
		}
		function add(){
			if(isset($_SESSION['id'])){
			include "./view/course/add.php";
			}
		}
		function requests(){
			if(isset($_SESSION['id'])){
			include "./view/course/requests.php";
			}
		}
		function update(){
			if(isset($_SESSION['id'])){
			require_once "./view/course/update.php";
			}
		}
		function addCourse()

		{
			if(isset($_SESSION['id'])){
			if(isset($_POST["addcourse"]))
			{
				//$id=$_POST["id"];
				$title=$_POST["title"];
				$fees=$_POST["fees"];
				$duration=$_POST["duration"];

				//validation
				if(empty($title)){}
				
				else{
					//send data to model
					//$this->course->id=$id;
					$this->course->title=$title;
					$this->course->fees=$fees;
					$this->course->duration=$duration;
				//calling insert function
                $result=$this->course->insertCourse();
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
		public function deleteCourse(){
			if(isset($_SESSION['id'])){
					//receives id
					$id=$_GET["id"];
					
					if(is_numeric($id)){
						//send data to model
						$this->course->id=$id;
						//calling delete function
						$result=$this->course->deleteCourse();
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
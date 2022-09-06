<?php
    class Course{
        public $id;
        public $title;
        public $fees;
        public $duration;

        private $conn="";
        function __construct(){
        require_once "service/Cofig.php";
        $this->conn=Config::getConnection();
        }
        //displaying records
        public function selectAllRecords(){
            $sql="SELECT * FROM coursedetails ORDER BY id ASC";
            try{
                $result=$this->conn->query($sql);
                return $result;
            }catch(exception $e){

            }
        }
        public function insertCourse(){
            //query to insert course
            $sql="INSERT INTO coursedetails(`title`,`fees`,`duration`) VALUES ('$this->title','$this->fees','$this->duration')";
            try{
                $result=$this->conn->query($sql);
                return $result;
            }catch(exception $e) {

            }     
        }
         //deleting records
         function deleteCourse(){    
            $sql="DELETE FROM coursedetails WHERE id='$this->id'";
            $result=$this->conn->query($sql);
             return $result;
        }
    }



?>
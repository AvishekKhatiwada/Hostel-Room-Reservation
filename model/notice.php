<?php
    class Notice{
        public $sno;
        public $description;
        public $date;

        private $conn="";
        function __construct(){
        require_once "service/Cofig.php";
        $this->conn=Config::getConnection();
        }
        
  
        public function insertNotice(){
            //query to insert book
            $sql="INSERT INTO notice(`date`,`description`) VALUES ('$this->date','$this->description')";
            try{
                $result=$this->conn->query($sql);
                return $result;
            }catch(exception $e) {

            }   
        }
        //displaying records
        public function selectAllRecords(){
            $sql="SELECT * FROM notice ORDER BY sno ASC";
            try{
                $result=$this->conn->query($sql);
                return $result;
            }catch(exception $e){

            }
        }
        //deleting records
        function deleteRecord(){
            $sql="DELETE FROM notice WHERE sno='$this->sno'";
            $result=$this->conn->query($sql);
             return true;
        }
    }



?>
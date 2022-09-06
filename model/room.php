<?php
    class Room{
        public $rid;
        public $block;
        public $roomno;
        public $noofbed;
        public $status;
        public $rent;
        public $sid;

        public $temporary;
        private $conn="";
        // public static function getConnection(){
  	  	// $conn=new mysqli("localhost","root","","hostel");
  	  	// return $conn;
  	    //  }
        function __construct(){
        require_once "service/Cofig.php";
        $this->conn=Config::getConnection();
        }

        function updateRoom(){
            $sql="UPDATE rooms set '$this->rid','$this->block','$this->roomnumber','$this->no_of_bed','$this->rent' where rid='$this->rid'";
            $result=$this->conn->query($sql);
                return $result;
        }

        public function insertRoom(){
            //query to insert book
            $sql="INSERT INTO rooms(`rid`,`block`,`Room_no`,`no_of_beds`,`rent`,`status`) VALUES
             ('$this->rid','$this->block','$this->roomnumber','$this->no_of_bed','$this->rent',
             '$this->status')";
            try{
                $result=$this->conn->query($sql);
                return $result;
            }catch(exception $e) {

            }   
        }
        //displaying records
        public function selectAllRecords(){
            $sql="SELECT * FROM rooms ORDER BY rid ASC";
            // $sql="select * from roomsaccepted INNER JOIN rooms INNER JOIN
            //  studentdetails ON roomsaccepted.rid=rooms.rid AND roomsaccepted.sid = studentdetails.sid";
            try{
                $result=$this->conn->query($sql);
                return $result;
            }catch(exception $e){

            }
        }
        public function selectRoomRequests(){
            $sql="select * from roomrequests INNER JOIN rooms INNER JOIN studentdetails 
            ON roomrequests.rid=rooms.rid AND
             roomrequests.sid = studentdetails.sid";
            // echo $sql;
            $result=$this->conn->query($sql);
            return $result;
        }
        //deleting records
        public function deleteRecord(){
            $sql="DELETE FROM rooms WHERE rid='$this->rid'";
            $sql1="DELETE FROM roomrequests WHERE rid='$this->rid'";
            $sql2="DELETE FROM roomaccepted WHERE rid='$this->rid'";
            $this->conn->query("START TRANSACTION");
            $r1= $this->conn->query($sql);
            $r2= $this->conn->query($sql1);
            $r3= $this->conn->query($sql2);
         
            if($r1 && $r2 &r3) {
                $this->conn->query("COMMIT");
                return true;
            } else {
                $this->conn->query("ROLLBACK");
                return false;
            }
            return false;
                $result = $this->conn->query($sql);
                 return $result;
        }

        public function updateRoomDetails(){
            $sql="UPDATE rooms Set `rid`='$this->rid',`block`='$this->block',
            'room_no'='$this->roomnumber','no_of_beds'='$this->no_of_bed',
            'rent'='$this->rent' WHERE rid='$this->rid'";
            $result=$this->conn->query($sql);
            return $result;
        }
        function selectRecordBYKey($key) {
            $sql = "SELECT * FROM rooms WHERE `block` LIKE "."'$key"."%' OR rent LIKE "."'$key"."%'";
            $result = $this->conn->query($sql);
            return $result;
        }
        public function selectById(){
            $sql="SELECT * FROM rooms WHERE rid='$this->rid'";
             $result=$this->conn->query($sql);
             return $result;
         }
  
        // public function selectById(){
        //     $sql="SELECT `rid`,`block`,`room_no`,`no_of_beds`,`rent` FROM rooms WHERE rid='$this->rid'";
        //     $result=$this->conn->query($sql);
        //     return $result;
		// 		$rid=$_POST["rid"];
		// 		$block=$_POST["block"];
		// 		$roomnumber=$_POST["roomnumber"];
		// 		$no_of_bed=$_POST["no_of_bed"];
		// 		$rent=$_POST["rent"];
		// 		// $status=$_POST["status"];
		// 		//validation
		// 		if(empty($rid)){}
				
		// 		else{
		// 			//send data to model
		// 			$this->room->rid=$rid;
		// 			$this->room->block=$block;
		// 			$this->room->roomnumber=$roomnumber;
		// 			$this->room->no_of_bed=$no_of_bed;
		// 			$this->room->rent=$rent;
        //             room->requestRoom();
        //         }
		// 			// $this->room->status=$status;
		// 		//calling insert function
        //         //$result=$this->room->insertRoom();
        // }
        function declineRoomRequest() {
                    $sql = "DELETE FROM roomrequests WHERE  rid = '$this->rid'";
                    $sql1 = "UPDATE rooms SET `status` = `status` +1 WHERE rid= '$this->rid'";
            
                $this->conn->query("START TRANSACTION");
                $r1 = $this->conn->query($sql);
                $r2 = $this->conn->query($sql1);
            
                if($r1 && $r2) {
                    $this->conn->query("COMMIT");
                    return true;
                } else {
                    $this->conn->query("ROLLBACK");
                    return false;
                }
                return false;
                    $result = $this->conn->query($sql);
                    return $result;
        }
        function acceptRoom() {
            $sql = "INSERT INTO roomsaccepted (`sid`,`rid`) VALUES ('$this->sid','$this->rid')";
            $sql1="DELETE FROM roomrequests WHERE `sid`='$this->sid'";
            $this->conn->query("START TRANSACTION");
            $result1=$this->conn->query($sql);
            $result2=$this->conn->query($sql1);
            if($result1 && $result2){
                $this->conn->query("COMMIT");
                return true;
            }else {
                $this->conn->query("ROLLBACK");
                return false;
            }
             return $false;
        }
        function requestRoom() {
            $reqid1=$_SESSION['sid'];
            $sql = "INSERT INTO roomrequests(`sid`,`rid`) VALUES ('$reqid1','$this->rid')";
            $sql1 = "UPDATE rooms SET `status` = `status` -1 WHERE rid = '$this->rid'";
            //echo $sql;
            //$result=$this->conn->query($sql);
            //return $result;
            $this->conn->query("START TRANSACTION");
            $r1=$this->conn->query($sql);
            $r2=$this->conn->query($sql1);
            // //return $result ;
            // $r2 = $this->conn->query($sql1);
            if($r1 && $r2) {
                $this->conn->query("COMMIT");
                return true;
            }else {
                $this->conn->query("ROLLBACK");
                return false;
            }
                return false;
    }
}


?>
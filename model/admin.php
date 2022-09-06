<?php
        require_once "databaseConnection.php";

        function checkAdmin(){
        $sql= "SELECT aid FROM admin WHERE username='$this->username' AND password='$this->password'";
        $result= query($sql);
        return $result;
        }
        function countStudents(){
            $sql = "SELECT COUNT(sid) AS totalStudents FROM studentdetails"; 
            $result = $this->conn->query($sql);
            return $result;
        }
    //     function countRooms(){
    //         $sql = "SELECT COUNT(*) AS totalRooms FROM rooms"; 
    //         $result = $this->conn->query($sql);
    //         if($result){
    //             return $result;
    //         }
    //}
    
?>
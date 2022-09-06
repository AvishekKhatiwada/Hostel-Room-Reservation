<?php

    class Student{

    public $sid;
    public $fname;
    public $lname;
    public $gender;
    public $password;
    public $email;
    public $address;
    public $course;
    public $simage;
    public $rimage;
    public $number;
    public $conn;
    public $image;


    function __construct(){
        require_once "service/Cofig.php";
        $this->conn=Config::getConnection();
        }

  
     //displaying records
     public function selectAllRecords(){
        $sql="SELECT * FROM studentdetails ORDER BY sid ASC";
        try{
            $result=$this->conn->query($sql);
            return $result;
        }catch(exception $e){

        }
    }
     //displaying student requests
     public function selectRequests(){
        $sql="SELECT * FROM studentrequest ORDER BY sno ASC";
        try{
            $result=$this->conn->query($sql);
            return $result;
        }catch(exception $e){

        }
    }
    public function selectBySid(){
        $sql="SELECT * FROM studnetdetails WHERE sid='$this->sid'";
         $result=$this->conn->query($sql);
         return $result;
     }
    function checkMail1() {
        $sql = "SELECT email FROM studentdetails WHERE email = '$this->email'";
        $result = $this->conn->query($sql);
        if(mysqli_num_rows($result) === 0) {
            return true;
        }
        return false;
    } 
    function checkMail() {
        $sql = "SELECT email FROM studentrequest WHERE email = '$this->email'";
        $result = $this->conn->query($sql);
        if(mysqli_num_rows($result) === 0) {
            return true;
        }
        return false;
    }
    function insertStudent(){
            $this->password=$this->randomPassword();
            // $this->password=12345678;
            // $sql="INSERT INTO studentdetails(`fname`,`lname`,`address`,`gender`,
            // `course`,`email`,`password`,`number`,`image`) VALUES ('$this->fname','$this->lname',
            // '$this->addreas','$this->gender','$this->course','$this->email','$this->password','$this->number',
            // '$this->image')";
            $sql="INSERT INTO studentdetails(`fname`,`lname`,`address`,`gender`,
            `course`,`email`,`password`,`number`,`image`) VALUES ('$this->fname','$this->lname',
            '$this->address','$this->gender','$this->course','$this->email','$this->password',
            '$this->number','$this->image')";
            // echo $sql;

            if($this->conn->query($sql)){
                return true;
            }else{

            }
            return false;
    }
    function registerStudent(){
            $this->password=$this->randomPassword();
            $sql="INSERT INTO studentrequest(`fname`,`lname`,`address`,`gender`,
            `course`,`email`,`password`,`contactno`,`image`) VALUES ('$this->fname','$this->lname',
            '$this->address','$this->gender','$this->course','$this->email','$this->password',
            '$this->number','$this->image')";
            if($this->conn->query($sql)){
                return true;
            }else{

            }
            //echo $sql;
            // $result=$this->conn->query($sql);
            // return $result;
        }
    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i <6; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
public function deleteRecord(){
    $sql="DELETE FROM studentdetails  WHERE sid='$this->sid'";
    $result=$this->conn->query($sql);
     return true;
}
public function deleteStudentRequest(){
    $sql="DELETE FROM studentrequest  WHERE sid='$this->sid'";
    $result=$this->conn->query($sql);
     return true;
}
function selectRecordBYKey($key) {
    $sql = "SELECT * FROM studentdetails WHERE fname LIKE "."'$key"."%' OR lname LIKE "."'$key"."%' OR course LIKE "."'$key"."%' OR address LIKE "."'$key"."%'" ;
    $result = $this->conn->query($sql);
    return $result;
}
function approveStudent() {
    $sql="SELECT `fname`,`lname`,`address`,`gender`,`course`,`email`,`password`,`number`,`image` FROM studentrequest WHERE 
    `sid`='$this->sid'";
    $sql = "INSERT INTO studentdetails () VALUES ('$this->sid','$this->rid')";
    $result = $this->conn->query($sql);
     return $result;
}
//     function uploadImage() {
//         $fileTmpName = $this->image['tmp_name'];
//         $fileSize = $this->image['size'];
//         $fileError = $this->image['error'];
//         $fileType = $this->image['type'];
  
//          $fileExt = explode('.',$fileName);
  
//             $fileName = $this->image['name']; 
//             $fileActualExt = strtolower(end($fileExt));
  
//          $allow = array('jpg','jpeg', 'png', 'gif');
  
//              if(in_array($fileActualExt, $allow)) {
//              if($fileError === 0) {
//                  if($fileSize < 5000000) {
//                      $fileNameNew = uniqid('',true).".".$fileActualExt;
//                      $fileDest = '/project/photos/student'.$fileNameNew;
//                      $this->simage = $fileNameNew;
//                      move_uploaded_file($fileTmpName, $fileDest);
//                      return true;
//                  } 
//              }
//              return false;
//      }
//  }
 }
?>


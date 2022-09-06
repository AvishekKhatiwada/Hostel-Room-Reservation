<?php
    class User{
    public $sid;
    public $password;
    public $email;
    public $username;

    function __construct(){
        require_once "service/Cofig.php";
        $this->conn=Config::getConnection();
        }
        function checkUser(){
            $sql= "SELECT `sid` FROM studentdetails WHERE email='$this->username' AND password='$this->password'";
            $result=$this->conn->query($sql);
            return $result;
            }



    }




?>
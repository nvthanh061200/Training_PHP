<?php
    // đây là file để kết nối đên database
// require_once("/models/interface/interface_model.php");
    class DB {
        public $con;
        protected $servername = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $dbname = "mvc";

        function __construct(){
            $this->con = mysqli_connect($this->servername, $this->username, $this->password);
            mysqli_select_db($this->con, $this->dbname);
            mysqli_query($this->con, "SET NAMES 'utf8'");
        }


        public function query($sql){
            return mysqli_query($this->con,$sql);
        }
        public function get(){
            $sql= "select * from account";
            return $this->query($sql);
        }
        public function getAccountById($id){
            $sql= "select * from account where id= $id";
            return $this->query($sql);

        }


        public function deleteById($id){
            $sql="DELETE FROM account WHERE id = $id";
            $result=false;
            if($this->query($sql)){
                $result=true;
            }
            return $result;
        }
        public function addAccountBy($username, $password, $address,$fullname){
            $hashPassWord=password_hash($password, PASSWORD_DEFAULT);
            
            $sql="INSERT INTO `account`( `username`, `password`, `address`,fullname) VALUES ('".$username."','".$hashPassWord."','".$address."','".$fullname."')";
            return $this->query($sql);

        }
        public function updateAccountById($fullname,$address,$hashPassWord,$id){
            if(empty($fullname)){
                return 0;
            }
            if(empty($address)){
                return 0;
            }
            if(empty($hashPassWord)){
                return 0;
            }
            if(empty($id)){
                return 0;
            }
            else{
                $sql= "UPDATE `account` SET `fullname`='$fullname',`address`='$address',`password`='$hashPassWord' WHERE id=$id";
                $result= $this->query($sql);
                if($result){
                    return 1;
                }
                return 0;

            }
        }

    }

?>
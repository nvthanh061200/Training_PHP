<?php 

	class login_model extends DB{
		public function insert($username, $password,){
			$sql="INSERT INTO `account`( `username`, `password`) VALUES ('".$username."','".$password."')";
			$result=false;
			if(mysqli_query($this->con,$sql)){
				$result=true;
			}
			return $result;
		}
		public function login($username){
			$sql= "select * from account where username='$username'";
			return mysqli_query($this->con,$sql);
		}
	}
 ?>
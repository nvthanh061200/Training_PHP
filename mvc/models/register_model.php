<?php 
	
require_once ("interface/IRegisterModel.php");
class register_model extends DB  implements IRegisterModel{

		private $DB;

		public function __construct(){
			$this->DB= new DB();
		}

		public function register($username,$password,$address,$fullname){
            	$result = 0;

			if(empty($fullname)||empty($username) || empty($password) || empty($address)){
				return $result;
			}else{
				//check xem có kết quả trả về không
				$check_user=$this->check_username($username);
				if($check_user==0){
					// tài khoản đã tồn tại
	                  return $result;
	            }else{
					$sql="INSERT INTO `account`(  `username`, `password`, `address`, fullname) VALUES ('$username','$password','$address', '$fullname')";
					if($this->DB->query($sql)){
						$result=1;
					}
					return $result;
	            }
			}
		}

		public function check_username($username){
			$sql="select * from account where username='$username'";
			$row=$this->DB->query($sql);
			if(mysqli_num_rows($row)>0){
				return 0;
			}
			return 1;
		}

		public function check($username){
			$sql="select * from account where username='$username'";
			echo $this->DB->query($sql);
			
		}


		public function ajax_check_username($username){
			$sql="select * from account where username='$username'";
			$result= $this->DB->query($sql);

			if(mysqli_num_rows($result)>0){
				return 0;
			}else{
				return 1;
			}
		}
	}
 ?>
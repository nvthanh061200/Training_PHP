<?php 
	require_once("mvc/models/interface/IAccountModel.php");
	class accountmodel extends DB  implements IAccountModel{
		private $DB;
		function __construct(){
			$this->DB = new DB();
		}

		public function get(){
			 $result=$this->DB->get();
			 return $result;
		}
		public function deleteById($id){
			return $this->DB->deleteById($id);
		}
		public function addAccountBy($username, $password, $address,$fullname){
			return $this->DB->addAccountBy($username, $password, $address,$fullname);
		}
		public function getAccountById($id){
			return $this->DB->getAccountById($id);
		}
		public function updateAccountById($fullname,$address,$hashPassWord,$id){
			return $this->DB->updateAccountById($fullname,$address,$hashPassWord,$id);
			
		}
		public function updateF_A($fullname,$address,$id){
			$sql= "UPDATE `account` SET `fullname`='$fullname',`address`='$address' WHERE id=$id";
			if($this->DB->query($sql)){
				return 1;
			}return 0;

		}

		public function check_username($username){
			$sql="select * from account where username='$username'";
			$result= $this->DB->query($sql);

			if(mysqli_num_rows($result)>0){
				return 1;				
			}
			return 0;
		}
	}
 ?>
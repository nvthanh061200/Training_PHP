<?php 
	interface IAccountModel{
		public function get();
		public function deleteById($id);
		public function addAccountBy($username, $password, $address,$fullname);
		public function getAccountById($id);
		public function updateAccountById($username,$address,$password,$id);
	}
?>

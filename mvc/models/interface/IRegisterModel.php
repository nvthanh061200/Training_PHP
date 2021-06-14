<?php 

interface  IRegisterModel{
	public function register($username,$password,$address,$fullname);
	public function check_username($username);

}?>
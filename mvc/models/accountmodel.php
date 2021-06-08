<?php 
	class accountmodel extends DB{
		public function get(){
			$sql= "select * from account";
			return mysqli_query($this->con,$sql);
		}
		public function get2(){
			$sql= "select * from account";
			$result= mysqli_query($this->con,$sql);
			 $mang=[];

            while($ac=mysqli_fetch_array($result)){
                $obj=array(
                    "username"=>$ac["username"],
                    "password"=>$ac["password"],
                    "address" => $ac["address"],
                    "id"=>$ac["id"]
                );
                array_push($mang,$obj);
            }
            return json_encode($mang);
		}
		public function delete_acc($id){
			$sql="DELETE FROM account WHERE id = $id";
			$result=false;
			if(mysqli_query($this->con,$sql)){
				$result=true;
			}
			return json_encode($result);
		}
		public function add_account($username, $password, $address){
			$sql="INSERT INTO `account`( `username`, `password`, `address`) VALUES ('".$username."','".$password."','".$address."')";
			return mysqli_query($this->con,$sql);
		}
		public function get_acc_by_id($id){
			$sql= "select * from account where id= $id";
			return mysqli_query($this->con,$sql);
		}
		public function update_acc($username,$password,$address,$id){
			if(empty($username)){
				return 0;
			}
			if(empty($password)){
				return 0;
			}
			if(empty($address)){
				return 0;
			}
			if(empty($id)){
				return 0;
			}
			else{
				$sql= "UPDATE `account` SET `username`='$username',`password`='$password',`address`='$address' WHERE id=$id";
				return mysqli_query($this->con,$sql);
			}
			

		}
	}
 ?>
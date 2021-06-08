<?php 
	class tinmodel extends DB{
		public function get(){
			$sql= " select * from tin";
			return mysqli_query($this->con,$sql);
		}
		public function loai_tin($id){
			$sql= "select * from tin where id=$id";
			return mysqli_query($this->con,$sql);
 		}
 		public function content($id){
			$sql= "select * from tin where id=$id";
			return mysqli_query($this->con,$sql);
 		}
	}
 ?>
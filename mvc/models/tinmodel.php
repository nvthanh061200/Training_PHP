<?php 
	class tinmodel extends DB{
		public function get(){
			$sql= " select * from tin";
			return mysqli_query($this->con,$sql);
		}
		public function loai_tin($id){
			$sql= "select * from tin where id_loai_tin=$id";
			return mysqli_query($this->con,$sql);
 		}
 		public function content($id){
			$sql= "select * from tin where id=$id";
			return mysqli_query($this->con,$sql);
 		}
 		// CRUD khóa học
 		public function add_kk($title,$content, $img){
 			if($title=="MAC"){
 				$id_loai_tin = 111;
 			}else{
 				$id_loai_tin = 112;
 			}


 			$sql="INSERT INTO tin (id_loai_tin,title, content, hinh_anh) VALUES ($id_loai_tin,'$title','$content','$img')";
 			$result=false;
 			if(mysqli_query($this->con,$sql)){
 				$result=true;
 			}
 			return $result;
 		}
 		public function delete_kk($id){
 			$result=false;
 			$sql="DELETE FROM `tin` WHERE id=$id";
 			if(mysqli_query($this->con,$sql)){
 				$result=true;
 			}
 			return $result;
 		}
 		public function edit_kk($title,$content, $img,$id){
 			$sql="UPDATE `tin` SET `title`='$title',`content`='$content',`hinh_anh`='$img' WHERE id=$id";
 			$result=false;
 			if(mysqli_query($this->con,$sql)){
 				$result=true;
 			}
 			return $result;
 		}
 		public function getKhoaHocById($id){
 			$sql="select * from tin where id=$id";
 			return mysqli_query($this->con,$sql);
 		}

	}
 ?>
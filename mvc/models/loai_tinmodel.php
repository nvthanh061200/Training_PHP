<?php
class loai_tinmodel extends DB{
    
    public function get(){
        $sql=" select * from loai_tin";
        return mysqli_query($this->con,$sql);
    }
}
?>
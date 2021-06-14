<?php
    class loai_tinmodel extends DB {
        
        private $DB;
        public function __construct(){
            $this->DB= new DB();
        }
        public function get(){
            $sql=" select * from loai_tin";
            return $this->DB->query($sql);
        }
        public function read(){
            $sql=" select * from account";
            return $this->DB->query($sql);

        }
    }
?>
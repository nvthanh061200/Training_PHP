<?php
    class Ajax extends Controller{
        public $account;

        public function __construct(){
            $this->account=$this->model("account_model");
        }

        public function check_name($name)
        {
            $kq=$this->account->checkName($name);
            echo  $kq;
        }
    }

?>
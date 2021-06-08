<?php
// $name_hash=password_hash($name,PASSWORD_DEFAULT);
// controller là thằng điểu khiên hướng đi của trang web
// xem trang web sẽ đi từ đâu, đến đâu

class account extends Controller{

    protected $account_model;


    public function __construct(){
        $this->account_model=$this->model("accountmodel");
    }

        public function get(){
            $this->viewadmin("masterlayout",[
                "page"=>"loai_tin/tam",
                "result"=> $this->account_model->get(),
            ]);
        }

        public function delete_Account($id){
            //gọi modul xóa
            // sau đó gọi lại giao diện
            $rl=$this->account_model->delete_acc($id);

             $this->viewadmin("masterlayout",[
                "page"=>"loai_tin/tam",
                "result"=> $this->account_model->get(),
                "kq_delete"=> $rl
            ]);
        }

        public function add_acc(){
            $this->viewadmin("masterlayout",[
                "page"=>"loai_tin/add_acc",
            ]);
        }
        public function add_account_2(){
            $username=$_POST['username'];
            $password=$_POST["password"];
            $address=$_POST["address"];
            $this->account_model->add_account($username,$password,$address);
            header('Location: http://localhost/php-mvc-master/php-mvc-master/account/get');
        }
        public function get_acc_by_id($id){
            $this->viewadmin("masterlayout",[
                "page"=>"loai_tin/edit",
                "result"=>$this->account_model->get_acc_by_id($id),
            ]);
        }

         public function editById($id){
            $username=$_POST['username'];
            $password=$_POST["password"];
            $address=$_POST["address"];
            $result =$this->account_model->update_acc($username,$password,$address,$id);
            header('Location: http://localhost/php-mvc-master/php-mvc-master/account/get');
        }
        public function get_json(){
            $result=$this->account_model->get2();
            echo $result;       
        }

    
}
?>
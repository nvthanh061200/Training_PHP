
<?php
    class login extends Controller{

        protected $login_model;
        protected $account_model;

        protected $loai_tinmodel;
        protected $tinmodel;


        public function __construct(){
            $this->account_model=$this->model("accountmodel");
            $this->loai_tinmodel=$this->model("loai_tinmodel");
            $this->tinmodel=$this->model("tinmodel");

            $this->login_model=$this->model("login_model");
            
            if(isset($_SESSION['permission'])){
                if($_SESSION['permission']==10 ){
                    header("location: http://localhost/PHP_TRAINING/home_admin/get");
                }
                if($_SESSION['permission']==1){
                    header("location: http://localhost/PHP_TRAINING");
                }
            }
        }
        public function product(){
            $this->viewadmin("login",[]);
        }
        public function login(){
            if(isset($_POST['submit_login'])){
                $username=$_POST["username"];
                $password_input=$_POST["password"];
                if(empty($_POST["username"]) || empty($_POST["password"])){
                    $this->viewadmin("login",[]);
                }else{
                    $result=$this->login_model->login($username);

                    if(mysqli_num_rows($result)){
                        while($row = mysqli_fetch_array($result)){
                            $id= $row["id"];
                            $username= $row["username"];
                            $password= $row["password"];
                            $permission= $row["permission"];
                        }
                        if(password_verify($password_input,$password)){ 

                            $_SESSION['id']=$id;
                            $_SESSION['permission']=$permission;

                            if($permission!=10){
                                // $this->view("masterlayout",[
                                //     "page"=> "home/blog2",
                                //     "loai_tin" => $this->loai_tinmodel->get(),
                                //     "tin" => $this->tinmodel->get()
                                // ]);
                                 header("location: http://localhost/PHP_TRAINING");

                            }else{
                                 // $this->viewadmin("masterlayout",[
                                 //    "page"=>"loai_tin/blog2",
                                 //    "result"=> $this->account_model->get(),
                                 // ]);
                    header("location: http://localhost/PHP_TRAINING/home_admin/get");
                                
                            }
                            
                        }else{
                            $this->viewadmin("login",[]);
                        }
                    }else{
                         $this->viewadmin("login",[]);
                    }
                }
            } else{
                 $this->viewadmin("login",[]);
            }  
        }
         public function logout(){
            session_destroy();
        }


        
    }

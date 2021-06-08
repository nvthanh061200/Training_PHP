
<?php
    class login extends Controller{

        protected $login_model;

         public function __construct(){
        $this->login_model=$this->model("login_model");
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
                        }
                        if($password_input==$password){
                            // $_SESSION['id']=$id;
                            $_SESSION['username']=$username;
                            
                           $this->viewadmin("masterlayout",[
                            "page"=>"loai_tin/TrangChu",
                        
                            ]);
                        }else{
                            $this->viewadmin("login",[]);
                        }
                    }
                }
            }   
        }

        
    }
?>
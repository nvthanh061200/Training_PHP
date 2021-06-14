<?php
// $name_hash=password_hash($name,PASSWORD_DEFAULT);
// controller là thằng điểu khiên hướng đi của trang web
// xem trang web sẽ đi từ đâu, đến đ

// đây là trang admin , chỉ dành cho admin, nếu không phải admin thì không được vào đây

class home_admin extends Controller{

    protected $account_model;
    protected $register_model;
    protected $tinmodel;
    private $tam;


        public function __construct(){
            $this->url= new core();
            $this->tam=$this->url->base_url();
            $this->account_model=$this->model("accountmodel");
            $this->register_model=$this->model("register_model");
            $this->tinmodel=$this->model("tinmodel");



            //check chưa login thì cho quay lại trang login
            if(!isset($_SESSION['permission'])){
                header("location: ".$this->tam."login");
            }else{
                if($_SESSION['permission']!=10){
                    header("location: ".$this->tam);
                }
            }
        }
        public function tt(){
            $core= new core();
            echo $core->base_url();
        }

        public function get(){
            $this->viewadmin("masterlayout",[
                "page"=>"loai_tin/blog",
                "result"=> $this->account_model->get(),
            ]);
        }

        public function delete_Account($id){
          
            //gọi modul xóa
            // sau đó gọi lại giao diện
            $this->account_model->deleteById($id);
            header("location: http://localhost/PHP_TRAINING/home_admin/get");
        }

        public function add_acc(){
        
            $this->viewadmin("masterlayout",[
                "page"=>"loai_tin/add_acc",
            ]);
        }
        public function addAccountBy(){
            if(isset($_POST["Submint"])){
                $username=trim($_POST['username']);
                
                $password=$_POST["password"];
                $address=$_POST["address"];
                $fullname=$_POST["fullname"];

               $result= $this->register_model->check_username($username);
                if($result==1){
                    $this->account_model->addAccountBy($username,$password,$address,$fullname);
                      $this->viewadmin("masterlayout",[
                        "page"=>"loai_tin/add_acc",
                        "message"=>"Thêm tài khoản thành công",
                    ]);

                }else{
                     $this->viewadmin("masterlayout",[
                        "page"=>"loai_tin/add_acc",
                        "message"=>"Tài khoản đã tồn tại",
                    ]);
                }


                
            }else{
                 $this->viewadmin("masterlayout",[
                        "page"=>"loai_tin/add_acc",
                    ]);
            }
        }
        public function getAccountById($id){
            $this->viewadmin("masterlayout",[
                "page"=>"loai_tin/edit",
                "result"=>$this->account_model->getAccountById($id),
            ]);
        }

        // api chỉnh sửa thông tin cá nhân
         public function editById($id){

            if (isset($_POST["Submint"])) {
                $getaccbyid=$this->account_model->getAccountById($id);
                if(mysqli_num_rows($getaccbyid)){
                     while($userId= mysqli_fetch_array($getaccbyid)){
                        $_fullname= $userId["fullname"];
                        $_password= $userId["password"];
                        $_address= $userId["address"];
                    }
                    $fullname=$_POST['fullname'];
                    $address=$_POST["address"];

                    
                    if(empty($_POST["password"])  || empty($_POST["password2"])){
                         // chi update fullname va address
                        $result= $this->account_model->updateF_A($fullname,$address,$id);
                        if($result==1){
                            $this->viewadmin("masterlayout",[
                                "page"=>"loai_tin/edit",
                                "result"=>$this->account_model->getAccountById($id),
                                "message" => "thanh cong"
                            ]);
                        }else{
                             $this->viewadmin("masterlayout",[
                                "page"=>"loai_tin/edit",
                                "result"=>$this->account_model->getAccountById($id),
                                "message" => "that bai"
                            ]);
                        }
                 
                    }else{
                        $password=$_POST["password"];
                        $password2=$_POST["password2"];
                        if($password2!=$password){
                            $this->viewadmin("masterlayout",[
                                "page"=>"loai_tin/edit",
                                "result"=>$this->account_model->getAccountById($id),
                                "message" => "mat khau khong khop"
                            ]);
                        }else{
                            $hashPassWord=password_hash($password, PASSWORD_DEFAULT);
                            $result=$this->account_model->updateAccountById($fullname,$address,$hashPassWord,$id);
                            if($result==1){
                                $this->viewadmin("masterlayout",[
                                    "page"=>"loai_tin/edit",
                                    "result"=>$this->account_model->getAccountById($id),
                                    "message" => "thanh cong"
                                ]);
                            }else{
                                  $this->viewadmin("masterlayout",[
                                    "page"=>"loai_tin/edit",
                                    "result"=>$this->account_model->getAccountById($id),
                                    "message" => "that bai roi"
                                ]);
                            }

                        }
                    }


                    



                }else{
                       $this->viewadmin("masterlayout",[
                            "page"=>"loai_tin/edit",
                            "result"=>$this->account_model->getAccountById($id),
                            "message" => "không có dữ liệu đổ về"
                        ]);
                }


                

                // gét thông tin tài khoản đó
             
            }else{
                $this->viewadmin("masterlayout",[
                    "page"=>"loai_tin/edit",
                    "result"=>$this->account_model->getAccountById($id),
                ]);
            }
           


            
        }
        public function get_json(){
             if(!isset($_COOKIE['user'] )){
                 header("location: '.$this->tam.'login");
            }
            $result=$this->account_model->get2();
            echo $result;       
        }

        public function get_sec(){

            if(isset($_SESSION['id'])){
                echo "co session";
                echo $_SESSION['id'];
            }else{
                echo "khong co gi";
            }
        }

        // phần sử lý bản tin
        // gét khóa học
        public function KhoaHoc(){
            $tin=$this->tinmodel->get();
            $this->viewadmin("masterlayout",[
                "page"=>"loai_tin/home_kk",
                "tin"=>$tin,
            ]);
        }

        // thêm khóa học
        public function add_kk(){
            if(isset($_POST['add_khoa_hoc'])){
                if(empty($_POST["title"]) || empty($_POST["content"]) || empty($_POST["img"]) || $_POST["title"]=="..."){
                    $this->viewadmin("masterlayout",[
                        "page"=>"loai_tin/add_kk",
                        "result"=>false

                    ]);
                }

                $title=$_POST["title"];
                $content=$_POST["content"];
                $img=$_POST["img"];
                $result=$this->tinmodel->add_kk($title,$content, $img);

                 $this->viewadmin("masterlayout",[
                    "page"=>"loai_tin/add_kk",
                    "result"=>$result
                ]);
            }
             $this->viewadmin("masterlayout",[
                    "page"=>"loai_tin/add_kk",
                ]);
           
        }
        // xóa khóa học
        public function delete_kk($id){
            $this->tinmodel->delete_kk($id);
            $tin=$this->tinmodel->get();
            $this->viewadmin("masterlayout",[
                "page"=>"loai_tin/home_kk",
                "tin"=>$tin,

            ]);
        }
        // sửa khóa học
        public function edit_kk($id){
            $infor= $this->tinmodel->getKhoaHocById($id);
             if(isset($_POST['edit_khoa_hoc'])){
                $title=$_POST["title"];
                $img=$_POST["img"];
                $content=$_POST["content"];

                if(empty($img)){
                    $infor= $this->tinmodel->getKhoaHocById($id);

                    if(mysqli_num_rows($infor)){
                         while($userId= mysqli_fetch_array($infor)){
                            $_img= $userId["hinh_anh"];
                        }
                        $result=$this->tinmodel->edit_kk($title,$content, $_img,$id);
                    $infor= $this->tinmodel->getKhoaHocById($id);

                        $this->viewadmin("masterlayout",[
                            "page"=>"loai_tin/edit_kk",
                            "id"=> $id,
                            "result"=>$result,
                            "infor" => $infor
                        ]);
                    }
                }else{
                    $result=$this->tinmodel->edit_kk($title,$content, $img,$id);
                   $this->viewadmin("masterlayout",[
                        "page"=>"loai_tin/edit_kk",
                        "id"=> $id,
                        "result"=>$result,
                        "infor" => $infor
                    ]);
                }
             
          
            }else{
                   $this->viewadmin("masterlayout",[
                    "page"=>"loai_tin/edit_kk",
                    "id"=> $id,
                    "infor" => $infor
                ]);
            }

          
        }
}
?>

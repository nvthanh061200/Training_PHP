             <?php
// $name_hash=password_hash($name,PASSWORD_DEFAULT);
// controller là thằng điểu khiên hướng đi của trang web
// xem trang web sẽ đi từ đâu, đến đâu

class register extends Controller{

    protected $register_model;

    public function __construct(){
        $this->register_model=$this->model("register_model");
    }
    public function dangky(){
        $this->viewadmin("register",[
             "message"=>"",
        ]);
    }

    public function register(){
        if(isset($_POST["btn_reg"])){
            $username=$_POST["username"];
            $password=$_POST["password"];
            $address=$_POST["address"];
            $fullname=$_POST["fullname"];

            $name_pattern = '/^([A-Za-z0-9_])+$/';
            if (!preg_match($name_pattern, $_POST['fullname']) ||  !preg_match($name_pattern, $_POST['address']) ){
                $this->viewadmin("register",[
                    "message"=>"full name hoặc địa chỉ không được chứa ký tự lạ",
                 ]);
            }else{
                  $result= $this->register_model->check_username($username);
                if($result == "Tài khoản đã tồn tại"){
                     $this->viewadmin("register",[
                        "message"=>"tài khoản đã tồn tại.hi",
                     ]);
                }

                $hashPassWord=password_hash($password, PASSWORD_DEFAULT);

                $result=$this->register_model->register($username,$hashPassWord,$address,$fullname);
                if($result==1){
                     $this->viewadmin("register",[
                        "message" => "Thành công",
                     ]);
                }else{
                     $this->viewadmin("register",[
                        "message" => "Thất Bại",
                     ]);
                }
            }
          
        }else{
            $this->viewadmin("register",[
             "message"=>"",

            ]);
        }
    }
    public function check_username(){
        $username=$_POST['un'];
        $result= $this->register_model->check_username($username);

        return $result;
    }

    public function ajax_check_username(){
        $username=$_POST['un'];
        $result= $this->register_model->ajax_check_username($username);
        echo $result;
    }
}
?>
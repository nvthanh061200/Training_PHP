<?php
class API_account extends Controller{

    public $sinhvien;
    public $account;


    public function __construct(){
        $this->sinhvien=$this->model("SinhVienModel");
        $this->account=$this->model("account_model");

    }
    // Must have SayHi()
    function account(){
        $account = $this->sinhvien->SinhVien();
        $mang=[];

        while($ac=mysqli_fetch_array($account)){
            $obj=array(
                "ten"=>$ac["username"],
                "mk"=>$ac["password"]
            );
            array_push($mang,$obj);
        }
        echo json_encode($mang);
    }
    function getaccount(){
        $result=$this->account->GetAccount();
        $array=[];
        while($row=mysqli_fetch_array($result)){
            $obj=[
                "id"=>$row["id"],
                "fullname"=>$row["name"],
                "email"=>$row["email"],
                "create_date"=>$row["create_date"]

            ];
            array_push($array,$obj);
        }
        echo json_encode($array);
    }
}
?>
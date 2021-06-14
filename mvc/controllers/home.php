<?php
// $name_hash=password_hash($name,PASSWORD_DEFAULT);
// controller là thằng điểu khiên hướng đi của trang web
// xem trang web sẽ đi từ đâu, đến đâu

class home extends Controller{

    protected $loai_tinmodel;
    protected $tinmodel;
    private $url,$tam;


    public function __construct(){
         $this->url= new core();
         $this->tam=$this->url->base_url();
        
        $this->loai_tinmodel=$this->model("loai_tinmodel");
        $this->tinmodel=$this->model("tinmodel");
    }

    public function product(){
        $this->view("masterlayout",[
            "page"=> "home/blog2",
            "tin" => $this->tinmodel->get()
        ]);
    }
    public function loai_product($id){
        $this->view("masterlayout",[
            "page"=> "home/items",
            "tin" => $this->tinmodel->loai_tin($id) // gét thông tin các sản phẩm có id là gì đó
        ]);
    }
    public function content($id){
         $this->view("masterlayout",[
            "page"=> "home/content",
            "loai_tin" => $this->loai_tinmodel->get(),
            "content" => $this->tinmodel->content($id),

        ]);
    }
}
?>
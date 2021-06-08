<?php
// $name_hash=password_hash($name,PASSWORD_DEFAULT);
// controller là thằng điểu khiên hướng đi của trang web
// xem trang web sẽ đi từ đâu, đến đâu

class home extends Controller{

    protected $loai_tinmodel;
    protected $tinmodel;


    public function __construct(){
        $this->loai_tinmodel=$this->model("loai_tinmodel");
        $this->tinmodel=$this->model("tinmodel");
    }

    public function product(){
        $this->view("masterlayout",[
            "page"=> "home/blog",
            "loai_tin" => $this->loai_tinmodel->get(),
            "tin" => $this->tinmodel->get()
        ]);
    }
    public function loai_tin($id){
        $this->view("masterlayout",[
            "page"=> "home/items",
            "loai_tin" => $this->loai_tinmodel->get(),
            "tin" => $this->tinmodel->loai_tin($id)
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
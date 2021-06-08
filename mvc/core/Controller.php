<?php

// thằng này là để gọi tới database và điểu khiển hướng đi cho trang web và view
class Controller{

    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($view, $data=[]){
        require_once "./mvc/views/user/".$view.".php";
    }
    public function viewadmin($view, $data=[]){
        require_once "./mvc/views/admin/".$view.".php";
    }
}
?>
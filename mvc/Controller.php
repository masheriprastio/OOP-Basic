<?php

class Controller{
    public function __construct(){
        $model = new Model;
        $data = $model->show_message();
        require_once 'view.php';
    }
}
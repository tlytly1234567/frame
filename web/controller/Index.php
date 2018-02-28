<?php
namespace web\controller;
use core\views;

class index{

    protected $view;

    public function __construct()
    {
        $this->view = new views();
    }

    public function  index(){

        echo "index";
    }


    public function  show(){

        return $this->view->make("index")->with("bl","这是个变量");
    }

}

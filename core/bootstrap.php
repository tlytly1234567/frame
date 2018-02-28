<?php
namespace core;
class bootstrap{
    public static function run(){

        self::paserUrl();
    }

    public static function paserUrl(){
        if(isset($_GET["s"])){
            $route = $_GET["s"];
            $info  = explode("/",$route);
            $class = '\web\controller\\'.ucfirst($info[0]);
            $action = $info[1];
        }else{
            $class = '\web\controller\Index';
            $action = 'index';
        }
        //基本写法
            $class = new $class;
           echo  $class ->$action();
          //另一种写法
//        (new $class)->$action();
    }


}

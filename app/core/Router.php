<?php
//*************************************************************************
//* main Router class 
//*************************************************************************
namespace app\core;




class Router{

    protected $routes = [];
    protected $params = [];

    function __construct() {
        $arr = require 'config/routerConfig.php';
        
        foreach($arr as $key => $val){
            $this->add($key, $val);
         
        }
      
    }
  

    public function add($route, $params){
       $route = '#^'. $route .'$#';
       $this->routes[$route] = $params;
      
    }


    public function match(){
        $url = trim($_SERVER['REQUEST_URI'], '/');
        
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;

    }


    public function run(){
        if ($this->match()) {
            $path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
            if (class_exists($path)) {
                $action = $this->params['action'].'Action';
                if (method_exists($path, $action)) {
                    $controller = new $path($this->params);
                    $controller->$action();
                } else {
                    View::errorCode(404);
                }
            } else {
                View::errorCode(404);
            }
        } else {
            View::errorCode(404);
        }
    }

  
}










/*
$method = $_SERVER['REQUEST_METHOD'];

$q = $_GET['q'];
$params = explode('/', $q);

$type = $params[0]; // тип параметра 
$id =  $params[1];  //номер индификатора

if ($method ==='GET'){
    //работа с основными типами start
    if ($type ==='artical-title-img'){
        if(isset($id)){
            foreach ($artical_title_img_object as $param) {
               if($param['id']==$id){
                echo json_encode($param) ;
               }
            }
                
        }else{
            echo json_encode($artical_title_img_object);
       }
    }elseif($type ==='gallery-element'){
        if(isset($id)){
            foreach ($gallery_elements as $param_gallery) {
               if($param_gallery['id']==$id){
                echo json_encode($param_gallery);
               }
            }
                
        }else{
            echo json_encode($gallery_elements);
       }
    }
}  

*/


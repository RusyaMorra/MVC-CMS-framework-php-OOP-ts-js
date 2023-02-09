<?php
//*************************************************************************
//* main Router class 
//*************************************************************************
//*************************************************************************
//* namespaces
//*************************************************************************
namespace app\core;

//*************************************************************************
//* class loading
//*************************************************************************
use app\core\View;
use app\Http\RequestClass;


class Router{

    /**
     * @var
     */
    static private $_instance = null;
    protected  $routes = [];
    protected  $params = [];

    /**
     *  Construct, and preloading
     */

    function __construct() {
      $this->splitUrl();
      
    }

     /**
     *  singleton
     */

     static public function getInstance(){
         if(self::$_instance == null){
            return self::$_instance = new self;
            
         }

         return self::$_instance;
    }

    /**
     *  cutted url on controller and action
     */


    private function splitUrl() {
        $arr = require 'config/routerConfig.php';
        
        foreach($arr as $key => $val){
            $this->add($key, $val);
           
        }
       
     }
 
    /**
     *  adding in vars
     *  @param $string
     *  @return void
     */

    private function add($route, $params) {
       $route = '#^'. $route .'$#';
       $this->routes[$route] = $params;
      
    }

    /**
     *  matching is existing route or not
     *  @return boolean
     */

     private function match() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;

    }

    /**
     *  running(method for call that is avelible out)
     *  @return void
     */

    public function run() {
        if ($this->match()) {
            $path = 'app\admin\controllers\\'.ucfirst($this->params['controller']).'Controller';
            if (class_exists($path)) {
                $action = $this->params['action'].'Action';
                if (method_exists($path, $action)) {
                    $controller = new $path($this->params);
                    $controller->$action(new RequestClass);
                    
                    
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










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
    private $ctx = null;
    private $logClassInfo = null;
    private $logMethodsInfo = null;

    /**
     *  Construct, and preloading
     */

    function __construct(InterfacesCore\CtxInterface $ctx) {
        $this->ctx = $ctx;

        $this->logClassInfo =  $ctx->serviceLocator('LoggerService', ['path_value'=>__CLASS__, 'method_value'=>__METHOD__, 'mode'=>'CLASS']);
        $this->logClassInfo->log('log: class router created'/*. $value . ' '. json_encode($array )*/);

        $logMethodsInfo =  $ctx->serviceLocator('LoggerService', ['path_value'=>__CLASS__, 'method_value'=>__METHOD__, 'mode'=>'METHOD']);
        $logMethodsInfo->log('log: router initialization'/*. $value . ' '. json_encode($array )*/);

        $this->splitUrl();
      
    }


    /**
     *  adding in vars
     *  @param $string
     *  @return void
     */

     public  function init() {}

     /**
     *  singleton
     */

     static public function getInstance(InterfacesCore\CtxInterface $ctx){

         

         if(self::$_instance == null){
            return self::$_instance = new self($ctx);
            
         }

         return self::$_instance;
    }

    /**
     *  cutted url on controller and action
     */


    private function splitUrl() {
        

        $arr = require 'config/routerConfig.php';

        $logMethodsInfo =  $this->ctx->serviceLocator('LoggerService', ['path_value'=>__CLASS__, 'method_value'=>__METHOD__, 'mode'=>'METHOD']);
        $logMethodsInfo->log('log: spliting URL'. json_encode( $arr ));

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

        $logMethodsInfo =  $this->ctx->serviceLocator('LoggerService', ['path_value'=>__CLASS__, 'method_value'=>__METHOD__, 'mode'=>'METHOD']);
        $logMethodsInfo->log('log: got two parameters'. $route  . 'and' . json_encode($params));

       $route = '#^'. $route .'$#';
       $this->routes[$route] = $params;
      
    }

    /**
     *  matching is existing route or not
     *  @return boolean
     */

     private function match() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        
        $logMethodsInfo =  $this->ctx->serviceLocator('LoggerService', ['path_value'=>__CLASS__, 'method_value'=>__METHOD__, 'mode'=>'METHOD']);
        $logMethodsInfo->log('log: matching url and routes');

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

    public function adminRun() {

        $logMethodsInfo =  $this->ctx->serviceLocator('LoggerService', ['path_value'=>__CLASS__, 'method_value'=>__METHOD__, 'mode'=>'METHOD']);
        $logMethodsInfo->log('log: admin running');

        if ($this->match()) {
            $path = 'app\admin\controllers\\'.ucfirst($this->params['controller']).'Controller';
            if (class_exists($path)) {
                $action = $this->params['action'].'Action';
                if (method_exists($path, $action)) {
                    $controller = new $path($this->params, $this->ctx);
                    $controller->$action(new RequestClass);
                    
                    
                } else {
                    View::errorCode(404);
                }
            } else {
                $logMethodsInfo->log('log: User running');
                $this->userRun();
            }
        } else {
            View::errorCode(404);
        }
    }

    /**
     *  running for user urls(method for call that is avelible out)
     *  @return void
     */

    public function userRun() {
        if ($this->match()) {
            $path = 'app\user\controllers\\'.ucfirst($this->params['controller']).'Controller';
            if (class_exists($path)) {
                $action = $this->params['action'].'Action';
                if (method_exists($path, $action)) {
                    $controller = new $path($this->params, $this->ctx);
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










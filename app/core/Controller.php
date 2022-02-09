<?php
//*************************************************************************
//* main controller
//*************************************************************************
namespace app\core;


use app\core\View;

abstract class Controller{
    
    public $route;
    public $views;

    public function __construct($route) {
        $this->route = $route;
        $this->views = new View($route);
        $this->model = $this->loadModel($route['controller']);

        
    }

    /**
     * load models
     */
    
    public function loadModel($name) {
        $path = 'app\admin\models\\'.ucfirst($name);
        if(class_exists($path)) {
            return new $path;
        }
    }

}

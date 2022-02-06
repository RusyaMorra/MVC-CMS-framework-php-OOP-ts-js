<?php
//*************************************************************************
//* main view
//*************************************************************************
namespace app\core;

class View {

	public $path;
	public $route;
	public $layout = 'default';

	public function __construct($route) {
		$this->route = $route;
		$this->path = $route['controller'].'/'.$route['action'];
       // debug($this->path);
	}

    public function render($title, $vars = []) {
        extract($vars); 
        $path = 'templates/'.$this->path.'.php';
       if(file_exists($path)){
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'templates/'.$this->layout. '.php';
        }
        
    }

    public function redirect($url) {
        header('location: '. $url);
        exit;
    }

    public static function errorCode($code) {
        http_response_code($code);
        $path = 'templates/errors/'.$code. '.php';
        if(file_exists($path)){
            require $path;
        }
        exit;
    }
}    



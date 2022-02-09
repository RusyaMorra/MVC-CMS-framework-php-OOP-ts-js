<?php
//*************************************************************************
//* main view
//*************************************************************************
namespace app\core;

class View {

	public $path;
	public $route;
	public $layout = 'default';
	public $layoutTamplate = 'index';

	public function __construct($route) {
		$this->route = $route;
		$this->path = $route['controller'].'/'.$route['action'];
       // debug($this->path);
	}

    public function renderAdmin($title, $vars = []) {
        extract($vars); 
        $path = 'admin-panel/templates/'.$this->path.'.php';
       if(file_exists($path)){
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'admin-panel/templates/'.$this->layout. '.php';
        }
        
    }

    public function renderUser($title, $vars = []) {
        extract($vars); 
        $path = 'content/my-theme/'.$this->path.'.php';
       if(file_exists($path)){
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'content/my-theme/'.$this->layoutTamplate. '.php';
        }
        
    }

    public function redirect($url) {
        header('location: '. $url);
        exit;
    }

    public static function errorCode($code) {
        http_response_code($code);
        $path = 'admin-panel/templates/errors/'.$code. '.php';
        //$path = 'content/my-theme/errors/'.$code. '.php';
        if(file_exists($path)){
            require $path;
        }
        
        exit;
    }
}    



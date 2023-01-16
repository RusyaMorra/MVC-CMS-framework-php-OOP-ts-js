<?php
//*************************************************************************
//* main view
//*************************************************************************
//*************************************************************************
//* namespaces
//*************************************************************************
namespace app\core;

//*************************************************************************
//* class loading
//*************************************************************************



class View {

    /**
     * @var
     */

	public $path;
	public $route;
	public $layout = 'default';
	

    /**
     * Construct, and preloading
     * @param array
     * @return void
     */

	public function __construct(array $route) {
		$this->route = $route;
		$this->path = $route['controller'].'/'.$route['action'];
       // debug($this->path);
	}

    /**
     * Admin pages rendering
     * @param $string, array
     * @return void
     */

    public function renderAdmin(string $title, array $vars = []) {
        extract($vars); 
       
        $path = 'admin-panel/app/admin-templates/'.$this->path.'.php';
        
        
       if(file_exists($path)){
            require $path;
            ob_start();
            
            $content = ob_get_clean();
           
        }else{
            require 'admin-panel/app/admin-templates/'.$this->layout. '.php';
        }
        
    }

     /**
     * User pages rendering
     * @param $string, array
     * @return void
     */

    public function renderUser(string $title, array $vars = []) {
        extract($vars); 
        $path = 'content/frontend/'.$this->path.'.php';
       if(file_exists($path)){
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'content/frontend/'.$this->layout. '.php';
        }
        
    }

    /**
     * Redirect
     * @param $string
     * @return void
     */

    public function redirect(string $url) {
        header('location: '. $url);
        exit;
    }

    /**
     * Code of error
     * @param $int
     * @return void
     */

    public static function errorCode(int $code) {
        http_response_code($code);
        $path = 'admin-panel/app/admin-templates/errors/'.$code. '.php';
        //$path = 'content/my-theme/errors/'.$code. '.php';
        if(file_exists($path)){
            require $path;
        }
        
        exit;
    }
}    



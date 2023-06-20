<?php







class FrameworkClass {

     /**
     * @var
     */
    static private $_instance = null;


    public static function run() {
        self::init();
        self::autoload();

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
   
   
    private static function init() {
        // Start session

        session_start();
    
        // Define path constants

        define("DS", DIRECTORY_SEPARATOR);
        define("DS2", '/');
         
        define("ROOT", getcwd() . DS);
        
        

        define("APP_ADMIN_PANEL_PATH",  'admin-panel/app' . DS2);

        define("APP_USER_PATH",  'content/frontend/original/app' . DS2);
       
        define("APP_PATH", ROOT . 'application' . DS);

        define("FRAMEWORK_PATH", ROOT . "framework" . DS);

        define("PUBLIC_PATH", ROOT . "public" . DS);


        define("CONFIG_PATH", APP_PATH . "config" . DS);

        define("CONTROLLER_PATH", APP_PATH . "controllers" . DS);

        define("MODEL_PATH", APP_PATH . "models" . DS);

        define("VIEW_PATH", APP_PATH . "views" . DS);


        define("CORE_PATH", FRAMEWORK_PATH . "core" . DS);

        define('DB_PATH', FRAMEWORK_PATH . "database" . DS);

        define("LIB_PATH", FRAMEWORK_PATH . "libraries" . DS);

        define("HELPER_PATH", FRAMEWORK_PATH . "helpers" . DS);

        define("UPLOAD_PATH", PUBLIC_PATH . "uploads" . DS);


        // Define platform, controller, action, for example:

            // index.php?p=admin&c=Goods&a=add

        define("PLATFORM", isset($_REQUEST['p']) ? $_REQUEST['p'] : 'home');

        define("CONTROLLER", isset($_REQUEST['c']) ? $_REQUEST['c'] : 'Index');

        define("ACTION", isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index');


        define("CURR_CONTROLLER_PATH", CONTROLLER_PATH . PLATFORM . DS);

        define("CURR_VIEW_PATH", VIEW_PATH . PLATFORM . DS);


        // // Load core classes

        // require CORE_PATH . "Controller.class.php";

        // require CORE_PATH . "Loader.class.php";

        // require DB_PATH . "Mysql.class.php";

        // require CORE_PATH . "Model.class.php";


        // // Load configuration file

        // $GLOBALS['config'] = include CONFIG_PATH . "config.php";


      
   
    }


    //*************************************************************************
        //* autoclasses loader function
    //*************************************************************************
   
    private static function autoload() {
      
       spl_autoload_register(function ($class) {
            $path = str_replace('\\', '/', $class. '.php');
            //echo $path;
            if(file_exists($path)){
                require $path;
            }
        });
        
    }
   
}
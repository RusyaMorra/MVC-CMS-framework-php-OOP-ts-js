<?php

//*************************************************************************
//* namespaces
//*************************************************************************
namespace app\MainTechServices\LoggerService;




class LoggerService{

    /**
     * @var
     */
    private static $rootPathDir;
    private $pathLog;
    const NEW_LOG_MESSAGE = '---NEW LOG---';
    private $ctx = null;


    public function __construct(string $path_value, \app\core\InterfacesCore\CtxInterface $ctx) {

        $this->ctx = $ctx;
       
        if(empty(self::$rootPathDir)){
            throw new \Exception("Must set  root log dir");

        }
        
        $path = $this->getValidPath($path_value);
        $this->pathLog = self::$rootPathDir . '/'. $path;

        if (!file_exists($this->pathLog)) {
            $arrayPath = explode('/', $path);

            $currentPathString = self::$rootPathDir . '/';
            foreach($arrayPath as $key => $value ){
                $currentPathString .= $value.'/';
                if(file_exists($currentPathString)){
                    continue;
                }

                if($key == count($arrayPath) - 1){
                    continue;
                }

                mkdir($currentPathString);

            }
        }
    }


    public static function  setPathByClass(string $path_class, $ctx): LoggerService {
        
        return  new LoggerService($path_class . '.log', $ctx );
    }


    public static function  setPathByMethod(string $path_method, $ctx): LoggerService {
        $path_method = str_replace('::', '/', $path_method );
        return  new LoggerService($path_method . '.log', $ctx);
    }


    public  function log(string $text){
        
        $file = fopen($this->pathLog, 'a+');
        $message = PHP_EOL.PHP_EOL.self::NEW_LOG_MESSAGE.PHP_EOL.date('Y.m.d h:i:s').PHP_EOL.$text;
        fwrite($file, $message);
        fclose($file);
      
    }


    public static function setRootLogDir(string $root_path){

        self::$rootPathDir = $root_path;

    }


    public static function getValidPath(string $path_value): string{

        $path = trim(str_replace('\\', '/', $path_value), '/');
        return $path ;
    }

}
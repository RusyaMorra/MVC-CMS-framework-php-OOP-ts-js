<?php


return [
    'LoggerService' => function ($params = null, app\core\InterfacesCore\CtxInterface $ctx){
        $resultService = 'app\\MainTechServices\\LoggerService\\LoggerService';

        $path_value = $params['path_value'];
        $method_value = $params['method_value'];

       
        if($params['mode'] == 'CLASS'){

           return $resultService::setPathByClass($path_value, $ctx);

         }else if($params['mode'] == 'METHOD'){
            return $resultService::setPathByMethod($method_value, $ctx );
        }
       
       
    }
];

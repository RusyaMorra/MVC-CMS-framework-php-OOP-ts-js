<?php


return [
    'systemse' => function ($params = null, $AllServices, app\core\InterfacesCore\CtxInterface $ctx){
        $resultService = $AllServices->getNameSpacesArray()['CalculatorService']; 
        return new $resultService($ctx);
    }
];

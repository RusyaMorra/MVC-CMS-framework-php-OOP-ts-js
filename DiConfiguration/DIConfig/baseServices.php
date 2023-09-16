<?php

return [
    'CalculatorService' => function ($params = null, $AllServices, app\core\InterfacesCore\CtxInterface $ctx){
        $resultService = $AllServices->getNameSpacesArray()['CalculatorService']; 
        return new $resultService($ctx);
    },
    'AuditReportsService' => function ($params = null, $AllServices, app\core\InterfacesCore\CtxInterface $ctx){
        $resultService = $AllServices->getNameSpacesArray()['AuditReportsService']; 
        return new $resultService($ctx);
    },
];

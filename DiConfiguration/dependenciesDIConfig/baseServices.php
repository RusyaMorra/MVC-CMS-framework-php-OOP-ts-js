<?php

return [
    'CalculatorService' => function ($AllServices,/*path\to\interface $ctx*/$ctx){
        $resultService = $AllServices->getNameSpacesArray()['CalculatorService']; 
        return new $resultService($ctx);
    },
    'AuditReportsService' => function ($AllServices,/*path\to\interface $ctx*/$ctx){
        $resultService = $AllServices->getNameSpacesArray()['AuditReportsService']; 
        return new $resultService($ctx);
    },
];

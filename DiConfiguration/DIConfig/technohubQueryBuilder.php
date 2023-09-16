<?php


return [
    'TechnohubQueryBuilder' => function ($params = null, app\core\InterfacesCore\CtxInterface $ctx){
        $resultService = 'app\\technohubQueryBuilder\\TechnohubQueryBuilder'; 
        return $resultService::getInstance();
    }
];

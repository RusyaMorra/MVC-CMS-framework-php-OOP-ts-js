<?php
//AllbaseServices path
$AllServices = new app\baseServices\AllServices();

//baseServices
$baseServices =  require __DIR__ . './dependenciesDIConfig/baseServices.php';




//Binding
$DiContainerBind = [
    'calculatorService'=> function ($baseServices, $AllServices, $ctx){
        $baseServices['CalculatorService']($AllServices, $ctx);
    },
    'AuditReportsService'=> function ($baseServices, $AllServices, $ctx){
        $baseServices['AuditReportsService']($AllServices, $ctx);
    },

];



//DefaultContainer
$DefaultContainer = app\core\DefaultContainer::getInstance();
$DefaultContainer->init(['defaultScope'=> 'Singleton'], $AllServices, $baseServices, app\core\Ctx::getInstance());
$DefaultContainer->DiContainerSet($DiContainerBind);









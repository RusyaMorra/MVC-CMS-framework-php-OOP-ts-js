<?php
//AllbaseServices path
$AllServices = new app\baseServices\AllServices();

//baseServices if need include some kind of config by itself
//$baseServices =  require __DIR__ . './DIConfig/baseServices.php';


//if need include configs in general
function allClassesOfFrameWorkMerging(){

    $DIConfigs = array_merge(
        glob(__DIR__ .'./DIConfig/*.php' ?: []),
    );
    
    $allClassesOfFrameWork = array_map(function ($DIConfig){
        return require $DIConfig;
    }, $DIConfigs);


    return  array_merge_recursive(...$allClassesOfFrameWork);
};

$allClassesOfFrameWorkMerged = allClassesOfFrameWorkMerging();


//DiContainer
$DiContainerBind = [];

//Binding baseServices
$DiContainerBind['CalculatorService'] = function ($allClassesOfFrameWorkMerged, $params= null, $AllServices = null, app\core\InterfacesCore\CtxInterface $ctx){
    return  $allClassesOfFrameWorkMerged['CalculatorService']($params, $AllServices, $ctx);
};
$DiContainerBind['AuditReportsService'] = function ($allClassesOfFrameWorkMerged, $params= null, $AllServices= null, app\core\InterfacesCore\CtxInterface $ctx){
    return  $allClassesOfFrameWorkMerged['AuditReportsService']($params, $AllServices, $ctx);
};


//Binding technohubQueryBuilder
$DiContainerBind['TechnohubQueryBuilder'] = function ($allClassesOfFrameWorkMerged, $params= null, $AllServices= null, app\core\InterfacesCore\CtxInterface $ctx){

    return  $allClassesOfFrameWorkMerged['TechnohubQueryBuilder']($params, $ctx);
};
//Binding LoggerService 
$DiContainerBind['LoggerService'] = function ($allClassesOfFrameWorkMerged, $params= null, $AllServices= null, app\core\InterfacesCore\CtxInterface $ctx){
    
    return  $allClassesOfFrameWorkMerged['LoggerService']($params, $ctx);
};

//Binding LoggerMonolog
$DiContainerBind['LoggerMonolog'] = function ($allClassesOfFrameWorkMerged, $params= null, $AllServices= null, app\core\InterfacesCore\CtxInterface $ctx){
    
    return  $allClassesOfFrameWorkMerged['LoggerMonolog']();
};

//ctx
$ctx  = app\core\Ctx::getInstance();

//DefaultContainer
$DefaultContainer = app\core\DIContainer::getInstance();
$DefaultContainer->init(['defaultScope'=> 'Singleton'], $AllServices, $allClassesOfFrameWorkMerged, $ctx);
$DefaultContainer->DiContainerSet($DiContainerBind);









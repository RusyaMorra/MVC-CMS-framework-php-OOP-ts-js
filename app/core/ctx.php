<?php
//*************************************************************************
//* ActionSourcesService
//*************************************************************************

//*************************************************************************
//* namespaces
//*************************************************************************

namespace app\core;
use app\core\InterfacesCore\CtxInterface;
//require './coreInterfaces/ContextInterface';
//require './systemHooks';





class Ctx implements  CtxInterface {

  /**
   *@var
  */
  static private $_instance = null;

  public  $RedBeanPHP = null;
  public  $TechnoHubQueryBuilder = null;
  public  $elastic= null;
  public  $worker = null;
  public  $kafka = null;
  public  $queue = null;
  private $container = null;
  public  $LoggerMonolog = null;


  private  $mode = null;



  /**
   * there is two mods
   * 1: open 2: close
   * and container
  */
  public function __construct() {

  }


  public function init($mode) {
    $this->mode = $mode;

  }

  public function createCtx($container) {
    $this->container = $container;
    $this->TechnoHubQueryBuilder = $this->container->DiContainerGet('TechnohubQueryBuilder');
    $this->LoggerMonolog = $this->container->DiContainerGet('LoggerMonolog');
    
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


  public function getCtx($name) {
   
  }


  public  function serviceLocator($serviceName,  $params = null){ return $this->container->DiContainerGet($serviceName,  $params );}




}

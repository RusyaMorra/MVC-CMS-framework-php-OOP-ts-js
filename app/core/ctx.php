<?php
//*************************************************************************
//* ActionSourcesService
//*************************************************************************

//*************************************************************************
//* namespaces
//*************************************************************************

namespace app\core;

//require './coreInterfaces/ContextInterface';
//require './systemHooks';





class Ctx /*implements  ContextInterface*/ {

  /**
   *@var
  */
  static private $_instance = null;

  private  $RedBeanPHP = null;
  private  $TechnoHubQueryBuilder = null;
  private  $logs = null;
  private  $elastic= null;
  private  $worker = null;
  private  $kafka = null;
  private  $queue = null;
  private  $container = null;


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
    // $this->$CTX['RedBeanPHP'] = $this->container.get('RedBeanPHP');
    // $this->$CTX['TechnoHubQueryBuilder'] =   $this->container.get('TechnoHubQueryBuilder');
    // $this->$CTX['logs'] =  $this->container.get('logs');
    // $this->$CTX['elastic'] =  $this->container.get('elastic');
    // $this->$CTX['worker'] =  $this->container.get('worker');
    // $this->$CTX['kafka'] =  $this->container.get('kafka');
    // $this->$CTX['queue'] =  $this->container.get('queue');
    // $this->$CTX['container'] =   $this->container.get('container');

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
    echo 123234234;
  }


  public  function serviceLocator($serviceName){$this->container->DiContainerGet($serviceName);}




}

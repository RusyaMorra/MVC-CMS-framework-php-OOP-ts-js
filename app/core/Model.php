<?php
//*************************************************************************
//* Class  model
//*************************************************************************
//*************************************************************************
//* namespaces
//*************************************************************************
namespace app\core;

//*************************************************************************
//* class loading
//*************************************************************************
use app\technohubQueryBuilder\TechnohubQueryBuilder;

abstract class Model{

	/**
     * @var
     */

    public $db;
	
	 /**
     *  Construct, and preloading
     */
	
	public function __construct(InterfacesCore\CtxInterface $ctx) {
         
          $this->db = $ctx->TechnoHubQueryBuilder;
		
        
	}
}
<?php


namespace app\core;


class DefaultContainer /*implements  DiConraiterInterface*/  {

	/**
	 *@var
	*/  
	
	private $defaultScope;
	static private $_instance = null;
	private $DiConraiterOfInstances = null;
	private  $AllServices = null;
	private  $baseServices = null;
	private  $ctx = null;


	public function __construct( ) { 

	}

	/**
	 *@var
	* ['defaultScope'=> 'Singleton']
	*/  

	public function init(array $defaultScope, $AllServices, $baseServices, $ctx) {

		$this->defaultScope = $defaultScope;
		$this->AllServices = $AllServices;
		$this->baseServices = $baseServices;
		$this->ctx = $ctx;

	}

 	/**
     *  bind
	*/

  
	public  function DiContainerSet(array $AllBindedInstances) {

		$this->DiConraiterOfInstances = $AllBindedInstances;

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


	/**
     * @var
	 * $name
     */

	public function DiContainerGet($name) {
		return  $this->DiConraiterOfInstances[$name]($this->baseServices, $this->AllServices, $this->ctx);
	}


	public function DiContainerHas($name) {

        $check = isset($this->DiConraiterOfInstances[$name]);

		if($check == 1 ){
			return 'true';
		}else{
			return 'false';
		}

	}


	/**
	 * resolve single, in our classes which we want get, there are Dependencies which we need inject
	 *
	 * @param $concrete
	 * @param $parameters
	 *
	 * @return mixed|object
	 * @throws Exception
	 */
	public function resolve($concrete, $parameters)
	{
		if ($concrete instanceof Closure) {
			return $concrete($this, $parameters);
		}

		$reflector = new ReflectionClass($concrete);
		// check if class is instantiable
		if (!$reflector->isInstantiable()) {
			throw new Exception("Class {$concrete} is not instantiable");
		}

		// get class constructor
		$constructor = $reflector->getConstructor();
		if (is_null($constructor)) {
			// get new instance from class
			return $reflector->newInstance();
		}

		// get constructor params
		$parameters   = $constructor->getParameters();
		$dependencies = $this->getDependencies($parameters);

		// get new instance with dependencies resolved
		return $reflector->newInstanceArgs($dependencies);
	}

	/**
	 * get all dependencies resolved
	 *
	 * @param $parameters
	 *
	 * @return array
	 * @throws Exception
	 */
	public function getDependencies($parameters)
	{
		$dependencies = [];
		foreach ($parameters as $parameter) {
			// get the type hinted class
			$dependency = $parameter->getClass();
			if ($dependency === NULL) {
				// check if default value for a parameter is available
				if ($parameter->isDefaultValueAvailable()) {
					// get default value of parameter
					$dependencies[] = $parameter->getDefaultValue();
				} else {
					throw new Exception("Can not resolve class dependency {$parameter->name}");
				}
			} else {
				// get dependency resolved
				$dependencies[] = $this->get($dependency->name);
			}
		}

		return $dependencies;
	}



}


















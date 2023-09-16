<?php


namespace app\core\InterfacesCore;

interface CtxInterface
{

    public function init($mode);

    public function createCtx($container);

    static public function getInstance();

    public function getCtx($name);

    public  function serviceLocator($serviceName);
}
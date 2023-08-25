<?php
//*************************************************************************
//* CalculatorService
//*************************************************************************
//*************************************************************************
//* namespaces
//*************************************************************************
namespace app\baseServices\CalculatorService;

//require './config';
//use'../../core/BaseService.php';

class CalculatorService /*extends  BaseService*/ {

    /**
     * @var
     */

    public $Logtypes=[];

    public function __construct($ctx) {
        $ctx->serviceLocator('AuditReportsService');
    }


}

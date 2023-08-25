<?php
//We need  add all service  namespaces here for export to DefaultContainer



//*************************************************************************
//* namespaces
//*************************************************************************
namespace app\baseServices;



class AllServices {

    /**
     * @var
     */

   private $NameSpacesArray = [];
    

    public function __construct(/*$ctx*/) {
        $this->createNameSpacesArray();
    }

    private function createNameSpacesArray(){
       $this->NameSpacesArray['CalculatorService'] = 'app\baseServices\CalculatorService\CalculatorService';
       $this->NameSpacesArray['AuditReportsService'] = 'app\baseServices\AuditReportsService\AuditReportsService';
    }


    public function getNameSpacesArray(){
        return  $this->NameSpacesArray;
    }

}

<?php
//*************************************************************************
//* AccountController class
//*************************************************************************
//*************************************************************************
//* namespaces
//*************************************************************************
namespace app\admin\controllers;

//*************************************************************************
//* class loading
//*************************************************************************

use app\core\Controller;




class DashboardController extends Controller{ 



    /**
     * register action starts register page processing
     */

    public function dashboardMainPanelAction(object $Request){

        
        $this->views->renderAdmin('Dashboard');
        
        //var_dump($Request->request['email']);
    }



}

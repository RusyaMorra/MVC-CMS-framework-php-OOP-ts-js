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



class AdminController extends Controller{ 

    /**
     *  init action starts init page processing
     */
    public function dashboardInitAction(){
       
        $this->views->renderAdmin('Админка');
        
      
    }




}

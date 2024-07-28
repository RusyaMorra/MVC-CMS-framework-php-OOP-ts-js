<?php
//*************************************************************************
//* AccountController class
//*************************************************************************
//*************************************************************************
//* namespaces
//*************************************************************************
namespace app\user\controllers;

//*************************************************************************
//* class loading
//*************************************************************************

use app\core\Controller;




class HomeController extends Controller{



    /**
     * home page action starts register page processing
     */

    public function mainAction(object $Request){
        
        // $result = $this->model->getNews();

        $vars =[
            'viewMode' => 'HomePage'
            
        ];

        $this->views->renderUser('Главная',  $vars);

        //var_dump($Request->request['email']);
    }



}

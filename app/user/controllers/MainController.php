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




class MainController extends Controller{



    /**
     * home page action starts register page processing
     */

    public function homeAction(object $Request){

        // $result = $this->model->getNews();

        // $vars =[
        //     'news' => 123,
        //     'res' =>  $result 
        // ];

        $this->views->renderUser('Главная');

        //var_dump($Request->request['email']);
    }



}

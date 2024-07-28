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




class UserController extends Controller{



    /**
     * home page action starts register page processing
     */

    public function registerAction(object $Request){
        
        // $result = $this->model->getNews();

        $vars =[
            'viewMode' => 'authPage'
            
        ];

        $this->views->renderUser('Регистрация',  $vars);

        //var_dump($Request->request['email']);
    }

    public function loginAction(object $Request){
        
        // $result = $this->model->getNews();

        $vars =[
            'viewMode' => 'authPage'
            
        ];

        $this->views->renderUser('Вход',  $vars);

        //var_dump($Request->request['email']);
    }



}

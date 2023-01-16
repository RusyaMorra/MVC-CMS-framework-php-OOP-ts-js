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



class AccountController extends Controller{ 



    /**
     * register action starts register page processing
     */

    public function registerAction(){
        $this->views->renderAdmin('Регистрация');
        
        
    }

     /**
     *  login action starts login page processing
     */

    public function loginAction(){
        $result = $this->model->getNews();
                         
        $vars =[
            'news' => 123,
            'res' =>  $result 
        ];
        $this->views->renderAdmin('Вход', $vars );
    }




}

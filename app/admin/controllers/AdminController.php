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
    public function initAction(){
        $result = $this->model->getNews();

        $vars =[
            'news' => $result
        ];
        $this->views->renderAdmin('Добро пожаловать', $vars);
        
      
    }

    /**
     * register action starts register page processing
     */

    public function registerAction(){
        $this->views->renderAdmin('Вход');
        
        
    }

     /**
     *  login action starts login page processing
     */

    public function loginAction(){
        $this->views->renderAdmin('Регистрация');
    }




}

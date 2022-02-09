<?php
//*************************************************************************
//* AccountController class
//*************************************************************************
namespace app\admin\controllers;

use app\core\Controller;



class AdminController extends Controller{ 

    public function registerAction(){
        $this->views->renderAdmin('Вход');
        
        
    }

    public function loginAction(){
        $this->views->renderAdmin('Регистрация');
    }


}

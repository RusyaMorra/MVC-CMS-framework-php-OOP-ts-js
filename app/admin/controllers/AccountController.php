<?php
//*************************************************************************
//* AccountController class
//*************************************************************************
namespace app\admin\controllers;

use app\core\Controller;



class AccountController extends Controller{ 

    public function registerAction(){
        $this->views->render('Вход');
        
        
    }

    public function loginAction(){
        $this->views->render('Регистрация');
    }


}

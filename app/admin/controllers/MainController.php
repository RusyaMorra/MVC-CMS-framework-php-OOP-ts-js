<?php
//*************************************************************************
//* MainController class
//*************************************************************************
namespace app\admin\controllers;

use app\core\Controller;



class MainController extends Controller{ 

    public function indexAction(){
        $this->views->render('главная страница');
    }

  

}

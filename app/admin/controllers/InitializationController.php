<?php
//*************************************************************************
//* MainController class
//*************************************************************************
namespace app\admin\controllers;

use app\core\Controller;


class InitializationController extends Controller { 

    /**
     *  filling in the authentication data before entering the admin panel
     */
    
    public function indexAction(){
        $result = $this->model->getNews();

        $vars =[
            'news' => $result
        ];
        $this->views->renderAdmin('главная страница', $vars);
        
      
    }

  

}

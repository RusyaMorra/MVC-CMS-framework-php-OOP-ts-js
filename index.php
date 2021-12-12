<?php
defined('VG_ACCESS',true); // denied access to other files ecxept index.php
//*************************************************************************
//* Enrty point index.php
//*************************************************************************

//*************************************************************************
//* base settings
//*************************************************************************


//*************************************************************************
//* file connections 
//*************************************************************************

require_once 'config.php'

$method = $_SERVER['REQUEST_METHOD'];

$q = $_GET['q'];
$params = explode('/', $q);

$type = $params[0]; // тип параметра 
$id =  $params[1];  //номер индификатора

if ($method ==='GET'){
    //работа с основными типами start
    if ($type ==='artical-title-img'){
        if(isset($id)){
            foreach ($artical_title_img_object as $param) {
               if($param['id']==$id){
                echo json_encode($param) ;
               }
            }
                
        }else{
            echo json_encode($artical_title_img_object);
       }
    }elseif($type ==='gallery-element'){
        if(isset($id)){
            foreach ($gallery_elements as $param_gallery) {
               if($param_gallery['id']==$id){
                echo json_encode($param_gallery) ;
               }
            }
                
        }else{
            echo json_encode($gallery_elements);
       }
    } 
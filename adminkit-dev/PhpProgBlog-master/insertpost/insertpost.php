<?php


session_start();
require_once '../db.php';




$title = $_POST['title'];
$textarea = $_POST['textarea'];
$category = $_POST['category'];
$author_id = $_SESSION['user']['id'];
$date = date("Y.m.d H:i");
$file = $_FILES['file'];
$path = 'uploadfile/'. time().  $_FILES['file']['name'];
if($category==='Frontend'){
    $cat= 1;
}
if($category==='Backend'){
    $cat= 2;
}
if($category==='MobileDev'){
    $cat= 3;
}
if($category==='GameDev'){
    $cat= 4;
}
if($category==='Tools'){
    $cat= 5;
}
if($category==='Cybersecurity'){
    $cat= 6;
}
if($category==='DeckstopDev'){
    $cat= 7;
}
if($category==='Comp.Sciense'){
    $cat= 8;
}
if (!empty( $title) && !empty($textarea) && !empty( $category) ){
     
    if(!move_uploaded_file( $_FILES['file']['tmp_name'],'../' .$path)){
       $_SESSION['massageupload'] = 'Uploud error';
       header('location: ../userprofile.php');
    }else{
       
    insert_post($title,$textarea,$path,$date, $cat,$author_id);
    $_SESSION['massagesuccess']= 'Public was successful!';
    header('location: ../userprofile.php');

    }
}else{
    $_SESSION['massage'] = 'Fields are empty!!!' ;
    header('location: ../userprofile.php');
   
}

  







?>